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
      <div class="page-header min-vh-85 relative bg-[url('/storage/site-front/slider.jpg')]">
        <div class="container m-auto">
          <div class="grid gap-4 gap-y-2 grid-cols-1 lg:grid-cols-3 p-4">
            <div class="p-6 lg:col-span-1 lg:col-start-3 rounded-lg text-center mx-auto blur-slider duration-700 delay-600 transitio relative transform opacity-0 transition-all translate-y-12 ease-out" data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100" }'>
                <img class="m-auto w-36" src="{{asset('/storage/site-front/main.png')}}" alt="">
              <h1 class="text-white text-4xl md:text-4xl pt-3 mt-n5 duration-700 delay-400 transitio relative transform opacity-0 transition-all translate-y-12 ease-out" data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100" }'>TRADING WORLLD</h1>
              <p class="lead text-white text-justify mt-3" >به تریدینگ ورلد پلاس خوش اومدی رفیق اینجا قرارده مسیر درست پیشرفت معامله گری رو از حرفه ای های بازار یاد بگیریم و دوتا از مهم ترین پارامترهای موفقیت در معامله گری یعنی روانشناسی معامله گری و مدیریت سرمایه رو که نقطه ضعف اکثر تریدرها هستند رو به صورت حرفه ای ببینیم. </p>
              <div class="group flex justify-center ">
                <a href="/login" class=" items-center flex mt-4 text-white bg-gradient-to-r from-[#00c7ba] to-[#00abc7] hover:bg-gradient-to-br dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-2xl px-5 py-1 text-center mr-2 mb-2">شروع<i class="w-4 mr-1 group-hover:animate-[left_1s_ease-in-out_infinite]" data-feather="arrow-left"></i>
                </a>
             </div>
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
          <div class="grid gap-4 gap-y-2 grid-cols-1 lg:grid-cols-3 z-2 rounded-xl -mt-36 mx-auto p-5 blurmain shadow-blur">

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
            <div class="mb-5 text-center">
               <span class="label-before inline-block relative px-12 text-teal-400 text-4xl font-normal mb-2">داستان تو از اینجا شروع میشه ...</span>
                <h2 class="text-gray-700 leading-10 text-xl lg:text-xl font-bold">وقتشه که با جریان بازار همراه بشیم و حقیقتشو ببینیم</h2>
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

    <section class="pt-3 pb-4 mt-16 ">
    <div class="container mx-auto">
      <div class="grid grid-flow-row-dense items-center gap-12 gap-y-4 grid-cols-1 lg:grid-cols-9  p-4">
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
                    <h2 class="section-title label-before inline-block relative px-12 text-teal-400 text-xl font-bold mb-2">ویدیوهای مصاحبه با تریدرها</h2>
                     <div class="mt-6 flex">
                        <p class="leading-7 text-justify text-gray-500">
                            در این بخش مصاحبه ها و سمینارهای اختصاصی بزرگترین تریدرهای دنیا رو بصورت کامل و با زیرنویس فارسی اختصاصی براتون منتشر میکنیم تا با دیدگاه، نحوه کنترل احساسات، روش های مدیریت سرمایه و روش های معاملاتی حرفه ای های بازار بیشتر آشنا بشیم
                         </p>
                     </div>
                     <div class="group flex justify-end">
                        <a href="/category/traders" class=" flex mt-4 text-white bg-gradient-to-r from-[#00c7ba] to-[#00abc7] hover:bg-gradient-to-br dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm px-5 py-1 text-center mr-2 mb-2">مشاهده ویدیوها<i class="w-4 mr-1 group-hover:animate-[left_1s_ease-in-out_infinite]" data-feather="arrow-left"></i>
                        </a>
                     </div>
                   </div>
            </div>
        </div>
    </div>
    </section>


    <section class="pt-3 pb-4 my-16">
        <div class="container mx-auto">
          <div class="grid grid-flow-row-dense items-center gap-12 gap-y-4 grid-cols-1 lg:grid-cols-9  p-4">
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
                         <h2 class="section-title label-before inline-block relative px-12 text-teal-400 text-xl font-bold mb-2">ژورنال معاملاتی اختصاصی</h2>
                         <div class="mt-6 flex">
                            <p class="leading-7 text-justify text-gray-500">
