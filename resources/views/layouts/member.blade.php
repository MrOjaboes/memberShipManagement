
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>House Of Grace | Home </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/Interface/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/Interface/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/Interface/dist/css/adminlte.min.css">
  @livewireStyles
  <style>
       .profile-user-img {
            border: 3px solid gainsboro;
            margin: 0 auto;
            padding: 3px;
            width: 150px;
        }

      [class*=sidebar-dark-] .sidebar a {
    color: white;
}
a {
    color: #DB261D;
    text-decoration: none;
    background-color: transparent;
}
.card-primary:not(.card-outline)>.card-header {
    background-color: #DB261D;
}
 .btn-danger,.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #DB261D;
}
.card-primary.card-outline {
    border-top: 3px solid #DB261D;
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
  <x-Member.sidebar/>
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
