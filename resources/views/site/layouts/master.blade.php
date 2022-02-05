<!DOCTYPE html>
<html lang="fa" dir="rtl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="_token" content="{{ csrf_token() }}">
        <script defer src="https://unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        @section('header-scripts')

        @show
        <title>  @yield('title')</title>
   </head>


        <body class="main font-iranyekan bg-[#f3f4f6]">
            <nav class="s-social hidden sm:block">
                <ul>
                   <li><a href="#"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
                   <li><a href="#"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
                   <li><a href="#"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
                   <li><a href="#"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a></li>
                   <li><a href="#"><i class="fab fa-github"></i><span>Github</span></a></li>
                   <li><a href="#"><i class="fab fa-youtube"></i><span>Youtube</span></a></li>
                </ul>
             </nav>

             <div class="absolute w-full h-screen block sm:hidden">
                <!-- <section id="bottom-navigation" class="md:hidden block fixed inset-x-0 bottom-0 z-10 bg-white shadow"> // if shown only tablet/mobile-->
                <section id="bottom-navigation" class="block fixed inset-x-0 bottom-0 z-10 bg-white shadow">
                    <div id="tabs" class="flex justify-between">
                        <a href="#" class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">
                            <svg width="25" height="25" viewBox="0 0 42 42" class="inline-block mb-1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path d="M21.0847458,3.38674884 C17.8305085,7.08474576 17.8305085,10.7827427 21.0847458,14.4807396 C24.3389831,18.1787365 24.3389831,22.5701079 21.0847458,27.6548536 L21.0847458,42 L8.06779661,41.3066256 L6,38.5331279 L6,26.2681048 L6,17.2542373 L8.88135593,12.4006163 L21.0847458,2 L21.0847458,3.38674884 Z" fill="currentColor" fill-opacity="0.1"></path>
                                <path d="M11,8 L33,8 L11,8 Z M39,17 L39,36 C39,39.3137085 36.3137085,42 33,42 L11,42 C7.6862915,42 5,39.3137085 5,36 L5,17 L7,17 L7,36 C7,38.209139 8.790861,40 11,40 L33,40 C35.209139,40 37,38.209139 37,36 L37,17 L39,17 Z" fill="currentColor"></path>
                                <path d="M22,27 C25.3137085,27 28,29.6862915 28,33 L28,41 L16,41 L16,33 C16,29.6862915 18.6862915,27 22,27 Z" stroke="currentColor" stroke-width="2" fill="currentColor" fill-opacity="0.1"></path>
                                <rect fill="currentColor" transform="translate(32.000000, 11.313708) scale(-1, 1) rotate(-45.000000) translate(-32.000000, -11.313708) " x="17" y="10.3137085" width="30" height="2" rx="1"></rect>
                                <rect fill="currentColor" transform="translate(12.000000, 11.313708) rotate(-45.000000) translate(-12.000000, -11.313708) " x="-3" y="10.3137085" width="30" height="2" rx="1"></rect>
                            </g>
                            </svg>
                            <span class="tab tab-home block text-xs">Home</span>
                        </a>
                        <a href="#" class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">
                            <svg width="25" height="25" viewBox="0 0 42 42" class="inline-block mb-1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <path d="M14.7118754,20.0876892 L8.03575361,20.0876892 C5.82661462,20.0876892 4.03575361,18.2968282 4.03575361,16.0876892 L4.03575361,12.031922 C4.03575361,8.1480343 6.79157254,4.90780265 10.4544842,4.15995321 C8.87553278,8.5612583 8.1226025,14.3600511 10.9452499,15.5413938 C13.710306,16.6986332 14.5947501,18.3118357 14.7118754,20.0876892 Z M14.2420017,23.8186831 C13.515543,27.1052019 12.7414284,30.2811559 18.0438552,31.7330419 L18.0438552,33.4450645 C18.0438552,35.6542035 16.2529942,37.4450645 14.0438552,37.4450645 L9.90612103,37.4450645 C6.14196811,37.4450645 3.09051926,34.3936157 3.09051926,30.6294627 L3.09051926,27.813861 C3.09051926,25.604722 4.88138026,23.813861 7.09051926,23.813861 L14.0438552,23.813861 C14.1102948,23.813861 14.1763561,23.8154808 14.2420017,23.8186831 Z M20.7553776,32.160536 C23.9336213,32.1190063 23.9061943,29.4103976 33.8698747,31.1666916 C34.7935223,31.3295026 35.9925894,31.0627305 37.3154077,30.4407183 C37.09778,34.8980343 33.4149547,38.4450645 28.9036761,38.4450645 C24.9909035,38.4450645 21.701346,35.7767637 20.7553776,32.160536 Z" fill="currentColor" opacity="0.1"></path>
                            <g transform="translate(2.000000, 3.000000)">
                                <path d="M8.5,1 C4.35786438,1 1,4.35786438 1,8.5 L1,13 C1,14.6568542 2.34314575,16 4,16 L13,16 C14.6568542,16 16,14.6568542 16,13 L16,4 C16,2.34314575 14.6568542,1 13,1 L8.5,1 Z" stroke="currentColor" stroke-width="2"></path>
                                <path d="M4,20 C2.34314575,20 1,21.3431458 1,23 L1,27.5 C1,31.6421356 4.35786438,35 8.5,35 L13,35 C14.6568542,35 16,33.6568542 16,32 L16,23 C16,21.3431458 14.6568542,20 13,20 L4,20 Z" stroke="currentColor" stroke-width="2"></path>
                                <path d="M23,1 C21.3431458,1 20,2.34314575 20,4 L20,13 C20,14.6568542 21.3431458,16 23,16 L32,16 C33.6568542,16 35,14.6568542 35,13 L35,8.5 C35,4.35786438 31.6421356,1 27.5,1 L23,1 Z" stroke="currentColor" stroke-width="2"></path>
                                <path d="M34.5825451,33.4769886 L38.3146092,33.4322291 C38.8602707,33.4256848 39.3079219,33.8627257 39.3144662,34.4083873 C39.3145136,34.4123369 39.3145372,34.4162868 39.3145372,34.4202367 L39.3145372,34.432158 C39.3145372,34.9797651 38.8740974,35.425519 38.3265296,35.4320861 L34.5944655,35.4768456 C34.048804,35.4833899 33.6011528,35.046349 33.5946085,34.5006874 C33.5945611,34.4967378 33.5945375,34.4927879 33.5945375,34.488838 L33.5945375,34.4769167 C33.5945375,33.9293096 34.0349773,33.4835557 34.5825451,33.4769886 Z" fill="currentColor" transform="translate(36.454537, 34.454537) rotate(-315.000000) translate(-36.454537, -34.454537) "></path>
                                <circle stroke="currentColor" stroke-width="2" cx="27.5" cy="27.5" r="7.5"></circle>
                            </g>
                            </g>
                            </svg>
                            <span class="tab tab-kategori block text-xs">Category</span>
                        </a>
                        <a href="#" class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">
                            <svg width="25" height="25" viewBox="0 0 42 42" class="inline-block mb-1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path d="M20.5890101,0.254646884 C12.8696785,5.50211755 8.0025785,14.258415 14.1941217,18.8708225 C23.16683,25.5550669 13.3362326,40.2698884 33.1021758,38.4149164 C29.6814884,40.8311956 25.5065164,42.2507054 21,42.2507054 C9.40202025,42.2507054 0,32.8486852 0,21.2507054 C0,9.79003409 9.18071714,0.473634138 20.5890101,0.254646884 Z" fill="currentColor" opacity="0.1"></path>
                                <path d="M25.9500282,20.3643496 L22.4308312,38.2677802 C22.3775703,38.5387376 22.1147395,38.7152155 21.8437821,38.6619546 C21.6570955,38.6252584 21.507413,38.4857901 21.4576354,38.3021581 L16.5951895,20.3643496 L20.099732,4.44663907 C20.1385204,4.27046145 20.2692032,4.12883813 20.4417012,4.07604096 C20.7057521,3.99522179 20.9853245,4.14376046 21.0661436,4.40781135 L25.9500282,20.3643496 Z M21.3022963,22.2852638 C22.4068658,22.2852638 23.3022963,21.3898333 23.3022963,20.2852638 C23.3022963,19.1806943 22.4068658,18.2852638 21.3022963,18.2852638 C20.1977268,18.2852638 19.3022963,19.1806943 19.3022963,20.2852638 C19.3022963,21.3898333 20.1977268,22.2852638 21.3022963,22.2852638 Z" fill="currentColor" transform="translate(21.272609, 20.629524) rotate(-315.000000) translate(-21.272609, -20.629524) "></path>
                                <circle stroke="currentColor" stroke-width="2" cx="21" cy="21" r="20"></circle>
                                </g>
                                </svg>
                            <span class="tab tab-explore block text-xs">Explore</span>
                        </a>
                        <a href="#" class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">
                            <svg width="25" height="25" viewBox="0 0 42 42" class="inline-block mb-1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <path d="M14.7118754,20.0876892 L8.03575361,20.0876892 C5.82661462,20.0876892 4.03575361,18.2968282 4.03575361,16.0876892 L4.03575361,12.031922 C4.03575361,8.1480343 6.79157254,4.90780265 10.4544842,4.15995321 C8.87553278,8.5612583 8.1226025,14.3600511 10.9452499,15.5413938 C13.710306,16.6986332 14.5947501,18.3118357 14.7118754,20.0876892 Z M14.2420017,23.8186831 C13.515543,27.1052019 12.7414284,30.2811559 18.0438552,31.7330419 L18.0438552,33.4450645 C18.0438552,35.6542035 16.2529942,37.4450645 14.0438552,37.4450645 L9.90612103,37.4450645 C6.14196811,37.4450645 3.09051926,34.3936157 3.09051926,30.6294627 L3.09051926,27.813861 C3.09051926,25.604722 4.88138026,23.813861 7.09051926,23.813861 L14.0438552,23.813861 C14.1102948,23.813861 14.1763561,23.8154808 14.2420017,23.8186831 Z M20.7553776,32.160536 C23.9336213,32.1190063 23.9061943,29.4103976 33.8698747,31.1666916 C34.7935223,31.3295026 35.9925894,31.0627305 37.3154077,30.4407183 C37.09778,34.8980343 33.4149547,38.4450645 28.9036761,38.4450645 C24.9909035,38.4450645 21.701346,35.7767637 20.7553776,32.160536 Z" fill="currentColor" opacity="0.1"></path>
                            <g transform="translate(2.000000, 3.000000)">
                                <path d="M8.5,1 C4.35786438,1 1,4.35786438 1,8.5 L1,13 C1,14.6568542 2.34314575,16 4,16 L13,16 C14.6568542,16 16,14.6568542 16,13 L16,4 C16,2.34314575 14.6568542,1 13,1 L8.5,1 Z" stroke="currentColor" stroke-width="2"></path>
                                <path d="M4,20 C2.34314575,20 1,21.3431458 1,23 L1,27.5 C1,31.6421356 4.35786438,35 8.5,35 L13,35 C14.6568542,35 16,33.6568542 16,32 L16,23 C16,21.3431458 14.6568542,20 13,20 L4,20 Z" stroke="currentColor" stroke-width="2"></path>
                                <path d="M23,1 C21.3431458,1 20,2.34314575 20,4 L20,13 C20,14.6568542 21.3431458,16 23,16 L32,16 C33.6568542,16 35,14.6568542 35,13 L35,8.5 C35,4.35786438 31.6421356,1 27.5,1 L23,1 Z" stroke="currentColor" stroke-width="2"></path>
                                <path d="M34.5825451,33.4769886 L38.3146092,33.4322291 C38.8602707,33.4256848 39.3079219,33.8627257 39.3144662,34.4083873 C39.3145136,34.4123369 39.3145372,34.4162868 39.3145372,34.4202367 L39.3145372,34.432158 C39.3145372,34.9797651 38.8740974,35.425519 38.3265296,35.4320861 L34.5944655,35.4768456 C34.048804,35.4833899 33.6011528,35.046349 33.5946085,34.5006874 C33.5945611,34.4967378 33.5945375,34.4927879 33.5945375,34.488838 L33.5945375,34.4769167 C33.5945375,33.9293096 34.0349773,33.4835557 34.5825451,33.4769886 Z" fill="currentColor" transform="translate(36.454537, 34.454537) rotate(-315.000000) translate(-36.454537, -34.454537) "></path>
                                <circle stroke="currentColor" stroke-width="2" cx="27.5" cy="27.5" r="7.5"></circle>
                            </g>
                            </g>
                            </svg>
                            <span class="tab tab-whishlist block text-xs">Whishlist</span>
                        </a>
                        <a href=# class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1">
                            <svg width="25" height="25" viewBox="0 0 42 42" class="inline-block mb-1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <path d="M14.7118754,20.0876892 L8.03575361,20.0876892 C5.82661462,20.0876892 4.03575361,18.2968282 4.03575361,16.0876892 L4.03575361,12.031922 C4.03575361,8.1480343 6.79157254,4.90780265 10.4544842,4.15995321 C8.87553278,8.5612583 8.1226025,14.3600511 10.9452499,15.5413938 C13.710306,16.6986332 14.5947501,18.3118357 14.7118754,20.0876892 Z M14.2420017,23.8186831 C13.515543,27.1052019 12.7414284,30.2811559 18.0438552,31.7330419 L18.0438552,33.4450645 C18.0438552,35.6542035 16.2529942,37.4450645 14.0438552,37.4450645 L9.90612103,37.4450645 C6.14196811,37.4450645 3.09051926,34.3936157 3.09051926,30.6294627 L3.09051926,27.813861 C3.09051926,25.604722 4.88138026,23.813861 7.09051926,23.813861 L14.0438552,23.813861 C14.1102948,23.813861 14.1763561,23.8154808 14.2420017,23.8186831 Z M20.7553776,32.160536 C23.9336213,32.1190063 23.9061943,29.4103976 33.8698747,31.1666916 C34.7935223,31.3295026 35.9925894,31.0627305 37.3154077,30.4407183 C37.09778,34.8980343 33.4149547,38.4450645 28.9036761,38.4450645 C24.9909035,38.4450645 21.701346,35.7767637 20.7553776,32.160536 Z" fill="currentColor" opacity="0.1"></path>
                            <g transform="translate(2.000000, 3.000000)">
                                <path d="M8.5,1 C4.35786438,1 1,4.35786438 1,8.5 L1,13 C1,14.6568542 2.34314575,16 4,16 L13,16 C14.6568542,16 16,14.6568542 16,13 L16,4 C16,2.34314575 14.6568542,1 13,1 L8.5,1 Z" stroke="currentColor" stroke-width="2"></path>
                                <path d="M4,20 C2.34314575,20 1,21.3431458 1,23 L1,27.5 C1,31.6421356 4.35786438,35 8.5,35 L13,35 C14.6568542,35 16,33.6568542 16,32 L16,23 C16,21.3431458 14.6568542,20 13,20 L4,20 Z" stroke="currentColor" stroke-width="2"></path>
                                <path d="M23,1 C21.3431458,1 20,2.34314575 20,4 L20,13 C20,14.6568542 21.3431458,16 23,16 L32,16 C33.6568542,16 35,14.6568542 35,13 L35,8.5 C35,4.35786438 31.6421356,1 27.5,1 L23,1 Z" stroke="currentColor" stroke-width="2"></path>
                                <path d="M34.5825451,33.4769886 L38.3146092,33.4322291 C38.8602707,33.4256848 39.3079219,33.8627257 39.3144662,34.4083873 C39.3145136,34.4123369 39.3145372,34.4162868 39.3145372,34.4202367 L39.3145372,34.432158 C39.3145372,34.9797651 38.8740974,35.425519 38.3265296,35.4320861 L34.5944655,35.4768456 C34.048804,35.4833899 33.6011528,35.046349 33.5946085,34.5006874 C33.5945611,34.4967378 33.5945375,34.4927879 33.5945375,34.488838 L33.5945375,34.4769167 C33.5945375,33.9293096 34.0349773,33.4835557 34.5825451,33.4769886 Z" fill="currentColor" transform="translate(36.454537, 34.454537) rotate(-315.000000) translate(-36.454537, -34.454537) "></path>
                                <circle stroke="currentColor" stroke-width="2" cx="27.5" cy="27.5" r="7.5"></circle>
                            </g>
                            </g>
                            </svg>
                            <span class="tab tab-account block text-xs">Account</span>
                        </a>
                    </div>
                </section>
            </div>
