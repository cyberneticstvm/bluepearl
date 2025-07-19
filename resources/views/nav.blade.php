<div class="header-row">
    <div class="header-nav header-nav-links order-3 order-lg-1">
        <div class="header-nav-main header-nav-main-square header-nav-main-text-capitalize header-nav-main-effect-1 header-nav-main-sub-effect-1">
            <nav class="collapse px-3-5">
                <ul class="nav nav-pills" id="mainNav">
                    <li>
                        <a class="nav-link {{ Route::is('index') ? 'active' : '' }}" href="{{ route('index') }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">
                            About Us
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle {{ (Route::is('products') || Route::is('products.*')) ? 'active' : '' }}" href="{{ route('products') }}">
                            Products
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('products') }}">Class Approved Marine Grade A MS Plates</a></li>
                            <li><a class="dropdown-item" href="{{ route('products') }}">Class Approved Marine Grade High Tesile Plates (AH/EH/DH grades)</a></li>
                            <li><a class="dropdown-item" href="{{ route('products') }}">MS Angles</a></li>
                            <li><a class="dropdown-item" href="{{ route('products') }}">MS Flat Bars</a></li>
                            <li><a class="dropdown-item" href="{{ route('products') }}">MS Chequered Plates</a></li>
                            <li><a class="dropdown-item" href="{{ route('products') }}">MS Hollow Bars</a></li>
                            <li><a class="dropdown-item" href="{{ route('products') }}">MS I beams</a></li>
                            <li><a class="dropdown-item" href="{{ route('products') }}">MS H beams</a></li>
                            <li><a class="dropdown-item" href="{{ route('products') }}">MS Round Bars</a></li>
                            <li><a class="dropdown-item" href="{{ route('products') }}">GI Gratings</a></li>
                            <li><a class="dropdown-item" href="{{ route('products') }}">FRP Gratings</a></li>
                            <li><a class="dropdown-item" href="{{ route('products') }}">MS Pipes at various sizes /thickness – ASTM A106 Gr.B </a></li>
                            <li><a class="dropdown-item" href="{{ route('products') }}">All type pipe fittings</a></li>
                            <li><a class="dropdown-item" href="{{ route('products') }}">SS / MS -Nut/Bolts</a></li>
                            <li><a class="dropdown-item" href="{{ route('products') }}">ISO Sockets </a></li>
                            <li><a class="dropdown-item" href="{{ route('products') }}">Lashing Eyes</a></li>
                            <li><a class="dropdown-item" href="{{ route('products') }}">Lifting Hooks</a></li>
                            <li><a class="dropdown-item" href="{{ route('products') }}">Rubber Packing</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::is('services') ? 'active' : '' }}" href="{{ route('services') }}">
                            Services
                        </a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::is('blogs') ? 'active' : '' }}" href="{{ route('blogs') }}">
                            Blogs
                        </a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border d-none d-sm-flex ms-3 order-1 order-lg-2">
        <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean social-icons-medium ms-0">
            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li class="social-icons-x"><a href="http://www.x.com/" target="_blank" title="X"><i class="fab fa-x-twitter"></i></a></li>
            <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
    </div>
    <div class="header-nav-features header-nav-features-no-border header-nav-features-sm-show-border ms-3 ps-4 order-2 order-lg-3">
        <div class="header-nav-feature header-nav-features-search d-inline-flex">
            <a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch" aria-label="Search">
                <i class="icons icon-magnifier header-nav-top-icon text-3-5 text-color-dark text-color-hover-primary font-weight-semibold top-3"></i>
            </a>
            <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed border-radius-0" id="headerSearchDropdown">
                <form role="search" action="page-search-results.html" method="get">
                    <div class="simple-search input-group">
                        <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                        <button class="btn" type="submit" aria-label="Search">
                            <i class="icons icon-magnifier header-nav-top-icon text-color-dark text-color-hover-primary top-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>