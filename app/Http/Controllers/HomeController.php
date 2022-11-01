<?php

namespace App\Http\Controllers;

use App\Models\Follow;
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
        $user = auth()->user();
        $user->wallet;

        $user->shops->filter(function ($shop){
            $shop->items;
            $shop->category;
            $shop->domain;
            return $shop->plan;
        });

        $user->wallets->filter(function ($wallet){
            return $wallet->chain;
        });

        return $user;

        return view('home');
    }
}
