<div>
    @if ($updateMode)
    @include('livewire.pages.page-update')
    @else
    @include('livewire.pages.page-create')

    @endif

    <div class="flex items-center justify-center">
        <div class="container">
            <table class="w-full bg-white flex flex-row text-right flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                <thead class="text-white text-center">
                    <tr class="bg-gradient-to-tr from-[#00c7ba] to-[#00abc7] flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                        <th class="px-4 py-3">آیدی</th>
                        <th class="px-4 py-3 text-right">عنوان دوره</th>
                        <th class="px-4 py-3">برچسب ها</th>
                        <th class="px-4 py-3">تاریخ انتشار</th>
                        <th class="px-4 py-3">وضعیت</th>
                        <th class="px-4 py-3">اقدامات</th>
                    </tr>
                </thead>
                <tbody class="flex-1 sm:flex-none">
                    @foreach ( $pages as $page)
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 transition sm:mb-0 hover:bg-gray-100 text-gray-700 text-center">
                        <td class="px-4 py-3 text-sm">
                            {{$page->id}}
                          </td>
                        <td class="px-4 py-3">
                          <div class="flex items-center text-sm">
                            <div class="relative hidden w-8 h-8 ml-3 rounded-full md:block">
                                @if ($page->image)
                                <img class="object-cover w-full h-full rounded-full" src="{{asset($page->image)}}" alt="" loading="lazy">
                                @else
                                <img class="object-cover w-full h-full rounded-full" src="{{asset('/storage/site/thumbs/profile.jpeg')}}" alt="" loading="lazy">
                                @endif
                              <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                            </div>
                            <div class="text-right">
                              <p class="font-semibold">{{$page->name}}</p>
                              <p class="text-xs hover:text-cyan-400	 text-gray-600 dark:text-gray-400">
                                  <a target="_blank" href="{{asset('pages/'.$page->slug)}}">مشاهده</a>
                              </p>
                            </div>
                          </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            @if (count($page->tags)>0)
                            <ul>
                                @foreach ( $page->tags as $tag )
                                <li>{{$tag->name}}</li>
                               @endforeach
                            </ul>
                            @else
                            بدون برچسب
                            @endif

                        </td>
                        <td class="px-4 py-3 text-sm">
                            <div class="text-right inline-block">
                                <p class="font-semibold">آخرین ویرایش</p>
                                <p class="text-xs text-gray-600 dark:text-gray-400">
                                    {{jdate($page->updated_at)->format('%d %B، %Y')}}
                                </p>
                              </div>
                        </td>
                        <td class="px-4 py-3 text-xs">
                            @if ($page->status == 1)
                            <a wire:click="status({{ $page->id }})" class="cursor-pointer justify-center flex items-center text-green-600"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square w-4 h-4 mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                          تایید شده
                            </a>
                           @else
                           <a wire:click="status({{ $page->id }})" class="cursor-pointer justify-center flex items-center text-red-600"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square w-4 h-4 mr-2 text-red"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                        تایید نشده
                           @endif </a>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <div class="flex justify-center items-center">
                                <a class="cursor-pointer flex items-center mr-3 pl-2 border-l-2" href="{{route('admin.page.edit' , $page->id)}}"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square w-4 h-4 mr-1"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg> ویرایش </a>
                                <a class="text-rose-600 cursor-pointer flex items-center text-theme-6 pr-2" onclick="confirm('آیا از حذف کاربر مطمئن هستید ؟') || event.stopImmediatePropagation()" wire:click="delete({{ $page->id }})"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 w-4 h-4 mr-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> حذف </a>
                            </div>
                        </td>
                      </tr>

                    @endforeach

                </tbody>
            </table>
            {{ $pages->links() }}

        </div>
      </div>

</div>
