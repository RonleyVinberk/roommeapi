@extends('templates/dashboard')

@section('dashboard_content')
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
        ROOMME <small>Test (CRUD API)</small>
    </h3>
    <!-- end page-title -->
    
    <!-- BEGIN DASHBOARD STATS -->
    {{-- start row --}}
    <div class="row">
         
    </div>
    {{-- end row --}}
    <!-- END DASHBOARD STATS -->
</div>
{{-- end page-content --}}
@endsection
