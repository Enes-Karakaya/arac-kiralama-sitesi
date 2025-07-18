<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Car Rental</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <!-- Template Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="../../../public/assets/css/style.css" rel="stylesheet"> --}}
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid topbar bg-secondary d-none d-xl-block w-100">
        <div class="container">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-6 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-muted me-4"><i
                                class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                        <a href="tel:+01234567890" class="text-muted me-4"><i
                                class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                        <a href="mailto:example@gmail.com" class="text-muted me-0"><i
                                class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="#" class="btn btn-light btn-sm-square rounded-circle me-3"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-light btn-sm-square rounded-circle me-3"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-light btn-sm-square rounded-circle me-3"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-light btn-sm-square rounded-circle me-0"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                     <img width="130px" height="100px" src="assets/logo.png" alt="Logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="{{ route('move.indexWelcome') }}"
                            class="nav-item nav-link nav-link-item active">Anasayfa</a>
                        <a href="{{ route('move.aboutWelcome') }}" class="nav-item nav-link nav-link-item">Hakkımızda</a>
                        <a href="{{ route('move.serviceWelcome') }}" class="nav-item nav-link nav-link-item">Hizmetlerimiz</a>
                        <a href="{{ route('move.contactWelcome') }}" class="nav-item nav-link nav-link-item">İletişim</a>
                        <a href="{{ route('dashboard') }}" class="nav-item nav-link nav-link-item"> </a>

                    </div>

                    <a href="{{ route('move.loginPage') }}" class="btn btn-primary rounded-pill py-2 px-4"
                        style="margin: 0px 10px">Giris Yap</a>
                    <a href="{{ route('move.registerPage') }}"
                        class="btn btn-primary rounded-pill py-2 px-4">Kayıt Ol</a>

                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    @section('ErrorMsg')

    @show
    @section('content')

    @show

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Hakkımızda</h4>
                            <p class="mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor
                                sit amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4">Link</h4>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Hakkımızda</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Araba</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Araba Tipi</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Takım</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> İletişim</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Şartlar ve Koşullar</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4">Çalışma Saatleri</h4>
                        <div class="mb-3">
                            <h6 class="text-muted mb-0">Pazartesi - Cuma:</h6>
                            <p class="text-white mb-0">09.00 am to 07.00 pm</p>
                        </div>
                        <div class="mb-3">
                            <h6 class="text-muted mb-0">Cumartesi:</h6>
                            <p class="text-white mb-0">10.00 am to 05.00 pm</p>
                        </div>
                        <div class="mb-3">
                            <h6 class="text-muted mb-0">Tatil:</h6>
                            <p class="text-white mb-0">Pazar günleri tatil</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4">Contact Info</h4>
                        <a href="#"><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a>
                        <a href="mailto:info@example.com"><i class="fas fa-envelope me-2"></i> info@example.com</a>
                        <a href="tel:+012 345 67890"><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                        <a href="tel:+012 345 67890" class="mb-3"><i class="fas fa-print me-2"></i> +012 345
                            67890</a>
                        <div class="d-flex">
                            <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i
                                    class="fab fa-facebook-f text-white"></i></a>
                            <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i
                                    class="fab fa-twitter text-white"></i></a>
                            <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i
                                    class="fab fa-instagram text-white"></i></a>
                            <a class="btn btn-secondary btn-md-square rounded-circle me-0" href=""><i
                                    class="fab fa-linkedin-in text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#" class="border-bottom text-white"><i
                                class="fas fa-copyright text-light me-2"></i>BG RENTAL</a>, All right
                        reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-body">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom text-white" href="#">Enes Karakaya - Orhan Süt</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the current URL path
            var currentPage = window.location.pathname;

            // Loop through each nav link item
            document.querySelectorAll('.nav-link-item').forEach(function(link) {
                // Check if the link's href matches the current URL
                if (link.href.includes(currentPage)) {
                    // Remove active class from all links
                    document.querySelectorAll('.nav-link-item').forEach(function(item) {
                        item.classList.remove('active');
                    });

                    // Add active class to the matching link
                    link.classList.add('active');
                }
            });
        });
    </script>

    @section('js')

    @show
</body>

</html>
