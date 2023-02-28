@extends('layouts.app')
@section('content')
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap md:w-9/12">
      <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
        <h1 class="title-font font-bold text-5xl text-gray-900">Sign In</h1>
        <p class="leading-relaxed mt-4">Don’t  have an account?  <a class="hover:underline underline-offset-8 decoration-yellow-400 decoration-4" href="{{ route('register') }}">Sign Up</a></p>
      </div>
      <div class="lg:w-2/6 md:w-1/2 bg-amber-50 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            @if(Session::has('message'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                  <span class="block sm:inline">{{ Session::get('message') }}</span>
                </div>      
              @endif
          <div class="relative mb-4">
            <label for="email" class="leading-7 text-md text-gray-900">Email Address</label>
            <input type="text" id="email" placeholder="example@gmail.com" vlaue="{{ old('email') }}" name="email" class="w-full bg-yellow-50 rounded border border-gray-500 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-4">
            <label for="password" class="leading-7 text-md text-gray-900">Password</label>
            <input type="password" id="password" name="password" class="w-full bg-yellow-50  rounded border border-gray-500 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            
            <div class="text-right mt-2">
              <a href="{{ route('forgot.password.get') }}" class="text-xs text-gray-500  text-right hover:text-yellow-500">Forgot Password?</a>
            </div>
          </div>
          <button class="w-full text-gray-900 bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-400 rounded text-lg">Sign In</button>
        </form>
      </div>
     </div>
  </section>       
@endsection
