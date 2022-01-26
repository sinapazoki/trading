<x-guest-layout>
    <x-auth-card>


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
            <div class="md:col-span-4 relative text-center text-white text-2xl p-5" >
                ورود / عضویت
            </div>
            <div class="md:col-span-2 relative" >
            <form class="sm:pl-3" method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <div class="relative mt-1">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-900 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                      </div>
                    <x-input id="email" placeholder="آدرس ایمیل" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <div class="relative mt-1">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4 8V6a6 6 0 1 1 12 0h-3v2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z"/></svg>
                         </div>
                    <x-input id="password" placeholder="رمز عبور" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                       </div>
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="mr-2 text-sm text-white font-iranyekan">{{ __('مرا به خاطر بسپار') }}</span>
                    </label>
                </div>

                <div class="flex items-center flex-col mt-2">

                    <x-button class="font-iranyekan mb-3 w-full justify-center items-center text-center bg-gradient-to-tr from-[#00c7ba] to-[#00abc7] ">
                        {{ __('ورود به سایت') }}
                    </x-button>

                    @if (Route::has('password.request'))
                        <a class="text-sm text-white hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('رمز عبور خود را فراموش کردید ؟') }}
                        </a>
                    @endif

                </div>
            </form>
                <hr class="vertical white hidden sm:block">
          </div>


           <div class="md:col-span-2 border-t md:border-0 relative">

            <div class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-[#00c7ba]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                </svg>
            </div>
            <p class="text-justify text-white text-lg leading-7">
                جهت ثبت نام در سایت و دسترسی به محتوای ویژه لطفا عبارت "ثبت نام" را در دایرکت پیج اینستاگرام تریدینگ ورلد ارسال کنید.
            </p>
            <button type="button" class="flex text-white mt-2 justify-center w-full bg-gradient-to-r hover:from-indigo-600 hover:via-pink-600 hover:to-red-600 focus:outline-none hover:text-white text-md uppercase font-bold border-2 rounded-lg mx-auto">
                <div class="flex sm:flex-cols-12 gap-2 p-1 flex-row-reverse items-center">
                    <div class="col-span-1 px-2 border-r">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="w-5 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                          </svg>
                    </div>
                    <div class="col-span-2">Trading World</div>
                </div>
            </button>
        </div>
        <div class="md:col-span-4 relative text-center text-white text-sm p-5" >
            <a href="/">بازگشت به صفحه اصلی
            </a>
        </div>
        </div>


    </x-auth-card>
</x-guest-layout>
