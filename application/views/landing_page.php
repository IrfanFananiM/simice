<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>SIMICE</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Mechanized Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="<?= base_url('assets/'); ?>css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:100,300,400,500,700,800" rel="stylesheet">

    <!-- //Fonts -->
</head>

<body>
    <!-- mian-content -->
    <div class="main-content" id="home">
        <div class="layer">
            <!-- header -->
            <header>
                <div class="container-fluid px-lg-5">
                    <!-- nav -->
                    <nav class="py-4 d-lg-flex">
                        <div id="logo">
                            <h1> <a href="index.html"> SIMICE</a></h1>
                        </div>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu mt-2 ml-auto">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="#about" class="scroll">Tentang</a></li>
                            <li><a href="#blog" class="scroll">Pelayanan</a></li>
                            <li><a class="scroll" href="#gallery">Produk</a></li>
                            <li><a href="#plans" class="scroll">Daftar Agen</a></li>
                            <li><a href="#contact" class="scroll">Kontak</a></li>
                        </ul>
                    </nav>
                    <!-- //nav -->
                </div>
            </header>
            <!-- //header -->
            <div class="container">
                <!-- /banner -->
                <div class="banner-info-w3layouts">
                    <h3>ATUR KEBUTUHAN ES SESUAI KEINGINANMU</h3>
                    <p class="my-3">SIMICE adalah sebuah platform web base dengan fungsionalitas untuk mengatur kebutuhan esmu</p> <a href="<?= base_url('auth'); ?>" class="read-more mt-3 btn">Login </a>
                </div>

            </div>
        </div>
        <!-- //banner -->
    </div>
    <!--// mian-content -->
    <!-- banner-bottom-wthree -->
    <section class="banner-bottom-wthree py-5" id="about">
        <div class="container py-md-5 px-lg-5">
            <div class="content-left-bottom text-center">
                <h3 class="tittle mb-lg-5 mb-4">Tentang Kami</h3>
            </div>
            <div class="content-right-bottom mt-md-0 mt-3 text-center">
                <p class="mt-2">SIMICE sebuah platform web base dengan fungsionalitas untuk mengatur sistem pendistribusian es batu yang akan memudahkan anda untuk melakukan pemesanan es batu</p>

            </div>

    </section>
    <!-- //banner-bottom-wthree -->



    <!-- Gallery -->
    <section class="gallery py-5" id="gallery">
        <div class="container py-md-5">
            <div class="header text-center">
                <h3 class="tittle mb-lg-5 mb-3">Produk</h3>
            </div>
            <div class="row news-grids text-center gambar-tengah">
                <div class="col-md-4 gal-img offset-2">
                    <a href="#gal1"><img src="<?= base_url() ?>assets/img/images-landing/ice tube.jpg" alt="news image" class="img-fluid"></a>
                    <p>Ice Tube</p>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal2"><img src="<?= base_url('assets/') ?>img/images-landing/ice-cubes-table.jpg" alt="news image" class="img-fluid"></a>
                    <p>Ice Cube</p>
                </div>
            </div>


        </div>
    </section>
    <!--// gallery -->
    <!--/counter-->
    <section class="stats" id="plans">
        <div class="container">
            <div class="row text-center stats-content-w3pvt">
                <div class="col-lg-6 text-left pr-lg-5">
                    <h3 class="tittle two mb-lg-5 mb-4">Daftar Agen </h3>
                    <p><strong class="text-capitalize"> Sudah lebih dari 150 Agen yang telah bekerja sama dengan kami </p>
                </div>

            </div>
        </div>
    </section>
    <!--//counter-->
    <!-- blog -->
    <section class="blog_w3ls py-5" id="blog">
        <div class="container py-xl-5 py-lg-3">
            <div class="header text-center">
                <h3 class="tittle mb-lg-5 mb-4">Pelayanan</h3>
            </div>
            <div class="row">
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 med-blog">
                        <div class="card-header p-0">

                            <img class="card-img-bottom" src="<?= base_url('assets/') ?>img/images-landing/pengiriman.png" alt="image">

                        </div>
                        <div class="card-body border border-top-0 pb-5">
                            <div class="mb-3">
                                <h5 class="blog-title card-title font-weight-bold m-0">
                                    <a href="single.html">Pengiriman</a>
                                </h5>
                                <div class="blog_w3icon">
                                    <span></span>
                                </div>
                            </div>
                            <p class="mb-4">SIMICE melakukan pengiriman es batu dengan jaminan es tetap utuh dan tidak cair.</p>

                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                    <div class="card border-0 med-blog">
                        <div class="card-body border border-bottom-0 pb-5">
                            <div class="mb-3">
                                <h5 class="blog-title card-title font-weight-bold m-0">
                                    <a>Pembayaran</a>
                                </h5>
                                <div class="blog_w3icon">
                                    <span></span>
                                </div>
                            </div>
                            <p class="mb-4">SIMICE saat ini hanya dapat melakukan pembayaran secara COD (Cash On Delivery), untuk transfer melalui bank masih dalam pengembangan.</p>

                        </div>
                        <div class="card-header p-0">
                            <a href="single.html">
                                <img class="card-img-bottom" src="<?= base_url('assets/') ?>img/images-landing/payment.jpg" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                    <div class="card border-0 med-blog">
                        <div class="card-header p-0">
                            <a href="single.html">
                                <img class="card-img-bottom" src="<?= base_url('assets/') ?>img/images-landing/24hours.jpg" alt="image">
                            </a>
                        </div>
                        <div class="card-body border border-top-0 pb-5">
                            <div class="mb-3">
                                <h5 class="blog-title card-title font-weight-bold m-0">
                                    <a href="single.html">24 Jam </a>
                                </h5>
                                <div class="blog_w3icon">
                                    <span></span>
                                </div>
                            </div>
                            <p class="mb-4">Pelayanan 24 jam.</p>

                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
            </div>

        </div>
    </section>
    <!-- //blog -->


    <!-- contact -->
    <section class="contact py-5" id="contact">
        <div class="container pb-md-5">
            <div class="header py-lg-5 pb-3 text-center">
                <h3 class="tittle mb-lg-5 mb-3"> Kontak</h3>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form mx-auto text-left">
                        <form name="contactform" id="contactform1" method="post" action="#">

                            <div class="con-gd">
                                <div class="form-group" data-aos="fade-up">
                                    <label>Name *</label>
                                    <input type="text" class="form-control" id="name" placeholder="" name="name" required="">
                                </div>
                            </div>
                            <div class="con-gd">
                                <div class="form-group" data-aos="fade-up">
                                    <label>Email *</label>
                                    <input type="email" class="form-control" id="email" placeholder="" name="email" required="">
                                </div>
                            </div>
                            <div class="con-gd">
                                <div class="form-group" data-aos="fade-up">
                                    <label>Phone No. *</label>
                                    <input type="text" class="form-control" id="phone" placeholder="" name="phone" required="">
                                </div>
                            </div>



                            <div class="form-group mb-5">
                                <label>How can we help?</label>
                                <textarea name="issues" class="form-control" id="iq" placeholder="" required=""></textarea>
                            </div>
                            <div class="contact-page">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="list-unstyled text-left mb-lg-5 mb-3">
                        <div class="adress-info">
                            <div class="row">
                                <div class="col-3 text-lg-center adress-icon">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="col-9 text-left">
                                    <h6>Location</h6>
                                    <p>SIMICE
                                        <br>Surabaya.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="adress-info mt-3 mb-3">
                            <div class="row">
                                <div class="col-3 text-lg-center adress-icon">
                                    <span class="fa fa-envelope-open-o"></span>
                                </div>
                                <div class="col-9 text-left">
                                    <h6>Email</h6>
                                    <a href="mailto:info@example.com">simice@gmail.com</a>

                                </div>
                            </div>
                        </div>
                        <div class="adress-info">
                            <div class="row">
                                <div class="col-3 text-lg-center adress-icon">
                                    <span class="fa fa-mobile"></span>
                                </div>
                                <div class="col-9 text-left">
                                    <h6>Phone Number</h6>
                                    <p>+ 1234567890</p>
                                    <p>+ 0987654321</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="map mt-md-5 mt-4">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- //contact -->

    <!-- footer -->
    <footer class="footer-content">
        <div class="layer footer">
            <div class="container-fluid">
                <div class="row footer-top-inner-w3ls">
                    <div class="col-lg-4 col-md-6 footer-top mt-md-0 mt-sm-5">
                        <h2>
                            <a class="navbar-brand" href="index.html">
                                SIMICE
                            </a>
                        </h2>
                        <p class="my-3">Lancarkan Usahamu dengan es berkualitas dari kami.</p>
                        <p>

                        </p>
                    </div>
                    <div class="col-lg-2 col-md-6 mt-md-0 mt-5">
                        <div class="footer-w3pvt">
                            <h3 class="mb-3 w3pvt_title">Navigation</h3>
                            <hr>
                            <ul class="list-info-w3pvt">
                                <li>
                                    <a href="#home" class="scroll">
                                        Home
                                    </a>
                                </li>
                                <li class="my-2">
                                    <a href="#about" class="scroll">
                                        Tentang Kami
                                    </a>
                                </li>
                                <li class="my-2">
                                    <a href="#gallery" class="scroll">
                                        Produk
                                    </a>
                                </li>

                                <li>
                                    <a href="#contact" class="scroll">
                                        Kontak
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                        <div class="footer-w3pvt">
                            <h3 class="mb-3 w3pvt_title">Kontak</h3>
                            <hr>
                            <div class="last-w3ls-contact">
                                <p>
                                    <a href="mailto:example@email.com">SIMICE@gmail.com</a>
                                </p>
                            </div>
                            <div class="last-w3ls-contact my-2">
                                <p>+ 456 123 7890</p>
                            </div>

                        </div>
                    </div>

                </div>

                <p class="copy-right-grids text-li text-center my-sm-4 my-4">© 2020 SIMICE | Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
                <div class="w3ls-footer text-center mt-4">
                    <ul class="list-unstyled w3ls-icons">
                        <li>
                            <a href="#">
                                <span class="fa fa-facebook-f"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-dribbble"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-vk"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="move-top text-right"><a href="#home" class="move-top"> <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span></a></div>
            </div>
            <!-- //footer bottom -->
        </div>
    </footer>
    <!-- //footer -->


</body>

</html>