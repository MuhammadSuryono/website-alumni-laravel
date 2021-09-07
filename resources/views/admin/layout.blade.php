<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alumni SMAN 6 Lubuklinggau | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset("template/admin/plugins/fontawesome-free/css/all.min.css") }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset("template/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("template/admin/dist/css/adminlte.min.css") }}">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="{{ url("template/images/logo-alumni.png") }}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    @include("admin.partials._header")
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include("admin.partials._menu")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include("admin.partials._breadcrumb")
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                @yield("content")
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include("admin.partials._footer")
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset("template/admin/plugins/jquery/jquery.min.js") }}"></script>
<!-- Bootstrap -->
<script src="{{ asset("template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset("template/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("template/admin/dist/js/adminlte.js") }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset("template/admin/plugins/jquery-mousewheel/jquery.mousewheel.js") }}"></script>
<script src="{{ asset("template/admin/plugins/raphael/raphael.min.js") }}"></script>
<script src="{{ asset("template/admin/plugins/jquery-mapael/jquery.mapael.min.js") }}"></script>
<script src="{{ asset("template/admin/plugins/jquery-mapael/maps/usa_states.min.js") }}"></script>
<!-- ChartJS -->
<script src="{{ asset("template/admin/plugins/chart.js/Chart.min.js") }}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset("template/admin/dist/js/demo.js") }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset("template/admin/dist/js/pages/dashboard2.js") }}"></script>
</body>
</html>
