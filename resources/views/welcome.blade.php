@extends('layouts.layout')

@section('content')
    <section class="hero-section relative hero-shape pt-40 pb-24 lg:pt-64 lg:pb-56">
        <div class="container mx-auto relative px-4 z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl lg:text-6xl font-bold font-display text-blueGray-900 mb-10">Largest online marketplace to buy sell NFT items</h1>
                <p class="text-xl font-body font-normal text-blueGray-600 mb-4">Join the world's biggest NFT marketplace and discover truely rare digital artwork, sound, videos etc</p>
                <div class="flex flex-wrap items-center justify-center">
                    <a href="explore.html" class="btn block text-blueGray-900 font-body font-bold rounded py-4 px-7 mx-3 mt-4 transition-all duration-500 bg-gradient-to-tl from-indigo-500 via-purple-500 to-indigo-500 bg-size-200 bg-pos-0 hover:bg-pos-100">Explore Now</a>
                    <a href="create-item.html" class="btn block bg-blueGray-900 text-white hover:text-blueGray-900 font-body font-bold rounded py-4 px-7 mx-3 mt-4 transition duration-500 hover:bg-indigo-500">Create Product</a>
                </div>
            </div>
        </div>
    </section>
    <!--  ====================== Category Section =============================  -->
    <section class="category-section my-20 lg:my-32">
        <div class="container mx-auto relative px-4 z-10">
            <div class="section-title flex flex-wrap items-center justify-between mb-8 lg:mb-14">
                <div class="flex items-center mb-3">
                    <span class="flex items-center justify-center bg-gradient-to-r from-purple-500 to-indigo-500 rounded-lg w-10 h-10 mr-4"><img class="w-4 h-4" src="assets/images/sec-icon1.svg" alt="title"></span>
                    <h3 class="font-display text-blueGray-900 font-bold text-2xl lg:text-4xl">NFT Collections</h3>
                </div>
                <a href="explore.html" class="arrow-btn block bg-indigo-100 text-indigo-500 text-sm text-sm font-body font-bold rounded py-2 px-4 ml-14 transition duration-500 hover:bg-indigo-50">See All</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <div class="category-box relative rounded overflow-hidden" data-aos="fade-up">
                    <img class="w-full sm:h-72 object-cover" src="assets/images/product/7.gif" alt="title">
                    <div class="category-content text-center bg-white shadow transition duration-500 hover:shadow-lg rounded absolute bottom-8 right-8 left-8 p-4">
                        <h4 class="font-display text-xl text-blueGray-900 font-bold transition hover:text-indigo-500"><a href="explore.html">Cartoon Art</a></h4>
                        <p class="font-body text-blueGray-600">12 Items</p>
                    </div>
                </div>
                <div class="category-box relative rounded overflow-hidden" data-aos="fade-up">
                    <img class="w-full sm:h-72 object-cover" src="assets/images/category/2.jpg" alt="title">
                    <div class="category-content text-center bg-white shadow transition duration-500 hover:shadow-lg rounded absolute bottom-8 right-8 left-8 p-4">
                        <h4 class="font-display text-xl text-blueGray-900 font-bold transition hover:text-indigo-500"><a href="explore.html">Superheros</a></h4>
                        <p class="font-body text-blueGray-600">12 Items</p>
                    </div>
                </div>
                <div class="category-box relative rounded overflow-hidden" data-aos="fade-up">
                    <img class="w-full sm:h-72 object-cover" src="assets/images/category/3.jpg" alt="title">
                    <div class="category-content text-center bg-white shadow transition duration-500 hover:shadow-lg rounded absolute bottom-8 right-8 left-8 p-4">
                        <h4 class="font-display text-xl text-blueGray-900 font-bold transition hover:text-indigo-500"><a href="explore.html">Oilprint</a></h4>
                        <p class="font-body text-blueGray-600">12 Items</p>
                    </div>
                </div>
                <div class="category-box relative rounded overflow-hidden" data-aos="fade-up">
                    <img class="w-full sm:h-72 object-cover" src="assets/images/category/4.jpg" alt="title">
                    <div class="category-content text-center bg-white shadow transition duration-500 hover:shadow-lg rounded absolute bottom-8 right-8 left-8 p-4">
                        <h4 class="font-display text-xl text-blueGray-900 font-bold transition hover:text-indigo-500"><a href="explore.html">Virtual Worlds</a></h4>
                        <p class="font-body text-blueGray-600">12 Items</p>
                    </div>
                </div>
                <div class="category-box relative rounded overflow-hidden" data-aos="fade-up">
                    <img class="w-full sm:h-72 object-cover" src="assets/images/category/5.jpg" alt="title">
                    <div class="category-content text-center bg-white shadow transition duration-500 hover:shadow-lg rounded absolute bottom-8 right-8 left-8 p-4">
                        <h4 class="font-display text-xl text-blueGray-900 font-bold transition hover:text-indigo-500"><a href="explore.html">Oil Paint</a></h4>
                        <p class="font-body text-blueGray-600">12 Items</p>
                    </div>
                </div>
                <div class="category-box relative rounded overflow-hidden" data-aos="fade-up">
                    <img class="w-full sm:h-72 object-cover" src="assets/images/category/6.jpg" alt="title">
                    <div class="category-content text-center bg-white shadow transition duration-500 hover:shadow-lg rounded absolute bottom-8 right-8 left-8 p-4">
                        <h4 class="font-display text-xl text-blueGray-900 font-bold transition hover:text-indigo-500"><a href="explore.html">Collectibles</a></h4>
                        <p class="font-body text-blueGray-600">12 Items</p>
                    </div>
                </div>
                <div class="category-box relative rounded overflow-hidden" data-aos="fade-up">
                    <img class="w-full sm:h-72 object-cover" src="assets/images/category/7.jpg" alt="title">
                    <div class="category-content text-center bg-white shadow transition duration-500 hover:shadow-lg rounded absolute bottom-8 right-8 left-8 p-4">
                        <h4 class="font-display text-xl text-blueGray-900 font-bold transition hover:text-indigo-500"><a href="explore.html">Trading Card</a></h4>
                        <p class="font-body text-blueGray-600">12 Items</p>
                    </div>
                </div>
                <div class="category-box relative rounded overflow-hidden" data-aos="fade-up">
                    <img class="w-full sm:h-72 object-cover" src="assets/images/category/8.jpg" alt="title">
                    <div class="category-content text-center bg-white shadow transition duration-500 hover:shadow-lg rounded absolute bottom-8 right-8 left-8 p-4">
                        <h4 class="font-display text-xl text-blueGray-900 font-bold transition hover:text-indigo-500"><a href="explore.html">Rare Collections</a></h4>
                        <p class="font-body text-blueGray-600">12 Items</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
