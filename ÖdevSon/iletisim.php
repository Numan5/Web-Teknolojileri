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
    <section id="iletisim" class="section-padding">
        <div class="contact-form">
            <div class="container">
                <div class="row contact-form-area">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="contact-block">
                            <h2>İLETİŞİM FORMU</h2>
                            
                            <form id="contactForm" action="iletisim2.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Ad" required data-error="Lütfen adınızı giriniz">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Email" id="email" class="form-control"
                                                name="email" required data-error="Please enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Konu" id="msg_subject" class="form-control" name="msg_subject"
                                                required data-error="Lütfen konu giriniz">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" id="message" placeholder="Mesajınız" rows="5" name="message"
                                                data-error="Write your message" required>
                                            </textarea>
                                        </div>
                                        <div class="submit-button">
                                            <button class="btn btn-primary" id="submit" type="submit" name="uploadContact">Gönder</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="footer-right-area">
                            <h2>İLETİŞİM BİLGİLERİ</h2>
                            <div class="footer-right-contact">
                                <div class="single-contact">
                                    <div class="contact-icon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <p>Sakarya,TÜRKİYE</p>
                                </div>
                                <div class="single-contact">
                                    <div class="contact-icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <p><a href="mailto:hello@tom.com">numangungor1970@gmail.com</a></p>
                                </div>
                                <div class="single-contact">
                                    <div class="contact-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <p><a href="#">+ (90) 530 062 37 80</a></p>
                                </div>
                            </div>
                        </div>
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
                                <a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                        class="icon-social-facebook"></i></a>
                            </li>
                            <li>
                                <a class="twitter" href="https://www.twitter.com/" target="_blank"><i
                                        class="icon-social-twitter"></i></a>
                            </li>
                            <li>
                                <a class="instagram" href="https://www.instagram.com/" target="_blank"><i
                                        class="icon-social-instagram"></i></a>
                            </li>
                            <li>
                                <a class="instagram" href="https://www.linkedin.com/" target="_blank"><i
                                        class="icon-social-linkedin"></i></a>
                            </li>
                            <li>
                                <a class="instagram" href="https://www.google.com/" target="_blank"><i
                                        class="icon-social-google"></i></a>
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