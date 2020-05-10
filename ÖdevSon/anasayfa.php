<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Memleketim ve Ben</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>

    <header id="header-wrap">
        <nav class="navbar navbar-expand-lg indigo">
            <div class="container">
                <div class="navbar-header">
                    <a href="anasayfa.php" class="navbar-brand"><img src="img/logo.png" class="logoHeight" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
                        <li class="nav-item">
                            <a class="nav-link" href="anasayfa.php">
                                HAKKIMDA
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="egitim.html">
                                ÖZGEÇMİŞ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sehrim.html">
                                ŞEHRİM
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mirasimiz.html">
                                MİRASIMIZ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="iletisim.php">
                                İLETİŞİM
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php
    session_start();
    if ($_SESSION["login"]) {
        echo '<div class="alert alert-success">
        <strong>Hoşgeldiniz!</strong> Numan
      </div>';
        $_SESSION["login"] = false;
    }
    ?>

    <section id="hakkimda" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="img-thumb">
                        <img class="img-fluid" src="img/about/about.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="profile-wrapper">
                        <h3>Kısaca Ben!</h3>
                        <div class="about-profile">
                            <ul class="admin-profile" style="list-style:none;">
                                <li><span class="pro-title"> Ad </span> <span class="pro-detail">Numan Güngör</span></li>
                                <li><span class="pro-title"> Yaş </span> <span class="pro-detail">22</span></li>
                                <li><span class="pro-title"> Burç </span> <span class="pro-detail">Kova</span></li>
                                <li><span class="pro-title"> Boy ~ Kilo </span> <span class="pro-detail">182 cm ~ 78 kg </span></li>
                                <li><span class="pro-title"> Ülke </span> <span class="pro-detail">Türkiye</span></li>
                                <li><span class="pro-title"> Konum </span> <span class="pro-detail">İstanbul</span></li>
                                <li><span class="pro-title"> e-mail </span> <span class="pro-detail">numangungor1970@gmail.com</span></li>
                            </ul>
                        </div>
                        <h3>Hobilerim</h3>
                        <div class="about-profile">
                            <ul class="admin-profile">
                                <li><span class="pro-detail">Spor Yapmayı Severim İlgilendiğim Spor Dalları(Fitnes-Futbol)</span></li>
                                <li><span class="pro-detail">Boş Zamanlarımda Müzik Dinlerim(Rap-pop)gibi..</span></li>
                                <li><span class="pro-detail">Vakit Buldukça Sinema-Tiyatro İzlemeye Giderim</span></li>
                                <li><span class="pro-detail">Vakit Buldukça Sinema-Tiyatro İzlemeye Giderim</span></li>
                                <li><span class="pro-detail">Yine Vakit Buldukça Gezmeyi Severim</span></li>
                            </ul>
                        </div>
                        <a href="iletisim.php" class="btn btn-danger">İLETİŞİME GEÇ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="footer-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-text text-center">
                        <ul class="social-icon">
                            <li>
                                <a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="icon-social-facebook"></i></a>
                            </li>
                            <li>
                                <a class="twitter" href="https://www.twitter.com/" target="_blank"><i class="icon-social-twitter"></i></a>
                            </li>
                            <li>
                                <a class="instagram" href="https://www.instagram.com/" target="_blank"><i class="icon-social-instagram"></i></a>
                            </li>
                            <li>
                                <a class="instagram" href="https://www.linkedin.com/" target="_blank"><i class="icon-social-linkedin"></i></a>
                            </li>
                            <li>
                                <a class="instagram" href="https://www.google.com/" target="_blank"><i class="icon-social-google"></i></a>
                            </li>
                        </ul>
                        <p>Copyright © 2020 Numan Güngör</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>