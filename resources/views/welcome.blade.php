@extends('layouts.app')
@section('content')
<!--test second commit-->
<h1>Test comment</h1>
<!--main-->
<section class="text-gray-600 body-font bg-amber-50 p-10">
    <div class="container flex flex-wrap  py-10 w-5/6 mx-auto justify-center md:justify-between items-center">
      <div class="md:w-1/2 md:pr-12 md:py-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200">
        <h2 class="title-font text-2xl font-semibold text-gray-900 tracking-wider  mb-3 md:text-5xl">Bolani for Children Who Would Otherwise Go Home <span class="text-yellow-500">Hungry</span></h2>
        <h2 class="title-font text-lg font-light text-gray-900 tracking-wider  mb-3 md:text-2xl">With as little as $CAD0.5, you have the opportunity to provide a street child a lunch.</h2>
        </a>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 sm:px-5">
        <img class="h-full min-w-md rounded-lg " src="{{ asset('storage/images/afghan-child.jpg')}}" alt="photo">
      </div>
    </div>
  </section>
<!--end main-->
<!--impact-->
<a id="impactSection">
<section class="bg-zinc-800 shadow  sm:flex sm:items-center sm:justify-evenly px-4 sm:p-6 xl:p-">
    <div class="flex justify-center items-center p-2 space-x-1 py-2 border-b border-yellow-500 md:border-none">
      <img class="h-16 rounded-2xl md:h-1/5" src="{{ asset('storage/images/distribution.png')}}" alt="photo">
      <div class="p-1">
        <p class="text-yellow-500  text-2xl md:h-1/2 md:text-4xl">4500</p>
        <p class="text-yellow-500 font-light text-lg md:text-xl">Bolanis Distributed</p>
      </div>
    </div>
    <div class="flex justify-center items-center space-x-1 py-2 border-b border-yellow-500 md:border-none">
      <img class="h-16 rounded-2xl md:h-1/5" src="{{ asset('storage/images/kinder.png')}}" alt="photo">
      <div class="p-1">
        <p class="text-yellow-500  text-2xl md:h-1/2 md:text-4xl">1500</p>
        <p class="text-yellow-500 font-light text-lg md:text-xl">Children Benefited</p>
      </div>
    </div>
    <div class="flex justify-center items-center space-x-1 py-2 border-b border-yellow-500 md:border-none">
      <img class="h-16 rounded-2xl md:h-1/5" src="{{ asset('storage/images/goal.png')}}" alt="photo">
      <div class="p-1">
        <p class="text-yellow-500  text-2xl md:h-1/2 md:text-4xl">1500</p>
        <p class="text-yellow-500 font-light text-lg md:text-xl">Meals Served</p>
      </div>
    </div>
</section>
<!--endImpact-->
<!-- Fund-->
<a id="fundSection">
<section class="text-gray-600 ">
  <div class="container px-5 py-24 w-5/6 mx-auto">
     <div class="my-3" >
      <h1 class="text-xl md:text-3xl font-semibold text-gray-900">Browse Humanitarian Project</h1>
     </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/720x400" alt="blog">
            <div class="p-6">
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Title</h1>
              <p class="leading-relaxed mb-3">Description</p>
              <div class="flex items-center flex-wrap ">
                <a class="text-yellow-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/720x400" alt="blog">
            <div class="p-6">
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Title</h1>
              <p class="leading-relaxed mb-3">Description</p>
              <div class="flex items-center flex-wrap ">
                <a class="text-yellow-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/720x400" alt="blog">
            <div class="p-6">
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Title</h1>
              <p class="leading-relaxed mb-3">Description</p>
              <div class="flex items-center flex-wrap ">
                <a class="text-yellow-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- end Fund -->
<section class="bg-yellow-50 h-6">
</section>
<!----about----->
<a id="aboutSection">
<section class="text-gray-900-900 body-font">
  <div class="container w-5/6 mx-auto flex px-6 py-10 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 ">
    <div class="text-left ">
      <h1 class="title-font text-xl md:text-3xl mb-4 font-semibold text-gray-900 underline underline-offset-8 items-center decoration-yellow-400 decoration-4  py-5 px-5">About</h1>
    </div>
      <p class="mb-12 leading-relaxed px-5 text-justify text-lg font-light text-gray-900 md:text-2xl"> 
          Street children in Kabul are going home hungry. Their sources of revenue are draining and they have to work harder than before in tough cold days of winter to earn money to feed their family and themselves.
          We are planning on donating bolani's to the street kids of Dashte-Barchi of Kabul and we identified the street kids in the area and along their families. Five of our volunteers are living in the area, and we were able to do this assessment first hand.
          As each bolani is 10 Afghani a piece, three bolani becomes 30 Afghani and in a day, we will need 1500 Afghani for 50 children. The montly cost of this becomes 45000 Afghani which becomes $CAD610, which is our fundraising goal.
      </p>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w1/2 w-5/6 ">
      <img class="object-cover object-center rounded-lg" alt="image" src="{{ asset('storage/images/Bolani.jpg')}}">
    </div>
  </div>
