<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title> {{ $data['title'] }} </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    
    <link href=" {{ asset('assets/metronic/global/plugins/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet" />
    <link href=" {{ asset('assets/metronic/global/plugins/uniform/css/uniform.default.css') }} " rel="stylesheet" />
    <link href=" {{ asset('assets/metronic/global/plugins/font-awesome/css/font-awesome.min.css') }} " rel="stylesheet" />
    <link href=" {{ asset('assets/metronic/global/plugins/simple-line-icons/simple-line-icons.min.css') }} " rel="stylesheet" />
    <link href=" {{ asset('assets/metronic/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }} " rel="stylesheet" />
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href=" {{ asset('assets/metronic/admin/pages/css/profile-old.css') }} " rel="stylesheet" />
    <link href=" {{ asset('assets/metronic/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }} " rel="stylesheet" />
    <!-- END PAGE LEVEL STYLES -->
    
    <!-- BEGIN THEME STYLES -->
    <link href=" {{ asset('assets/metronic/global/css/plugins-md.css') }} " rel="stylesheet" />
    <link href=" {{ asset('assets/metronic/admin/layout/css/layout.css') }} " rel="stylesheet" />
    <link href=" {{ asset('assets/metronic/admin/layout/css/custom.css') }} " rel="stylesheet" />

    <link href=" {{ asset('assets/metronic/global/css/components-md.css') }} " rel="stylesheet" id="style_components" />
    <link href=" {{ asset('assets/metronic/admin/layout/css/themes/darkblue.css')}} " rel="stylesheet" id="style_color" />
    <!-- END THEME STYLES -->

    {{-- BEGIN PAGE LEVEL PLUGINS --}}
    <script src=" {{ asset('assets/metronic/global/plugins/jquery.min.js') }} "></script>
    <script src=" {{ asset('assets/metronic/global/plugins/bootstrap/js/bootstrap.min.js') }} "></script>
    {{-- END PAGE LEVEL PLUGINS --}}

    <link rel="shortcut icon" href=" {{ asset('assets/inpf/ico/favicon.ico') }} "/>
    <style>
        img.img {
            max-width: 30vw;
        }
        pre.uri-local {
            position: relative;
            bottom: -5px;
        }
    </style>
</head>
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
    {{-- start header --}}
    <div class="page-header -i navbar navbar-fixed-top">
        @include('template_parts.header')
    </div>
    {{-- end header --}}

    <div class="clearfix"></div>

    {{-- start container --}}
    <div class="page-container">
        @include('template_parts.sidebar')

        {{-- start content --}}
        <div class="page-content-wrapper">
            @yield('room_content')
            @yield('user_content')
            @yield('login_content')
            @yield('readme_content')
            @yield('building_content')
            @yield('dashboard_content')
            @yield('other_error_content')
        </div>
        {{-- end content --}}
    </div>
    {{-- end container --}}

    @include('template_parts.footer')
