  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <base href="{{ \URL::to('/') }}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <div class="animation-shake" style="
              border-radius : 50%;
          margin : 0 15px;
          width : 80px;
          aspect-ratio : 1/1;
          background-image : url('https://ak.picdn.net/shutterstock/videos/1054592909/thumb/6.jpg');
          background-repeat : no-repeat;
          background-size : cover;
          background-position : center;">
    </div>
    <!-- <img class="animation__shake" src="https://ak.picdn.net/shutterstock/videos/1054592909/thumb/6.jpg" alt="AdminLTELogo" style="border-radius:50%"> -->
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();" >
          <span class="mr-1">Se Déconnecter</span>
          <i class="fas fa-sign-out-alt"></i>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary border-right">
    <!-- Brand Logo -->
    <a href="/" class="brand-link d-flex align-items-center">
      <div class="brand"
        style="
          border-radius : 50%;
          margin : 0 15px;
          width : 30px;
          aspect-ratio : 1/1;
          background-image : url('https://ak.picdn.net/shutterstock/videos/1054592909/thumb/6.jpg');
          background-repeat : no-repeat;
          background-size : cover;
          background-position : center;
        "
      ></div>
      <!-- <img src="https://ak.picdn.net/shutterstock/videos/1054592909/thumb/6.jpg" alt="Reservation Logo" class="brand-image img-circle" > -->
      <span class="brand-text font-weight-light">Reservation</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
        <div 
          style="
            box-sizing : border-box;
            border-radius : 50%;
            display : flex;
            justify-content : center;
            align-items : center;
            font-size : 1.5rem; 
            width : 40px;
            aspect-ratio : 1/1;
            margin : 0 15px;
            aspect-ratio : 1/1;
            background : black;
            color : white;
          "
        >
        {{ Auth::user()->name[0] }}
        </div>
        <div class="text-bold">
          <a href="/dashboard" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/dashboard" class="nav-link dashboard">
              <i class="nav-icon fas fa-home"></i>
              <p style="text-transform : uppercase;">
                Tableau de bord
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a style="cursor : pointer" class="nav-link evenement">
              <i class="nav-icon fas fa-table"></i>
              <p style="text-transform : uppercase;">
                événements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview evenement-tree">
              <li class="nav-item">
                <a href="/evenement/create" class="nav-link evenement-create">
                  <i class="fas fa-arrow-right nav-icon"></i>
                  <p>Creation d'événement</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/evenement" class="nav-link evenement-liste">
                  <i class="fas fa-arrow-right nav-icon"></i>
                  <p>Liste des événements</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021-2022 <a href="#">Reservation.com</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script>
  setActive = anchor => {
    anchor.classList.add('active')
  }
</script>
</body>
</html>