</section>
<!--endabout-->
<section class="bg-yellow-50 h-6"></section>
<!--Donate-->
<a id="donateSection">
<section class="text-gray-900 body-font bg-cover bg-center" style="background-image: url({{ asset('storage/images/Donate-background.png') }});">
  <div class="container  py-28 w-4/5 mx-auto flex flex-col md:flex-row">
    <div class="">
      <h1 class="title-font font-semibold text-xl md:text-3xl text-white underline underline-offset-8 decoration-yellow-400 decoration-4">Donate</h1>
      <p class="leading-relaxed mt-7 mr-10 font-light text-lg text-white text-justify md:text-2xl">
        With as little as $CAD0.5, you have the opportunity to provide a street child a lunch. In case we exceeded our fundraising goal,
        we are aiming to provide food packages for the identifiedbr street children's families, so they pass through the winter together as a family.
      </p>
    </div>
    <div class=" bg-yellow-50 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <div class="relative mb-4">
        <label for="number" class="leading-7 text-gray-900">How many Bolani do you want to Donate?</label>
        <input type="text" id="number" name="number" placeholder="#Enter the number of Bolani here" class="w-full bg-yellow-50 rounded border border-black-300 focus:border-yellow-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div> 
      <p class="text-center pb-3">__________________<small>OR</small>____________________</p>
      <div class="relative mb-4">
        <label for="amount" class="leading-7 text-gray-900">How much do you want to Donate?</label>
        <input type="email" id="amount" name="amount" placeholder="$0" class="w-full bg-yellow-50 rounded border border-black-300 focus:border-yellow-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <a href="payment" class="text-gray-900 text-center bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-400 rounded text-lg">Donate <i class="fa fa-gift"></i></a>
    </div>
  </div>
</section>
<!--endDonate-->
<section class="bg-yellow-50 h-6"></section>
<!--FQA-->
<a id="fqaSection">
<section class="text-gray-900 body-font px-10 md:px-24 py-10">
  <div>
    <h1 class="title-font stext-xl text-xl md:text-3xl pr-12 mb-4 font-semibold text-gray-900 underline underline-offset-8 decoration-yellow-400 decoration-4  py-6 px-6">FQA</h1>
  </div>
  <div class="container px-5 py-2 mx-auto flex flex-wrap text-justify">
    <div class="flex relative pt-10 pb-20 sm:items-center md:w-2/3 mx-auto">
      <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
        <div class="h-full w-1 bg-orange-200 pointer-events-none"></div>
      </div>
      <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-yellow-500 text-white relative z-10 title-font font-medium text-sm">1</div>
      <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
        <div class="flex-shrink-0 w-20 h-20 bg-orange-100 text-orange-500 rounded-full inline-flex items-center justify-center">
          <svg fill="none" stroke="orange" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
          </svg>
        </div>
        <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
          <h2 class="font-bold title-font text-gray-900 mb-1 text-lg md:text-2xl">How are bolanis distributed?</h2>
          <p class="leading-relaxed font-light text-lg md:text-2xl">We will transfer the donated funds to our team in Kabul. Our volunteer team will inform the identified kids about locations they can get bolani during their lunch time.</p>
        </div>
      </div>
    </div>
    <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
      <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
        <div class="h-full w-1 bg-orange-200 pointer-events-none"></div>
      </div>
      <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-yellow-500 text-white relative z-10 title-font font-medium text-sm">2</div>
      <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
        <div class="flex-shrink-0 w-20 h-20 bg-orange-100 text-yellow-500 rounded-full inline-flex items-center justify-center">
          <svg fill="none" stroke="orange" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
          </svg>
        </div>
        <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
          <h2 class="font-bold title-font text-gray-900 mb-1 text-lg md:text-2xl">What is bolani?</h2>
          <p class="leading-relaxed font-light text-lg md:text-2xl">Bolani (Dari: بولانی), also called Periki (Pashto: پارکی) is a stuffed flat-bread from Afghanistan, fried with a filling. It has a thin crust and can be stuffed with a variety of ingredients, such as potatoes or leeks but also graced pumpkin, chives, red lentils or with minced meat. This is a perfect piece of food for a street kid to have at lunch.</p>
        </div>
      </div>
    </div>
    <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
      <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
        <div class="h-full w-1 bg-orange-200 pointer-events-none"></div>
      </div>
      <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-yellow-500 text-white relative z-10 title-font font-medium text-sm">3</div>
      <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
        <div class="flex-shrink-0 w-20 h-20 bg-orange-100 text-yellow-500 rounded-full inline-flex items-center justify-center">
          <svg fill="none" stroke="orange" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
          </svg>
        </div>
        <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
          <h2 class="font-bold title-font text-gray-900 mb-1 text-lg md:text-2xl">What happens if the funds exceeded?</h2>
          <p class="leading-relaxed font-light text-lg md:text-2xl">In case funds exceeded, we will cover more areas in Kabul. For example: karte 4, shahre-naw, Deh-Afghanan and others.</p>
        </div>
      </div>
    </div>
    <div class="flex relative pb-10 sm:items-center md:w-2/3 mx-auto">
      <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
        <div class="h-full w-1 bg-orange-200 pointer-events-none"></div>
      </div>
      <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-yellow-500 text-white relative z-10 title-font font-medium text-sm">4</div>
      <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
        <div class="flex-shrink-0 w-20 h-20 bg-orange-100 text-yellow-500 rounded-full inline-flex items-center justify-center">
          <svg fill="none" stroke="orange" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
          </svg>
        </div>
        <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
          <h2 class="font-bold title-font text-gray-900 mb-1 text-lg md:text-2xl">What are your plans in the future?</h2>
          <p class="leading-relaxed font-light text-lg md:text-2xl">As part of our roadmap, we want to launch the mobile app version of Bolani, to make it easier to collect donations. Additionally, we have plans to consider Bolani as a currency, so that we are able to explore a new world of possibilities with it.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--endFQA-->
