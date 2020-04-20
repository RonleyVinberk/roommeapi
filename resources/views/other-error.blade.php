@extends('templates.dashboard')

@section('other_error_content')
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
        ROOMME Test (CRUD API) <small>Other Errors API</small>
    </h3>
    <!-- end page-title -->
    
    <!-- BEGIN DASHBOARD STATS -->
    {{-- start row --}}
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h4 class="heading">Access denied if not a superadmin, when accessing module users</h4>
            <span>Type: <b>GET</b></span>
            <br />
            <pre class="uri-local">roommeapi.roosyendeveloper.com/public/api/master_data/users</pre>
            Example response:
            <img src=" {{ asset('assets/images/api_user/access_denied_except.PNG') }} " alt="" class="img-responsive img" />
        </div>
    </div>
    {{-- end row --}}
    <!-- END DASHBOARD STATS -->
</div>
{{-- end page-content --}}
@endsection