یکی از بزرگترین مشکلات تریدرها اینه که نمیدونن ایراد کارشون کجاست و چرا بعد از مدتها نتونستن به سوددهی مداوم برسند ؛ بدون داشتن یک کارنامه معاملاتی شخصی ، پی بردن به اشتباهاتمون و اصلاح اونها عملا نشدنی و غیرممکنه ژورنال معاملاتی تریدینگ ورلد بهتون کمک میکنه تا با ثبت جزئیات مهم معاملامتتون ، مشکلات کارتون رو پیدا و حلشون کنید.                             </p>
                         </div>
                         <div class="group flex justify-end">
                            <a href="#" class=" flex mt-4 text-white bg-gradient-to-r from-[#00c7ba] to-[#00abc7] hover:bg-gradient-to-br dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm px-5 py-1 text-center mr-2 mb-2">دانلود ژورنال<i class="w-4 mr-1 group-hover:animate-[left_1s_ease-in-out_infinite]" data-feather="arrow-left"></i>
                            </a>
                         </div>
                       </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-3 pb-4 my-16 ">
        <div class="container mx-auto">
          <div class="grid grid-flow-row-dense items-center gap-12 gap-y-4 grid-cols-1 lg:grid-cols-9  p-4">
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
                        <h2 class="section-title label-before inline-block relative px-12 text-teal-400 text-xl font-bold mb-2">اینوستینگ پلاس</h2>
                         <div class="mt-6 flex">
                            <p class="leading-7 text-justify text-gray-500">
در اینوستینگ پلاس همراهمون باشید تا با روش ها ، دیدگاه ها و پلن سرمایه گذاری بزرگترین سرمایه گذاران دنیا آشنا بشید . در این بخشمصاحبه ها و سمینارهای موفق ترین سرمایه گذاران دنیا رو به صورت کامل و با زیرنویس فارسی اختصاصی در اختیارتون قرار میدیم.
                            </p>
                         </div>
                         <div class="group flex justify-end">
                            <a href="#" class=" flex mt-4 text-white bg-gradient-to-r from-[#00c7ba] to-[#00abc7] hover:bg-gradient-to-br dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm px-5 py-1 text-center mr-2 mb-2">مشاهده ویدیوها<i class="w-4 mr-1 group-hover:animate-[left_1s_ease-in-out_infinite]" data-feather="arrow-left"></i>
                            </a>
                         </div>
                       </div>
                </div>
            </div>
        </div>
        </section>


        <section class="pt-3 pb-4 my-16">
            <div class="container mx-auto">
              <div class="grid grid-flow-row-dense items-center gap-12 gap-y-4 grid-cols-1 lg:grid-cols-9  p-4">
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
                            <h2 class="section-title label-before inline-block relative px-12 text-teal-400 text-xl font-bold mb-2">توسعه فردی</h2>

                             <div class="mt-6 flex">
                                <p class="leading-7 text-justify text-gray-500">
