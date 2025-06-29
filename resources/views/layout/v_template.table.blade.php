<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>@yield('title')</title> 

    <!-- Google Font: Source Sans Pro --> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400,700&display=fallback"> 

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}"> 

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}"> 

    <!-- DataTables --> 
    <link rel="stylesheet" href="{{ asset('template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}"> 
</head> 
<body class="hold-transition sidebar-mini"> 
    <!-- Site wrapper --> 
    <div class="wrapper"> 
        <!-- Navbar --> 
        <nav class="main-header navbar navbar-expand navbar-white navbar-light"> 
            <!-- Left navbar links --> 
            <ul class="navbar-nav"> 
                <li class="nav-item"> 
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a> 
                </li> 
                <li class="nav-item d-none d-sm-inline-block"> 
                    <a href="{{ url('/') }}" class="nav-link">Home</a> 
                </li> 
                <li class="nav-item d-none d-sm-inline-block"> 
                    <a href="#" class="nav-link">Contact</a> 
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
    </div>
</body>
</html>
