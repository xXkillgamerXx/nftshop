@extends('layouts.layout')

@section('content')
    <!--  ====================== Hero Section =============================  -->
    <section class="hero-section relative mt-2 pt-32 pb-20 lg:pt-48 lg:pb-32">
        <div class="container mx-auto relative px-4 z-10">
            <h2 class="font-display text-4xl lg:text-6xl text-blueGray-900 font-bold mb-4">Customize your shop</h2>
            <ul class="hero-breadcrumb font-body text-blueGray-600 flex flex-wrap items-center">
                <li class="flex items-center mr-2"><a class="transition duration-500 hover:text-indigo-500 underline-hover" href="{{ route('home') }}"> Home</a></li>
                <li class="flex items-center text-indigo-500 mr-2"><img class="w-3 h-3 inline-block mr-2" src="{{ asset('assets/images/right-arrow.svg') }}" alt="title"> Create Item</li>
            </ul>
        </div>
    </section>
    <!--  ====================== Blog Section =============================  -->
    <div class="blog-section relative mb-20 lg:mb-32">
        <div class="container mx-auto relative px-4 z-10">
            <div class="grid grid-cols-1 md:grid-cols-6 gap-8">
                <div class="md:col-span-4">
                    @if($wallets->count() != 0)
                    <form method="POST" action="{{ route('shop.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label class="block font-display text-blueGray-600 font-bold mb-4" for="Upload">Wallets</label>
                            <select name="wallet_users_id" class="border border-blueGray-300 rounded w-full px-4 py-3 font-body text-blueGray-900 placeholder-blueGray-900 bg-blueGray-100 transition duration-500 focus:shadow-lg focus:border-indigo-500 focus:outline-none" required>
                                <option value="">Select Wallet</option>
                                @foreach($wallets as $wallet)
                                    <option value="{{ $wallet->id }}">{{ $wallet->wallet }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block font-display text-blueGray-600 font-bold mb-4" for="Upload">Image</label>
                            <div class="cursor-pointer relative w-full h-52 rounded border-dashed border-2 border-blueGray-300 flex justify-center items-center">
                                <div class="cursor-pointer absolute">
                                    <div class="flex flex-col items-center justify-center">
                                        <span class="text-center block font-body text-blueGray-600 mb-2">PNG, JPG, GIF, WEBP or MP4, MAX 300mb. </span>
                                        <div class="flex items-center px-6 py-3 bg-blueGray-300 rounded">
                                            <span class="font-display text-blueGray-600 font-bold mr-2">Chosse File</span> <img class="w-4 h-4" src="{{ asset('assets/images/upload-icon.svg') }}" alt="title">
                                        </div>
                                    </div>
                                </div>
                                <input type="file" class="h-full w-full opacity-0" id="Upload" name="image" required="">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block font-display text-blueGray-600 font-bold mb-4" for="Title">Your shop name*</label>
                            <input name="name" class="border border-blueGray-300 rounded w-full px-4 py-3 font-body text-blueGray-900 placeholder-blueGray-900 bg-blueGray-100 transition duration-500 focus:shadow-lg focus:border-indigo-500 focus:outline-none" id="Title" type="text" placeholder="" required>
                        </div>
                        <div class="mb-4">
                            <label class="block font-display text-blueGray-600 font-bold mb-4" for="Title">Url*</label>
                            <input type="url" name="slug" class="border border-blueGray-300 rounded w-full px-4 py-3 font-body text-blueGray-900 placeholder-blueGray-900 bg-blueGray-100 transition duration-500 focus:shadow-lg focus:border-indigo-500 focus:outline-none" id="Title" type="text" placeholder="" required>
                        </div>
                        <div class="mb-4">
                            <label class="block font-display text-blueGray-600 font-bold mb-4" for="Description">Description*</label>
                            <textarea rows="4" name="description" class="border border-blueGray-300 rounded w-full px-4 py-3 font-body text-blueGray-900 placeholder-blueGray-900 bg-blueGray-100 transition duration-500 focus:shadow-lg focus:border-indigo-500 focus:outline-none" id="Description" placeholder="" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="block font-display text-blueGray-600 font-bold mb-4" for="Title">Category*</label>
                            <select  name="category_id" class="border border-blueGray-300 rounded w-full px-4 py-3 font-body text-blueGray-900 placeholder-blueGray-900 bg-blueGray-100 transition duration-500 focus:shadow-lg focus:border-indigo-500 focus:outline-none" required>
                                <option value="">Add categorie</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn inline-block text-blueGray-900 font-body font-medium rounded py-3 px-6 transition-all duration-500 bg-gradient-to-tl from-indigo-500 via-purple-500 to-indigo-500 bg-size-200 bg-pos-0 hover:bg-pos-100">Create Shop <img class="w-4 h-4 inline-block ml-2 mb-1" src="{{ asset('assets/images/check-white-icon.svg') }}" alt="title"></button>
                    </form>
                    @else
                        <div class="activity-box  border border-blueGray-100 sm:flex p-4 rounded transition duration-500 hover:shadow-lg" data-aos="fade-up">
                            <div class="activity-content flex flex-col flex-grow justify-center sm:pl-6">
                                <div class="mb-2 mt-4"><h3 class="font-display text-xl text-blueGray-900 font-bold">No wallet added</h3></div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="md:col-span-2">

                </div>
            </div>
        </div>
    </div>
    <!--  ====================== Footer Section =============================  -->
@endsection
