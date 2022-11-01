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
                    <form method="POST" action="{{ route('shop.store') }}">
                        @csrf
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
                </div>
                <div class="md:col-span-2">

                </div>
            </div>
        </div>
    </div>
    <!--  ====================== Footer Section =============================  -->
@endsection
