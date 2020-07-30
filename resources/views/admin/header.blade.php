<!--?php
include "./connection.php" ;
session_start();
if(!isset($_SESSION["username"]))
{
    ?>
   <script-- type="text/javascript">
              window.location="index.php?mes=Access Denied..";
            </script-->
    <!--?php
}

?-->


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Admin -Panel</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ asset ('apple-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset ('favico.ico') }}">


    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset ('vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('vendors/selectFX/css/cs-skin-elastic.css') }}">

    <link rel="stylesheet" href="{{ asset ('assets/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">Admin Panel</a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="dash"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>

                     <li>
                        <a href="{{ route('category.index') }}"> <i class="menu-icon fa fa-dashboard"></i>Add & Edit Category </a>
                    </li>

                    <li>
                        <a href="{{ route('product.index') }}"> <i class="menu-icon fa fa-dashboard"></i>Add Products </a>
                    </li>
                    
                     <li>
                        <a href="{{ route('product.create') }}"> <i class="menu-icon fa fa-dashboard"></i>Edit & Delete Products </a>
                    </li>


                    <li>
                        <a href="{{ route('slider.index') }}"> <i class="menu-icon fa fa-dashboard"></i>Edit Slider </a>
                    </li>


                      <li>
                        <a href="{{ route('branch.index') }}"> <i class="menu-icon fa fa-dashboard"></i>Add &Edit  Branches </a>
                    </li>
                     <li>
                        <a href="logout"> <i class="menu-icon fa fa-close"></i>Logout </a>
                    </li>
                   </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        
                      
                       

                       
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                           

                            <a class="nav-link" href="logout"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    

                </div>
            </div>

        </header><!-- /header -->
        <body>



        @yield('content')


        
                            <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
                            <script src="{{ asset('vendors/popper.js/dist/umd/popper.min.js') }}"></script>

                            <script src="{{ asset('vendors/jquery-validation/dist/jquery.validate.min.js') }}"></script>
                            <script src="{{ asset('vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js') }}"></script>

                            <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
                            <script src="{{ asset('assets/js/main.js') }}"></script>
                            <script src="{{ asset('assets/js/jquery-3.5.1.min.js')}}"></script>
        </body>
        </html>
