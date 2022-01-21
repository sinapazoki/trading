<div>

    <div class="bg-gray-100 flex items-center justify-center">
        <div class="container mx-auto">
          <div>
               <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
              <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                <div class="text-gray-600">
                  <p class="font-medium text-lg">اطلاعات فردی</p>
                  <p>اطلاعات کاربر مورد نظر را وارد نمایید:</p>


                  <div class="md:col-span-full mt-5">
                 <div id="holder" class="user-profile flex flex-col items-center m-auto w-[50%]">
                    @if (empty($image))
                    <img src="{{ asset('/storage/site/profile.jpeg') }}">
                    @else
                    <img src="{{ asset($image) }}">
                    @endif
                 </div>


                   <a id="lfm" data-input="thumbnail" data-preview="holder">
                    <label class="w-64 m-auto flex justify-center items-center py-1.5 rounded-md tracking-wide uppercase ursor-pointer text-gray ease-linear transition-all duration-150">
                        <svg class="animate-[image_1s_ease-in-out_infinite] h-10 w-10 text-[#00b9c0]" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                          <div class="flex flex-col">
                            <span class="mt-2 text-base leading-normal">آپلود نمایه کاربر</span>
                            <span class="leading-normal text-[10px]">PNG, JPG, GIF up to 10MB</span>
                          </div>
                          <input wire:model="image" id="thumbnail" class="form-control hidden" type="text" name="image"  onchange="this.dispatchEvent(new InputEvent('input'))" />
                    </label>
                   </a>
                </div>
                </div>

                <div class="lg:col-span-2">
                  <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
                    <div class="md:col-span-2">
                      <label for="name">نام و نام خانوادگی</label>
                      <input wire:model="name" type="text" name="name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                      @error('name')
                      {{$message}}
                      @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="phone">شماره تماس</label>
                        <input wire:model="phone" type="text" name="phone" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="09123456789" />
                        @error('phone')
                        {{$message}}
                          @enderror
                    </div>

                    <div class="md:col-span-4">
                      <label for="email">آدرس ایمیل</label>
                      <input wire:model="email" type="email" name="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="email@domain.com" />
                      @error('email')
                      {{$message}}
                     @enderror
                    </div>

                    <div class="md:col-span-4">
                      <label for="description">درباره کاربر</label>
                      <textarea wire:model="description" name="description" class="h-30 border mt-1 rounded px-4 w-full bg-gray-50">اطلاعات فردی کاربر</textarea>
                      @error('description')
                      {{$message}}
                       @enderror
                    </div>

                    <div class="md:col-span-2">
                      <label for="password">رمز عبور (حداقل 8 کاراکتر)</label>
                      <input wire:model="password" type="password" name="password" class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                      @error('password')
                      {{$message}}
                        @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="role">نقش کاربر</label>
                        <select wire:model="role" name="role" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                            <option value="" selected hidden>انتخاب کنید</option>
                            @foreach ($roles as $role )
                            <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach

                          </select>
                             @error('role')
                             {{$message}}
                            @enderror
                      </div>

                    <div class="md:col-span-5">
                      <div class="inline-flex items-center">
                        <input wire:model="sms" type="checkbox" name="sms" class="form-checkbox" />
                        <label for="sms" class="mr-2">پیامک اطلاعات برای کاربر ارسال شود</label>
                      </div>
                    </div>

                    <div class="md:col-span-4 text-left">
                      <div class="inline-flex items-end">
                        <button wire:click.prevent="store()" class="w-40 bg-gradient-to-tr from-[#00c7ba] to-[#00abc7] hover:from-[#00abc7] hover:to-[#00c7ba] text-white font-bold py-2 px-6 rounded">ثبت کاربر</button>
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
