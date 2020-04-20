
    {{-- start page-footer --}}
    <div class="page-footer">
        {{-- start page-footer-inner --}}
        <div class="page-footer-inner">
            &copy; {{ date('Y') }} ROOMME TES (CRUD API) | Created by Roosyen
        </div>
        {{-- end page-footer-inner --}}

        {{-- start scroll-to-top --}}
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
        {{-- end scroll-to-top --}}
    </div>
    {{-- end page-footer --}}
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <!--[if lt IE 9]>
    <script src="../../assets/global/plugins/respond.min.js"></script>
    <script src="../../assets/global/plugins/excanvas.min.js"></script>
    <![endif]-->
    <script src=" {{ asset('assets/metronic/global/plugins/jquery-migrate.min.js') }} " type="text/javascript"></script>
    <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src=" {{ asset('assets/metronic/global/plugins/jquery-ui/jquery-ui.min.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/metronic/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/metronic/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/metronic/global/plugins/jquery.blockui.min.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/metronic/global/plugins/jquery.cokie.min.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/metronic/global/plugins/uniform/jquery.uniform.min.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/metronic/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }} " type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src=" {{ asset('assets/metronic/global/scripts/metronic.js') }} "></script>
    <script src=" {{ asset('assets/metronic/admin/layout/scripts/layout.js') }} "></script>
    <script src=" {{ asset('assets/metronic/admin/layout/scripts/quick-sidebar.js') }} "></script>
    <script src=" {{ asset('assets/metronic/admin/pages/scripts/index.js') }} "></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
    $(document).ready(function() {
        Index.init();
        Layout.init(); // init layout
        Metronic.init(); // init metronic core componets
        QuickSidebar.init(); // init quick sidebar
    });
    </script>
    <!-- END JAVASCRIPTS -->
    </body>
</html>