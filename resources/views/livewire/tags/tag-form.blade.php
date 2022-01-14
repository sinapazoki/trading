<div>

    @if ($updateMode)
    @include('livewire.tags.tag-update')
    @else
    @include('livewire.tags.tag-create')

    @endif

    <div class="flex items-center justify-center">
        <div class="container">
            <table class="w-full bg-white flex flex-row text-right flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                <thead class="text-white text-center">
                    <tr class="bg-gradient-to-tr from-[#00c7ba] to-[#00abc7] flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                        <th class="px-4 py-3">آیدی</th>
                        <th class="px-4 py-3 text-right">نام برچسب</th>
                        <th class="px-4 py-3">نامک</th>
                        <th class="px-4 py-3">تاریخ انتشار</th>
                        <th class="px-4 py-3">تعداد</th>
                        <th class="px-4 py-3">اقدامات</th>
                    </tr>
                </thead>
                <tbody class="flex-1 sm:flex-none">
                    @foreach ( $tags as $tag)
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 transition sm:mb-0 hover:bg-gray-100 text-gray-700 text-center">
                        <td class="px-4 py-3 text-sm">
                            {{$tag->id}}

                          </td>
                        <td class="px-4 py-3 text-sm text-right">
                            {{$tag->name}}
                           </td>
                           <td class="px-4 py-3 text-sm">
                            {{$tag->slug}}
                           </td>
                        <td class="px-4 py-3 text-sm">
                            <div class="text-right inline-block">
                                <p class="font-semibold">آخرین ویرایش</p>
                                <p class="text-xs text-gray-600 dark:text-gray-400">
                                    {{jdate($tag->updated_at)->format('%d %B، %Y')}}
                                </p>
                              </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{count($tag->pages)}}

                           </td>
                        <td class="px-4 py-3 text-sm">
                            <div class="flex justify-center items-center">
                                <a class="cursor-pointer flex items-center mr-3 pl-2 border-l-2" wire:click="edit({{ $tag->id }})"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square w-4 h-4 mr-1"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg> ویرایش </a>
                                <a class="text-rose-600 cursor-pointer flex items-center text-theme-6 pr-2" onclick="confirm('آیا از حذف آیتم مطمئن هستید ؟') || event.stopImmediatePropagation()" wire:click="delete({{ $tag->id }})"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 w-4 h-4 mr-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> حذف </a>
                            </div>
                        </td>
                      </tr>

                    @endforeach

                </tbody>
            </table>

        </div>
      </div>

</div>
