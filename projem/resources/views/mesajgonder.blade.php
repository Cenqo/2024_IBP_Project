<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      margin: 0;
      padding: 0;
    }
    .container-fluid {
      margin-top: 20px;
    }
    h1 {
      text-align: center;
      margin-bottom: 20px;
    }
    .table {
      margin-top: 20px;
    }
    .form-group label {
      font-weight: bold;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #004085;
    }
    .main-header .navbar-nav .nav-link {
      color: #ffffff;
    }
    .main-header .navbar-nav .nav-link:hover {
      color: #007bff;
    }
    .main-header .navbar {
      background-color: #343a40;
    }
    .main-footer {
      background-color: #343a40;
      color: #ffffff;
    }
    .breadcrumb a {
      color: #007bff;
    }
    .breadcrumb a:hover {
      color: #0056b3;
    }
    .content-wrapper {
      padding: 20px;
    }

    body.sidebar-collapse .main-sidebar {
      width: 80px;
    }
    body.sidebar-collapse .content-wrapper {
      margin-left: 80px;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Açılır menü -->
<div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Sayfalar
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="{{route('user.dashboard')}}">Ana sayfa</a>
        <a class="dropdown-item" href="{{route('duyurularabak')}}">Duyurular</a>
        <a class="dropdown-item" href="{{route('mesajgonder')}}">Mesaj Gonder</a>
        <a class="dropdown-item" href="{{route('urunler.index')}}">Urunler</a>
      </div>
    </li>

  </ul>
</div>

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

     
         
    
      <!-- Notifications Dropdown Menu -->
      
       
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
     
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('login')}}">Logout</a></li>
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    
    <div class="container">
    <div class="container">
        <h1>Mesaj Gönder</h1>
        <form action="{{ route('mesaj.store') }}" method="post">
            @csrf
            <div class="form-group">
                
                <label>Gonderen:</label>
                <input type ="text" name="sender" required placeholder="Enter Your Name">
                <br>
                <label for="texts">Mesaj:</label>
                <textarea id="texts" name="texts" class="form-control" rows="3"></textarea>
                

            </div>
            <button type="submit" class="btn btn-primary">Gönder</button>


            <h1>Kullanicilarin Gönderdiği Mesajlar</h1>

            
        <div class="form-group">
    <label for="search">Ara:</label>
    <input type="text" id="search" class="form-control" placeholder="Ara...">
    </div>
        
        <table class="table" id="gonderilen_mesajlar">
            <thead>
                <tr>
                    <th>Kullanici</th>
                    <th>Mesaj</th>
                    <th>Gönderilme Tarihi</th>
                    <th>Okundu Zamani</th> 
                </tr>
            </thead>
            <tbody>
                @foreach($texts as $mesaj)
                <tr>
                    <td>{{ $mesaj->sender }}</td>
                    <td>{{ $mesaj->texts }}</td>
                    <td>{{ $mesaj->created_at }}</td>
                    <td>{{ $mesaj->okundu_at }}</td> 
                </tr>
                @endforeach
            </tbody>
        </table>


        <script>
      document.getElementById('search').addEventListener('keyup', function() {
          var searchValue = this.value.toLowerCase();
          var rows = document.querySelectorAll('#gonderilen_mesajlar tbody tr');
          
          rows.forEach(function(row) {
              var rowText = row.innerText.toLowerCase();
              if (rowText.includes(searchValue)) {
                  row.style.display = '';
              } else {
                  row.style.display = 'none';
              }
          });
      });
      </script>

      </form>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
</body>
</html>
