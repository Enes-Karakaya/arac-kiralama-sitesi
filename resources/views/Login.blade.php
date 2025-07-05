<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BG RENTAL</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/loginStyle.css">
</head>

<body style="background-color: #1E2D4E">

    <div style="background-color: #1E2D4E" class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container" style=" ">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="assets/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="{{ route('move.registerPage') }}" class="signup-image-link">Hesap Oluştur</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Oturum Aç</h2>
                        <form method="POST" action="{{ route('login') }}" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" id="your_name" name="email"
                                    placeholder="E-Posta" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password"  id="your_pass" name="password"
                                    placeholder="Şifre" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Beni
                                    Hatırla</label>
                            </div>
                            <div class="form-group form-button">
                                <button style="border: none ; outline: none" class="form-submit" >
                                    Log in
                                </button>

                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/js/loginMain.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
