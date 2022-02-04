@extends('site.layouts.master')
@section('title' , $category->name)
@section('header-scripts')
<link rel="canonical" href="{{asset('category/'.$category->slug)}}" />
@endsection


@section('content')
  <section class="relative block h-[13rem] sm:h-[30rem] mt-16">

    <div class="absolute top-0 w-full h-full bg-left sm:bg-center bg-cover]" style="background-image: url({{$category->cover}}" >

      <span id="blackOverlay" class="w-full h-full absolute sm:bg-gradient-to-l from-slate-900">
        <div class="container mx-auto relative top-[80%] sm:top-[30%] p-4">

        <div class="md:top-1/4  bg-white sm:bg-inherit text-white p-4 sm:p-0 rounded-lg ">
            <p class="text-[#25bdb4] sm:text-white">مصاحبه و سمینارهای</p>
            <p class="md:text-5xl text-[23px] text-[#25bdb4] py-3">بزرگترین سرمایه گذاران دنیا</p>
            <p class="md:text-2xl text-[11px] text-[#25bdb4] sm:text-white">با پلان ها و دیدگاه های سرمایه گذاری در دنیا آشنا شوید</p>
        </div>
        </div>
      </span>
    </div>
  </section>




  <section class="pt-3 pb-4 mt-24 sm:mt-4">
    <div class="container mx-auto">
        @if(count($pages) > 0)
      <div class=" grid grid-flow-row-dense items-center gap-4 gap-y-4 grid-cols-1 lg:grid-cols-12 p-4">

          @foreach ( $pages as $page)
                <div class="group col-start-2 col-end-12 relative shadow-lg hover:shadow-xl transition-all p-4 rounded-lg bg-white">
            <div class="grid grid-flow-row-dense items-center gap-4 gap-y-4 lg:grid-cols-10">
                <div class="lg:col-span-3 relative">
                    <a href="{{asset('pages/'.$page->slug)}}"><img class="w-[18rem] m-auto object-cover rounded" src="{{asset($page->image)}}"></a>
                </div>
                <div class="lg:col-span-7 relative">
                    <h2>
                        <a href="{{asset('pages/'.$page->slug)}}" class="mb-2 inline-block">
                            <span class="text-2xl sm:text-3xl font-bold text-[#25bdb4]">{{$page->name}}</span>
                        </a>
                    </h2>
                    <?php
                    $paragraph=substr($page->description,0,620) . '...';
                ?>
            <div class="mb-2 text-gray-500 text-[16px] text-justify font-normal overflow-hidden leading-8">{!!$paragraph!!}</div>
            <div class="flex items-end justify-between items-center">

                <div class="flex space-x-4 flex-row-reverse">
                <div class="flex flex-row items-center justify-center pt-3 pb-2">
                    <span class="inline-flex ">
                        <svg class="ml-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.1792 23.9333C2.54046 23.9333 0.474609 21.8674 0.474609 12.2287C0.474609 2.59002 2.54046 0.52417 12.1792 0.52417C21.8178 0.52417 23.8837 2.59002 23.8837 12.2287C23.8837 21.8674 21.8178 23.9333 12.1792 23.9333ZM11.2038 6.37644C11.2038 5.83773 11.6405 5.40106 12.1792 5.40106C12.7178 5.40106 13.1545 5.83773 13.1545 6.37644V11.2533H18.0314C18.5701 11.2533 19.0068 11.69 19.0068 12.2287C19.0068 12.7674 18.5701 13.2041 18.0314 13.2041H12.1792C11.6405 13.2041 11.2038 12.7674 11.2038 12.2287V6.37644Z" fill="#25bdb4"></path>
                    </svg>
                    </span>
                    <div class="flex flex-col text-right">
                        <span class="text-[12px] text-[#b8b8b8]">تاریخ انتشار</span>
                        <span class="text-sm text-chambray-700 font-bold">{{$page->created_at->toDateString()}}</span>
                    </div>
                </div>

                <div class="flex flex-row items-center justify-center pt-3 pb-2  border-left">
                    {{-- <span class="inline-flex ">
                        <svg class="ml-3" width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.50847 10.9168C12.107 14.744 12.9322 14.744 19.5307 10.9168C26.1292 7.08956 26.1292 7.08956 19.5307 3.26237C12.9322 -0.564826 12.107 -0.564837 5.50847 3.26237C2.20921 5.17597 0.55957 6.13277 0.55957 7.08957V15.7008C0.55957 16.2292 0.987944 16.6576 1.51637 16.6576C2.0448 16.6576 2.47317 16.2292 2.47317 15.7008L2.47317 9.45617C2.47317 9.30453 2.64132 9.21274 2.76975 9.29336C3.50113 9.75249 4.41404 10.282 5.50847 10.9168Z" fill="#25bdb4"></path>
                            <path d="M5.50847 11.8736C12.107 15.7008 12.9322 15.7008 19.5307 11.8736L19.9071 11.6553C20.2058 11.4819 20.5824 11.672 20.6043 12.0167C20.6375 12.5376 20.6524 13.125 20.6524 13.7872C20.6524 18.5712 18.7388 19.528 12.4867 19.528C5.81641 19.528 4.38677 18.5712 4.38677 13.7872C4.38677 13.1253 4.40096 12.5382 4.43295 12.0175C4.45418 11.672 4.83143 11.4807 5.13075 11.6545L5.50847 11.8736Z" fill="#25bdb4"></path>
                        </svg>
                    </span> --}}
                    <div class="flex flex-col text-right">
                        {{-- <span class="text-[12px] text-[#b8b8b8]">سرمایه گذار</span> --}}
                        <span class="text-sm text-chambray-700 font-bold">{{$page->user_id}}</span>
                    </div>
                </div>
            </div>
                <div class="flex flex-row items-center justify-center pt-3 pb-2 hidden sm:flex">
                    <a href="{{asset('pages/'.$page->slug)}}" class="flex items-center text-[#25bdb4]">
                        <span>مشاهده</span>
                        <svg class="group-hover:animate-[left_1s_ease-in-out_infinite] mr-1 -mt-0.5" width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" opacity="0.4" d="M16.7544 11.5347L20.5098 11.2026C21.3525 11.2026 22.0358 11.8925 22.0358 12.7435C22.0358 13.5945 21.3525 14.2844 20.5098 14.2844L16.7544 13.9523C16.0933 13.9523 15.5573 13.4111 15.5573 12.7435C15.5573 12.0748 16.0933 11.5347 16.7544 11.5347Z"></path>
                            <path fill="currentColor" d="M4.14372 11.5957C4.20242 11.5365 4.42169 11.286 4.62767 11.078C5.82925 9.77526 8.96663 7.64503 10.6079 6.9931C10.857 6.8891 11.4872 6.66769 11.8249 6.65204C12.1472 6.65204 12.4551 6.72696 12.7485 6.87457C13.1151 7.08144 13.4075 7.40796 13.5692 7.79263C13.6722 8.05877 13.8338 8.85831 13.8338 8.87285C13.9944 9.74619 14.0819 11.1663 14.0819 12.7363C14.0819 14.2303 13.9944 15.5923 13.8626 16.4802C13.8482 16.4958 13.6866 17.4877 13.5105 17.8276C13.1882 18.4494 12.5581 18.8341 11.8836 18.8341H11.8249C11.3853 18.8195 10.4617 18.4337 10.4617 18.4203C8.90794 17.7684 5.84475 15.741 4.61328 14.3936C4.61328 14.3936 4.26554 14.0469 4.11493 13.8311C3.88015 13.5202 3.76276 13.1355 3.76276 12.7509C3.76276 12.3215 3.89455 11.9223 4.14372 11.5957Z"></path>
                        </svg>
                    </a>
                </div>
             </div>
             <div class="flex flex-row items-center justify-center pt-3 pb-2 sm:hidden">
                <a href="{{asset('pages/'.$page->slug)}}" class="flex items-center text-[#25bdb4]">
                    <span>مشاهده</span>
                    <svg class="group-hover:animate-[left_1s_ease-in-out_infinite] mr-1 -mt-0.5" width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" opacity="0.4" d="M16.7544 11.5347L20.5098 11.2026C21.3525 11.2026 22.0358 11.8925 22.0358 12.7435C22.0358 13.5945 21.3525 14.2844 20.5098 14.2844L16.7544 13.9523C16.0933 13.9523 15.5573 13.4111 15.5573 12.7435C15.5573 12.0748 16.0933 11.5347 16.7544 11.5347Z"></path>
                        <path fill="currentColor" d="M4.14372 11.5957C4.20242 11.5365 4.42169 11.286 4.62767 11.078C5.82925 9.77526 8.96663 7.64503 10.6079 6.9931C10.857 6.8891 11.4872 6.66769 11.8249 6.65204C12.1472 6.65204 12.4551 6.72696 12.7485 6.87457C13.1151 7.08144 13.4075 7.40796 13.5692 7.79263C13.6722 8.05877 13.8338 8.85831 13.8338 8.87285C13.9944 9.74619 14.0819 11.1663 14.0819 12.7363C14.0819 14.2303 13.9944 15.5923 13.8626 16.4802C13.8482 16.4958 13.6866 17.4877 13.5105 17.8276C13.1882 18.4494 12.5581 18.8341 11.8836 18.8341H11.8249C11.3853 18.8195 10.4617 18.4337 10.4617 18.4203C8.90794 17.7684 5.84475 15.741 4.61328 14.3936C4.61328 14.3936 4.26554 14.0469 4.11493 13.8311C3.88015 13.5202 3.76276 13.1355 3.76276 12.7509C3.76276 12.3215 3.89455 11.9223 4.14372 11.5957Z"></path>
                    </svg>
                </a>
            </div>
                </div>
            </div>
        </div>
          @endforeach
        </div>
        @else
        <span>در حال حاضر هیچ محتوایی در این بخش وجود ندارد !</span>
        @endif
        <div>
            {{ $pages->links('pagination::tailwind') }}

          </div>
    </div>

    </section>



@endsection


@section('footer-scripts')
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
