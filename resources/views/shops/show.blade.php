@extends('layouts.layout')

@section('content')
    <section class="hero-section relative mt-2 pt-32 pb-20 lg:pt-48 lg:pb-32">
        <div class="container mx-auto relative px-4 z-10">

            <div class="flex justify-between mb-8 lg:mb-14">
                <h2 class="font-display text-4xl lg:text-6xl text-blueGray-900 font-bold">{{ $shop->name }}</h2>
                <div class="flex relative lg:top-4">
                    <a href="{{ route('item.create', $shop) }}" class="btn inline-block text-white font-body font-bold rounded py-3 px-6 mr-4 mb-4 transition-all duration-500 bg-gradient-to-tl from-indigo-500 via-purple-500 to-indigo-500 bg-size-200 bg-pos-0 hover:bg-pos-100" style="color: white">Add Item</a>

                    <a href="{{ route('shop.edit', $shop) }}" class="btn inline-block text-white font-body font-bold rounded py-3 px-6 mr-4 mb-4 transition-all duration-500 bg-gradient-to-tl from-indigo-500 via-purple-500 to-indigo-500 bg-size-200 bg-pos-0 hover:bg-pos-100" style="color: white">Edit</a>
                </div>
            </div>

            <ul class="hero-breadcrumb font-body text-blueGray-600 flex flex-wrap items-center">
                <li class="flex items-center mr-2"><a class="transition duration-500 hover:text-indigo-500 underline-hover" href="{{ route('home') }}"> Home</a></li>
                <li class="flex items-center mr-2"><img class="w-3 h-3 inline-block mr-2" src="{{ asset('assets/images/right-arrow.svg') }}" alt="title"><a class="transition duration-500 hover:text-indigo-500 underline-hover" href="{{ route('home') }}">Shop list</a></li>
                <li class="flex items-center mr-2"><img class="w-3 h-3 inline-block mr-2" src="{{ asset('assets/images/right-arrow.svg') }}" alt="title">{{ $shop->name }}</li>
            </ul>

        </div>
    </section>

    <!--  ====================== Product Section =============================  -->
    <section class="product-section relative mb-20 lg:mb-32">
        <div class="container mx-auto relative px-4 z-10">
            <div class="product-infinite grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @if(count($shop->items) == 0)
                    <div class="activity-box  border border-blueGray-100 sm:flex p-4 rounded transition duration-500 hover:shadow-lg" data-aos="fade-up">
                        <div class="activity-content flex flex-col flex-grow justify-center sm:pl-6">
                            <div class="mb-2 mt-2"><h3 class="font-display text-xl text-blueGray-900 font-bold">No items created</h3></div>
                        </div>
                    </div>
                @endif
                    @foreach($shop->items as $item)
                    <div class="product-box gradient-box flex justify-between flex-col bg-white shadow rounded transition hover:shadow-lg" data-aos="fade-up">
                        <div class="product-top relative bg-white hover:bg-blueGray-100">
                            <div class="product-image relative rounded overflow-hidden m-6 mb-8">
                                <img class="w-full sm:h-56 rounded object-cover" src="{{ $item->image }}" alt="title">
{{--                                <span class="flex items-center absolute top-4 right-4 text-sm bg-gradient-to-r from-purple-500 to-indigo-500 text-blueGray-900 font-body font-medium rounded py-1 px-2"><img class="w-3 h-3 inline-block mr-1" src="{{ asset('assets/images/star-icon.svg') }}" alt="title">Featured</span>--}}
                            </div>
{{--                            <a href="{{ route('item.show', $item)  }}" class="product-meta absolute left-0 right-0 m-auto bottom-24 w-36 block text-blueGray-900 text-center font-body font-medium rounded py-2 px-4 transition-all duration-500 bg-gradient-to-tl from-indigo-500 via-purple-500 to-indigo-500 bg-size-200 bg-pos-0 hover:bg-pos-100"><img class="w-4 h-4 inline-block mb-1" src="{{ asset('assets/images/bid-icon2.svg') }}" alt="title"> Place a bid</a>--}}
                            <div class="product-content px-6">
                                <div class="flex items-center justify-between mb-4">
{{--                                    <div class="flex items-center">--}}
{{--                                        <a href="#" class="relative" data-tooltip="Steven Robart"><img class="border-2 border-white w-10 h-10 object-cover rounded-lg" src="{{ asset('assets/images/author/1.jpg') }}" alt="title"></a>--}}
{{--                                        <a href="#" class="relative -left-2" data-tooltip="Steven Robart"><img class="border-2 border-white w-10 h-10 object-cover rounded-lg" src="{{ asset('assets/images/author/3.jpg') }}" alt="title"></a>--}}
{{--                                        <a href="#" class="relative -left-4" data-tooltip="Steven Robart"><img class="border-2 border-white w-10 h-10 object-cover rounded-lg" src="{{ asset('assets/images/author/3.jpg') }}" alt="title"> <span class="absolute bottom-0 right-1"><img class="w-3 h-3" src="{{ asset('assets/images/verified-icon.svg') }}" alt="title"></span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="flex items-center"><span class="bg-indigo-100 flex items-center justify-center rounded-lg w-8 h-8"><img src="{{ asset('assets/images/heart-icon2.svg') }}" alt="title"></span><p class="font-body font-bold text-sm text-blueGray-600 ml-2">90 Likes</p></div>--}}
                                </div>
                                <h3 class="font-display text-xl text-blueGray-900 font-bold transition hover:text-indigo-500"><a href="#">{{ $item->name }}</a></h3>
                            </div>
                        </div>
                        <div class="product-bottom bg-white flex items-center flex-wrap justify-between pt-4 px-6 pb-6 hover:bg-blueGray-100">

                            <div class="text-center">
                                <p class="flex items-center font-body font-bold text-blueGray-900 my-1"><img class="w-5 h-5 inline-block mr-1" src="{{ asset('assets/images/cryptocurrency-icon.svg') }}" alt="title"> {{ $item->price }} ETH</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
{{--            <div class="flex justify-center mt-8 lg:mt-14">--}}
{{--                <button class="btn load-more-btn flex items-center text-blueGray-900 font-body font-bold rounded px-6 py-4 transition-all duration-500 bg-gradient-to-tl from-indigo-500 via-purple-500 to-indigo-500 bg-size-200 bg-pos-0 hover:bg-pos-100">Load More <img class="w-4 h-4 flex-shrink-0 animate-spin ml-2" src="{{ asset('assets/images/spinner-icon.svg') }}" alt="title"></button>--}}
{{--            </div>--}}
        </div>
    </section>
    <!--  ====================== Footer Section =============================  -->
@endsection
