@extends('site.layouts.master')
@section('title' , 'وب سایت تریدینگ ورلد')
@section('header-scripts')
<link rel="canonical" href="/" />
<link
  href="https://unpkg.com/video.js@7/dist/video-js.min.css"
  rel="stylesheet"
/>
<link
  href="https://unpkg.com/@videojs/themes@1/dist/fantasy/index.css"
  rel="stylesheet"
/>
<link
rel="stylesheet"
href="https://unpkg.com/swiper/swiper-bundle.min.css"
/>
@endsection


@section('content')

    <header class="header-2">
      <div class="page-header min-vh-85 relative bg-[url('/storage/site/curved.jpg')]">
        <div class="container m-auto">
          <div class="grid gap-4 gap-y-2 grid-cols-1 lg:grid-cols-3">
            <div class="lg:col-span-1 lg:col-start-2 p-4 text-center mx-auto">
                <img class="m-auto w-36 duration-700 delay-200 relative transitio transform opacity-0 transition-all translate-y-12 ease-out" data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100" }' src="{{asset('/storage/site-front/main.png')}}" alt="">
              <h1 class="text-white text-4xl md:text-5xl pt-3 mt-n5 duration-700 delay-400 transitio relative transform opacity-0 transition-all translate-y-12 ease-out" data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100" }'>TRADING WORLD</h1>
              <p class="lead text-white text-justify mt-3 duration-700 delay-600 transitio relative transform opacity-0 transition-all translate-y-12 ease-out" data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100" }'>به تریدینگ ورلد پلاس خوش اومدی رفیق اینجا قرارده مسیر درست پیشرفت معامله گری رو از حرفه ای های بازار یاد بگیریم و دوتا از مهم ترین پارامترهای موفقیت در معامله گری یعنی روانشناسی معامله گری و مدیریت سرمایه رو که نقطه ضعف اکثر تریدرها هستند رو به صورت حرفه ای ببینیم. </p>
            </div>
          </div>
        </div>
        <div class="absolute w-full z-1 bottom-0">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
              <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
              </defs>
              <g class="moving-waves">
                <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40"></use>
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)"></use>
                <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
                <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)"></use>
                <use xlink:href="#gentle-wave" x="48" y="16" fill="#f3f4f6"></use>
              </g>
            </svg>
          </div>


      </div>
    </header>

    <section class="pt-3 pb-4" id="count-stats">
      <div class="max-w-4xl	 mx-auto p-4 duration-700 delay-1200 relative transition transform opacity-0 transition-all translate-y-12 ease-out" data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100" }'>
        <div class="row">
          <div class="grid gap-4 gap-y-2 grid-cols-1 lg:grid-cols-3 z-2 rounded-xl -mt-44 mx-auto p-5 blurmain shadow-blur">

              <div class="lg:col-span-1 relative">
                <div class="p-3 text-center">
                  <h1 class="text-gradient text-primary text-3xl"><span id="state1" countto="70">100</span>+</h1>
                  <h5 class="my-3 font-black">ویدیو مصاحبه با تریدرها</h5>
                  <p class="text-sm">مصاحبه با برجسته ترین تریدرهای ایران برای اولین بار در تریدینگ ورلد پلاس</p>
                </div>
                <hr class="vertical dark hidden sm:block">
              </div>
              <div class="lg:col-span-1 relative">
                <div class="p-3 text-center">
                    <h1 class="text-gradient text-primary text-3xl"><span id="state1" countto="70">16</span>+</h1>
                    <h5 class="my-3 font-black">ژورنال مطالعاتی اختصاصی</h5>
                    <p class="text-sm">گردآوری بیش از صدها ژورنال مطالعاتی اختصاصی در زمینه تریدینگ</p>
                </div>
                <hr class="vertical dark hidden sm:block">
              </div>
              <div class="lg:col-span-1">
                <div class="p-3 text-center">
                    <h1 class="text-gradient text-primary text-3xl"><span id="state1" countto="70">120</span>+</h1>
                    <h5 class="my-3 font-black">ویدیو تخصصی آموزشی</h5>
                  <p class="text-sm">بیش از صد ها ویدیو آموزشی مبتدی تا حرفه ای در زمینه تریدینگ

                  </p>
                </div>
              </div>

          </div>
        </div>

      </div>
    </section>

    <section class="pt-3 pb-4 bg-shape mb-8">
        <div class="max-w-4xl mx-auto">
                <div class="p-4">
            <div class="mb-5">
               <span class="section-title label-before inline-block relative px-12 text-teal-400 text-sm font-normal mb-2">داستان تو از اینجا شروع میشه ...</span>
                <h2 class="text-gray-700 leading-10 text-xl lg:text-xl font-bold">وقتشه بازار رو واقع گرایانه تر و به دور از رویا ببینیم</h2>
            </div>
            <video
            id="my-video"
            class="video-js vjs-theme-fantasy  shadow-sm"
            controls
            preload="auto"
            poster ="{{asset('storage/files/4/cover-video-r.jpg')}}"
            data-setup="{}"
            >
            <source src="{{asset('storage/files/4/56656.mp4')}}" type="video/mp4" />
        </video>
            </div>
        </div>
    </section>

    <section class="pt-3 pb-4 mt-24 ">
    <div class="container mx-auto">
      <div class="grid grid-flow-row-dense items-center gap-4 gap-y-4 grid-cols-1 lg:grid-cols-9  p-4">
         <div class="lg:col-start-5 lg:col-end-9 relative">
            <video
            id="my-video"
            class="video-js vjs-theme-fantasy  shadow-sm"
            controls
            preload="auto"
            poster ="{{asset('storage/files/4/cover-video-r.jpg')}}"
            data-setup="{}"
            >
            <source src="{{asset('storage/files/4/56656.mp4')}}" type="video/mp4" />
        </video>
            </div>

            <div class="lg:col-start-2 lg:col-end-5 relative">
                <div class="mb-5">
                    <span class="section-title label-before inline-block relative px-12 text-teal-400 text-sm font-normal mb-2">ویدیو مصاحبه</span>
                     <h2 class="text-gray-700 leading-10 text-xl lg:text-xl font-bold">مصاحبه با تریدر های مطرح ایران</h2>
                     <div class="mt-6 flex">
                        <p class="leading-7 text-justify text-gray-500">
                            در این بخش مصاحبه ها و سمینارهای اختصاصی بزرگترین تریدرهای دنیا رو بصورت کامل و با زیرنویس فارسی اختصاصی براتون منتشر میکنیم تا با دیدگاه، نحوه کنترل احساسات، روش های مدیریت سرمایه و روش های معاملاتی حرفه ای های بازار بیشتر آشنا بشیم
                         </p>
                     </div>
                     <div class="group flex justify-end">
                        <button type="button" class=" flex mt-4 text-white bg-gradient-to-r from-[#00c7ba] to-[#00abc7] hover:bg-gradient-to-br dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm px-5 py-1 text-center mr-2 mb-2">ادامه مطلب<i class="w-4 mr-1 group-hover:animate-[left_1s_ease-in-out_infinite]" data-feather="arrow-left"></i>
                        </button>
                     </div>
                   </div>
            </div>
        </div>
    </div>
    </section>


    <section class="pt-3 pb-4 mt-24 mb-24">
        <div class="container mx-auto">
          <div class="grid grid-flow-row-dense items-center gap-4 gap-y-4 grid-cols-1 lg:grid-cols-9  p-4">
             <div class="lg:col-start-2 lg:col-end-6 relative">
                <video
                id="my-video"
                class="video-js vjs-theme-fantasy  shadow-sm"
                controls
                preload="auto"
                poster ="{{asset('storage/files/4/cover-video-r.jpg')}}"
                data-setup="{}"
                >
                <source src="{{asset('storage/files/4/56656.mp4')}}" type="video/mp4" />
            </video>
                </div>

                <div class="lg:col-start-6 lg:col-end-9 relative">
                    <div class="mb-5">
                        <span class="section-title label-before inline-block relative px-12 text-teal-400 text-sm font-normal mb-2">ویدیو مصاحبه</span>
                         <h2 class="text-gray-700 leading-10 text-xl lg:text-xl font-bold">مصاحبه با تریدر های مطرح ایران</h2>
                         <div class="mt-6 flex">
                            <p class="leading-7 text-justify text-gray-500">
                                در این بخش مصاحبه ها و سمینارهای اختصاصی بزرگترین تریدرهای دنیا رو بصورت کامل و با زیرنویس فارسی اختصاصی براتون منتشر میکنیم تا با دیدگاه، نحوه کنترل احساسات، روش های مدیریت سرمایه و روش های معاملاتی حرفه ای های بازار بیشتر آشنا بشیم
                             </p>
                         </div>
                         <div class="group flex justify-end">
                            <button type="button" class=" flex mt-4 text-white bg-gradient-to-r from-[#00c7ba] to-[#00abc7] hover:bg-gradient-to-br dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm px-5 py-1 text-center mr-2 mb-2">ادامه مطلب<i class="w-4 mr-1 group-hover:animate-[left_1s_ease-in-out_infinite]" data-feather="arrow-left"></i>
                            </button>
                         </div>
                       </div>
                </div>
            </div>
        </div>
    </section>

    <section>

        <div class="swiper sm:!p-[50px] mySwiper max-w-6xl mx-auto md:p-[10px]">
                    <div class="swiper-wrapper grid grid-cols-9">
            @foreach ( $pages as $page )
            <div class="swiper-slide p-[48px] sm:p-0 xl:col-span-3 md:col-span-4 sm:col-span-4 col-span-9 mb-15">
                <div class="shadow-smswiper-slide-active rounded-lg bg-white relative pt-32 flex justify-center h-full">
                    <div class="absolute -top-12 w-full  px-4 ">
                        <a href="{{asset('page/'.$page->slug)}}" class=" inline-block h-40 overflow-hidden w-full rounded-lg">
                            <img class="w-full h-full object-cover transform transition duration-200 hover:scale-110" src="{{asset($page->image)}}" alt="{{$page->name}}">
                        </a>
                    </div>
                    <div class="flex flex-col flex-1 w-full space-y-2">
                        <div class=" px-4 flex flex-col flex-grow">
                            <a href="{{asset('page/'.$page->slug)}}" class="mb-2 inline-block">
                                <span class="text-xl font-bold text-gray-800 hover:text-blue-700 duration-200 transition">{{$page->name}}</span>
                            </a>
                                <?php
                                    $paragraph=substr($page->description,0,200) . '...';
                                ?>
                            <div class="mb-2 text-gray-360 text-[12px] text-justify font-normal overflow-hidden leading-4">{!!$paragraph!!}</div>
                        </div>
                        <div>
                            <div class="pb-1 px-4">
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center">
                                                    <div class="flex items-center bg-gray-100 px-2 h-6 rounded ml-2">
                                                        <svg class="ml-1" width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1.29921 7.10036C1.29921 8.47492 1.37342 9.55017 1.56095 10.394C1.74739 11.2329 2.04007 11.8164 2.45902 12.2353C2.87796 12.6543 3.4615 12.947 4.30041 13.1334C5.14419 13.3209 6.21945 13.3952 7.594 13.3952C8.96856 13.3952 10.0438 13.3209 10.8876 13.1334C11.7265 12.947 12.31 12.6543 12.729 12.2353C13.1479 11.8164 13.4406 11.2329 13.6271 10.394C13.8146 9.55017 13.8888 8.47492 13.8888 7.10036C13.8888 5.72581 13.8146 4.65055 13.6271 3.80677C13.4406 2.96786 13.1479 2.38432 12.729 1.96538C12.31 1.54643 11.7265 1.25375 10.8876 1.06731C10.0438 0.879784 8.96856 0.805572 7.594 0.805572C6.21945 0.805572 5.14419 0.879784 4.30041 1.06731C3.4615 1.25375 2.87796 1.54643 2.45902 1.96538C2.04007 2.38432 1.74739 2.96786 1.56095 3.80677C1.37342 4.65055 1.29921 5.72581 1.29921 7.10036Z" stroke="#607496" stroke-width="0.858919" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M7.59399 3.73825C7.59399 3.73825 7.59399 5.97967 7.59399 6.54002C7.59399 7.10038 7.59399 7.10038 8.15435 7.10038C8.71471 7.10038 10.9561 7.10038 10.9561 7.10038" stroke="#607496" stroke-width="0.858919" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        <span class="text-gray-500 font-normal text-xs">{{jdate($page->created_at)->format('%d %B، %Y')}}</span>
                                                    </div>
                                    </div>
                                </div>
                            </div>
                                 <div class="flex justify-center border-t border-gray-300 border-opacity-10">
                                    <a href="{{asset('page/'.$page->slug)}}" class="flex items-center my-4 transform group 0 font-bold text-base transition duration-200  hover:text-dark-700 text-red-450">
                                        <span>مشاهده اطلاعات دوره</span>
                                        <svg class="mr-1 -mt-0.5" width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" opacity="0.4" d="M16.7544 11.5347L20.5098 11.2026C21.3525 11.2026 22.0358 11.8925 22.0358 12.7435C22.0358 13.5945 21.3525 14.2844 20.5098 14.2844L16.7544 13.9523C16.0933 13.9523 15.5573 13.4111 15.5573 12.7435C15.5573 12.0748 16.0933 11.5347 16.7544 11.5347Z"></path>
                                            <path fill="currentColor" d="M4.14372 11.5957C4.20242 11.5365 4.42169 11.286 4.62767 11.078C5.82925 9.77526 8.96663 7.64503 10.6079 6.9931C10.857 6.8891 11.4872 6.66769 11.8249 6.65204C12.1472 6.65204 12.4551 6.72696 12.7485 6.87457C13.1151 7.08144 13.4075 7.40796 13.5692 7.79263C13.6722 8.05877 13.8338 8.85831 13.8338 8.87285C13.9944 9.74619 14.0819 11.1663 14.0819 12.7363C14.0819 14.2303 13.9944 15.5923 13.8626 16.4802C13.8482 16.4958 13.6866 17.4877 13.5105 17.8276C13.1882 18.4494 12.5581 18.8341 11.8836 18.8341H11.8249C11.3853 18.8195 10.4617 18.4337 10.4617 18.4203C8.90794 17.7684 5.84475 15.741 4.61328 14.3936C4.61328 14.3936 4.26554 14.0469 4.11493 13.8311C3.88015 13.5202 3.76276 13.1355 3.76276 12.7509C3.76276 12.3215 3.89455 11.9223 4.14372 11.5957Z"></path>
                                        </svg>
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


    </div>

        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    </section>

        @endsection


