<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>SIMICE Landing Page</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="SIMICE Platform" />
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
    <link href="<?= base_url('assets/'); ?>css/bootstrap.css" rel="stylesheet">
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
                            <h1> <a href="<?= base_url('landing_page') ?>">SIMICE</a></h1>
                        </div>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu mt-2 ml-auto">
                            <li><a href="<?= base_url('auth'); ?>" class="scroll">MASUK</a></li>
                        </ul>
                    </nav>
                    <!-- //nav -->
                </div>
            </header>
            <!-- //header -->
            <div class="container">
                <!-- /banner -->
                <div class="banner-info-w3layouts">
                    <h3>Atur Kebutuhan Es Sesuai Keinginanmu!</h3>
                    <p class="my-3">SIMICE adalah sebuah platform berbasis web dengan fungsionalitas untuk mengatur kebutuhan es sesuai keinginanmu!</p> <a href="<?= base_url('auth/registration') ?>" class="read-more mt-3 btn">Buat Akun</a>
                </div>
            </div>
        </div>
        <!-- //banner -->
    </div>
</body>

</html>