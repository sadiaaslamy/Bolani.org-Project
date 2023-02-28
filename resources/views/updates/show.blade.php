@extends('layouts.app')
@section('content')
{{-- <div><a  href="{{ route('updates.index') }}"> Back</a></div>   --}}
<!--showUpdateAboutFunds-->
<section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-6 py-14  w-5/6 mx-auto">
      <div class="flex flex-wrap -m-12">
        <div class="p-12 md:w-1/2 flex flex-col items-start">
            <div class=" w-full bg-gray-300 rounded-full  h-3 mt-6">
                <div class="bg-yellow-500 h-3 rounded-full" style="width: 33%"></div>
                <div class="flex justify-between  mb-3">
                    <span class="text-sm font-bold text-yellow-500 mr-24">$33,245</span>
                    <span class="text-sm font-bold text-yellow-500 ml-44">$99,735</span>
                  </div>
                </div>
            <div class="w-full mt-10">
                <img class="object-cover object-center rounded-lg h-72 w-full" alt="" src="{{ asset('storage/images/'.$update->image)}}">
            </div>
            <!----lines-->
            <p class="tracking-wide text-gray-900 text-xl pt-8">Donation(58)</p>
            <div class="flex border-b border-gray-300 py-2">
                <div class="text-gray-900 w-64"> <i class="fa fa-user"></i> Anonymous <br> $220</div> 
            </div>
            <div class="flex border-b w-64 border-gray-300 py-2">
                <span class="text-gray-900"> <i class="fa fa-user"></i>  Anonymous <br> $50</span> 
            </div>
            <div class="flex border-b w-64 border-gray-300 py-2">
                <span class="text-gray-900"><i class="fa fa-user"></i>  Anonymous <br> $160</span>
            </div>
            <div class="flex border-b w-64 mb-6 border-gray-300 py-2">
                <span class="text-gray-900"><i class="fa fa-user"></i>  Anonymous <br> $300</span> 
            </div>
            <p class="text-gray-900 font-semibold text-base md:text-xl text-justify">Thank you to all who have made donations and shared. It is so nice to see so much support</p>
        </div>
        <div class="p-12 md:w-1/2 flex flex-col items-start text-gray-900">
            <p class="leading-relaxed text-justify text-base md:text-xl text-gray-900">{{ $update->description }}</p>
        </div>
      </div>
    </div>
  </section>
@endsection