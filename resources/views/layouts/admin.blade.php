<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>House Of Grace | Admin </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/Interface/plugins/fontawesome-free/css/all.min.css">
    
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/Interface/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/Interface/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/Interface/style.css">
    @livewireStyles
    <style>



        .multipleSelection {
            width: 100%;
            background-color: transparent;
        }

        .selectBox {
            position: relative;
            width: 300px;
        }

        .selectBox select {
            width: 100%;
            font-weight: bold;
        }

        .overSelect {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }

        #checkBoxes {
            display: none;
            border: 1px #8DF5E4 solid;
        }

        #emailBoxes {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
           margin-left: 5px;

        }

        #checkBoxes label {
            display: block;
        }



    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="/Interface/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

        <!-- Navbar -->

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <x-Admin.sidebar />
        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <x-footer />
    </div>
    <!-- ./wrapper -->

    @livewireScripts
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="/Interface/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/Interface/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/Interface/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/Interface/dist/js/adminlte.js"></script>

    <!-- PAGE /Interface/PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="/Interface/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="/Interface/plugins/raphael/raphael.min.js"></script>
    <script src="/Interface/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="/Interface/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="/Interface/plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="/Interface/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/Interface/dist/js/pages/dashboard2.js"></script>
</body>

</html>
