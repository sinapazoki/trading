<div>

    <div class="bg-gray-100 flex items-center justify-center">
        <div class="container mx-auto">
          <div>
               <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
              <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-2">
                <div class="text-gray-600">
                  <p class="font-medium text-lg">اطلاعات دسته بندی</p>
                  <p>نام دسته را وارد نمایید:</p>
                </div>
                <div class="lg:col-span-2">
                  <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
                    <div class="md:col-span-2">
                      <input wire:model="name" type="text" name="name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                      @error('name')
                      {{$message}}
                      @enderror
                    </div>

                       <div class="md:col-span-2 text-left mt-auto">
                      <div class="inline-flex items-end">
                        <button wire:click.prevent="store()" class="w-40 bg-gradient-to-tr from-[#00c7ba] to-[#00abc7] hover:from-[#00abc7] hover:to-[#00c7ba] text-white font-bold py-2 px-6 rounded">ایجاد دسته</button>
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