یه تریدر باید شخصیتشو هم به موازات سودهاش رشد بده در این بخش آموزش ها ، سمینارها و ویدیوهای انگیزشی برترین مربیان توسعه فردی رو دریافت خواهید کرد.
                                </p>
                             </div>
                             <div class="group flex justify-end">
                                <a href="#" class=" flex mt-4 text-white bg-gradient-to-r from-[#00c7ba] to-[#00abc7] hover:bg-gradient-to-br dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm px-5 py-1 text-center mr-2 mb-2">مشاهده ویدیوها<i class="w-4 mr-1 group-hover:animate-[left_1s_ease-in-out_infinite]" data-feather="arrow-left"></i>
                                </a>
                             </div>
                           </div>
                    </div>
                </div>
            </div>
        </section>


    <section>
        <div class="max-w-6xl mb-5 text-center mx-auto">
             <h3 class=" text-[#25bdb4] decorated leading-10 text-xl lg:text-3xl font-bold"><span>پر بازدیدترین ها</span></h2>
         </div>
        <div class="swiper sm:!p-[50px] mySwiper max-w-6xl mx-auto md:p-[10px]">
                    <div class="swiper-wrapper grid grid-cols-9">
            @foreach ( $pages as $page )
            <div class="swiper-slide p-[48px] sm:p-0 xl:col-span-3 md:col-span-4 sm:col-span-4 col-span-9 mb-15">
                <div class="shadow-smswiper-slide-active rounded-lg bg-gradient-to-tr from-[#00c7ba] to-[#152c3e] relative pt-52 flex justify-center h-full">
                    <div class="absolute -top-12 w-full  px-4 ">
                        <a href="{{asset('pages/'.$page->slug)}}" class=" inline-block h-60 overflow-hidden w-full rounded-lg">
                            <img class="w-full h-full object-cover transform transition duration-200 hover:scale-110" src="{{asset($page->image)}}" alt="{{$page->name}}">
                        </a>
                    </div>
                    <div class="flex flex-col flex-1 w-full space-y-2 bg-white p-4">
                        <div class=" px-4 flex flex-col flex-grow">
                            <a href="{{asset('pages/'.$page->slug)}}" class="mb-2 inline-block">
                                <span class="text-xl font-bold text-gray-800 hover:text-blue-700 duration-200 transition">{{$page->name}}</span>
                            </a>
                                <?php
                                    $paragraph=substr($page->description,0,200) . '...';
                                ?>
                            <div class="mb-2 text-gray-360 text-[12px] text-justify font-normal overflow-hidden leading-4">{!!$paragraph!!}</div>
                        </div>
                        <div>
                            <div class="pb-1 px-4">
                                <div class="flex justify-center items-center pb-2">
                                    <div class="flex items-center">
                                                    <div class="flex items-center bg-gray-100 px-2 h-6 rounded ml-2">
                                                        <svg class="ml-1" width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1.29921 7.10036C1.29921 8.47492 1.37342 9.55017 1.56095 10.394C1.74739 11.2329 2.04007 11.8164 2.45902 12.2353C2.87796 12.6543 3.4615 12.947 4.30041 13.1334C5.14419 13.3209 6.21945 13.3952 7.594 13.3952C8.96856 13.3952 10.0438 13.3209 10.8876 13.1334C11.7265 12.947 12.31 12.6543 12.729 12.2353C13.1479 11.8164 13.4406 11.2329 13.6271 10.394C13.8146 9.55017 13.8888 8.47492 13.8888 7.10036C13.8888 5.72581 13.8146 4.65055 13.6271 3.80677C13.4406 2.96786 13.1479 2.38432 12.729 1.96538C12.31 1.54643 11.7265 1.25375 10.8876 1.06731C10.0438 0.879784 8.96856 0.805572 7.594 0.805572C6.21945 0.805572 5.14419 0.879784 4.30041 1.06731C3.4615 1.25375 2.87796 1.54643 2.45902 1.96538C2.04007 2.38432 1.74739 2.96786 1.56095 3.80677C1.37342 4.65055 1.29921 5.72581 1.29921 7.10036Z" stroke="#607496" stroke-width="0.858919" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M7.59399 3.73825C7.59399 3.73825 7.59399 5.97967 7.59399 6.54002C7.59399 7.10038 7.59399 7.10038 8.15435 7.10038C8.71471 7.10038 10.9561 7.10038 10.9561 7.10038" stroke="#607496" stroke-width="0.858919" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        <span class="text-gray-500 font-normal text-xs">{{$page->created_at->toDateString()}}</span>
                                                    </div>
                                    </div>
                                </div>
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
<script src="https://vjs.zencdn.net/7.17.0/video.min.js"></script>
<script>
        videojs('my-video', {
  userActions: {
    doubleClick: false
  },
  controlBar: {
      fullscreenToggle: true ,
      pictureInPictureToggle: false
    }
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
