@extends('site.layouts.master')
@section('title' , $page->seo_title)
@section('header-scripts')
<link rel="canonical" href="{{asset($page->slug)}}" />
<link
  href="https://unpkg.com/video.js@7/dist/video-js.min.css"
  rel="stylesheet"
/>
<link
  href="https://unpkg.com/@videojs/themes@1/dist/fantasy/index.css"
  rel="stylesheet"
/>
@endsection


@section('content')
        @foreach ( $page->categories as $category)
        <?php  $cover = $category->cover  ?>
        @endforeach
  <section class="relative block h-[13rem] sm:h-[30rem] mt-16">
    <div class="absolute top-0 w-full h-full bg-left sm:bg-center bg-cover" style="background-image: url({{ $cover}}" >
      <span id="blackOverlay" class="w-full h-full absolute sm:bg-gradient-to-l from-slate-900">
        <div class="container mx-auto relative top-[80%] sm:top-[30%] p-4">

        <div class="md:top-1/4  bg-white sm:bg-inherit text-white p-4 sm:p-0 rounded-lg ">
            <p class="text-[#25bdb4] sm:text-white">ویدیو مصاحبه با</p>
            <p class="md:text-5xl text-[23px] text-[#25bdb4] py-3">حرفه ای ترین تریدرهای مارکت</p>
            <p class="md:text-2xl text-[11px] text-[#25bdb4] sm:text-white">مسیر درست معامله گری رو باید از حرفه ای های بازار یاد گرفت</p>
        </div>
        </div>
      </span>
    </div>
  </section>


  <section class="relative pb-16 bg-[#f2f3f5]">
    <div class="container mx-auto px-4 mt-28 sm:mt-6">
        <div class="relative flex flex-col min-w-0 break-words w-full rounded-lg">
        <div class="md:grid lg:grid-cols-12 gap-3 mb-20 relative ">
            <div class="xl:col-span-9 break-words lg:col-span-8 bg-white shadow-sm rounded-lg px-6 py-6">
                <div class="flex mr-auto lg:flex-row flex-col items-center justify-between border-b-2 pb-2 bg-gradient-to-r from-[#0e7977] to-[#152c3e] p-[7px] rounded-md ">
                    @guest
                    <div class="flex items-center lg:flex-row flex-col">
                        <img class="w-12 ml-2" src="{{asset('/storage/site-front/gold.png')}}">
                        <div class="text-center sm:text-right">
                            <span class="text-[#25bdb4]">این یک محتوای ویژه است</span>
                            <a href="/login" class="flex items-center font-bold lg:text-sm group text-[11px] text-white">
                                برای دسترسی به محتوای این بخش <span class="text-[#25bdb4] px-2">  ثبت نام </span> کنید !
                            </a>
                        </div>

                    </div>
                    @endguest
                    @auth
                    @if ($access)
                    <div class="flex items-center lg:flex-row flex-col">
                        <img class="w-12 ml-2" src="{{asset('/storage/site-front/gold.png')}}">
                    <p  class="flex items-center font-bold lg:text-sm group md:h-14 text-[11px] text-white">
                        شما اکنون قادر به مشاهده این محتوا میباشید !
                    </p>
                    </div>
                    @else
                    <div class="flex items-center lg:flex-row flex-col">
                        <img class="w-12 ml-2" src="{{asset('/storage/site-front/gold.png')}}">
                    <p  class="flex items-center font-bold lg:text-sm group md:h-14 text-[11px] text-white">
                       دسترسی شما برای مشاهده این مطلب کافی نیست !
                    </p>
                </div>

                    @endif
                    @endauth
                 <div class="flex">
                    <div class="flex flex-row items-center justify-center pt-3 pb-2 ml-4">
                        <span class="inline-flex ">
                            <svg class="ml-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.1792 23.9333C2.54046 23.9333 0.474609 21.8674 0.474609 12.2287C0.474609 2.59002 2.54046 0.52417 12.1792 0.52417C21.8178 0.52417 23.8837 2.59002 23.8837 12.2287C23.8837 21.8674 21.8178 23.9333 12.1792 23.9333ZM11.2038 6.37644C11.2038 5.83773 11.6405 5.40106 12.1792 5.40106C12.7178 5.40106 13.1545 5.83773 13.1545 6.37644V11.2533H18.0314C18.5701 11.2533 19.0068 11.69 19.0068 12.2287C19.0068 12.7674 18.5701 13.2041 18.0314 13.2041H12.1792C11.6405 13.2041 11.2038 12.7674 11.2038 12.2287V6.37644Z" fill="#25bdb4"></path>
                        </svg>
                        </span>
                        <div class="flex flex-col text-right">
                            <span class="text-[12px] text-[#b8b8b8]">تاریخ انتشار</span>
                            <span class="text-sm text-white font-bold">{{$page->created_at->toDateString()}}</span>
                        </div>
                    </div>


                 </div>
                 </div>
                 <h1 class="flex items-center text-[#000000] text-2xl pt-6 font-bold">{{$page->name}}</h1>
                 <span class="section-title label-before inline-block relative px-12 text-teal-400 text-sm font-normal mb-4">{{$page->user_id}}</span>
                 @auth
                @if ($access)
              <div id="vid-cont" class="video-container">

                <video-js
                    id="my-video"
                    class="video video-js vjs-theme-fantasy"
                    controls
                    preload="auto"
                    poster ="{{asset($page->cover)}}"
                    data-setup="{}"

                    >

                    <source src="{{asset($page->video)}}" type="video/mp4" />
                </video-js>
                <i class="watermark-md md:watermark cursor-context-menu	">@if(auth()->check()) {{auth()->user()->id}} @endif</i>
                <button class="fullscreen-button text-[10px] left-[79%] md:left-[90%] md:text-[12px]" onclick="toggleFullscreen()">تمام صفحه</button>
            </div>
            @else
            <div class="lg:w-full w-full lg:order-last order-first lg:mb-0 mb-5 overflow-hidden rounded">
                <img class="w-full h-full object-cover transform transition duration-200 hover:scale-110" src="{{asset($page->cover)}}" alt="{{$page->name}}">
            </div>
            @endif
            @endauth
            @guest
            <div class="lg:w-full w-full lg:order-last order-first lg:mb-0 mb-5 overflow-hidden rounded">
                <img class="w-full h-full object-cover transform transition duration-200 hover:scale-110" src="{{asset($page->cover)}}" alt="{{$page->name}}">
            </div>
            @endguest
                <h3 class="flex items-center text-[#25bdb4] pt-4 text-2xl font-bold"><i class="bg-[#25bdb4] ml-1 w-2 h-2 rounded-full sm:flex hidden"></i>توضیحات</h3>
                 <div class="text-justify text-slate-500 pt-3 leading-8">{!!$page->description!!}</div>
                 <h3 class="flex items-center text-[#25bdb4] pt-4 text-2xl font-bold"><i class="bg-[#25bdb4] ml-1 w-2 h-2 rounded-full sm:flex hidden"></i>برچسب ها</h3>
                 <div class="text-justify text-slate-500 pt-3 leading-8">
                        @foreach ( $page->tags as $tag )
                            <span class="tagged_as">
                                <a href="#">{{$tag->name}}</a>
                                <span class="meta-sep">,</span>
                            </span>
                        @endforeach
                </div>
            </div>
            <div class="xl:col-span-3 break-words lg:col-span-4 mt-4 md:mt-0">
                <div class="bg-white px-6 py-6 shadow-sm rounded-lg ">
                    <h3 class="flex items-center text-[#25bdb4] pt-4 text-xl font-bold"><i class="bg-[#25bdb4] ml-1 w-2 h-2 rounded-full sm:flex hidden"></i>مطالب پیشنهادی</h3>
                    <div class="mt-2">
                        @foreach ( $related as $post )
                        @if($post->status == 1)
                        <div class="group sm:px-4 px-2 py-3  rounded-lg border-b-2 border-gray-80 border-opacity-60">
                            <div>
                                <div class="flex items-center">
                                    <div class="w-full rounded-md ml-2  flex items-center justify-center flex-shrink-0">
                                        <a href="{{asset('pages/'.$post->slug)}}">
                                            <img class="w-full h-full object-cover rounded-lg" src="{{asset($post->cover)}}" alt="{{$post->name}}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="flex items-center justify-between border-t border-gray-80 border-opacity-60 mt-3 pt-3">
                                <div class="flex items-center">
                                    <div class="flex items-center bg-gray-100 sm:px-2 px-1 h-6 rounded ml-2">
                                        <span class="ml-1">
                                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.29921 7.10036C1.29921 8.47492 1.37342 9.55017 1.56095 10.394C1.74739 11.2329 2.04007 11.8164 2.45902 12.2353C2.87796 12.6543 3.4615 12.947 4.30041 13.1334C5.14419 13.3209 6.21945 13.3952 7.594 13.3952C8.96856 13.3952 10.0438 13.3209 10.8876 13.1334C11.7265 12.947 12.31 12.6543 12.729 12.2353C13.1479 11.8164 13.4406 11.2329 13.6271 10.394C13.8146 9.55017 13.8888 8.47492 13.8888 7.10036C13.8888 5.72581 13.8146 4.65055 13.6271 3.80677C13.4406 2.96786 13.1479 2.38432 12.729 1.96538C12.31 1.54643 11.7265 1.25375 10.8876 1.06731C10.0438 0.879784 8.96856 0.805572 7.594 0.805572C6.21945 0.805572 5.14419 0.879784 4.30041 1.06731C3.4615 1.25375 2.87796 1.54643 2.45902 1.96538C2.04007 2.38432 1.74739 2.96786 1.56095 3.80677C1.37342 4.65055 1.29921 5.72581 1.29921 7.10036Z" stroke="#607496" stroke-width="0.858919" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M7.59399 3.73825C7.59399 3.73825 7.59399 5.97967 7.59399 6.54002C7.59399 7.10038 7.59399 7.10038 8.15435 7.10038C8.71471 7.10038 10.9561 7.10038 10.9561 7.10038" stroke="#607496" stroke-width="0.858919" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                                        </span>
                                        <span class="text-gray-500 font-normal text-xs">{{jdate($post->updated_at)->format('%d %B، %Y')}}</span>
                                    </div>
                                  </div>
                                    <div class="flex items-center">
                                    <a href="{{asset('pages/'.$post->slug)}}" class="flex items center  justify-centerleading-3 text-sm text-[#25bdb4] font-bold">مشاهده مطلب
                                        <i class="w-4 mr-1 group-hover:animate-bounce1" data-feather="arrow-left"></i>
                                    </a>
                                   </div>
                          </div> --}}
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
          </div>
        </div>
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
@endsection
