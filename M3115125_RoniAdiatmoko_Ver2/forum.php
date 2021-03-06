<?php
    include "koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="./assets/img/apple-icon.png">
    <link rel="icon" href="./assets/img/favicon.png">
    <title>
        Meet the Pixel 2
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./assets/css/material-kit.css?v=2.0.0">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/assets-for-demo/demo.css" rel="stylesheet" />
    <link href="./assets/assets-for-demo/vertical-nav.css" rel="stylesheet" />
</head>

<body class="index-page ">
    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="./index.html">Google </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                	<li class="nav-item">
                        <a class="nav-link" href="index.html">
                           Home
                        </a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="specification.html">
                           Specification
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pricing.html">
                           Price
                        </a>
                    </li>
                    
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                             Features
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="update.html" class="dropdown-item">
                                 Update
                            </a>
                            <a href="batery.html" class="dropdown-item">
                                Battery
                            </a>
                            <a href="video.html" class="dropdown-item">
                                Video
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="page-header " data-parallax="true" style="background-image: url('assets/img/bg2.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand">
                        <h1><img src="assets/img/google.png" width="30%"></h1>
                        <h3>You Will never regret when you meet pixel 2</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="section section-basic">
            <div class="container">
            	<div class="row">
					<center>
					<div class="col-md-12">
                        <h1><img src="assets/img/google pixel 2.jpg"></h1>
                        
                        <br>
                    </div>
					</center>
                    <div class="col-md-12">
                        Tambahkan komentar
                        <form action="komentar.php" method="POST">
                            <div class="form-group">
                                <label for="email_input" class="bmd-label-floating">Email</label>
                                <input type="email" class="form-control" name='email' id="email">
                                <span class="bmd-help">Masukkan email</span>
                            </div>
                        
                            <div class="form-group">
                                <label for="komentar_input" class="bmd-label-floating">Komentar</label>
                                <textarea name="komentar" class="form-control" rows="2"></textarea>
                                <span class="bmd-help">Masukkan Komentar</span>
                            </div>
                            <br>
                            <button class="btn btn-primary btn-round btn-block">Submit</button>
                        </form>

                        <hr>
                        <center>
                            <b>FORUM</b>
                        </center>
                        <hr>
                        <?php
                            $data = mysqli_query($connect, "SELECT * FROM komentar ORDER BY id_komentar DESC");
                            while($komentar = mysqli_fetch_array($data)) {         
                                
                            
                        ?>


                        <div class="card card-nav-tabs card-plain">
                            <div class="card-header card-header-danger">
                                <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#home" data-toggle="tab">
                                                    <?php echo $komentar['email']; ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><div class="card-body ">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home">
                                       <?php echo '&nbsp;' .$komentar['komentar'].'<br>'; ?>
                                    </div>
                                </div>
                            </div>
                        </div><!-- akhir card nav -->

                        <?php } ?>
                    </div>
				</div>
            </div><!-- akhir container -->
        </div><!-- akhir section -->
    
        <footer class="footer ">
            <div class="container">
                <nav class="pull-left">
                    
                </nav>
                <div class="copyright pull-right">
                    
                            <a href="#">
                                roniadiatmoko
                            </a>
                        &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                </div>
            </div>
        </footer>
    
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/bootstrap-material-design.js"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
    <script src="./assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="./assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./assets/js/plugins/nouislider.min.js"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="./assets/js/material-kit.js?v=2.0.0"></script>
    <!-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project -->
    <script src="./assets/assets-for-demo/js/material-kit-demo.js"></script>
    <script>
        $(document).ready(function() {
            materialKitDemo.initFormExtendedDatetimepickers();
            // Sliders for demo purpose in refine cards section
            var slider = document.getElementById('sliderRegular');

            noUiSlider.create(slider, {
                start: 40,
                connect: [true, false],
                range: {
                    min: 0,
                    max: 100
                }
            });

            var slider2 = document.getElementById('sliderDouble');

            noUiSlider.create(slider2, {
                start: [20, 60],
                connect: true,
                range: {
                    min: 0,
                    max: 100
                }
            });
        });
    </script>

</body>

</html>