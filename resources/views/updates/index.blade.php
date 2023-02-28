@extends('layouts.app')
@section('content')

<section class="text-gray-600">
    @if ($message = Session::get('success'))
      <div class="flex p-4 mb-4 text-sm text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
        <span class="sr-only">Info</span>
        <div>
          <span class="font-medium">{{ $message }}</span>
        </div>
      </div>
     @endif
    <div class="container px-5 py-10 w-5/6 mx-auto"> 
        <a href="/updates" class=" text-xl font-semibold md:text-3xl my-3 text-gray-900">Edit latest news</a>
          <div class="flex flex-wrap -m-4">
            @foreach ($updates as $update)
            <div class="p-4 md:w-1/3">
              <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ asset('storage/images/'.$update->image)}}" alt="blog">

                <div class="p-6">
                  <p class="leading-relaxed mb-3">{{ $update->description }}</p>
                  <div class="flex items-center flex-wrap ">
                    <form action="{{ route('updates.destroy',$update->id) }}" method="POST">
                        <div class="flex flex-wrap">
                            <a href="{{ route('updates.show',$update->id) }}" class="inline-flex text-gray-900 border-2 border-yellow-500 rounded px-2 py-1 mx-1 focus:outline-none text-sm">Show</a>
                          <a  href="{{ route('updates.edit',$update->id) }}" class="inline-flex text-gray-900 border-2 border-yellow-500 rounded px-2 py-1 mx-1 focus:outline-none text-sm">Edit</a>
                          @csrf
                          @method('DELETE')
                          <button class="inline-flex text-gray-900 border-2 border-yellow-500 rounded px-2 py-1 mx-1 focus:outline-none text-sm">Delete</button>
                          </div>
                       </div>
                     </div>
                   </div>
                 </div>
               @endforeach
             </div>
             <div class="my-3">
              {{ $updates->links() }}
            </div>
          </div>
      </section>
@endsection