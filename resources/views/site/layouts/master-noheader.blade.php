<!DOCTYPE html>
<html lang="fa" dir="rtl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script defer src="https://unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://unpkg.com/feather-icons"></script>

        @section('header-scripts')

        @show
        <title>  @yield('title')</title>
   </head>


        <body class="main font-iranyekan bg-[#f3f4f6]">

<!-- This example requires Tailwind CSS v2.0+ -->


              <main>

                    @section('content')

                    @show

              </main>

          <script>
            feather.replace()
          </script>
            @section('footer-scripts')

            @show

        </body>


</html>
