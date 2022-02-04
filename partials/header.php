<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Asutech | Admin</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ===== Plugin CSS ===== -->
    <!-- ===== Animation CSS ===== -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- ===== Custom CSS ===== -->
    <link href="css/style.css" rel="stylesheet">
    <!-- ===== Color CSS ===== -->
    <link href="css/colors/red.css" id="theme" rel="stylesheet">

</head>

<body class="mini-sidebar fix-header">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- ===== Top-Navigation ===== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <a class="navbar-toggle font-20 hidden-sm hidden-md hidden-lg " href="javascript:void(0)"
                    data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="top-left-part">
                    <a class="logo" href="dashboard.php">
                        <b>
                            <img src="plugins/images/asutech" alt="home" width="75%" />
                        </b>
                        <span>ASUTECH
                            <!-- <img src="../plugins/images/logo-text.png" alt="homepage" class="dark-logo" /> -->
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <i class="icon-magnifier"></i>
                            <input type="text" placeholder="Search..." class="form-control">
                        </form>
                    </li>
                </ul>

                </ul> 
            </div>
        </nav>
        <!-- ===== Top-Navigation-End ===== -->
        <!-- ===== Left-Sidebar ===== -->
        <aside class="sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="side-menu">
                        <li>
                            <a class="waves-effect" href="dashboard.php" aria-expanded="false"><i
                                    class="icon-screen-desktop fa-fw"></i>
                                <span class="hide-menu"> Dashboard </span></a>

                        </li>
                        <li class="two-column">
                            <a class="waves-effect" href="manage_class.php" aria-expanded="false"><i
                                    class="icon-equalizer fa-fw"></i> <span class="hide-menu"> Classes</span></a>

                        </li>
                        <li class="two-column">
                            <a class="waves-effect" href="manage_periods.php" aria-expanded="false"><i
                                    class="icon-docs fa-fw"></i> <span class="hide-menu"> Periods</span></a>

                        </li>
                        <li>
                            <a class="active waves-effect" href="manage_students.php" aria-expanded="false"><i
                                    class="icon-notebook fa-fw"></i> <span class="hide-menu"> Students </span></a>

                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i
                                    class="icon-grid fa-fw"></i> <span class="hide-menu"> Teachers</span></a>

                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i
                                    class="icon-layers fa-fw"></i> <span class="hide-menu"> Logout</span></a>
                </nav>
            </div>
        </aside>
        <!-- ===== Left-Sidebar-End ===== -->