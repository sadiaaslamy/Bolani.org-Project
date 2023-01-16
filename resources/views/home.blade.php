@extends('layouts.app')
@section('content')
@if ($errors->any())
    <div class="alert">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
      <div class="text-center lg:w-2/3 w-full">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">We are happy to have you here  <span class="text-yellow-500">{{ Auth::user()->name }}</span></h1>
        <p class="mb-8 leading-relaxed">Nothing feels better than the act of giving that serves as a reminder that everything we have in this world is immaterial and never initially belonged to us in the first place. Be like the Prophet (PBUH) and never forget the importance of giving charity in Islam, not only for the good of yourself but your acts of kindness will help to raise up everyone around you.</p>
        <p class="mb-5 font-bold">How will you decide to give? Click here</p>
        <div class="flex justify-center">
          <a href="/payment" class="inline-flex text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-400 rounded text-lg">Donate</a>
          <a href="/funds/create" class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg" >Create a Fund</a>
        </div>
      </div>
      <span class="inline-block h-1 w-10 rounded bg-yellow-500 mt-8 mb-6"></span>
      <h2 class="text-gray-400 font-medium title-font tracking-wider text-sm">Sincere Bolani team</h2>
    </div>
  </section>
@endsection
