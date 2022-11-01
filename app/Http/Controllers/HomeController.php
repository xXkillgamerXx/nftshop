<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Follow;
use App\Models\Shop;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $user = auth()->user();
//        $user->wallet;
//
//        $user->shops->filter(function ($shop){
//            $shop->items;
//            $shop->category;
//            $shop->domain;
//            return $shop->plan;
//        });
//
//        $user->wallets->filter(function ($wallet){
//            return $wallet->chain;
//        });

        $user = auth()->user();
        $shops = $user->shops;
        $categories = Category::all();

        return view('home', compact('shops', 'categories'));
    }

    public function create (){
        $categories = Category::all();

        return view('shops.create',compact( 'categories'));
    }

    public function store (Request  $request){
        $user = auth()->user();
        Shop::firstOrCreate([
            'user_id' => $user->id,
            'name' => $request->name,
            'slug' =>  $request->slug,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('home');
    }
}
