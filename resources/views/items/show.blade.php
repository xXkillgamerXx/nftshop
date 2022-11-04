@extends('layouts.layout')

@section('content')
    <section class="hero-section relative mt-2 pt-32 pb-20 lg:pt-48 lg:pb-32">
        <div class="container mx-auto relative px-4 z-10">
            <div class="flex justify-between mb-8 lg:mb-14">
                <h2 class="font-display text-4xl lg:text-6xl text-blueGray-900 font-bold">Item Details </h2>
                <div class="flex relative lg:top-4">
                    <a href="" class="btn inline-block text-white font-body font-bold rounded py-3 px-6 mr-4 mb-4 transition-all duration-500 bg-gradient-to-tl from-indigo-500 via-purple-500 to-indigo-500 bg-size-200 bg-pos-0 hover:bg-pos-100">Create Shop Item</a>
                </div>
            </div>
            <ul class="hero-breadcrumb font-body text-blueGray-600 flex flex-wrap items-center">
                <li class="flex items-center mr-2"><a class="transition duration-500 hover:text-indigo-500 underline-hover" href="#"> Home</a></li>
                <li class="flex items-center mr-2"><img class="w-3 h-3 inline-block mr-2" src="{{ asset('assets/images/right-arrow.svg') }}" alt="title"><a class="transition duration-500 hover:text-indigo-500 underline-hover" href="#"> Explore</a></li>
                <li class="flex items-center text-indigo-500 mr-2"><img class="w-3 h-3 inline-block mr-2" src="{{ asset('assets/images/right-arrow.svg') }}" alt="title"> Item Details</li>
            </ul>
        </div>
    </section>
    <section class="product-section relative mb-20 lg:mb-32">
        <div class="container mx-auto relative px-4 z-10">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 lg:gap-20">
                <div class="lg:col-span-2">
                    <img class="w-full mb-10 rounded" data-aos="fade-up" src="{{ $item->image }}" alt="title">

                </div>
                <div class="lg:col-span-3">
                    <h3 class="font-display text-4xl text-blueGray-900 font-bold mb-10">{{ $item->name }}</h3>
                    <p class="font-body text-blueGray-600 mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>

                    <h4 class="font-display text-blueGray-900 font-bold">Highest Price</h4>
                    <div class="flex items-center mb-10">
                        <p class="flex items-center font-body font-bold text-blueGray-900 text-2xl my-1"><img class="w-6 h-6 inline-block mr-1" src="{{ asset('assets/images/cryptocurrency-icon.svg') }}" alt="title">{{ number_format($item->price, 2) }} ETH</p>
                        <p class="font-body text-sm text-blueGray-600 ml-4">≈$26.69</p>
                    </div>
                    <a href="#popup-modal" class="popup-modal btn inline-block text-xl text-blueGray-900 font-body font-medium rounded py-3 px-8 mb-10 transition-all duration-500 bg-gradient-to-tl from-indigo-500 via-purple-500 to-indigo-500 bg-size-200 bg-pos-0 hover:bg-pos-100"><img class="w-5 h-5 inline-block mb-1 mr-1" src="{{ asset('assets/images/cart-icon.svg') }}" alt="title"> Buy Now</a>
                    <div id="popup-modal" class="max-w-xl m-auto bg-white rounded shadow zoom-anim-dialog mfp-hide p-10">
                        <img class="w-14 h-14 block m-auto mb-4" src="{{ asset('assets/images/transaction-icon.svg') }}" alt="title">
                        <p class="font-body  font-bold text-center text-blueGray-600 ml-4">You will pay</p>
                        <div class="flex items-center justify-center mb-2">
                            <p class="flex items-center font-body font-bold text-blueGray-900 text-4xl my-1"><img class="w-8 h-8 inline-block mr-1" src="{{ asset('assets/images/cryptocurrency-icon.svg') }}" alt="title">{{ number_format($item->price, 2) }} ETH</p>
                        </div>
                        <p class="font-body text-sm text-blueGray-600 text-center mb-8">≈$26.69</p>

                        <div class="flex items-center justify-between mb-4">
                            <p class="font-display text-blueGray-600 font-bold">Available</p>
                            <p class="font-display text-blueGray-900 font-medium">20 ETH</p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 items-center justify-center">
                            <button type="submit" class="btn block bg-indigo-50 text-center font-body font-bold rounded py-4 px-7 transition duration-500 hover:text-white hover:bg-blueGray-600">Cancel</button>
                            <button type="submit" class="btn block bg-indigo-500 text-white text-center font-body font-bold rounded py-4 px-7 transition duration-500 hover:bg-blueGray-900">Confirm</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
