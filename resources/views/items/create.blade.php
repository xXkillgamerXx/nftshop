@extends('layouts.layout')

@section('content')
    <section class="hero-section relative mt-2 pt-32 pb-20 lg:pt-48 lg:pb-32">
        <div class="container mx-auto relative px-4 z-10">
            <div class="flex justify-between mb-8 lg:mb-14">
                <h2 class="font-display text-4xl lg:text-6xl text-blueGray-900 font-bold">Item Details </h2>

            </div>
            <ul class="hero-breadcrumb font-body text-blueGray-600 flex flex-wrap items-center">
                <li class="flex items-center mr-2"><a class="transition duration-500 hover:text-indigo-500 underline-hover" href="#"> Home</a></li>
                <li class="flex items-center mr-2"><img class="w-3 h-3 inline-block mr-2" src="{{ asset('assets/images/right-arrow.svg') }}" alt="title"><a class="transition duration-500 hover:text-indigo-500 underline-hover" href="#"> Explore</a></li>
                <li class="flex items-center text-indigo-500 mr-2"><img class="w-3 h-3 inline-block mr-2" src="{{ asset('assets/images/right-arrow.svg') }}" alt="title"> Item Details</li>
            </ul>
        </div>
    </section>
    <div class="blog-section relative mb-20 lg:mb-32">
        <div class="container mx-auto relative px-4 z-10">
            <div class="grid grid-cols-1 md:grid-cols-6 gap-8">
                <div class="md:col-span-4">
                    <form method="POST" action="{{ route('item.store', ['shop_id' => $shop->id]) }}" enctype="multipart/form-data">
                        @csrf
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
                            <input type="url" name="link" class="border border-blueGray-300 rounded w-full px-4 py-3 font-body text-blueGray-900 placeholder-blueGray-900 bg-blueGray-100 transition duration-500 focus:shadow-lg focus:border-indigo-500 focus:outline-none" id="Title" type="text" placeholder="" required>
                        </div>
                        <div class="mb-4">
                            <label class="block font-display text-blueGray-600 font-bold mb-4" for="Description">Description*</label>
                            <textarea rows="4" name="description" class="border border-blueGray-300 rounded w-full px-4 py-3 font-body text-blueGray-900 placeholder-blueGray-900 bg-blueGray-100 transition duration-500 focus:shadow-lg focus:border-indigo-500 focus:outline-none" id="Description" placeholder="" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="block font-display text-blueGray-600 font-bold mb-4" for="Title">Price*</label>
                            <input type="number" name="price" class="border border-blueGray-300 rounded w-full px-4 py-3 font-body text-blueGray-900 placeholder-blueGray-900 bg-blueGray-100 transition duration-500 focus:shadow-lg focus:border-indigo-500 focus:outline-none" id="Title" type="text" placeholder="" required>
                        </div>
                        <button type="submit" class="btn inline-block text-blueGray-900 font-body font-medium rounded py-3 px-6 transition-all duration-500 bg-gradient-to-tl from-indigo-500 via-purple-500 to-indigo-500 bg-size-200 bg-pos-0 hover:bg-pos-100">Create Item <img class="w-4 h-4 inline-block ml-2 mb-1" src="{{ asset('assets/images/check-white-icon.svg') }}" alt="title"></button>
                    </form>
                </div>
                <div class="md:col-span-2">

                </div>
            </div>
        </div>
    </div>
@endsection
