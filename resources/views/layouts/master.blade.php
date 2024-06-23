<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="icon" href="{{ url($setting->path_logo) }}" type="image/img">
  <title>{{ $setting->nama_perusahaan }} | @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/dist/css/adminlte.min.css') }}">
  <!-- Table -->


<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<!-- DataTables Bootstrap 4 CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

@stack('css')

</head>
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">



  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light" style="background-color: #e3f2fd;">
    <!-- Left navbar links -->

  </nav>
  <!-- /.navbar -->
  @includeIf('layouts.header')
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color: #e3f2fd;">
    <!-- Brand Logo -->
    <a href="{{ route('setting.index') }}" class="brand-link" style="background-color: #e3f2fd;">
      <img src="{{ url($setting->path_logo) }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: 100%">
      <span class="brand-text font-weight-light" >{{ $setting->nama_perusahaan }}</span>
    </a>

    @includeIf('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                @section('breadcrumb')
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-house-user"></i> Home</a></li>
                @show


            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        @yield('content')
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light" style="background-color: #e3f2fd;">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

@includeIf('layouts.footer')

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE-3.2.0/dist/js/adminlte.js') }}"></script>
<!-- jQuery -->

<!-- DataTables -->
<!-- DataTables Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->

<script src="{{ asset('AdminLTE-3.2.0/plugins/datatables/jquery.dataTables.min.js') }}"></script>

<!-- Validator -->
<script src="{{ asset('js/validator.min.js') }}"></script>



@stack('scripts')
</body>
</html>
