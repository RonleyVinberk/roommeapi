@extends('templates.dashboard')

@section('login_content')
{{-- start page-content --}}
<div class="page-content">
    {{-- BEGIN PAGE HEADER --}}
    {{-- start page-bar --}}
    <div class="page-bar">
        {{-- start page-breadcrumb --}}
        {{-- <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Dashboard</a>
            </li>
        </ul> --}}
        {{-- end page-breadcrumb --}}
 
        {{-- start page-toolbar --}}
        {{-- <div class="page-toolbar">
            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
            </div>
        </div> --}}
        {{-- end page-toolbar --}}
    </div>
    {{-- end page-bar --}}
    {{-- END PAGE HEADER --}}

    <!-- start page-title -->
    <h3 class="page-title">
        ROOMME Test (CRUD API) <small>Login API</small>
    </h3>
    <!-- end page-title -->
    
    <!-- BEGIN DASHBOARD STATS -->
    {{-- start row --}}
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h4 class="heading">Login User</h4>
            <span>Type: <b>POST</b></span>
            <br />
            <pre class="uri-local">roommeapi.roosyendeveloper.com/public/api/login</pre>
            Example response:
            <img src=" {{ asset('assets/images/api_login/success_login.PNG') }} " alt="" class="img-responsive img" style="min-width: 60vw;" />

            <h4 class="heading">Email blank</h4>
            <span>Type: <b>POST</b></span>
            <br />
            <pre class="uri-local">roommeapi.roosyendeveloper.com/public/api/login</pre>
            Example response:
            <img src=" {{ asset('assets/images/api_login/error/email_blank.PNG') }} " alt="" class="img-responsive img" />
            
            <h4 class="heading">Password blank</h4>
            <span>Type: <b>POST</b></span>
            <br />
            <pre class="uri-local">roommeapi.roosyendeveloper.com/public/api/login</pre>
            Example response:
            <img src=" {{ asset('assets/images/api_login/error/password_blank.PNG') }} " alt="" class="img-responsive img" />
            
            <h4 class="heading">Email or Password invalid</h4>
            <span>Type: <b>POST</b></span>
            <br />
            <pre class="uri-local">roommeapi.roosyendeveloper.com/public/api/login</pre>
            Example response:
            <img src=" {{ asset('assets/images/api_login/error/email_or_password_invalid.PNG') }} " alt="" class="img-responsive img" />
        </div>
    </div>
    {{-- end row --}}
    <!-- END DASHBOARD STATS -->
</div>
{{-- end page-content --}}
@endsection
