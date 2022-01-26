@extends('site.layouts.master-noheader')
@section('title' , 'صفحه اصلی')
@section('header-scripts')
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="{{ asset('js/app.js') }}" defer></script>
@endsection


@section('content')
        <div>
    <img class="absolute ml-auto w-full h-full z-0 md:block" src="{{asset('/storage/site-front/login.jpg')}}" alt="image">
     </div>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
@endsection


