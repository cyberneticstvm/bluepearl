@extends("base")
@section("content")
<section class="section section-height-3 border-0 m-0">
    <div class="container position-relative pt-5 pb-5-5 mt-5 mb-5">
        <div class="row justify-content-end pt-1 mt-lg-5">
            <div class="col-7 col-md-5 position-relative">
                <ul class="breadcrumb d-block ps-2 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="200">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="active">Services</li>
                </ul>
                <h1 class="position-absolute top-100 left-0 text-color-light font-weight-bold text-6 line-height-3 text-end mt-5-5">
                    <span class="d-block position-relative z-index-1 pb-5 ps-lg-3 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="800">Services</span>
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
                    <h2 class="text-color-dark font-weight-bold text-7 line-height-1 mb-4">Services</h2>
                    <img src="{{ asset('/assets/img/demos/construction/generic/service.svg') }}" class="img-fluid mb-4" alt="Blue Pearl Engineering Man" />
                    <p class="font-weight-medium text-4">At Blue Pearl General Trading, we are committed to delivering comprehensive and reliable material supply solutions tailored to the unique requirements of our clients. Our dedication to service excellence and product quality has positioned us as a trusted partner across various industrial sectors.</p>
                    <p class="font-weight-light text-3-5 mb-3">Managed by a team of seasoned professionals with deep industry experience, we understand the challenges associated with material specification, selection, supply, and usage. This allows us to offer precise support at every stage of the procurement process.</p>
                    <p class="font-weight-light text-3-5 mb-0">We supply materials of any size, grade, or specification at competitive prices - in various forms, including flanges, pipes, tubes, fittings, plates, bars, forgings, electrodes, and welding consumables. Whether the requirement is routine or technically complex, we ensure prompt delivery and consistent product quality aligned with our clients’ exacting standards.</p>
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
                            Services
                        </a>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
</div>
@endsection