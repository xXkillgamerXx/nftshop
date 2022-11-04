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
        $this->middleware('auth');
    }

    public  function  home (){
         $shops = Shop::all();

        return view('welcome', compact('shops'));
    }

    public function index()
    {
        if(request()->tag != null || request()->tag != 0)
            $shops = auth()->user()->shops;
        else
            $shops = auth()->user()->shops;


        $categories = Category::all();

        return view('home', compact('shops', 'categories'));
    }
}
