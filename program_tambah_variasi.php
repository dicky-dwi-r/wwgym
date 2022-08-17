<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WWGYM - Tambah Variasi Program</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top" style="background-color: #FFF500; padding: 24px 32px; padding-left: 0px;">

                    <!-- logo (Topbar) -->
                    <a class="sidebar-brand d-lg-inline ml-4" href="#">
                        <img src="./img/logo wwgym hitam .png" style="max-width: 10%; flex: auto;"></img>
                    </a>
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="mr-3 img-profile rounded-circle" src="img/undraw_profile.svg">
                                <div class="d-flex flex-column mr-3">
                                    <span class="d-none d-lg-inline text-gray-600 small" style="margin: 0%; margin-bottom: -5px;">McGeeDouglas@gmail.com</span>
                                    <p class="font-weight-bold" style="color: #000233; margin: 0%;">Owner</p>
                                </div>
                                <i class="fas fa-chevron-down" style="color: #000233;"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container">
                    <div class="d-flex flex-row mb-3">
                        <a href="dashboard_layout.php?p=program"><i class="fas fa-arrow-alt-circle-left" style="font-size: 22px;color: #000233;"></i></a>
                        <h6 style="color: #000233;font-size:large; font-weight:bolder; margin-left: 10px;">Buat Variasi Program Baru</h6>
                    </div>
                    <div class="card border-0 box-shadow">
                        <div class="card-body">
                            <form>
                                <div class="form-group row">
                                    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label" style="color: #000233; font-weight: bolder; margin-right:12px">Program</label>
                                    <select class="form-control col-sm-3" id="exampleFormControlSelect1">
                                        <option>Basketball</option>
                                        <option>Vollyball</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label" style="color: #000233; font-weight: bolder; margin-right:12px">Foto Variasi Program</label>
                                    <div class="custom-file col-sm-3" style="margin-left:-12px">
                                        <input class="form-control p-1" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label" style="color: #000233; font-weight: bolder;">Nama Variasi Program</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="colFormLabel" placeholder="masukkan nama Variasi program">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label" style="color: #000233; font-weight: bolder;">Deskripsi Variasi Program</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="masukkan deskripsi variasi program" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="d-flex flex-column align-items-end mb-3">
                                    <button type="submit" class="btn btn-primary" style="width:20%">Simpan</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-transparent mt-5">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; WWGYM 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
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