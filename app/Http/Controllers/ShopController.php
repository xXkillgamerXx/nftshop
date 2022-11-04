<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    public function create (){
        $categories = Category::all();

        return view('shops.create',compact( 'categories'));
    }

    public function store (Request  $request){


        /*$banner = $request->file('banner')->store('public/images');
        $url_banner = Storage::url($banner);*/

        $image = $request->file('image')->store('public/images');
        $url_image = Storage::url($image);

        Shop::firstOrCreate([
            'user_id' => auth()->user()->id,
            /*'banner' =>$url_banner,*/
            'image' =>$url_image,
            'name' => $request->name,
            'slug' =>  $request->slug,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('home');
    }

    public function show(Shop $shop)
    {
        return view('shops.show', compact('shop'));
    }

    public function edit(Shop $shop)
    {
        $categories = Category::all();

        return view('shops.edit',compact( 'shop','categories'));
    }

    public function update(Request $request, Shop $shop)
    {
        if($request->image) {
            $image = $request->file('image')->store('public/images');
            $url_image = Storage::url($image);

            $shop->image = $url_image;
        }

        if($request->banner) {
            $banner = $request->file('banner')->store('public/images');
            $url_banner = Storage::url($banner);
            $shop->banner = $url_banner;
        }

        $shop->name = $request->name;
        $shop->slug = $request->slug;
        $shop->description = $request->description;
        $shop->category_id = $request->category_id;

        $shop->update();

        return redirect()->route('shop.show', $shop->id);
    }

    public function destroy(Shop $shop)
    {
        //
    }
}
