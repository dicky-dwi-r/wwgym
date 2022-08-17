<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WWGYM - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .switch {
          position: relative;
          display: inline-block;
          width: 45px;
          height: 24px;
        }
        
        .switch input { 
          opacity: 0;
          width: 0;
          height: 0;
        }
        
        .slider {
          position: absolute;
          cursor: pointer;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: #ccc;
          -webkit-transition: .4s;
          transition: .4s;
        }
        
        .slider:before {
          position: absolute;
          content: "";
          height: 20px;
          width: 20px;
          left: 2px;
          bottom: 2px;
          background-color: white;
          -webkit-transition: .4s;
          transition: .4s;
        }
        
        input:checked + .slider {
          background-color: #2196F3;
        }
        
        input:focus + .slider {
          box-shadow: 0 0 1px #2196F3;
        }
        
        input:checked + .slider:before {
          -webkit-transform: translateX(20px);
          -ms-transform: translateX(20px);
          transform: translateX(20px);
        }
        
        /* Rounded sliders */
        .slider.round {
          border-radius: 34px;
        }
        
        .slider.round:before {
          border-radius: 50%;
        }

        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            border-top: #FFFFFF;
            border-right: #FFFFFF;
            border-left: #FFFFFF;
            border-bottom: 3px solid #000233;
            color: #000233;
            font-size:medium;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .nav-tabs .nav-link {
            color: grey;
            font-size:medium;
            font-weight:600;
            margin-bottom: 30px;
        }
        </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion box-shadow" id="accordionSidebar" style="background-color: #000233;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center d-lg-inline" href="#">
                <img src="./img/logo wwgym kuning.png" style="max-width: 75%; flex: auto;"></img>
            </a>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider my-0"> -->
            <div class="menu p-lg-4">
              <?php $p = @$_GET['p'];?>
                <!-- Nav Item - Program -->
                <li class="nav-item <?php echo $p == '' || $p == 'program' ? 'active' : '' ; ?> ">
                    <a class="nav-link" href="dashboard_layout.php?p=program" <?php echo $p == '' || $p == 'program' ? 'style="color: #FFF500;"' : '' ; ?> >
                        <i class="fas fa-running" <?php echo $p == '' || $p == 'program' ? 'style="color: #FFF500;"' : '' ; ?> ></i>
                        <span>Program</span></a>
                </li>

                <!-- Nav Item - Produk -->
                <li class="nav-item <?php echo $p == 'produk' ? 'active' : '' ; ?> ">
                    <a class="nav-link" href="dashboard_layout.php?p=produk" <?php echo $p == 'produk' ? 'style="color: #FFF500;"' : '' ; ?> >
                        <i class="fa fa-shopping-bag" <?php echo $p == 'produk' ? 'style="color: #FFF500;"' : '' ; ?> ></i>
                        <span>Produk</span></a>
                </li>

                <!-- Nav Item - Promo -->
                <li class="nav-item <?php echo $p == 'promo' ? 'active' : '' ; ?> ">
                    <a class="nav-link" href="dashboard_layout.php?p=promo" <?php echo $p == 'promo' ? 'style="color: #FFF500;"' : '' ; ?> >
                        <i class="fas fa-ticket-alt rotate-n-15" <?php echo $p == 'promo' ? 'style="color: #FFF500;"' : '' ; ?> ></i>
                        <span>Promo</span></a>
                </li>    
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include 'dashboard_header.php'; ?>

                <!-- Begin Page Content -->
                <?php
                  if ($p == '' || $p == 'program'){
                    include 'program_content.php';
                  }
                  elseif ($p == 'produk') {
                    include 'produk_content.php';
                  }
                  elseif ($p == 'promo') {
                    include 'promo_content.php';
                  }
                ?>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include 'dashboard_footer.php';?>

        </div>
        <!-- End of Content Wrapper -->

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>