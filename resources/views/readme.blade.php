@extends('templates.dashboard')

@section('readme_content')
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
        ROOMME Test (CRUD API) <small>Readme</small>
    </h3>
    <!-- end page-title -->
    
    <!-- BEGIN DASHBOARD STATS -->
    {{-- start row --}}
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h4 class="heading">Readme (Online)</h4>
            <ol>
                <li>Turn on your internet.</li>
                <li>Open your Postman application</li>
                <li>
                    Copy paste url from every module API and test on Postman application
                </li>
            </ol>

            <p>
                I'll provide username and password that you can use, btw. <br>
                Login as Superadmin.
                <ol>
                    <li>Username: <code>superadmin@roomme.com</code></li>
                    <li>Password: <code>superadmin@roomme.com</code></li>
                </ol>
    
                Login as Admin Building
                <ol>
                    <li>Username: <code>adminbuilding@roomme.com</code></li>
                    <li>Password: <code> adminbuilding@roomme.com</code></li>
                </ol>
            </p>


            <h4 class="heading">Readme (Offline)</h4>
            <ol>
                <li>Turn on your web server application (XAMPP or LAMPP or Laragon, etc)</li>
                <li>Open your Postman application</li>
                <li>git clone or download from </li>
                <li>Run <pre>composer update</pre> to update your depencencies as they are specified in <code>composer.json</code> </li>
                <li>Setting database name, database username, database password on file .env</li>
                <li>Run <pre>php artisan migrate</pre> to create tables on database what you use</li>
                <li>
                    Run <pre>php artisan passport:install</pre> to get Client ID and Client Secret from Personal access client and Password grant client
                </li>
                <li>
                    I suggest you to create email and password for Superadmin by your own. After that you can use to test login API on ROOMME TEST (CRUD API) on Postman application.
                    You can use phpmyadmin or SQLyog to insert them.
                </li>
                <li>
                    Run <pre>php artisan serve</pre> to run ROOMME TES (CRUD API) and test Login API, Buildings API, Rooms API, Users API on Postman application.
                </li>
            </ol>
        </div>
    </div>
    {{-- end row --}}
    <!-- END DASHBOARD STATS -->
</div>
{{-- end page-content --}}
@endsection

