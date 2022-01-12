<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script defer src="https://unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://unpkg.com/feather-icons"></script>
        @section('header-scripts')

        @show
        <title>  @yield('title')</title>
   </head>


        <body class="main font-iranyekan">

<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-white fixed w-full z-10 top-0 shadow-md">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!--
              Icon when menu is closed.

              Heroicon name: outline/menu

              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!--
              Icon when menu is open.

              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0 flex items-center">
            <img class="block lg:hidden h-12 w-auto" src="{{asset('/storage/photos/logo.png')}}" alt="Workflow">
            <img class="hidden lg:block h-12 w-auto" src="{{asset('/storage/photos/logo.png')}}" alt="Workflow">
          </div>
          <div class="hidden sm:block m-auto">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="#" class="text-[#7e7e7e] border-nav px-3 py-2 text-sm font-medium" aria-current="page">صفحه اصلی</a>

              <a href="#" class="text-[#7e7e7e] border-nav px-3 py-2 text-sm font-medium">مصاحبه با تریدرها</a>

              <a href="#" class="text-[#7e7e7e] border-nav px-3 py-2 text-sm font-medium">تی دبلیو پلاس</a>

              <a href="#" class="text-[#7e7e7e] border-nav px-3 py-2 text-sm font-medium">ارتباط با ما</a>
            </div>
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

          <!-- Profile dropdown -->
          <div class="ml-3 relative">
            <div  class="bg-gradient-to-tr from-[#00c7ba] to-[#00abc7] p-[7px] rounded-full">
            <a href="">
                <span><i class="w-5 h-5 text-white" data-feather="search"></i></span>
            </a>
            </div>
          </div>

            <div class="flex items-center">
                <a class="bg-gradient-to-tr from-[#00c7ba] to-[#00abc7] p-[7px] rounded-full text-white">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <span><i class="w-5 h-5 text-white" data-feather="user"></i></span>
                </a>
                <span class="text-sm mr-2">ورود / ثبت نام</span>
            </div>


        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>

        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
      </div>
    </div>
  </nav>

              <main>

                    @section('content')

                    @show

              </main>
              <footer class="relative bg-[#ededed] pt-8 pb-6">
                <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px;">
                  <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-[#ededed] fill-current" points="2560 0 2560 100 0 100"></polygon>
                  </svg>
                </div>
                <div class="container mx-auto px-4">
                  <div class="flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4">
                      <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
                      <h5 class="text-lg mt-0 mb-2 text-gray-700">
                        Find us on any of these platforms, we respond 1-2 business days.
                      </h5>
                      <div class="mt-6">
                        <button class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3" type="button">
                          <i class="flex fab fa-twitter"></i></button><button class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3" type="button">
                          <i class="flex fab fa-facebook-square"></i></button><button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3" type="button">
                          <i class="flex fab fa-dribbble"></i></button><button class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3" type="button">
                          <i class="flex fab fa-github"></i>
                        </button>
                      </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                          <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Useful Links</span>
                          <ul class="list-unstyled">
                            <li>
                              <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://www.creative-tim.com/presentation">About Us</a>
                            </li>
                            <li>
                              <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://blog.creative-tim.com">Blog</a>
                            </li>
                            <li>
                              <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://www.github.com/creativetimofficial">Github</a>
                            </li>
                            <li>
                              <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://www.creative-tim.com/bootstrap-themes/free">Free Products</a>
                            </li>
                          </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                          <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Other Resources</span>
                          <ul class="list-unstyled">
                            <li>
                              <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md">MIT License</a>
                            </li>
                            <li>
                              <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://creative-tim.com/terms">Terms &amp; Conditions</a>
                            </li>
                            <li>
                              <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://creative-tim.com/privacy">Privacy Policy</a>
                            </li>
                            <li>
                              <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://creative-tim.com/contact-us">Contact Us</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="my-6 border-gray-400">
                  <div class="flex flex-wrap items-center md:justify-between justify-center">
                    <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                      <div class="text-sm text-gray-600 font-semibold py-1">
                        Copyright © 2019 Tailwind Starter Kit by
                        <a href="https://www.creative-tim.com" class="text-gray-600 hover:text-gray-900">Creative Tim</a>.
                      </div>
                    </div>
                  </div>
                </div>
              </footer>

          <script>
            feather.replace()
          </script>
            @section('footer-scripts')

            @show

        </body>


</html>
