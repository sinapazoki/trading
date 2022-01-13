@extends('site.layouts.master')
@section('title' , 'صفحه اصلی')
@section('header-scripts')
<link href="https://vjs.zencdn.net/7.17.0/video-js.css" rel="stylesheet" />
@endsection


@section('content')
<section class="relative block" style="height: 500px;">
    <div class="absolute top-0 w-full h-full bg-center bg-cover bg-[url('/storage/site/header.jpg')]" >
      <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black">
        <div class="md:top-1/4 top-[35%]  absolute text-white md:right-[20%] right-[15%] ">
            <p class="text-white">ویدیو مصاحبه با</p>
            <p class="md:text-5xl text-[23px] text-[#25bdb4] py-3">حرفه ای ترین تریدرهای مارکت</p>
            <p class="md:text-2xl text-[11px] text-white">مسیر درست معامله گری رو باید از حرفه ای های بازار یاد گرفت</p>
        </div>
      </span>
    </div>
    <div class="custom-shape-divider-bottom-1641972216">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
    </div>
  </section>
  <section class="relative pt-16 pb-4 bg-[#f2f3f5]">
    <div class="container mx-auto px-4">
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full shadow-sm rounded-lg -mt-64">
        <div class="px-6">
            <div class="flex lg:flex-row flex-col items-center xl:px-8 sm:px-5 px-3 py-10">
                <div class="lg:w-8/12 w-full flex flex-col lg:text-right text-center">
                    <div class="flex  items-center md:mb-5 mb-3 pt-3">
                        <h1 class="text-[#25bdb4] md:text-5xl text-2xl font-bold inline-block">{{$page->name}}</h1>
                       </div>
                        <?php
                        $start = strpos($page->description, '<p>');
                        $end = strpos($page->description, '</p>', $start);
                        $paragraph = substr($page->description, $start, $end-$start+4);
                        ?>
                    <div class="text-slate-500 md:text-xl text-base font-normal md:leading-8 leading-7 mb-5">{!! $paragraph!!}</div>
                 </div>

                <div class="lg:w-1/2 w-full lg:order-last order-first lg:mr-14 lg:h-64 sm:h-80 h-48 lg:mb-0 mb-5 overflow-hidden rounded">
                    <img class="w-full h-full object-cover transform transition duration-200 hover:scale-110" src="{{asset($page->image)}}" alt="{{$page->name}}">
                </div>
            </div>
          <div class="mt-2 py-3 border-t-2 border-[#ececec] text-center">
            <div class="flex flex-wrap justify-center">
              <div class="w-full px-4">
                <div class="flex lg:flex-row flex-col items-center justify-between lg:ml-3">

                    <div class="flex items-center lg:flex-row flex-col">
                        <img class="w-16" src="{{asset('/storage/site/security.png')}}">
                      <a href="/login" class="flex items-center font-bold lg:text-sm group md:h-14 text-[11px]">
                        برای مشاهده محتوای این بخش نیاز به <span class="text-[#25bdb4] px-2"> ورود / ثبت نام </span> دارید!
                     </a>
                 </div>

                 <div class="flex">
                    <div class="flex flex-row items-center justify-center pt-3 pb-2 ml-4 border-left">
                        <span class="inline-flex ">
                            <svg class="ml-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.1792 23.9333C2.54046 23.9333 0.474609 21.8674 0.474609 12.2287C0.474609 2.59002 2.54046 0.52417 12.1792 0.52417C21.8178 0.52417 23.8837 2.59002 23.8837 12.2287C23.8837 21.8674 21.8178 23.9333 12.1792 23.9333ZM11.2038 6.37644C11.2038 5.83773 11.6405 5.40106 12.1792 5.40106C12.7178 5.40106 13.1545 5.83773 13.1545 6.37644V11.2533H18.0314C18.5701 11.2533 19.0068 11.69 19.0068 12.2287C19.0068 12.7674 18.5701 13.2041 18.0314 13.2041H12.1792C11.6405 13.2041 11.2038 12.7674 11.2038 12.2287V6.37644Z" fill="#25bdb4"></path>
                        </svg>
                        </span>
                        <div class="flex flex-col text-right">
                            <span class="text-[12px] text-[#b8b8b8]">آخرین بروزرسانی</span>
                            <span class="text-sm text-chambray-700 font-bold">{{$date = jdate($page->updated_at)->format('%d %B، %Y')}}</span>
                        </div>
                    </div>

                    <div class="flex flex-row items-center justify-center pt-3 pb-2">
                        <span class="inline-flex ">
                            <svg class="ml-3" width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.50847 10.9168C12.107 14.744 12.9322 14.744 19.5307 10.9168C26.1292 7.08956 26.1292 7.08956 19.5307 3.26237C12.9322 -0.564826 12.107 -0.564837 5.50847 3.26237C2.20921 5.17597 0.55957 6.13277 0.55957 7.08957V15.7008C0.55957 16.2292 0.987944 16.6576 1.51637 16.6576C2.0448 16.6576 2.47317 16.2292 2.47317 15.7008L2.47317 9.45617C2.47317 9.30453 2.64132 9.21274 2.76975 9.29336C3.50113 9.75249 4.41404 10.282 5.50847 10.9168Z" fill="#25bdb4"></path>
                                <path d="M5.50847 11.8736C12.107 15.7008 12.9322 15.7008 19.5307 11.8736L19.9071 11.6553C20.2058 11.4819 20.5824 11.672 20.6043 12.0167C20.6375 12.5376 20.6524 13.125 20.6524 13.7872C20.6524 18.5712 18.7388 19.528 12.4867 19.528C5.81641 19.528 4.38677 18.5712 4.38677 13.7872C4.38677 13.1253 4.40096 12.5382 4.43295 12.0175C4.45418 11.672 4.83143 11.4807 5.13075 11.6545L5.50847 11.8736Z" fill="#25bdb4"></path>
                            </svg>
                        </span>
                        <div class="flex flex-col text-right">
                            <span class="text-[12px] text-[#b8b8b8]">مدرس دوره</span>
                            <span class="text-sm text-chambray-700 font-bold">{{$page->user->name}}</span>
                        </div>
                    </div>

                 </div>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="relative pb-16 bg-[#f2f3f5]">
    <div class="container mx-auto px-4">
        <div class="md:grid lg:grid-cols-12 gap-3 mb-20">
            <div class="xl:col-span-9 break-words lg:col-span-8 bg-white shadow-sm rounded-lg px-6 py-6">
                @trade
                <h3 class="flex items-center text-[#25bdb4] text-2xl pb-4 font-bold"><i class="bg-[#25bdb4] ml-1 w-2 h-2 rounded-full sm:flex hidden"></i>ویدیو دوره</h3>
                  <video
                    id="my-video"
                    class="video-js"
                    controls
                    preload="auto"
                    width="100%"
                    height="264"
                    data-setup="{}"
                >

                    <source src="{{$page->video}}" type="video/mp4" />
                </video>
                @endtrade
                 <h3 class="flex items-center text-[#25bdb4] pt-4 text-2xl font-bold"><i class="bg-[#25bdb4] ml-1 w-2 h-2 rounded-full sm:flex hidden"></i>توضیحات</h3>
                 <div class="text-justify text-slate-500 pt-3 leading-8">{!!$page->description!!}</div>
                 <h3 class="flex items-center text-[#25bdb4] pt-4 text-2xl font-bold"><i class="bg-[#25bdb4] ml-1 w-2 h-2 rounded-full sm:flex hidden"></i>برچسب ها</h3>
                 <div class="text-justify text-slate-500 pt-3 leading-8">
                     <ul>
                        @foreach ( $page->tags as $tag )
                            <li>
                                <a href="{{asset($tag->slug)}}">{{$tag->name}}</a>
                            </li>
                        @endforeach
                     </ul>
                </div>
            </div>
            <div class="xl:col-span-3 break-words lg:col-span-4">
                <div class="bg-white px-6 py-6 shadow-sm rounded-lg ">
                    <div class="w-16 h-16 bg-gray-300 group relative rounded-full overflow-hidden border-3 border-solid border-gray-200 m-auto">
                        <img class="w-full h-full object-cover transform transition duration-200 hover:scale-110" src="{{asset($page->user->image)}}">
                    </div>
                    <div class="flex flex-col text-center">
                        <span class="text-[12px] text-[#b8b8b8] pt-2">مدرس دوره</span>
                        <span class="text-sm text-chambray-700 font-bold">{{$page->user->name}}</span>
                        <p class="text-[12px] text-[#b8b8b8] text-justify pt-2">{{$page->user->description}}</p>
                    </div>
                </div>
            </div>
          </div>
    </div>
</section>

@endsection


@section('footer-scripts')

@endsection
