
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- #title -->
    <title>Photodit</title>
    <!-- #keywords -->
    <meta name="keywords" content="photodit, image editing, edit, html">
    <!-- #description -->
    <meta name="description" content="Clipping Path Service Html Template">
    <!-- ==== css dependencies start ==== -->
    <!-- bootstrap five css -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- font awesome six css -->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/all.min.css">
    <!-- glyphter css -->
    <link rel="stylesheet" href="assets/vendor/glyphter/css/photodit.css">
    <!-- nice select css -->
    <link rel="stylesheet" href="assets/vendor/nice-select/css/nice-select.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="assets/vendor/magnific-popup/css/magnific-popup.css">
    <!-- slick css -->
    <link rel="stylesheet" href="assets/vendor/slick/css/slick.css">
    <!-- odometer css -->
    <link rel="stylesheet" href="assets/vendor/odometer/css/odometer.css">

    <!-- animate css -->
    <link rel="stylesheet" href="assets/vendor/animate/animate.min.css">
    <!-- ==== / css dependencies end ==== -->
    <!-- main css -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <!-- ==== preloader start ==== -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                </div>
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    <!-- ==== / preloader end ==== -->
    <div class="registration-popup registration-popup-page">
        <div class="registration-inner">
            <div class="back-to-home">
                <a href="index.php" class="btn btn--secondary back-home">Back To Home</a>
            </div>
            <div class="single registration-pop" id="signModal">
                <div class="row gaper">
                    <div class="col-12 col-md-4 col-lg-6 col-xl-8">
                        <div class="thumb">
                            <div class="cta__grop">
                                <a href="#signModal" class="btn btn--primary regi-btn">Sign In</a>
                                <a href="#createModal" class="btn btn--secondary regi-btn">Create Account</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-6 col-xl-4">
                        <div class="registration__content">
                            <h2 class="h2 title">welcome back</h2>
                            <form action="auth.php" method="post" name="signInForm">
                                <div class="group-input">
                                    <input type="email" name="email" id="signInEmail"
                                        placeholder="Email Address" required>
                                </div>
                                <div class="group-input">
                                    <input type="password" name="password" id="signInPassword"
                                        placeholder="Enter Password" required>
                                </div>
                                <div class="cta__group">
                                    <button type="submit" name="signin" class="btn btn--primary">sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single registration-pop" id="createModal">
                <div class="row gaper">
                    <div class="col-12 col-md-4 col-lg-6 col-xl-8">
                        <div class="thumb">
                            <div class="cta__grop">
                                <a href="#signModal" class="btn btn--secondary regi-btn">Sign In</a>
                                <a href="#createModal" class="btn btn--primary regi-btn">Create Account</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-6 col-xl-4">
                        <div class="registration__content">
                            <h2 class="h2 title">create account</h2>
                            <form action="auth.php" method="post" name="createAccount">
                                <div class="group-input">
                                    <input type="text" name="name" id="createName" placeholder="User Name"
                                        required>
                                </div>
                                <div class="group-input">
                                    <input type="email" name="email" id="createInEmail"
                                        placeholder="Email Address" required>
                                </div>
                                <div class="group-input">
                                    <input type="password" name="password" id="createInPassword"
                                        placeholder="Enter Password" required>
                                </div>
                                <div class="group-input">
                                    <input type="password" name="confirm-password" id="createconfirmPassword"
                                        placeholder="Enter Confirm password" required>
                                </div>
                                <div class="cta__group">
                                    <button type="submit" name="signup" class="btn btn--primary">sign up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- scroll to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ==== js dependencies start ==== -->
    <!-- jquery -->
    <script src="assets/vendor/jquery/jquery-3.6.4.min.js"></script>
    <!-- bootstrap five js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- nice select js -->
    <script src="assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
    <!-- magnific popup js -->
    <script src="assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <!-- slick js -->
    <script src="assets/vendor/slick/js/slick.min.js"></script>

    <!-- odometer js -->
    <script src="assets/vendor/odometer/js/odometer.min.js"></script>

    <!-- image loaded js -->
    <script src="assets/vendor/images-loaded/imagesloaded.pkgd.min.js"></script>
    <!-- isotope js -->
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
        <!-- gsap js -->
        <script src="assets/vendor/gsap/gsap.min.js"></script>
        <!-- scrolltrigger js -->
        <script src="assets/vendor/gsap/ScrollTrigger.min.js"></script>
        <!-- scrollto js -->
        <script src="assets/vendor/gsap/ScrollToPlugin.min.js"></script>
        <!-- scrollsmoother js -->
        <script src="assets/vendor/gsap/ScrollSmoother.min.js"></script>
    <!-- viewport js -->
    <script src="assets/vendor/viewport/viewport.jquery.js"></script>
    <!-- wow js -->
    <script src="assets/vendor/wow/wow.min.js"></script>
    <!-- ==== / js dependencies end ==== -->
    <!-- plugins js -->
    <script src="assets/js/plugins.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
</body>

</html>