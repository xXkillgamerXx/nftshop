@extends('layouts.layout')

@section('content')
    <!--  ====================== Hero Section =============================  -->
    <section class="hero-section relative mt-2 pt-32 pb-20 lg:pt-48 lg:pb-32">
        <div class="container mx-auto relative px-4 z-10">
            <h2 class="font-display text-4xl lg:text-6xl text-blueGray-900 font-bold ">Login Account </h2>

        </div>
    </section>
    <!--  ====================== Blog Section =============================  -->
    <div class="blog-section relative mb-20 lg:mb-32">
        <div class="container mx-auto relative px-4 z-10">
            <div class="max-w-xl">
                <h3 class="block border-b border-blueGray-300 font-display text-3xl text-blueGray-900 font-bold pb-6 mb-6">Login</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="block font-body text-blueGray-600 mb-4" for="Username">Email</label>
                        <input name="email" value="{{ old('email') }}" class="border border-blueGray-300 rounded w-full px-4 py-3 font-body text-blueGray-900 placeholder-blueGray-900 bg-blueGray-100 transition duration-500 focus:shadow-lg focus:border-indigo-500 focus:outline-none" type="text">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block font-body text-blueGray-600 mb-4" for="Password">Password *</label>
                        <input name="password" value="{{ old('password') }}" class="border border-blueGray-300 rounded w-full px-4 py-3 font-body text-blueGray-900 placeholder-blueGray-900 bg-blueGray-100 transition duration-500 focus:shadow-lg focus:border-indigo-500 focus:outline-none" type="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <div class="flex flex-wrap items-center justify-between">
                            <div class="flex items-center cursor-pointer mr-4 my-2">
                                <input type="checkbox" id="checkbox" class="checkbox mr-2"/>
                                <label class="block font-body text-blueGray-600" for="checkbox">Remember me</label>
                            </div>
                            <a class="font-body text-blueGray-600" href="forget-password.html">Forget password?</a>
                        </div>
                    </div>
                    <button type="submit" class="btn inline-block text-blueGray-900 font-body font-medium rounded py-3 px-6 transition-all duration-500 bg-gradient-to-tl from-indigo-500 via-purple-500 to-indigo-500 bg-size-200 bg-pos-0 hover:bg-pos-100">Log In <img class="w-4 h-4 inline-block ml-2 mb-1" src="assets/images/check-white-icon.svg" alt="title"></button>
                </form>
            </div>
        </div>
    </div>
{{--    <!--  ====================== Footer Section =============================  -->--}}
{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}
{{--        <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--        @error('email')--}}
{{--        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--        @enderror--}}


{{--        <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--        @error('password')--}}
{{--        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--        @enderror--}}
{{--        <div class="form-check mt-2">--}}
{{--            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--            <label class="form-check-label" for="remember">--}}
{{--                {{ __('Remember Me') }}--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <button type="submit" style="background: #4f2d7f" class="btn btn-primary w-100 mt-3 mb-3">--}}
{{--            {{ __('Login') }}--}}
{{--        </button>--}}
{{--        {!! NoCaptcha::display() !!}--}}
{{--    </form>--}}
@endsection
