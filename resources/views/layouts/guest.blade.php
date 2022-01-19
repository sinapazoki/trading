@extends('site.layouts.master')
@section('title' , 'صفحه اصلی')
@section('header-scripts')
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="{{ asset('js/app.js') }}" defer></script>
@endsection


@section('content')
        <div>
    <img class="absolute ml-auto w-[50%] h-[80%] z-0 hidden sm:hidden md:block rounded-bl-[20%]" src="{{asset('/storage/site/curved.jpg')}}" alt="image">
     </div>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
@endsection


