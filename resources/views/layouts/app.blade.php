<html lang="en">
<head>
  <title>Bolani.org</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="/css/app.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
</head>
<body class="m-0 p-0">  
<nav class="px-10 bg-gray-100 p-8  text-white border-gray-200 bg-cover" style="background-image: url({{ asset('storage/images/Navbar.png')}})">
  <div class="container flex flex-wrap items-center justify-between mx-auto ">
    <a href="#" class="flex items-center">
      <img class="h-10" src="{{ asset('storage/images/logo.png')}}" alt="photo">
        <span class="self-center p-2 text-xl font-semibold whitespace-nowrap text-white">BOLANI.ORG</span>
    </a>
    <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 ml-3 text-sm  text-white rounded-lg md:hidden  hover:outline-none hover:ring-1 hover:ring-gray-200" aria-controls="navbar-dropdown" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
      <ul class="flex flex-col p-4 mt-4 border border-gray-300  rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0">
        <li>
          <a href="../../#impactSection" class="text-xl md:text-2xl  font-light  block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:text-white md:p-0 hover:underline underline-offset-8 decoration-yellow-400 decoration-2" aria-current="page">Impact</a>
        </li>
        <li>
          <a href="../../#aboutSection" class="text-xl md:text-2xl  font-light  block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:text-white md:p-0 hover:underline underline-offset-8 decoration-yellow-400 decoration-2" aria-current="page">About</a>
        </li>
        <li>
          <a href="../../#donateSection" class="text-xl md:text-2xl  font-light  block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:text-white md:p-0 hover:underline underline-offset-8 decoration-yellow-400 decoration-2" aria-current="page">Donate</a>
        </li>
        <li>
          <a href="../../#fqaSection" class="text-xl md:text-2xl  font-light block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:text-white md:p-0 hover:underline underline-offset-8 decoration-yellow-400 decoration-2" aria-current="page">FAQ</a>
        </li>
        <li>
          <a href="../../#contactSection" class="text-xl md:text-2xl  font-light block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:text-white md:p-0 hover:underline underline-offset-8 decoration-yellow-400 decoration-2" aria-current="page">Contact</a>
        </li>
        <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class=" font-light text-xl md:text-2xl  flex items-center justify-between w-full py-2 pl-3 pr-4  text-white rounded hover:text-black md:hover:text-white hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 md:w-auto ">User<svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="{{ route('login') }}" class="block px-4 py-2 hover:bg-gray-100">Sign In</a>  
                  </li>
                  <li>
                    <a href="/funds" class="block px-4 py-2  hover:bg-gray-100">Your Funds</a>
                  </li>
                  <li>
                    <a href="/updates" class="block px-4 py-2 hover:bg-gray-100">Update news</a>
                  </li>
                </ul>
                <div class="py-1">
                  <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                </div>
            </div>
        </li>
        <li>
          <a href="/funds/create" class="p-1 rounded-full text-xl md:text-2xl font-light block py-2 pl-3 pr-4 text-white md:bg-transparent md:text-white md:p-0 hover:underline underline-offset-8 decoration-yellow-400  decoration-2" aria-current="page">Start a fund</a>
        </li>
      </ul>
    </div>
  </div>
</nav> 
<!--navbar--> 
@yield('content')
<script src="../path/to/flowbite/dist/flowbite.min.js"></script> 
</body>
</html>   
