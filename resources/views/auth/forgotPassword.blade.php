@extends('layouts.app')
@section('content')
<section class="text-gray-600 body-font relative">
    <form action="{{ route('forgot.password.post') }}" method="POST">
        @csrf
          <div class="container px-5 py-24 flex justify-center ">
            <div class="flex flex-col text-center mb-12 w-4/1">
            <label for="reset_password" class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Reset Password</label>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base mb-5">Forgot your password? Write it below, we will send you a confirmation link.</p>
            <div class="relative">
                @if (Session::has('message'))
                  <div class="flex p-4 mb-4 text-sm text-blue-700 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                      <span class="font-medium">{{ Session::get('message') }}</span>
                    </div>
                  </div>
                @endif
                <div>
                    <input type="email" id="email_address" name="email" class="w-full mt-2 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-yellow-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="email address">
                     @if ($errors->has('email'))
                      <div class="flex p-4 my-4 text-sm text-red-700 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                          <span class="font-medium">{{ $errors->first('email') }}</span>
                        </div>
                      </div>
                      
                    @endif 
                </div>
                <button type="submit" class="w-full mt-2 text-white text-md  bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-400 rounded ">Send Password Reset Link</button>
            </div>
        </div>
    </div>
</form>
</section>
@endsection


                      