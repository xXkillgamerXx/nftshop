<!--  ====================== Header Section =============================  -->
<header class="header-area absolute w-full top-0 pt-4 pb-10">
    <div class="container mx-auto relative px-4 z-20">
        <nav class="flex items-center justify-between relative">
            <a href="{{ route('dashboard') }}" class="flex items-center flex-shrink-0 mr-6">
                <img class="h-10" src="{{ asset('assets/images/logo.png') }}" alt="title">
            </a>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto">
                <ul class="mobile-menu bg-white lg:bg-transparent shadow lg:shadow-none absolute lg:relative inset-x-0 hidden lg:flex lg:flex-grow items-center text-base text-blueGray-600 font-semibold mt-7 lg:mt-0 mobile-hover">
                    <li class="relative dropdown lg:mr-4">
                        <a class="p-4 flex items-center hover:text-indigo-500 transition duration-500" href="{{ route('dashboard') }}">Home</a>
                    </li>
                    <li class="relative dropdown lg:mr-4">
                        <a class="p-4 flex items-center hover:text-indigo-500 transition duration-500" href="{{ route('shop.create') }}">Create Shop</a>
                    </li>
                    <li class="relative dropdown lg:mr-4">
                        <a class="p-4 flex items-center hover:text-indigo-500 transition duration-500" href="{{ route('home') }}">Shops list</a>
                    </li>
                    <li class="relative dropdown lg:mr-4">
                        <a class="p-4 flex items-center hover:text-indigo-500 transition duration-500" href="#">Support</a>
                    </li>
                </ul>

                @if(!auth()->user())
                    <button onclick="web3Login()"  class="btn hidden xl:flex items-center text-blueGray-900 font-body font-semibold rounded h-14 p-4 transition-all duration-500 bg-gradient-to-tl from-indigo-500 via-purple-500 to-indigo-500 bg-size-200 bg-pos-0 hover:bg-pos-100" type="submit"><img class="w-4 h-4 flex-shrink-0  mr-2" src="{{ asset('assets/images/wallet-icon.svg') }}" title="title"> Connect Wallet</button>
                @else
                    <button class="btn hidden xl:flex items-center text-blueGray-900 font-body font-semibold rounded h-14 p-4 transition-all duration-500 bg-gradient-to-tl from-indigo-500 via-purple-500 to-indigo-500 bg-size-200 bg-pos-0 hover:bg-pos-100" type="submit"><img class="w-4 h-4 flex-shrink-0  mr-2" src="{{ asset('assets/images/wallet-icon.svg') }}" title="title">{{ Str::limit(auth()->user()->name, 15) }}</button>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <button onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="btn hidden xl:flex items-center  ml-2 text-blueGray-900 font-body font-semibold rounded h-14 p-4 transition-all duration-500 bg-gradient-to-tl from-indigo-500 via-purple-500 to-indigo-500 bg-size-200 bg-pos-0 hover:bg-pos-100" type="submit"><img class="w-4 h-4 flex-shrink-0" src="{{ asset('assets/images/Logout.svg') }}" title="title"></button>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                 @endif
            </div>
            <button class="bg-blueGray-50 mobile-toggle block lg:hidden">
                <span class="bg-blueGray-600"></span>
                <span class="bg-blueGray-600"></span>
                <span class="bg-blueGray-600"></span>
            </button>
        </nav>
    </div>
</header>
<!--  ====================== Hero Section =============================  -->