<!-- This example requires Tailwind CSS v2.0+ -->
<nav id="introduce" x-data="{ open: false }" class="bg-white fixed w-full z-10 top-0 shadow-md">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gradient-to-tr from-[#00c7ba] to-[#00abc7] p-[7px]" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!--
              Icon when menu is closed.

              Heroicon name: outline/menu

              Menu open: "hidden", Menu closed: "block"
            -->
            <svg @click="open = ! open" :class="[open ? 'hidden' : 'block']"
            class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!--
              Icon when menu is open.

              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
            <svg @click="open = ! open" x-cloak class=" h-6 w-6" :class="[open ? 'block' : 'hidden']" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0 flex items-center mylogo">
              <a href="/">
                <img class="block lg:hidden h-[1.5rem] w-auto" src="{{asset('/storage/site-front/logoo.png')}}" alt="Workflow">
                <img class="hidden lg:block h-[2.5rem] w-auto" src="{{asset('/storage/site-front/logoo.png')}}" alt="Workflow">
              </a>
          </div>
          <div class="hidden sm:block m-auto">
            <div x-data="{ listmenu2: $persist(false) , listmenu3: $persist(false) , listmenu4: $persist(false) , listmenu5: $persist(false) , listmenu6: $persist(false) , listmenu: $persist(true)}" class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a @click="listmenu = true ; listmenu2 = false ; listmenu3 = false ; listmenu4 = false ; listmenu5 = false ; listmenu6 = false" :class="listmenu ? 'text-[#25bdb4]' : 'text-[#7e7e7e]' " href="/" class=" border-nav px-3 py-2 text-sm font-medium" aria-current="page">صفحه اصلی</a>



              <a @click="listmenu = false ; listmenu2 = true ; listmenu3 = false ; listmenu4 = false ; listmenu5 = false ; listmenu6 = false" :class="listmenu2 ? 'text-[#25bdb4]' : 'text-[#7e7e7e]' " href="/category/traders" class=" border-nav px-3 py-2 text-sm font-medium">مصاحبه با تریدرها</a>

              <div class="relative" x-data="{ pc: false }">
                <button @mouseover="pc = true" :class="listmenu3 ? 'text-[#25bdb4]' : 'text-[#7e7e7e]' " class="border-nav px-3 py-2 text-sm font-medium">
                  <span>تی دبلیو پلاس</span>
                  <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': pc, 'rotate-0': !pc}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1 rotate-0"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div  @mouseleave="pc = false"  x-show="pc" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48" style="display: none;">
                  <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                    <a @click="listmenu = false ; listmenu2 = false ; listmenu3 = true ; listmenu4 = true ; listmenu5 = false ; listmenu6 = false" :class="listmenu4 ? 'text-[#25bdb4]' : 'text-[#7e7e7e]' " class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/category/journal">ژورنال معاملاتی</a>
                    <a @click="listmenu = false ; listmenu2 = false ; listmenu3 = true ; listmenu4 = false ; listmenu5 = true ; listmenu6 = false" :class="listmenu5 ? 'text-[#25bdb4]' : 'text-[#7e7e7e]' " class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/category/investing-plus
                    ">اینوستینگ پلاس</a>
                    <a @click="listmenu = false ; listmenu2 = false ; listmenu3 = true ; listmenu4 = false ; listmenu5 = false ; listmenu6 = true" :class="listmenu6 ? 'text-[#25bdb4]' : 'text-[#7e7e7e]' " class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/category/personal-development
                    ">توسعه فردی</a>
                  </div>
                </div>
              </div>

              <a  href="#contact" class="text-[#7e7e7e] border-nav px-3 py-2 text-sm font-medium">ارتباط با ما</a>
            </div>
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

          <!-- Profile dropdown -->
          <div x-data="{ search: false }" class="ml-3 relative">
            <button @click="search = !search" class="bg-gradient-to-tr from-[#00c7ba] to-[#00abc7] p-[7px] rounded-full text-white">
                <span><i class="w-5 h-5 text-white" data-feather="search"></i></span>
            </button>
            <div @click.away="search = false" x-show="search" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="fixed sm:absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48" style="display: none;">
                <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                    <div class="form-group">
                        <input type="text" class="w-full text-black rounded-md" id="search" placeholder="جستجو ...." name="search"/>
                        <div class="text-black search-bar">
                        </div>
                        </div>

                </div>
              </div>
          </div>



            <div class="flex items-center">
                <a class="bg-gradient-to-tr from-[#00c7ba] to-[#00abc7] p-[7px] rounded-full text-white">
                    <span class="sr-only">search</span>
                    <!-- Heroicon name: outline/bell -->
                    <span><i class="w-5 h-5 text-white" data-feather="user"></i></span>
                </a>


                @guest
                <a href="/login" class="hidden sm:block text-sm mr-2 hover:text-[#00c7ba]">ورود / ثبت نام</a>
                @endguest
                @auth
                <div class="mr-2 hidden sm:block">
                    <p class="text-gray-500 text-sm -mb-[2px]">سلام؛ {{auth()->user()->name}}</p>
                    <a class="flex items-center text-[#25bdb4] text-[10px]" href="{{ route('logout') }}"  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="text-[#25bdb4]"> <i data-feather="log-out" class="w-3 h-3 mr-2"></i>خروج از حساب</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                   </form>
                </div>
                @endauth
            </div>


        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="open" x-cloak class="sm:hidden" id="mobile-menu">
      <div class="px-5 pt-2 pb-3 space-y-1">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/" class="bg-gradient-to-tr from-[#00c7ba] to-[#00abc7] p-[7px] text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">صفحه اصلی</a>

        <a href="/category/traders" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">مصاحبه با تریدرها</a>

        <div @click.away="pc = false" class="relative" x-data="{ pc: false }">
            <button @click="pc = !pc" class="text-[#7e7e7e] border-nav px-3 py-2 text-sm font-medium">
              <span>تی دبلیو پلاس</span>
              <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': pc, 'rotate-0': !pc}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1 rotate-0"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div x-show="pc" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="inherit right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48" style="display: none;">
              <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">ژورنال معاملاتی</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">اینوستینگ پلاس</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">توسعه فردی</a>
              </div>
            </div>
          </div>

        <a href="#contact" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">ارتباط با ما</a>
      </div>
    </div>
  </nav>

              <main>

                    @section('content')

                    @show

              </main>
              <footer  id="contact" class="text-center bg-[url('/storage/site-front/footer.jpg')] text-white">
                <div class="p-14">
                <div class="container px-6 pt-6 m-auto">
                    <div class="mb-4">
                        <p class="text-5xl mb-4 pb-2 border-lux">
                          TRADING WORLLD
                          </p>
                        <p class="text-3xl">
                          با ما در ارتباط باشید
                        </p>
                    </div>
                  </div>

                  <div class="flex justify-center mb-2 space-x-6 flex-row-reverse">


                    <a href="#!" type="button" class="flex items-center justify-center rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                      <?xml version="1.0" encoding="UTF-8" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg  viewBox="0 0 24 24" fill="white" width="15" height="15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;"><path id="telegram-1" d="M18.384,22.779c0.322,0.228 0.737,0.285 1.107,0.145c0.37,-0.141 0.642,-0.457 0.724,-0.84c0.869,-4.084 2.977,-14.421 3.768,-18.136c0.06,-0.28 -0.04,-0.571 -0.26,-0.758c-0.22,-0.187 -0.525,-0.241 -0.797,-0.14c-4.193,1.552 -17.106,6.397 -22.384,8.35c-0.335,0.124 -0.553,0.446 -0.542,0.799c0.012,0.354 0.25,0.661 0.593,0.764c2.367,0.708 5.474,1.693 5.474,1.693c0,0 1.452,4.385 2.209,6.615c0.095,0.28 0.314,0.5 0.603,0.576c0.288,0.075 0.596,-0.004 0.811,-0.207c1.216,-1.148 3.096,-2.923 3.096,-2.923c0,0 3.572,2.619 5.598,4.062Zm-11.01,-8.677l1.679,5.538l0.373,-3.507c0,0 6.487,-5.851 10.185,-9.186c0.108,-0.098 0.123,-0.262 0.033,-0.377c-0.089,-0.115 -0.253,-0.142 -0.376,-0.064c-4.286,2.737 -11.894,7.596 -11.894,7.596Z"/></svg>
                    </a>

                    <a href="#!" type="button" class="flex items-center justify-center rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                      <svg fill="white" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>

                    <a href="#!" type="button" class="flex items-center justify-center rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                      <svg fill="white" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path d="M0 3v18h24v-18h-24zm21.518 2l-9.518 7.713-9.518-7.713h19.036zm-19.518 14v-11.817l10 8.104 10-8.104v11.817h-20z"/></svg>                    </a>
                  </div>
                </div>
                  <div class="flex bg-[#2c2c2c8e]  justify-around p-2 text-[9px] md:text-sm">
                    <div class="text-center">
                        کلیه حقوق وب سایت متعلق به
                         <span class="text-whitehite" href="https://tailwind-elements.com/">Trading World</span>
                       </div>
                    <div class="text-center">
                        © طراحی و برنامه نویسی
                        <a class="text-whitehite" href="https://ariatech.online/">شرکت آریاتک</a>
                      </div>

                  </div>

              </footer>

          <script>
            feather.replace()
          </script>
          <script type="text/javascript">
            $('#search').on('keyup',function(){
            $value=$(this).val();
            $.ajax({
            type : 'get',
            url : '{{URL::to('search')}}',
            data:{'search':$value},
            success:function(data){
            $('.search-bar').html(data);
            }
            });
            })
            </script>
            <script type="text/javascript">
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
            </script>
            @section('footer-scripts')

            @show

        </body>


</html>
