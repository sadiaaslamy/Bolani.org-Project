<!--payment-->
@extends('layouts.app')
@section('content')
<section class=" relative body-font overflow-hidden">
    
    <div id="backgroundHide" class="container p-5 mx-auto">
       <div class="my-6">
        <div class="w-4/5 mx-auto flex flex-wrap  justify-center md:justify-between items-center">
            <div class="lg:w-1/2  py-5 object-cover object-center flex flex-col justify-start">
                <div class="my-5">
                    <h1 class="text-3xl font-bold">Donate</h1>
                    <p class=" sm:ml-1">Thank you for your donation</p>
                </div>
               <div class="flex justify-center md:justify-start">
                <img alt="ecommerce" class="h-96 w-auto rounded-xl" src="{{ asset('storage/images/afghan-child.jpg')}}">
               </div>
            </div>
            <div class="lg:w-1/2 w-full lg:pl-10 mt-6 lg:mt-0 ">
                @if (Session::has('danger'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ Session::get('danger')}}</span>
                      </div> 
                @endif

                @if (Session::has('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ Session::get('success')}}</span>
                      </div> 
                @endif

                <form role="form" method="POST" id="paymentForm" action="{{ url('/payment') }}">
                @csrf
                <form>
                    <div>
                        <label for="username" class="block m-2 text-sm font-medium text-gray-900 dark:text-white">Your Card Name</label>
                        <input type="text" class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" value="{{old('fullName')}}" name="fullName" placeholder="Card Name ">
                        @error('fullName')
                            <p class="text-red-600 m-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="amount" class="block m-2 text-sm font-medium text-gray-900 dark:text-white">Donate Amount</label>
                        <input type="text"  id="amount" onkeyup="amountCD(this.value);" class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 mb-0" placeholder="Please Enter The Amount You Want To Donate" value="{{old('donateAmount')}}" name="donateAmount" placeholder="Please Enter The Amount You Want To Donate">
                        @error('donateAmount')
                            <p class="text-red-600 m-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="cardNumber" class="block m-2 text-sm font-medium text-gray-900 dark:text-white">Card number</label>
                            <div class="input-group">
                                <input type="number" class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" name="cardNumber"
                                    placeholder="Card Number" value="{{old('cardNumber')}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text text-muted">
                                                <i class="fab fa-cc-visa fa-lg pr-1"></i>
                                                <i class="fab fa-cc-amex fa-lg pr-1"></i>
                                                <i class="fab fa-cc-mastercard fa-lg"></i>
                                            </span>
                                         </div>
                                      </div>
                                    @error('cardNumber')
                                        <p class="text-red-600 m-2">{{ $message }}</p>
                                    @enderror
                                 </div>
                    <label for="month" class="block text-sm font-medium text-gray-900 dark:text-white">Expiration</label>
                    <div class="flex space-x-4">
                            <select class="=border border-gray-300 text-gray-900 text-sm rounded focus:ring-gray-500 focus:border-gray-500 block w-96 p-2.5" name="month" >
                                <option value="">MM</option>
                                @foreach (range(1, 12) as $month)
                                    <option value="{{ $month }}" class="text-gray-900 m-2">
                                        {{ $month }}</option>
                                @endforeach
                            </select>
                        <select class="flex border border-gray-300 text-gray-900 text-sm rounded focus:ring-gray-500 focus:border-gray-500  w-96 p-2.5" name="year">
                            <option value="">YYYY</option>
                            @foreach (range(date('Y'), date('Y') + 10) as $year)
                                <option value="{{ $year }}" class="text-gray-900 m-2">
                                    {{ $year }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex justify-between"> 
                        @error('month')
                            <p class="text-red-600 m-2">{{ $message }}</p>
                        @enderror
                        @error('year')
                            <p class="text-red-600 m-2">{{ $message }}</p>
                        @enderror
                     </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label data-toggle="tooltip" title=""
                                data-original-title="3 digits code on back side of the card">CVV <i
                                class="fa fa-question-circle"></i></label>
                                <input type="number" value="{{old('cvc')}}" class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="CVV" name="cvc">
                            @error('cvc')
                                <p class="text-red-600 m-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                        <button class="text-white mt-8 font-semibold tracking-wide bg-yellow-500 hover:bg-yellow-400 focus:ring-4 focus:outline-none rounded px-5 py-2.5 text-center w-full" type="submit"> Confirm CheckOut</button>                                                                            
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection