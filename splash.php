<?php include 'config.inc'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dereferrer</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: OnePage - v4.5.0
    * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->


</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="index0.html">Dereferrer</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <!--                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>-->
                <!--                <li><a class="nav-link scrollto" href="#about">About</a></li>-->
                <!--                <li><a class="nav-link scrollto" href="#services">Services</a></li>-->
                <!--                <li><a class="nav-link scrollto o" href="#portfolio">Portfolio</a></li>-->
                <!--                <li><a class="nav-link scrollto" href="#team">Team</a></li>-->
                <!--                <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>-->
                <!--                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>-->
                <!--                    <ul>-->
                <!--                        <li><a href="#">Drop Down 1</a></li>-->
                <!--                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>-->
                <!--                            <ul>-->
                <!--                                <li><a href="#">Deep Drop Down 1</a></li>-->
                <!--                                <li><a href="#">Deep Drop Down 2</a></li>-->
                <!--                                <li><a href="#">Deep Drop Down 3</a></li>-->
                <!--                                <li><a href="#">Deep Drop Down 4</a></li>-->
                <!--                                <li><a href="#">Deep Drop Down 5</a></li>-->
                <!--                            </ul>-->
                <!--                        </li>-->
                <!--                        <li><a href="#">Drop Down 2</a></li>-->
                <!--                        <li><a href="#">Drop Down 3</a></li>-->
                <!--                        <li><a href="#">Drop Down 4</a></li>-->
                <!--                    </ul>-->
                <!--                </li>-->
                <li><a class="nav-link scrollto" href="mailto:support@dereferer.me">Contact</a></li>
                <!--                <li><a class="getstarted scrollto" href="#about">Get Started</a></li>-->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center">
                <h1>Hide your referrer!</h1>
                <h2>Anonymize your links</h2>
            </div>
        </div>
        <div class="text-center" style="margin-top:20px;">
            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a>-->
            <form action="" method="post">
                <input id="url" type="url" name="url" placeholder="Enter the URL you want to anonymize"
                       style="width: 300px;">
                <button type="button" id="anonymize-url-btn">Anonymize</button>
            </form>
            <div style="display:none; border:none;margin-top: 20px;
    padding: 20px;
    border-radius: 15px;
    background: #0e66b914;" id="js-copylabel" readonly></div>
        </div>

        <div class="row icon-boxes">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                 data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="ri-stack-line"></i></div>
                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                        excepturi</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                 data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><i class="ri-palette-line"></i></div>
                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                        dolore</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                 data-aos-delay="400">
                <div class="icon-box">
                    <div class="icon"><i class="ri-command-line"></i></div>
                    <h4 class="title"><a href="">Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                 data-aos-delay="500">
                <div class="icon-box">
                    <div class="icon"><i class="ri-fingerprint-line"></i></div>
                    <h4 class="title"><a href="">Nemo Enim</a></h4>
                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                </div>
            </div>

        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                                                       data-bs-target="#faq-list-1">Non consectetur a
                            erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                non.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                                                       data-bs-target="#faq-list-2" class="collapsed">Feugiat
                            scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                                                       data-bs-target="#faq-list-3" class="collapsed">Dolor
                            sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                                tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                                                       data-bs-target="#faq-list-4" class="collapsed">Tempus
                            quam pellentesque nec nam aliquam sem et tortor consequat? <i
                                    class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                                ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                                adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                                                       data-bs-target="#faq-list-5" class="collapsed">Tortor
                            vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                                    class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                                eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <!--    <div class="footer-top">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!---->
    <!--                <div class="col-lg-3 col-md-6 footer-contact">-->
    <!--                    <h3>OnePage</h3>-->
    <!--                    <p>-->
    <!--                        A108 Adam Street <br>-->
    <!--                        New York, NY 535022<br>-->
    <!--                        United States <br><br>-->
    <!--                        <strong>Phone:</strong> +1 5589 55488 55<br>-->
    <!--                        <strong>Email:</strong> info@example.com<br>-->
    <!--                    </p>-->
    <!--                </div>-->
    <!---->
    <!--                <div class="col-lg-2 col-md-6 footer-links">-->
    <!--                    <h4>Useful Links</h4>-->
    <!--                    <ul>-->
    <!--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>-->
    <!--                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>-->
    <!--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>-->
    <!--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>-->
    <!--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!---->
    <!--                <div class="col-lg-3 col-md-6 footer-links">-->
    <!--                    <h4>Our Services</h4>-->
    <!--                    <ul>-->
    <!--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>-->
    <!--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>-->
    <!--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>-->
    <!--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>-->
    <!--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!---->
    <!--                <div class="col-lg-4 col-md-6 footer-newsletter">-->
    <!--                    <h4>Join Our Newsletter</h4>-->
    <!--                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>-->
    <!--                    <form action="" method="post">-->
    <!--                        <input type="email" name="email"><input type="submit" value="Subscribe">-->
    <!--                    </form>-->
    <!--                </div>-->
    <!---->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>OnePage</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<script>

    var domain = "<?php echo $domain; ?>";
    var success = false;

    function urlIsValid(str) {
        var a = document.createElement('a');
        a.href = str;
        return (a.host && a.host != window.location.host);
    }

    function anonymizeUrl(event) {
        event.preventDefault();
        var urlInput = document.getElementById('url');
        var urlValue = urlInput.value;


        if (urlIsValid(urlValue)) {
            var copyLabel = document.querySelector('#js-copylabel');

            try {
                copyLabel.innerHTML = domain + '/?' + escape(urlValue);
                copyLabel.style.display = 'block';

                /* Copy the text inside the text field */
                // navigator.clipboard.writeText(copyLabel.value);

                success = true;

                // setTimeout(function(){
                //     if(success) {
                //         alert('The anonymous url has been copied to clipboard!');
                //         success = false;
                //     }
                // });

            } catch (err) {
                console.log('Oops, unable to copy');
            }
        } else {
            alert('Please enter a valid url!')
        }
    }

    document.getElementById('anonymize-url-btn')
        .addEventListener("click", anonymizeUrl);
</script>

</body>

</html>