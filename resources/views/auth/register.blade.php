@extends('layouts.app')
@section('content')

<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap md:w-9/12">
      <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
        <h1 class="title-font font-bold text-5xl text-gray-900">Create an account to save and continue</h1>
        <p class="leading-relaxed mt-4">Already have an account?  <a class="hover:underline underline-offset-8 decoration-yellow-400 decoration-4" href="{{ route('login') }}">Sign In</a></p>
      </div>
    <div class="lg:w-2/6 md:w-1/2 bg-amber-50 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="relative mb-4">
            <label for="name" class="leading-7 text-md text-gray-900">Full Name</label>
            <input type="text" id="name" name="name" class="w-full  bg-yellow-50 rounded border border-gray-600 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="name">
          </div>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-md text-gray-900">Email Address</label>
          <input type="text" id="email" name="email" class="w-full bg-yellow-50 rounded border border-gray-600 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="email">
        </div>
        <div class="relative mb-4">
          <label for="password" class="leading-7 text-md text-gray-900">Password</label>
          <input type="password" id="password"  name="password" class="w-full bg-yellow-50 rounded border border-gray-600 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="flex  mb-4">
            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300 rounded focus:ring-yellow-500 focus:ring-2">
            <label for="default-checkbox" class="ml-2 text-xs  text-gray-500  dark:text-gray-300">By continuing, you agree to the Bolani terms and acknowledge receipt of our privacy notice.</label>
        </div>
        <button class="w-full text-gray-900 bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-400 rounded text-lg">Create</button>
      </form>
    </div>
    </div>
  </section>      
@endsection