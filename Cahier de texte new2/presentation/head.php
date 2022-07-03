<?php 
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cahier de Texte</title>
    
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/fontawesome.css"> -->
    
    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    
    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->
    <link rel="stylesheet" href="assets/css/animate.css">


    <!-- Include Choices CSS -->
    <link rel="stylesheet" href="assets/vendors/choices.js/choices.min.css" />

    <!-- Include base CSS (optional) -->
    <!-- <link rel="stylesheet" href="assets/vendors/choices.js/base.min.css" /> -->

    <link rel="stylesheet" href="assets/vendors/quill/quill.bubble.css">
    <link rel="stylesheet" href="assets/vendors/quill/quill.snow.css">

    <script src="assets/js/jquery-3.5.1.js"></script>

    <link rel="stylesheet" href="assets/css/notification.css">

</head>
<body>

    <!-- <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="assets/images/logo.svg" alt="" srcset="">
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        
                            <li class='sidebar-title'>Menu Principal</li>
                        
                        
                            <li class="sidebar-item active ">
                                <a href="index.php" class='sidebar-link'>
                                    <i data-feather="home" width="20"></i> 
                                    <span>Tableau de Bord</span>
                                </a>
                                
                            </li>


                            <li class="sidebar-item">
                                <a href="component-text-book.php" class='sidebar-link'>
                                    <i data-feather="book" width="20"></i> 
                                    <span>Cahier de Texte</span>
                                </a>
                                
                            </li>

                        
                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i data-feather="triangle" width="20"></i> 
                                    <span>Components</span>
                                </a>
                                
                                <ul class="submenu ">
                                    
                                    <li>
                                        <a href="component-alert.php">Alert</a>
                                    </li>
                                    
                                    </li>
                                    
                                    <li>
                                        <a href="component-card.php">Card</a>
                                    </li>
                                    
                                    <li>
                                        <a href="component-modal.php">Modal</a>
                                    </li>
                                    
                                    <li>
                                        <a href="component-navs.php">Navs</a>
                                    </li>
                                    
                                    <li>
                                        <a href="component-pagination.php">Pagination</a>
                                    </li>
                                    
                                    <li>
                                        <a href="component-progress.php">Progress</a>
                                    </li>
                                    
                                </ul>
                                
                            </li>

                            <?php if($_SESSION['Statut'] === 'Admin'): ?>
                        
                            <li class='sidebar-title'>Formulaires &amp; Tables</li>

                            <li class="sidebar-item">
                                <form action="form-layout.php" method="GET">
                                    <input type="text" name="form" value="oui" hidden="">
                                    <button type="submit" class='btn sidebar-link'>
                                        <i data-feather="layers" width="20"></i> 
                                        <span>Formulaires</span>
                                    </button>
                                </form>
                                                                
                            </li>

                            <li class="sidebar-item">
                                <a href="table-datatable.php" class='sidebar-link'>
                                    <i data-feather="file-plus" width="20"></i> 
                                    <span>Tables de Données</span>
                                </a>

                            </li>

                            <?php endif; ?>

                        
                        
                            <li class='sidebar-title'>Connexion</li>
                        
                        
                        
                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i data-feather="user" width="20"></i> 
                                    <span>Authentication</span>
                                </a>
                                
                                <ul class="submenu ">
                                    
                                    <li>
                                        <a href="auth-login.php">Login</a>
                                    </li>
                                    
                                    <?php if($_SESSION['Statut'] === 'Admin' || $_SESSION['Statut'] === 'Chef Departement'): ?>
                                    <li>
                                        <a href="auth-register.php">Register</a>
                                    </li>
                                    <?php endif; ?>

                                    <li>
                                        <a href="auth-forgot-password.php">Forgot Password</a>
                                    </li>
                                    
                                </ul>
                                
                            </li>
                        
                     
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light alert alert-info">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success mr-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>
                                            <h6 class='text-bold'>New Order</h6>
                                            <p class='text-xs'>
                                                An order made by Ahmad Saugi for product Samsung Galaxy S69
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown nav-icon mr-2">
                            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="mail"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar mr-1">
                                    <img src="assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Hi, Saugi</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <div class="main-content container-fluid">