<section class="bg-yellow-50 h-6"></section>
<!--BolaniContact-->
<!-------contact us------>
<a id="contactSection">
<section class="text-gray-900 body-font relative bg-black">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full yellow-50">
      <h1 class="sm:text-3xl text-2xl  font-semibold title-font mb-4 text-white underline underline-offset-8 decoration-yellow-400 decoration-4">Contact</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed font-light text-lg md:text-2xl text-white">Want to send us message? Write it here below</p>
    </div>
        <div class="lg:w-1/3 md:w-1/2 mx-auto bg-black flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
          @if(Session::has('message_sent'))
              <div class="p-4 text-sm text-gray-700 my-5 bg-gray-100 rounded-lg dark:bg-gray-800 dark:text-gray-300" role="alert">
                <span class="font-medium">{{ Session::get('message_sent') }}</span>
              </div>
          @endif
          <form method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data">
              @csrf
          <div class="relative mb-4">
            <input type="text" id="name" name="name" placeholder="Full Name" class="w-full bg-yellow-50 rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-4">
            <input type="email" id="email" name="email" placeholder="Email Address" class="w-full bg-yellow-50 rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-4">
            <textarea id="msg" name="msg" placeholder="Your Message" class="w-full bg-yellow-50 rounded border border-gray-300 focus:border-yellow-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
          <button class="text-white w-full bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-400 rounded text-lg">Send</button>
        </div>
      </form>
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900 mt-4">
          <img class="h-10" src="{{ asset('storage/images/logo.png')}}" alt="photo">
          <span class="ml-3 text-xl text-white">BOLANI.ORG</span>
        </a>
        <div class="w-full mt-4 border-t border-gray-200 text-center">
          <!----footer-->
          <div class="bg-black">
            <div class="container px-5 py-2 mx-auto flex items-center sm:flex-row flex-col">
              <p class="text-sm text-white sm:ml-6 sm:mt-0 mt-4">©Bolani.org . 2022. All rights reserved</p>
              <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a href="https://www.facebook.com/CodeWeekend/" class="ml-3 text-white cursor-pointer">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a href="https://twitter.com/codeweekend" class="ml-3 text-white cursor-pointer">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
                </a>
                <a href="https://www.instagram.com/codeweekend/" class="ml-3 text-white cursor-pointer">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                  </svg>
                </a>
              </span>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--endBolaniContact-->
@endsection

  
