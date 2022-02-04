<div>

    <div class="bg-gray-100 flex items-center justify-center">
        <div class="container mx-auto">
          <div>
               <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
              <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-2">
                <div class="text-gray-600">
                  <p class="font-medium text-lg">اطلاعات دسته بندی</p>
                  <p>نام دسته را وارد نمایید:</p>
                  <input hidden wire:model="category_id" name="category_id">
                </div>
                <div class="lg:col-span-2">
                  <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
                    <div class="md:col-span-2">
                      <input wire:model="name" type="text" name="name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                      @error('name')
                      {{$message}}
                      @enderror





                      <div class="mt-5">
                        <div id="holder" class="thumbnail-img flex flex-col items-center m-auto w-full h-[160px]">
                           @if (empty($cover))
                           <img src="{{ asset('/storage/site/holder.png') }}">
                           @else
                           <img src="{{ asset($cover) }}">
                           @endif
                        </div>


                          <a id="lfm" data-input="thumbnail" data-preview="holder">
                           <label class="w-64 m-auto flex justify-center items-center py-1.5 rounded-md tracking-wide uppercase ursor-pointer text-gray ease-linear transition-all duration-150">
                               <svg class="animate-[image_1s_ease-in-out_infinite] h-10 w-10 text-[#00b9c0]" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                   <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                                 <div class="flex flex-col">
                                   <span class="mt-2 text-base leading-normal">انتخاب تصویر شاخص</span>
                                   <span class="leading-normal text-[10px]">PNG, JPG, GIF up to 10MB</span>
                                 </div>
                                 <input wire:model="cover" id="thumbnail" class="form-control hidden" type="text" name="cover"  onchange="this.dispatchEvent(new InputEvent('input'))" />
                           </label>
                          </a>
                       </div>
                       <script>
                        var route_prefix = "{{route('unisharp.lfm.show')}}";
                            $('#lfm').filemanager('files', {prefix: route_prefix});

                        </script>



                    </div>


                    <div class="md:col-span-2 text-left mt-auto">
                      <div class="inline-flex items-end">
                        <button wire:click.prevent="cancel()" class="w-40 ml-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            انصراف
                          </button>
                        <button wire:click.prevent="update()" class="w-40 bg-gradient-to-tr from-[#00c7ba] to-[#00abc7] hover:from-[#00abc7] hover:to-[#00c7ba] text-white font-bold py-2 px-6 rounded">بروزرسانی دسته</button>
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
