<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <meta name="keywords" content="Trading" />
    <meta name="description" content="Trading">
    <meta name="author" content="cybernetics.me">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/img/favicon.png') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('/assets/img/favicon.png') }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/theme-shop.css') }}">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/demos/demo-construction.css') }}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset('/assets/css/skins/skin-construction.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/custom.css') }}">

</head>

<body data-plugin-scroll-spy data-plugin-options="{'target': '#sidebar'}">

    <div class="body">
        <header id="header" class="header-transparent header-semi-transparent header-semi-transparent-light" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 1, 'stickySetTop': '1'}">
            <div class="header-body border-0">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <h2 class="m-0">BLUE PEARL GENERAL TRADING</h2>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            @include("nav")
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div role="main" class="main">
            @yield("content")
        </div>
        <footer id="footer" class="overflow-hidden border-0 m-0" style="background-image: url({{ asset('/assets/img/demos/construction/backgrounds/background-2.jpg') }}); background-repeat: no-repeat; background-position: center bottom;">
            <div class="container pt-5">
                <div class="row pt-4 mb-5 gy-4">
                    <div class="col-lg-2 align-self-center">
                        <a href="demo-construction.html">
                            <img alt="Blue Pearl" class="img-fluid logo" src="{{ asset('/assets/img/logos/logo.png') }}">
                        </a>
                    </div>
                    <div class="col-lg-4 offset-lg-1">
                        <h4 class="text-color-dark font-weight-bold mb-4-5">Navigation</h4>
                        <ul class="list list-unstyled columns-lg-2">
                            <li>
                                <a href="demo-construction.html" class="{{ route('index') }}">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}" class="text-color-hover-primary">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('services') }}" class="text-color-hover-primary">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('products') }}" class="text-color-hover-primary">
                                    Products
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('blogs') }}" class="text-color-hover-primary">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}" class="text-color-hover-primary">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <h4 class="text-color-dark font-weight-bold mb-4-5">Newsletter</h4>
                        <div class="newsletter">
                            <div class="alert alert-success d-none" id="newsletterSuccess">
                                <strong>Success!</strong> You've been added to our email list.
                            </div>
                            <div class="alert alert-danger d-none" id="newsletterError"></div>
                            <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mb-4-5">
                                <div class="input-group">
                                    <input class="form-control border-0" placeholder="Email Address..." name="newsletterEmail" id="newsletterEmail" type="email">
                                    <button class="btn btn-primary px-3" type="submit">
                                        <img width="27" height="27" src="{{ asset('/assets/img/demos/construction/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" style="width: 27px;" />
                                    </button>
                                </div>
                            </form>
                        </div>
                        <ul class="list list-unstyled list-inline">
                            <li class="list-inline-item d-inline-flex align-items-center">
                                <img width="23" height="23" src="{{ asset('/assets/img/demos/construction/icons/phone.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark'}" />
                                <a href="tel:+971549905060" class="text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5 ms-2">+971 549905060</a>
                            </li>
                            <li class="list-inline-item d-inline-flex align-items-center ms-0">
                                <img width="23" height="23" src="{{ asset('/assets/img/demos/construction/icons/email.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark'}" />
                                <a href="mailto:info@bluepearlgeneraltrading.com" class="text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5 ms-2">info@bluepearlgeneraltrading.com</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <hr>

                <div class="footer-copyright bg-transparent pb-5 mt-5-5">
                    <div class="row pb-5">
                        <div class="col text-center mb-5">
                            <p class="text-color-grey text-3 mb-3">Blue Pearl General Trading © {{ date('Y') }}. All Rights Reserved. </p>
                            <ul class="footer-social-icons social-icons social-icons-clean social-icons-medium mb-5">
                                <li class="social-icons-instagram">
                                    <a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram text-4"></i></a>
                                </li>
                                <li class="social-icons-x">
                                    <a href="http://www.x.com/" target="_blank" title="X"><i class="fab fa-x-twitter text-4"></i></a>
                                </li>
                                <li class="social-icons-facebook">
                                    <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-4"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="position-absolute left-100pct transform3dx-n50 top-0 d-none d-lg-block">
                <div class="appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-appear-animation-duration="1500ms">
                    <div class="custom-square-1 custom-square-1-big bg-dark mt-0 mb-5 me-5"></div>
                </div>
            </div>
        </footer>

    </div>

    <!-- Vendor -->
    <script src="{{ asset('/assets/vendor/plugins/js/plugins.min.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('/assets/js/theme.js') }}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{ asset('/assets/js/views/view.contact.js') }}"></script>

    <script src="https://www.google.com/recaptcha/api.js"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('/assets/js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('/assets/js/theme.init.js') }}"></script>

    <script>
        function onSubmit(token) {
            document.getElementById("contact-form").submit();
        }
    </script>

</body>

</html>