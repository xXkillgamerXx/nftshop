<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{

    public function index()
    {
        //
    }

    public function create($shop)
    {
        $shop = Shop::whereId($shop)->firstOrFail();
        return view('items.create', compact('shop'));
    }

    public function store(Request $request)
    {
        $image = $request->file('image')->store('public/images');
        $url_image = Storage::url($image);

        Item::firstOrCreate([
            'shop_id' => $request->shop_id,
            'image' =>$url_image,
            'name' => $request->name,
            'link' =>  $request->link,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('shop.show', $request->shop_id);
    }

    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    public function edit(Item $item)
    {
        //
    }

    public function update(Request $request, Item $item)
    {
        //
    }

    public function destroy(Item $item)
    {
        //
    }
}
