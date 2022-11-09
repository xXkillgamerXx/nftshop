<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public  function  home (){
         $shops = Shop::all();

        return view('welcome', compact('shops'));
    }

    public function index()
    {
        $shops = [];

        $wallet_users = auth()->user()->wallet_users;

        foreach ($wallet_users as $wallet_user){
            foreach ($wallet_user->shops as $shop){
                $shops[] = $shop;
            }
        }

        $shops = collect($shops);
        $categories = Category::all();

        return view('home', compact('shops', 'categories'));
    }
}
