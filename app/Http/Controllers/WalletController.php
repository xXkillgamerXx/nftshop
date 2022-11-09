<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wallet;
use App\Models\WalletUser;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wallets = auth()->user()->wallet_users;
        return view('wallets.create', compact('wallets'));
    }

    public function create()
    {


    }

    public function store(Request $request)
    {
        //
    }

    public function show(Wallet $wallet)
    {
        //
    }

    public function edit(Wallet $wallet)
    {
        //
    }

    public function update(Request $request, Wallet $wallet)
    {
        //
    }

    public function destroy(Wallet $wallet)
    {
        //
    }
}
