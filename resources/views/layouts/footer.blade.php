<!--  ====================== Footer Section =============================  -->
<footer class="footer-section relative footer-shape pb-20 lg:pb-28 pt-40 lg:pt-56">
    <div class="container mx-auto relative px-4 z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-7 gap-8">
            <div class="footer-widget xl:flex xl:flex-col xl:justify-center xl:col-span-2">
                <a href="index.html" class="block mb-10">
                    <img class="h-10" src="{{ asset('assets/images/logo.png') }}" alt="title">
                </a>
                <div class="social-share flex items-center">
                    <a class="flex items-center justify-center w-10 h-10 bg-blueGray-200 rounded-lg border border-blueGray-200 transition duration-500 hover:bg-indigo-500 mr-2" href="#"><img class="w-4 h-4" src="{{ asset('assets/images/facebook-icon.svg') }}" alt="title"></a>
                    <a class="flex items-center justify-center w-10 h-10 bg-blueGray-200 rounded-lg border border-blueGray-200 transition duration-500 hover:bg-indigo-500 mr-2" href="#"><img class="w-4 h-4" src="{{ asset('assets/images/twitter-icon.svg') }}" alt="title"></a>
                    <a class="flex items-center justify-center w-10 h-10 bg-blueGray-200 rounded-lg border border-blueGray-200 transition duration-500 hover:bg-indigo-500 mr-2" href="#"><img class="w-4 h-4" src="{{ asset('assets/images/instagram-icon.svg') }}" alt="title"></a>
                    <a class="flex items-center justify-center w-10 h-10 bg-blueGray-200 rounded-lg border border-blueGray-200 transition duration-500 hover:bg-indigo-500 mr-2" href="#"><img class="w-4 h-4" src="{{ asset('assets/images/linkein-icon.svg') }}" alt="title"></a>
                </div>
            </div>
            <div class="footer-widget pb-4 lg:pb-0 lg:border-b-0 border-b border-indigo-200">

            </div>
            <div class="footer-widget pb-4 lg:pb-0 lg:border-b-0 border-b border-indigo-200">

            </div>
            <div class="footer-widget pb-4 lg:pb-0 lg:border-b-0 border-b border-indigo-200">

            </div>
            <div class="footer-widget col-span-1 md:col-span-2">
                <h4 class="font-display text-xl text-blueGray-900 font-semibold">Navigation</h4>
                <ul class="mt-4 xl:mt-10 flex flex-wrap xl:block">
                    <li class="mb-4 mr-4"><a class="font-body text-blueGray-600 transition duration-500 hover:text-indigo-500 underline-hover" href="{{ route('home') }}">Home</a></li>
                    <li class="mb-4 mr-4"><a class="font-body text-blueGray-600 transition duration-500 hover:text-indigo-500 underline-hover" href="{{ route('shop.create') }}">Create Shop</a></li>
                    <li class="mb-4 mr-4"><a class="font-body text-blueGray-600 transition duration-500 hover:text-indigo-500 underline-hover" href="{{ route('home') }}">Shops list</a></li>
                    <li class="mb-4 mr-4"><a class="font-body text-blueGray-600 transition duration-500 hover:text-indigo-500 underline-hover" href="#">Support</a></li>
                </ul>
            </div>

        </div>
        <div class="lg:text-center mt-8 lg:mt-14">
            <p class="font-body text-sm text-blueGray-600">© <span id="spanYear">2021</span> Tokenmart - All Rights Reserved by <a href="https://themeix.com/" class="text-indigo-500 underline-hover" rel="noopener" target="_blank">themeix</a></p>
        </div>
    </div>

    <a href="#" class="footer-back w-10 h-10 hidden fixed bottom-8 right-8 z-50 bg-blueGray-600 rounded-lg items-center justify-center"><svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 9L9 1L17 9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </a>
</footer>
<!-- gulp:js -->
