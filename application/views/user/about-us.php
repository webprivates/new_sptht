<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SP THT - I Medical Specialist Center </title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url(); ?>template/temp_user/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/temp_user/style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.html"><img src="<?php echo base_url(); ?>template/temp_user/img/core-img/logo3.png" alt=""></a>
                            </div>
                            <!-- <div class="login-content">
                                <a href="#">Register Pasien / Pengunjung</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="<?php echo site_url() ?>Dashboard/user">Home</a></li>
                                    <li><a href="<?php echo site_url() ?>registrasi">Diagnosa</a>
                                        
                                    <li><a href="<?php echo site_url() ?>Dashboard/about">About Us</a></li>
                                    <li><a href="<?php echo site_url() ?>Dashboard/contact">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

           <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+6282346934663"><i class="icon-telephone-2"></i> <span>(+62) 823 4693 4663</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(<?php echo base_url(); ?>template/temp_user/img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>About Us</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <?php echo form_open('registrasi/create'); ?>
    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
          <div class="row" style="text-align:center;">
            <div class="col-md-6 col-md-offset-2">
             <div>
                <label for="nama" class="sr-only">Masukkan Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama" required autofocus />
              </div><br>
              <div>
                <label for="umur"class="sr-only">Masukkan Umur></label>
                <input type="umur" id="umur" name="umur" class="form-control" placeholder="Masukkan Umur" required />
              </div><br>
              <div>
                <label for="jenkel"class="sr-only">Masukkan Jenis Kelamin></label>
                <select name="jenkel" id="jenkel" class='form-control'>
                    <option value="0" selected="selected">- Jenis Kelamin -</option>
                    <option value="Perempuan">Perempuan</option>
                    <option value="Laki-laki">Laki-laki</option>
                </select>
              </div><br>
              <div>
                <label for="alamat"class="sr-only">Masukkan Alamat></label>
                <input type="alamat" id="alamat" name="alamat" class="form-control" placeholder="Masukkan Alamat" required />
              </div><br>
              <div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Registrasi</button>
              </div>
            </div>
          </div>
        </div>
    </section>
    <?php echo form_close(''); ?>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Team Area Start ##### -->
    
    <!-- ##### Features Area Start ##### -->

<!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    
                   
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Gallery</h6>
                            </div>
                            <div class="gallery-list d-flex justify-content-between flex-wrap">
                                <a href="<?php echo base_url() ?>template/temp_user/img/bg-img/gallery7.jpg" class="gallery-img" title="Gallery Image 1"><img src="<?php echo base_url() ?>template/temp_user/img/bg-img/gallery7.jpg" alt=""></a>
                                <a href="<?php echo base_url() ?>template/temp_user/img/bg-img/gallery8.jpg" class="gallery-img" title="Gallery Image 2"><img src="<?php echo base_url() ?>template/temp_user/img/bg-img/gallery8.jpg" alt=""></a>
                                <a href="<?php echo base_url() ?>template/temp_user/img/bg-img/gallery3.jpg" class="gallery-img" title="Gallery Image 3"><img src="<?php echo base_url() ?>template/temp_user/img/bg-img/gallery3.jpg" alt=""></a>
                                <a href="<?php echo base_url() ?>template/temp_user/img/bg-img/gallery4.jpg" class="gallery-img" title="Gallery Image 4"><img src="<?php echo base_url() ?>template/temp_user/img/bg-img/gallery4.jpg" alt=""></a>
                                <a href="<?php echo base_url() ?>template/temp_user/img/bg-img/gallery5.jpg" class="gallery-img" title="Gallery Image 5"><img src="<?php echo base_url() ?>template/temp_user/img/bg-img/gallery5.jpg" alt=""></a>
                                <a href="<?php echo base_url() ?>template/temp_user/img/bg-img/gallery6.jpg" class="gallery-img" title="Gallery Image 6"><img src="<?php echo base_url() ?>template/temp_user/img/bg-img/gallery6.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contact</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>Jl. Racing Centre No.17, Karampuang, Panakkukang, Kota Makassar, Sulawesi Selatan 90231</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>(+62) 823 4693 4663 </p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p>inukimedical@yahoo.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo base_url() ?>template/temp_user/js/jquery/jquery-3.3.1.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url() ?>template/temp_user/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url() ?>template/temp_user/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url() ?>template/temp_user/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url() ?>template/temp_user/js/active.js"></script>
</body>

</html>