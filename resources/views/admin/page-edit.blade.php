@extends('admin.master')
@section('title' , 'ویرایش برگه')
@section('header-scripts')
<script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
@endsection


@section('content')

<div>
    <form action="{{ route('admin.page.update',$page->id) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="bg-gray-100 flex items-center justify-center">
        <div class="container mx-auto">
          <div>
               <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
              <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">

                <div class="lg:col-span-2">
                  <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
                    <div class="md:col-span-4">
                      <label for="name">نام دوره</label>
                      <input type="text" name="name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $page->name }}" />
                      @error('name')
                      {{$message}}
                      @enderror
                    </div>


                    <div class="md:col-span-4">
                        <div >
                            <label for="description">توضیحات دوره</label>
                            <textarea class="form-control " name="description" id="description">{{$page->description}}</textarea>
                        </div>
                          </div>
                          @error('description')
                          {{$message}}
                          @enderror

                          <div class="md:col-span-4">
                            <label for="seo_title">عنوان سئو</label>
                            <input name="seo_title"  id="seo_title" value="{{ $page->seo_title }}" type="text"  class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                            @error('seo_title')
                            {{$message}}
                            @enderror
                          </div>
                  </div>
                </div>



                <div class="text-gray-600">
                    <div>
                        <p class="font-medium text-lg">اطلاعات دوره</p>
                        <p>اطلاعات مرتبط با هربخش دوره را وارد نمایید :</p>

                        <div class="md:col-span-2">

                            <div class="block justify-center mt-2">
                                <div class="">
                              <div class="bg-white max-w-xl mx-auto border border-gray-200">
                                      <ul class="shadow-box">
                                      <li class="relative border-b border-gray-200" x-data="{selected:null}">

                                          <button type="button" class="w-full px-8 py-3 text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                                              <div class="flex items-center justify-between">
                                                  <span>
                                                      انتخاب نام برگزارکننده دوره
                                                    </span>
                                                    <div class="transform " :class="selected == 1 ? 'rotate-180' : 'rotate-0'"> <i data-feather="chevron-down"></i> </div>
                                                </div>
                                          </button>

                                          <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                              <div class="p-6">

                                                <label for="user_id">انتخاب استاد</label>
                                                <select name="user_id" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                                                    <option value="" selected hidden>انتخاب کنید</option>
                                                    @foreach ($roles as $role )
                                                    <option {{ $page->user_id == $role->id ? 'selected' : '' }} value="{{$role->id}}">{{$role->name}}</option>
                                                    @endforeach

                                                  </select>
                                                     @error('user_id')
                                                     {{$message}}
                                                    @enderror

                                                    <div class="mt-3">
                                                        <label for="user_id">انتخاب تگ</label>
                                                        <select multiple name="tag[]" id='myselect' class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                                                            @foreach ($tags as $key=>$value )
                                                            <option @if(in_array($key , $page_tags)) selected @endif
                                                            value="{{$key}}">{{$value}}</option>
                                                            @endforeach

                                                        </select>
                                                            @error('tag')
                                                            {{$message}}
                                                            @enderror
                                                    </div>
                                              </div>
                                          </div>

                                      </li>


                                      <li class="relative border-b border-gray-200" x-data="{selected:null}">
                                          <button type="button" class="w-full px-8 py-3 text-left" @click="selected !== 2 ? selected = 2 : selected = null">
                                              <div class="flex items-center justify-between">
                                                  <span>
                                                  بارگذاری تصویرشاخص
                                                    </span>
                                                <div class="transform " :class="selected == 2 ? 'rotate-180' : 'rotate-0'"> <i data-feather="chevron-down"></i> </div>
                                              </div>
                                                          </button>

                                          <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                              <div class="p-6">

                                                <div class="md:col-span-full mt-5">
                                                    <div id="holder" class="user-profile flex flex-col items-center m-auto w-[50%]">
                                                       @if (empty($page->image))
                                                       <img src="{{ asset('/storage/site/profile.jpeg') }}">
                                                       @else
                                                       <img src="{{ asset($page->image) }}">
                                                       @endif
                                                    </div>


                                                      <a id="lfm" data-input="thumbnail" data-preview="holder">
                                                       <label class="w-64 m-auto flex justify-center items-center py-1.5 rounded-md tracking-wide uppercase ursor-pointer text-gray ease-linear transition-all duration-150">
                                                           <svg class="animate-bounce h-10 w-10 text-[#00b9c0]" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                               <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                             </svg>
                                                             <div class="flex flex-col">
                                                               <span class="mt-2 text-base leading-normal">انتخاب تصویر شاخص</span>
                                                               <span class="leading-normal text-[10px]">PNG, JPG, GIF up to 10MB</span>
                                                             </div>
                                                             <input id="thumbnail" class="form-control hidden" type="text" name="image" value="{{ $page->image }}" onchange="this.dispatchEvent(new InputEvent('input'))" />
                                                       </label>
                                                      </a>
                                                   </div>
                                              </div>
                                          </div>
                                      </li>


                                      <li class="relative border-b border-gray-200" x-data="{selected:null}">

                                          <button type="button" class="w-full px-8 py-3 text-left" @click="selected !== 3 ? selected = 3 : selected = null">
                                              <div class="flex items-center justify-between">
                                                  <span>
                                                   بارگذاری ویدیو دوره
                                                  </span>
                                                  <div class="transform " :class="selected == 3 ? 'rotate-180' : 'rotate-0'"> <i data-feather="chevron-down"></i> </div>
                                                </div>
                                                          </button>

                                          <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                              <div class="p-6">
                                                <div class="md:col-span-4">
                                                    <a id="video" data-input="video_trader" data-preview="holder">
                                                    <label
                                                    class="flex flex-col w-full h-32 border-2 rounded-lg border-blue-200 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                                    <div class="flex flex-col items-center justify-center pt-7">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400 group-hover:text-gray-600"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                        </svg>
                                                        <p class="pt-1 text-sm tracking-wider @if($page->video)text-green-500 @else text-gray-400 @endif  group-hover:text-gray-600">
                                                            @if ($page->video)
                                                        <span> فایل ویدیو آپلود شد ✔</span>
                                                            @else
                                                            <div class="contents text-gray-400">
                                                                <span > آپلود فایل قرارداد</span>
                                                                <span> فایل های مجاز : docx/pdf</span>
                                                            </div>
                                                            @endif

                                                        </p>
                                                    </div>
                                                    <input class="form-control hidden" type="text" name="video" id="video_trader" value="{{ $page->video }}" onchange="this.dispatchEvent(new InputEvent('input'))" />
                                                 </label>
                                                    </a>
                                              </div>
                                              </div>
                                          </div>

                                      </li>

                                          </ul>
                                  </div>
                                </div>

                                </div>

                          </div>
                    </div>



                  </div>
                  <div class="md:col-span-4 text-left">
                    <div class="inline-flex items-end">
                      <button type="submit" class="w-40 bg-gradient-to-tr from-[#00c7ba] to-[#00abc7] hover:from-[#00abc7] hover:to-[#00c7ba] text-white font-bold py-2 px-6 rounded">بروزرسانی مطلب</button>
                    </div>
                  </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </form>
</div>

@endsection


@section('footer-scripts')
<script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>

<script>

        const editor = CKEDITOR.replace('description' , {
          language: 'fa',
          filebrowserImageBrowseUrl: '{{route('unisharp.lfm.show')}}',
          filebrowserImageUploadUrl: '{{route('unisharp.lfm.show')}}',
              filebrowserBrowseUrl: '{{route('unisharp.lfm.show')}}',
              filebrowserUploadUrl: '{{route('unisharp.lfm.show')}}'
        });
</script>
<script>

    var route_prefix = "{{route('unisharp.lfm.show')}}";
    $('#lfm').filemanager('files', {prefix: route_prefix});
    $('#video').filemanager('files', {prefix: route_prefix});

</script>
<script>
    $('#myselect').select2({
      width: '100%',
      placeholder: "یک گزینه انتخاب کنید ...",
    });
  </script>
@endsection
