@extends('layouts.layout')

@section('content')
    <!--  ====================== Hero Section =============================  -->
    <section class="hero-section relative mt-2 pt-32 lg:pt-48 lg:pb-32">
        <div class="container mx-auto relative px-4 z-10">
            <h2 class="font-display text-4xl lg:text-6xl text-blueGray-900 font-bold mb-4">You have no shop <br> Create one now</h2>
            <a href="{{ route('shop.create') }}" class=" btn inline-block text-xl text-blueGray-900 font-body font-medium rounded py-3 px-8 mb-10 transition-all duration-500 bg-gradient-to-tl from-indigo-500 via-purple-500 to-indigo-500 bg-size-200 bg-pos-0 hover:bg-pos-100">
               Create your shop
            </a>
        </div>
    </section>
    <!--  ====================== activity Section =============================  -->
    <section class="activity-section relative mb-20 lg:mb-32">
        <div class="container mx-auto relative px-4 z-10">
            <div class="flex justify-between mb-8 lg:mb-14">
                <div class="w-full flex flex-wrap items-center border-b border-blue">
                    <a href="#" class="block border border-indigo-500 text-blueGray-900 font-body font-bold rounded py-2 px-4 mr-4 mb-4 transition duration-500 bg-indigo-500 border-blue">
                        All
                    </a>
                    @foreach($categories as $category)
                        <a href="#" class="block border border-blueGray-300 hover:border-indigo-500 text-blueGray-900 hover:text-white font-body font-bold rounded py-2 px-4 mr-4 mb-4 transition duration-500 hover:bg-indigo-500 hover:border-blue">
                            {{ $category->name }}
                        </a>
                    @endforeach
              </div>
            </div>
            <div class="activity-infinite m-auto grid grid-cols-1 gap-4">
                @foreach($shops as $shop)
                <div class="activity-box  border border-blueGray-100 sm:flex p-4 rounded transition duration-500 hover:shadow-lg" data-aos="fade-up">
                    <div class="flex-shrink-0	activity-image relative rounded">
                        <img class="w-full sm:h-28 sm:w-28 rounded object-cover mb-4 sm:mb-0" src="{{ $shop->image }}" alt="title">
                        <span class="flex items-center justify-center absolute top-4 -right-4 bg-purple-100 rounded-lg w-8 h-8 mx-auto mb-1">
                            <img class="w-4 h-4" src="{{ asset('assets/images/activity-icon.svg') }}" alt="title">
                        </span>
                    </div>
                    <div class="activity-content flex flex-col flex-grow justify-center sm:pl-6">
                        <div class="mb-2"><h4 class="font-display text-xl text-blueGray-900 font-bold">{{ $shop->name }}</h4></div>
                        <p class="font-body font-semibold text-sm text-blueGray-600 mb-2">Listed by <a class="text-blueGray-900 font-bold transition duration-500 hover:text-indigo-500 underline-hover" href="creator-published.html">@Nikky_Smith</a></p>
                        <p class="font-body text-sm text-blueGray-600"><img class="w-4 h-4 inline-block mr-2 mb-1" src="{{ asset('assets/images/clock-icon.svg') }}" alt="title">1 mins ago</p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    <!--  ====================== Footer Section =============================  -->
@endsection
