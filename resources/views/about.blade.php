@extends("base")
@section("content")
<section class="section section-height-3 border-0 m-0">
    <div class="container position-relative pt-5 pb-5-5 mt-5 mb-5">
        <div class="row justify-content-end pt-1 mt-lg-5">
            <div class="col-7 col-md-5 position-relative">
                <ul class="breadcrumb d-block ps-2 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="200">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
                <h1 class="position-absolute top-100 left-0 text-color-light font-weight-bold text-6 line-height-3 text-end mt-5-5">
                    <span class="d-block position-relative z-index-1 pb-5 ps-lg-3 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="800">About Us</span>
                    <span class="custom-svg-position-1 custom-svg-position-1-variation">
                        <svg class="svg-fill-color-dark mt-1 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="400" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 859.45 88.44" xml:space="preserve" preserveAspectRatio="none">
                            <polyline points="7.27,84.78 855.17,84.78 855.17,4.79 84.74,4.79 " />
                        </svg>
                    </span>
                </h1>
            </div>
        </div>
    </div>
</section>

<div class="container custom-margin-1">
    <div class="row gy-5 gy-lg-0">
        <div class="col-lg-8 order-lg-2 mt-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1200">
            <div id="who-we-are" class="row">
                <div class="col">
                    <h2 class="text-color-dark font-weight-bold text-7 line-height-1 mb-4">Who We Are</h2>
                    <img src="{{ asset('/assets/img/demos/construction/generic/man.svg') }}" class="img-fluid mb-4" alt="Blue Pearl Engineering Man" />
                    <p class="font-weight-medium text-4">Blue Pearl General Trading FZC is a materials trading company inspired by our parent organization, Blue Pearl Marine Services, established in 2009. We specialize in supplying a wide range of industrial materials for the oil & gas industry, marine and offshore sectors, shipbuilding, and related industries.</p>
                    <p class="font-weight-light text-3-5 mb-3">Blue Pearl General Trading is a growing supplier, stockist, importer, and exporter of Stainless Steel, Carbon Steel, Alloy Steel, and other industrial materials. We provide a comprehensive range of products - including pipes, tubes, plates, round bars, and fittings, serving a wide spectrum of industrial sectors with precision and reliability.</p>
                    <p class="font-weight-light text-3-5 mb-0">All our products undergo stringent quality inspections and compliance checks at the manufacturing mills to ensure they meet the highest international standards. Supported by a robust inventory management system, we are capable of fulfilling orders of all sizes with efficiency and on time delivery.</p>
                    <div class="row justify-content-center counters gy-4 gy-md-0 my-5-5">
                        <div class="col-md-auto mt-0">
                            <div class="counter">
                                <strong class="text-color-primary text-13" data-to="7" data-append="+" data-plugin-options="{'accY': -200}">0</strong>
                                <span class="text-color-primary font-weight-bold text-4">Business Year</span>
                            </div>
                        </div>
                        <div class="col-md-auto px-xl-5 mx-md-5">
                            <div class="counter">
                                <strong class="text-color-primary text-13" data-to="40" data-append="+" data-plugin-options="{'accY': -200}">0</strong>
                                <span class="text-color-primary font-weight-bold text-4">Satisfied Clients</span>
                            </div>
                        </div>
                        <div class="col-md-auto">
                            <div class="counter">
                                <strong class="text-color-primary text-13" data-to="200" data-append="+" data-plugin-options="{'accY': -200}">0</strong>
                                <span class="text-color-primary font-weight-bold text-4">Products</span>
                            </div>
                        </div>
                    </div>
                    <p class="font-weight-light text-3-5 pb-4-5 mb-5">With a steadily expanding sales and distribution network across the Middle East and international markets, Blue Pearl General Trading is positioning itself as a trusted, forward-thinking partner in the industrial supply sector.</p>
                </div>
            </div>
            <div id="history" class="row pb-4-5 mb-5">
                <div class="col">
                    <h2 class="text-color-dark font-weight-bold text-7 line-height-1 mb-4">History</h2>
                    <div class="bg-color-grey p-5">
                        <div class="owl-carousel owl-theme dots-horizontal-center nav-style-diamond nav-with-transparency nav-dark nav-sm nav-font-size-sm mb-0" data-plugin-options="{'responsive': {'0': {'items': 1, 'nav': false, 'dots': true}, '576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': true, 'dots': false, 'autoplay': false, 'autoplayTimeout': 5000, 'autoHeight': true}">
                            <div class="text-center">
                                <strong class="d-block text-color-primary text-7 line-height-1">2019</strong>
                                <strong class="d-block text-color-dark text-4 mb-4">Foundation</strong>
                                <p class="font-weight-light text-color-dark text-3-5 px-sm-5 mb-0"></p>
                            </div>
                            <div class="text-center">
                                <strong class="d-block text-color-primary text-7 line-height-1">2012</strong>
                                <strong class="d-block text-color-dark text-4 mb-4">50+ Employers</strong>
                                <p class="font-weight-light text-color-dark text-3-5 px-sm-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ultricies nunc, eu interdum enim convallis pretium. Quisque eu neque augue. Aliquam egestas nunc at efficitur faucibus. </p>
                            </div>
                            <div class="text-center">
                                <strong class="d-block text-color-primary text-7 line-height-1">2015</strong>
                                <strong class="d-block text-color-dark text-4 mb-4">New Headquarter</strong>
                                <p class="font-weight-light text-color-dark text-3-5 px-sm-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ultricies nunc, eu interdum enim convallis pretium. Quisque eu neque augue. Aliquam egestas nunc at efficitur faucibus. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mission-vision" class="row">
                <div class="col">
                    <h2 class="text-color-dark font-weight-bold text-7 line-height-1 mb-4">Mission & Vision</h2>
                    <div class="tabs tabs-bottom tabs-simple pb-2 mb-5">
                        <ul class="nav nav-tabs justify-content-start">
                            <li class="nav-item mb-3">
                                <a class="nav-link font-weight-bold text-4 border-width-2 pb-3-5 px-1 active" href="#tabsMissionVision1" data-bs-toggle="tab">Manifesto</a>
                            </li>
                            <li class="nav-item mb-3 mx-4">
                                <a class="nav-link font-weight-bold text-4 border-width-2 pb-3-5 px-1" href="#tabsMissionVision2" data-bs-toggle="tab">Mission</a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="nav-link font-weight-bold text-4 border-width-2 pb-3-5 px-1" href="#tabsMissionVision3" data-bs-toggle="tab">Vision</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabsMissionVision1">
                                <p class="text-3-5 font-weight-light mb-0">At Blue Pearl General Trading, we are committed to delivering comprehensive and reliable material supply solutions tailored to the unique requirements of our clients. Our dedication to service excellence and product quality has positioned us as a trusted partner across various industrial sectors.<span class="highlight highlight-primary highlight-bg-opacity highlight-animated" data-appear-animation="highlight-animated-start" data-appear-animation-delay="1200" data-plugin-options="{'flagClassOnly': true}">Vivamus quis purus</span> nec sapien pellentesque imperdiet. Nullam porttitor augue mi, sit amet luctus est tincidunt sed ex, nec vehicula elit. Nullam porttitor augue mi, sit amet luctus est tincidunt sed. </p>
                            </div>
                            <div class="tab-pane" id="tabsMissionVision2">
                                <p class="text-3-5 font-weight-light mb-3">At Blue Pearl General Trading, our mission is to deeply understand our customers - not only in terms of what they purchase, but how they utilize our products to achieve their goals.</p>
                                <p class="text-3-5 font-weight-light mb-0">We strive to be recognized not just as a supplier, but as a reliable and strategic partner our clients trust and value - today, tomorrow, and well into the future.</p>
                            </div>
                            <div class="tab-pane" id="tabsMissionVision3">
                                <p class="text-3-5 font-weight-light mb-3">To establish ourselves as a leading force in the global material trading industry by continuously expanding our supply capabilities, innovating across the value chain, and delivering smarter, stronger, and more efficient solutions to our clients.</p>
                                <p class="text-3-5 font-weight-light mb-0">We envision Blue Pearl General Trading as a trusted symbol of reliability, innovation, and unwavering commitment. With a strong foundation built on integrity and client focus, we strive to earn long-term trust and respect by proactively adapting to global market demands and securing a leadership position in the steel, marine, and general goods industries.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4 order-lg-1 position-relative">
            <aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
                <ul class="nav list flex-column text-3-5 font-weight-medium mb-5-5">
                    <li class="nav-item border border-color-grey-1 border-top-0 border-end-0 border-start-0 mb-0">
                        <a class="d-inline-flex align-items-center nav-link text-color-dark text-color-hover-primary py-3 ps-0 active" data-hash data-hash-offset="0" data-hash-offset-lg="110" href="#who-we-are">
                            <i class="fas fa-chevron-right text-1 position-relative top-1 pe-3-5"></i>
                            Who We Are
                        </a>
                    </li>
                    <li class="nav-item border border-color-grey-1 border-top-0 border-end-0 border-start-0 mb-0">
                        <a class="nav-link text-color-dark text-color-hover-primary py-3 ps-0" data-hash data-hash-offset="0" data-hash-offset-lg="110" href="#history">
                            <i class="fas fa-chevron-right text-1 position-relative top-1 pe-3-5"></i>
                            History
                        </a>
                    </li>
                    <li class="nav-item border border-color-grey-1 border-top-0 border-end-0 border-start-0 mb-0">
                        <a class="nav-link text-color-dark text-color-hover-primary py-3 ps-0" data-hash data-hash-offset="0" data-hash-offset-lg="110" href="#mission-vision">
                            <i class="fas fa-chevron-right text-1 position-relative top-1 pe-3-5"></i>
                            Mission &amp; Vision
                        </a>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
</div>
@endsection