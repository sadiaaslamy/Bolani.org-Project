@extends('layouts.app')
@section('content')
    <section class="body-font">
        <div class="container p-12 mx-auto">
            <div class="w-11/12 mx-auto">
            <h1 class="text-2xl font-bold text-black tracking-wide mb-10">Edit Your Fundraisers</h1>
            @if ($errors->any())
                <div class="alert"> 
                       <ul>
                          <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-gray-800 dark:text-red-400" role="alert">
                            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <div>
                                  <span class="font-medium">There were some problems with your input.</span>
                                    <ul class="mt-1.5 ml-4 list-disc list-inside">
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach   
                                  </ul>
                                </div>
                              </div>
                         </ul>
                   </div>
            @endif
        <form action="{{ route('funds.update',$fund->id) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="flex flex-col md:flex-wrap -mb-10 h-4/6">
                <div class="mb-10 px-4 font-semibold ">
                    <div class="rounded-lg h-96">
                        <label for="title" class="leading-10 text-sm text-black">Title</label>
                        <input type="text" name="title" value="{{ $fund->title }}" placeholder="title" class="w-full rounded border border-gray-600 focus:border-gray-500 focus:ring-2 focus:ring-gray-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                     
                        <label for="description" class="leading-10 text-sm text-black mb-5">Description</label>
                        <textarea id="description" name="description" placeholder="Write here" class="w-full h-1/2 p-3 rounded border border-gray-600 focus:border-gray-500 focus:ring-2 focus:ring-gray-200  text-base outline-none text-gray-700 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ $fund->description }}</textarea>
                    </div>
                </div>

                <div class="mb-10  px-4 font-semibold">
                    <div class="rounded-lg h-96">
                        <label for="title" class="leading-10 text-sm text-black">Goal</label>
                        <input type="number" name="goal" value="{{ $fund->goal }}" placeholder="$0" class="w-full rounded border border-gray-600 focus:border-gray-500 focus:ring-2 focus:ring-gray-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                     
                        <label for="photo_update" class="leading-10 text-sm text-black mb-5">Update Photo</label>
                        
                        <div id="photo_update" name="photo_update" placeholder="Write here" class="py-7 p-3 h-1/2 flex justify-center rounded border border-gray-600 focus:border-gray-500 focus:ring-2 focus:ring-gray-200  text-base outline-none text-gray-700 resize-none leading-6 transition-colors duration-200 ease-in-out"> 
                            <input type="file" id="file_path" value="{{ $fund->file_path  }}" name="file_path" accept="image/*">
                            <img class="w-1/2 h-auto"src="{{ asset('storage/images/'.$fund->file_path)}}" alt="">
                        </div>
                        
                        <div class="flex justify-end">
                            <div class="grid justify-items-end mx-3 my-5">
                                <a href="{{ route('funds.index') }}" class=" bg-gray-100  text-gray-700 hover:bg-gray-200 py-2 px-6 focus:outline-none rounded-lg">Cancel</a>
                            </div>
                            <div class="grid justify-items-end my-5">
                                <button class=" bg-yellow-500 text-white border-0 py-2 px-6 focus:outline-none hover:bg-yellow-400 rounded-lg">Update</button>
                            </div>
                         </div>
                       </div>
                     </div>
                   </div>
                </div>
            </div>
        </form>
     </section>   
@endsection