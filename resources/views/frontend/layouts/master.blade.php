<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    @include('frontend.layouts.inc.style')

</head>

<body>
    <div class="hero_area">
        @include('frontend.layouts.inc.header')

        @yield('frontend_content')

        @include('frontend.layouts.inc.footer')

        @include('frontend.layouts.inc.script')
    </div>
</body>

</html>
