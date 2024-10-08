<!doctype html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Okene LG LIS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Okene Local Government Land Management System">
        <meta name="keywords" content="Land, Property, Sales, HTML, Clean, Modern">
        <meta name="author" content="Shreethemes">

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- Tobii Slider -->
        <link href="{{ asset('assets/libs/tobii/css/tobii.min.css')}}" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap-green.min.css') }}" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />
        <!-- Style Css-->
        <link href="{{ asset('assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style-green.min.css') }}" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css" />
        @livewireStyles()
        @vite('resources/css/app.css')


    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        @include('layouts.partial.navbar')


        @yield('content')


        @include('layouts.partial.slider')

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
        <!-- Back to top -->

        @livewireScripts()
        <script>
            document.addEventListener('livewire:initialized', function () {
                Livewire.on('openLoginModal', () => {
                    var offcanvasElement = new bootstrap.Offcanvas(document.getElementById('offcanvasRight'));
                    offcanvasElement.show();
                });
            });
        </script>

        <!-- javascript -->
        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Tobii Slider -->
        <script src="{{ asset('assets/libs/tobii/js/tobii.min.js')}}"></script>
        <!-- SLIDER -->
        <script src="{{ asset('assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
        <script src="{{ asset('assets/js/easy_background.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.init.js') }}"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
        <script src="{{ asset('assets/js/app.js') }}"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->

        <script>
            easy_background("#home",
                {
                    slide: ["assets/images/real/1.jpg", "assets/images/real/2.jpg", "assets/images/real/3.jpg", "assets/images/real/4.jpg"],
                    delay: [4000, 4000, 4000]
                }
            );
        </script>
    </body>
</html>
