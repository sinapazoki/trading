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

        @section('header-scripts')

        @show
        <title>  @yield('title')</title>
   </head>


        <body class="main font-iranyekan bg-[#f3f4f6]">

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
