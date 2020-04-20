@extends('templates.dashboard')

@section('building_content')
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
        ROOMME Test (CRUD API) <small>Buildings API</small>
    </h3>
    <!-- end page-title -->
    
    <!-- BEGIN DASHBOARD STATS -->
    {{-- start row --}}
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h4 class="heading">Create building</h4>
            <span>Type: <b>POST</b></span>
            <br />
            <pre class="uri-local">roommeapi.roosyendeveloper.com/public/api/master_data/buildings</pre>
            Example response:
            <img src=" {{ asset('assets/images/api_building/create_building.PNG') }} " alt="" class="img-responsive img" />

            <h4 class="heading">Read all building</h4>
            <span>Type: <b>GET</b></span>
            <br />
            <pre class="uri-local">roommeapi.roosyendeveloper.com/public/api/master_data/buildings</pre>
            Example response:
            <img src=" {{ asset('assets/images/api_building/all_building.PNG') }} " alt="" class="img-responsive img" />
            
            <h4 class="heading">Read detail building by Slug</h4>
            <span>Type: <b>GET</b></span>
            <br />
            <pre class="uri-local">roommeapi.roosyendeveloper.com/public/api/master_data/buildings/roomme-building-1</pre>
            Example response:
            <img src=" {{ asset('assets/images/api_building/detail_building.PNG') }} " alt="" class="img-responsive img" />
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h4 class="heading">Update building by ID</h4>
            <span>Type: <b>PUT</b></span>
            <br />
            <pre class="uri-local">roommeapi.roosyendeveloper.com/public/api/master_data/buildings/1</pre>
            Example response:
            <img src=" {{ asset('assets/images/api_building/update_building.PNG') }} " alt="" class="img-responsive img" />

            <h4 class="heading">Delete building by ID</h4>
            <span>Type: <b>DELETE</b></span>
            <br />
            <pre class="uri-local">roommeapi.roosyendeveloper.com/public/api/master_data/buildings/6</pre>
            Example response:
            <img src=" {{ asset('assets/images/api_building/delete_building.PNG') }} " alt="" class="img-responsive img" />

            <h4 class="heading">Building name blank </h4>
            <span>Type: <b>PUT</b></span>
            <br />
            <pre class="uri-local">roommeapi.roosyendeveloper.com/public/api/master_data/buildings/7</pre>
            Example response:
            <img src=" {{ asset('assets/images/api_building/error/building_name_blank.PNG') }} " alt="" class="img-responsive img" />

            <h4 class="heading">Building name already registered </h4>
            <span>Type: <b>POST</b></span>
            <br />
            <pre class="uri-local">roommeapi.roosyendeveloper.com/public/api/master_data/buildings</pre>
            Example response:
            <img src=" {{ asset('assets/images/api_building/error/building_name_already_registered.PNG') }} " alt="" class="img-responsive img" />
        </div>
    </div>
    {{-- end row --}}
    <!-- END DASHBOARD STATS -->
</div>
{{-- end page-content --}}
@endsection

