<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Pluto | @yield('frontend_title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('backend.layouts.inc.style')

</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            @include('backend.layouts.inc.sidebar')
            <!-- right content -->
            <div id="content">
                @include('backend.layouts.inc.topbar')
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Dashboard</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row column1">
                            @yield('admin_content')
                        </div>
                    </div>
                    @include('backend.layouts.inc.footer')
                </div>
            </div>
        </div>

        @include('backend.layouts.inc.script')

</body>

</html>
