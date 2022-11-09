@extends('layouts.layout')

@section('content')
    <!--  ====================== Hero Section =============================  -->
    <section class="hero-section relative mt-2 pt-32 lg:pt-48 lg:pb-32">
        <div class="container mx-auto relative px-4 z-10">
            <div class="flex justify-between mb-8 lg:mb-14">
                <h2 class="font-display text-4xl lg:text-6xl text-blueGray-900 font-bold">User Wallet List</h2>
                <div class="flex relative lg:top-4">
                    <button  onclick="web3Login()" class="btn inline-block font-body font-bold rounded py-3 px-6 mr-4 mb-4 transition-all duration-500 bg-gradient-to-tl from-indigo-500 via-purple-500 to-indigo-500 bg-size-200 bg-pos-0 hover:bg-pos-100 " style="color: white">
                        Add Wallet
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!--  ====================== activity Section =============================  -->
    <section class="activity-section relative mb-20 lg:mb-32">
        <div class="container mx-auto relative px-4 z-10">
            <div class="flex justify-between mb-8 lg:mb-14">
                <div class="w-full flex flex-wrap items-center border-b border-blue">
                    <a href="{{ route('home') }}" class="block border {{ request()->tag == null ? 'border-indigo-500  bg-indigo-500' : ' border-blueGray-300' }}  text-blueGray-900 font-body font-bold rounded py-2 px-4 mr-4 mb-4 transition duration-500 border-blue">
                        Wallets
                    </a>
                </div>
            </div>
            <div class="activity-infinite m-auto grid grid-cols-1 gap-4">
                <div class="activity-box  border border-blueGray-100 sm:flex p-4 rounded transition duration-500 hover:shadow-lg" data-aos="fade-up">
                    @if($wallets->count() == 0)
                        <div class="activity-content flex flex-col flex-grow justify-center sm:pl-6">
                            <div class="mb-2 mt-4"><h3 class="font-display text-xl text-blueGray-900 font-bold">No wallet added</h3></div>

                        </div>
                    @else
                        <div class="activity-content flex flex-col flex-grow justify-center sm:pl-6">
                            @foreach($wallets as $wallet)

                                <div class="flex justify-between">
                                    <div class="mb-2 mt-4"><h3 class="font-display text-xl text-blueGray-900 font-bold">{{$wallet->wallet}}</h3></div>
                                    <div class="flex relative lg:top-4">
                                        <button  class="btn inline-block font-body font-bold rounded py-3 px-6 mr-4 mb-4 transition-all duration-500 bg-gradient-to-tl from-indigo-500 via-purple-500 to-indigo-500 bg-size-200 bg-pos-0 hover:bg-pos-100 " style="color: white">
                                            Unlink
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
