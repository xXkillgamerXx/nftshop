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
                    <a href="{{ route('login') }}" class="btn hidden xl:flex items-center text-blueGray-900 font-body font-semibold rounded h-14 p-4 transition-all duration-500 bg-gradient-to-tl from-indigo-500 via-purple-500 to-indigo-500 bg-size-200 bg-pos-0 hover:bg-pos-100 mr-2" type="submit">
                        <img class="w-4 h-4 flex-shrink-0  mr-2" src="{{ asset('assets/images/wallet-icon.svg') }}" title="title">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="btn hidden xl:flex items-center text-blueGray-900 font-body font-semibold rounded h-14 p-4 transition-all duration-500 bg-gradient-to-tl from-indigo-500 via-purple-500 to-indigo-500 bg-size-200 bg-pos-0 hover:bg-pos-100" type="submit">
                        <img class="w-4 h-4 flex-shrink-0  mr-2" src="{{ asset('assets/images/wallet-icon.svg') }}" title="title">
                        Register
                    </a>

                @else
                    <ul class="mobile-menu flex-shrink-0">
                        <li class="relative dropdown"><a href="#" class="hidden 2xl:flex items-center border border-blueGray-300 from-purple-500 to-indigo-500 text-blueGray-600 font-body font-bold rounded h-14 p-4 ml-6"><img class="w-6 h-6 object-cover rounded-full flex-shrink-0  mr-2" src="https://bysperfeccionoral.com/wp-content/uploads/2020/01/136-1366211_group-of-10-guys-login-user-icon-png.jpg" title="ittle">{{ auth()->user()->name }}</a>
                            <ul class="hidden p-4 lg:block bg-white lg:absolute rounded top-full right-0 lg:shadow lg:w-60 transition duration-500 submenu">
                                <li><a class="py-1 px-2 flex items-center font-body font-medium text-blueGray-600 hover:bg-indigo-100 hover:text-indigo-500 transition duration-500" href="{{ route('wallet.index') }}">User Wallet List</a></li>
                                <li><a class="py-1 px-2 flex items-center font-body font-medium text-blueGray-600 hover:bg-indigo-100 hover:text-indigo-500 transition duration-500" href="#">My Profile</a></li>
                                <li><a class="py-1 px-2 flex items-center font-body font-medium text-blueGray-600 hover:bg-indigo-100 hover:text-indigo-500 transition duration-500" href="{{ route('shop.create') }}">Create Shop</a></li>
                                <li><a class="py-1 px-2 flex items-center font-body font-medium text-blueGray-600 hover:bg-indigo-100 hover:text-indigo-500 transition duration-500" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" href="login.html">Logout</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    </ul>

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
