@extends('layouts.layout')

@section('content')
    <!--  ====================== Hero Section =============================  -->
    <section class="hero-section relative mt-2 pt-32 pb-20 lg:pt-48 lg:pb-32">
        <div class="container mx-auto relative px-4 z-10">
            <h2 class="font-display text-4xl lg:text-6xl text-blueGray-900 font-bold">Create Account </h2>

        </div>
    </section>
    <!--  ====================== Blog Section =============================  -->
    <div class="blog-section relative mb-20 lg:mb-32">
        <div class="container mx-auto relative px-4 z-10">
            <div class="max-w-xl">
                <h3 class="block border-b border-blueGray-300 font-display text-3xl text-blueGray-900 font-bold pb-6 mb-6">Create Account</h3>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="block font-body text-blueGray-600 mb-4" for="Username2">Name</label>
                        <input name="name" class="border border-blueGray-300 rounded w-full px-4 py-3 font-body text-blueGray-900 placeholder-blueGray-900 bg-blueGray-100 transition duration-500 focus:shadow-lg focus:border-indigo-500 focus:outline-none" type="text">
                        @error('name')
                        <span  style="color: #ff4d4d" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block font-body text-blueGray-600 mb-4" for="Username2">Email Address</label>
                        <input name="email" class="border border-blueGray-300 rounded w-full px-4 py-3 font-body text-blueGray-900 placeholder-blueGray-900 bg-blueGray-100 transition duration-500 focus:shadow-lg focus:border-indigo-500 focus:outline-none" type="email">
                        @error('email')
                        <span style="color: #ff4d4d" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block font-body text-blueGray-600 mb-4" for="Username2">Password</label>
                        <input  name="password" class="border border-blueGray-300 rounded w-full px-4 py-3 font-body text-blueGray-900 placeholder-blueGray-900 bg-blueGray-100 transition duration-500 focus:shadow-lg focus:border-indigo-500 focus:outline-none" type="password">
                        @error('password')
                        <span style="color: #ff4d4d" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block font-body text-blueGray-600 mb-4" for="Username2">Confirm Password</label>
                        <input name="password_confirmation" class="border border-blueGray-300 rounded w-full px-4 py-3 font-body text-blueGray-900 placeholder-blueGray-900 bg-blueGray-100 transition duration-500 focus:shadow-lg focus:border-indigo-500 focus:outline-none" type="password">
                        @error('password_confirmation')
                        <span style="color: #ff4d4d" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn inline-block text-blueGray-900 font-body font-medium rounded py-3 px-6 transition-all duration-500 bg-gradient-to-tl from-indigo-500 via-purple-500 to-indigo-500 bg-size-200 bg-pos-0 hover:bg-pos-100">Register <img class="w-4 h-4 inline-block ml-2 mb-1" src="assets/images/check-white-icon.svg" alt="title"></button>
                </form>
            </div>
        </div>
    </div>
    <!--  ====================== Footer Section =============================  -->
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('Register') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        <form method="POST" action="{{ route('register') }}">--}}
{{--                            @csrf--}}

{{--                            <div class="row mb-3">--}}
{{--                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                    @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-3">--}}
{{--                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-3">--}}
{{--                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                    @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-3">--}}
{{--                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-0">--}}
{{--                                <div class="col-md-6 offset-md-4">--}}
{{--                                    <button type="submit" class="btn btn-primary">--}}
{{--                                        {{ __('Register') }}--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
