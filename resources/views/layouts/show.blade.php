@extends('layouts.app')
@section('content')
    <section class="text-gray-600 body-font overflow-hidden ">
        <div class="container px-5 py-24 w-5/6 mx-auto ">
          <div class=" mx-auto flex flex-wrap ">
            <img alt="images" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded-lg" src="{{ asset('storage/images/'.$fund->file_path)}}">
            <div class="p-5 lg:w-1/2 w-full lg:pr-10 lg:py-2 mb-6 lg:mb-0 flex flex-col justify-between">
              <div> 
                <h1 class="tracking-wide text-xl md:text-3xl text-yellow-500 font-bold mb-6">{{ $fund->title }}</h1>
              <p class="leading-relaxed text-justify text-base md:text-xl text-gray-900">{{ $fund->description }}</p>
              </div>
              <div class="flex flex-col md:flex-row md:justify-between mt-12">
                <h3 class="font-bold text-yellow-500 tracking-wider text-xl md:text-3xl">
                    Total Goal: <span class="title-font font-bold text-gray-900 text-base md:text-xl">${{ $fund->goal }}</span>
                </h3>
                <div class="flex justify-between my-5 md:my-0 md:justify-start">
                  <a class="mx-1 text-xs text-gray-900 border border-black py-1 px-2 rounded md:text-xl" href="{{route('updates.show',$fund->hasUpdate->id)}}">Updates</a>
                   <a href="/payment" class="mx-1 text-xs text-gray-900 bg-yellow-500 border border-yellow-500 py-1  hover:bg-yellow-400 rounded px-6 md:text-xl">Donate</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection