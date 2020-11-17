<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>
    <!-- Custom fonts for this template-->

    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet ">
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>datatables/datatables.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <link rel="icon" type="image/jpg" href="<?= base_url('assets/img/'); ?>banksampah.jpg">

<body>
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="<?= base_url('assets/img/logo.png') ?>" alt="logo" style="width: 90px; height: 60px; ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>
            <li class="nav-item form-inline my-2 my-lg-0">
                <a class="navbar-brand" href="<?= base_url('home') ?>" class="page-scroll">Home <span class="sr-only">(current)</span></a>
                <a class="navbar-brand" href="#about" class="page-scroll">About <span class="sr-only">(current)</span></a>
                <a class="navbar-brand" href="#contact" class="page-scroll">Contact <span class="sr-only">(current)</span></a>
                <a class="navbar-brand" href="<?= base_url('auth') ?>" class="page-scroll">Login <span class="sr-only">(current)</span></a>
            </li>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid alert-info">
        <div class="container">
            <table class="table-responsive">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" align="center">
                        <div class="carousel-item active">
                            <img src="<?= base_url('assets/img/photo1.jpg'); ?>" class="photo" alt="photo" height="360px">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('assets/img/photo2.jpg') ?>" class="photo" alt="photo" height="360px">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('assets/img/photo1.jpg') ?>" class="photo" alt="photo" height="360px">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </table>
        </div>
    </div>
    <!-- end Jumbotron -->

    <!-- section about -->
    <section class="about mt-5" id="about" name="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">About us</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 offset-sm-2 ">
                    <h4 align="center">Visi</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor impedit omnis eaque officiis incidunt eum facilis quaerat ipsam dolorum nam? Fugiat, recusandae. Dicta molestias deserunt quod vitae eaque, blanditiis reprehenderit.</p>
                </div>
                <div class="col-sm-4 ">
                    <h4 align="center">Misi</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor impedit omnis eaque officiis incidunt eum facilis quaerat ipsam dolorum nam? Fugiat, recusandae. Dicta molestias deserunt quod vitae eaque, blanditiis reprehenderit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- endsection about -->

    <!-- contact -->
    <section class="contact mt-5" id="contact" name="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center"> Contact us</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-2">
                    <form>
                        <div class="form-group">
                            <div class="col-md-9 offset-md-3">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 offset-md-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 offset-md-3">
                                <label for="alamat">Kritik dan Saran</label>
                                <textarea cols="10" rows="5" type="text" class="form-control" id="alamat" aria-describedby="emailHelp"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 offset-md-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- endsection contact -->

    <!-- Footer -->
    <footer class="sticky-footer alert-info fix-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 ml-5">
                    <img src="<?= base_url('assets/img/logo.png'); ?>" style="width: 120px; height: 90px; " alt="logo">
                </div>
                <div class="col-md-3">
                    <div class="col-md-2">
                        <h5 for="alamat" class="text-reset"> Alamat </h5>
                    </div>
                    <div class="col-md-10">
                        <label> Jl. Cendrawasih Raya RT.004/RW.02 No. 16 Kel. Sawah Baru, Ciputat, Tanggerang Selatan </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <h5 class="text-reset ml-2">Contact us</h5>
                    </div>
                    <div class="row">
                        <div class="col-sm-1">
                            <span><i class="fas fa-envelope-square fa-2x"></i></span>
                        </div>
                        <div class="col-sm-4">
                            <label class="pt-1">banksampah@gmail.com</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1">
                            <span><i class="fas fa-mobile fa-2x mt-2 ml-1"></i></span>
                        </div>
                        <div class="col-sm-6">
                            <label class="pt-2">0877 7336 3785</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row">
                        <h5 class="text-reset">Follow me</h5>
                        <label class="">Jangan lupa follow sosial media kami</label>
                    </div>
                    <div class="row">
                        <a href=""><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://www.instagram.com/banksampahjawara/" target="_blank" rel="nofollow" title="bank sampah"><i class="fab fa-instagram fa-2x ml-3"></i></a>
                        <a href=""><i class="fab fa-twitter fa-2x ml-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <hr border=1>
        <div class="copyright text-center">
            <h6>Copyright &copy; <a href="<?= base_url('home') ?>">Bank Sampah 2020 </a>All rights reserved | This template Remake by Bagas Kurniawan</h6>
        </div>
    </footer>
    <!-- End of Footer -->


    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets/'); ?>datatables/datatables.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
    <script src="<?= base_url('assets/js/'); ?>my_script.js"></script>
</body>

</html>