@section('footer-scripts')
<script src="https://vjs.zencdn.net/7.17.0/video.min.js"></script>
<script>
videojs('my-video', {
  userActions: {
    doubleClick: false
  },
  controlBar: {
      fullscreenToggle: false ,
      pictureInPictureToggle: false
    }
});
</script>
<script>
    function toggleFullscreen() {
    if (!document.fullscreenElement) {
        document.getElementById('vid-cont').requestFullscreen();
    } else if (document.exitFullscreen) {
        document.exitFullscreen();
    }
}
</script>
<script>
    document.addEventListener("DOMContentLoaded", function(){
    setTimeout(function(){
        var replacers = document.querySelectorAll('[data-replace]');
        for(var i=0; i<replacers.length; i++){
            console.log('hit here2');
            let replaceClasses = JSON.parse(replacers[i].dataset.replace.replace(/'/g, '"'));
            Object.keys(replaceClasses).forEach(function(key) {
                replacers[i].classList.remove(key);
                replacers[i].classList.add(replaceClasses[key]);
            });
        }
    }, 1);
});
</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 1,
          spaceBetween: 0,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,

          },

          breakpoints: {
            640: {
              slidesPerView: 2,
              spaceBetween:20,
            },
            768: {
              slidesPerView: 3,
              spaceBetween: 20,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween:50,
            },
          },
          navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        });
      </script>

@endsection
