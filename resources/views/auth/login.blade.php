@extends('layouts.layout')

@section('content')
    <section class="hero-section relative mt-2 pt-32 lg:pt-48 lg:pb-32">
        <div class="container mx-auto relative px-4 z-10">
            <h2 class="font-display text-4xl lg:text-6xl text-blueGray-900 font-bold mb-4">Connect Wallet</h2>
            <button onclick="web3Login()"  class="btn hidden xl:flex items-center text-blueGray-900 font-body font-semibold rounded h-14 p-4 transition-all duration-500 bg-gradient-to-tl from-indigo-500 via-purple-500 to-indigo-500 bg-size-200 bg-pos-0 hover:bg-pos-100" type="submit"><img class="w-4 h-4 flex-shrink-0  mr-2" src="{{ asset('assets/images/wallet-icon.svg') }}" title="title"> Connect Wallet</button>
        </div>
    </section>
@endsection
