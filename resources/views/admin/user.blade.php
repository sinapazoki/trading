@extends('admin.master')
@section('title' , 'مدیریت کاربران')
@section('header-scripts')
<script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
@endsection


@section('content')
@livewire('user-form')
@endsection


@section('footer-scripts')
<script>

    var route_prefix = "laravel-filemanager";
    $('#lfm').filemanager('files', {prefix: route_prefix});

</script>

@endsection
