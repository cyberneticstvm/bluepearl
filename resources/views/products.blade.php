@extends("base")
@section("content")
<section class="section section-height-3 border-0 m-0">
    <div class="container position-relative pt-5 pb-5-5 mt-5 mb-5">
        <div class="row justify-content-end pt-1 mt-lg-5">
            <div class="col-7 col-md-5 position-relative">
                <ul class="breadcrumb d-block ps-2 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="200">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="active">Products</li>
                </ul>
                <h1 class="position-absolute top-100 left-0 text-color-light font-weight-bold text-6 line-height-3 text-end mt-5-5">
                    <span class="d-block position-relative z-index-1 pb-5 ps-lg-3 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="800">Products</span>
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
<div class="container mt-5 pt-4 mb-5 mb-lg-4 mb-xl-0 pb-3 pb-xl-0">
    <div class="row">
        <div class="col">
            <h2 class="text-color-dark font-weight-bold text-7 line-height-1 mb-3-5 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200" style="animation-delay: 200ms;">Products</h2>
            <p class="text-4 font-weight-light mb-5-5 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400" style="animation-delay: 400ms;"></p>
        </div>
    </div>
    <div class="row row-gutter-sm justify-content-center mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;">
        <div class="col-sm-9 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="#" class="text-decoration-none" data-cursor-effect-hover="plus">
                <div class="card border-0">
                    <div class="card-img-top position-relative overlay">
                        <div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
                            <span class="text-center bg-primary text-color-light font-weight-semibold text-5-5 line-height-2 px-3 py-2">
                                <!--<span class="position-relative z-index-2">
                                    18
                                    <span class="d-block custom-font-size-1 positive-ls-2 px-1">FEB</span>
                                </span>-->
                            </span>
                        </div>
                        <img src="{{ asset('/storage/items/1.jpeg') }}" class="img-fluid" alt="Lorem Ipsum Dolor">
                    </div>
                    <div class="card-body py-4 px-0">
                        <span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-2">BY ADMIN</span>
                        <h3 class="text-transform-none font-weight-bold text-5 text-color-hover-primary mb-2">Class Approved Marine Grade-A Plates</h3>
                        <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
                            <a href="{{ route('products') }}">View More
                                <div class="animated-icon animated fadeIn svg-fill-color-primary ms-2"><!--?xml version="1.0" ?-->
                                    <svg version="1.1" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="icon_241754496615734" data-filename="arrow-right.svg" width="27" height="27">
                                        <polygon points="1,26 44.586,26 38.293,32.293 39.707,33.707 48.414,25 39.707,16.293 38.293,17.707 44.586,24 1,24  "></polygon>
                                    </svg>
                                </div>
                            </a>
                        </span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-9 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="#" class="text-decoration-none" data-cursor-effect-hover="plus">
                <div class="card border-0">
                    <div class="card-img-top position-relative overlay">
                        <div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
                            <span class="text-center bg-primary text-color-light font-weight-semibold text-5-5 line-height-2 px-3 py-2">
                                <!--<span class="position-relative z-index-2">
                                    18
                                    <span class="d-block custom-font-size-1 positive-ls-2 px-1">FEB</span>
                                </span>-->
                            </span>
                        </div>
                        <img src="{{ asset('/storage/items/2.jpeg') }}" class="img-fluid" alt="Lorem Ipsum Dolor">
                    </div>
                    <div class="card-body py-4 px-0">
                        <span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-2">BY ADMIN</span>
                        <h3 class="text-transform-none font-weight-bold text-5 text-color-hover-primary mb-2">Class Approved Marine Grade-A Plates</h3>
                        <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
                            View More
                            <div class="animated-icon animated fadeIn svg-fill-color-primary ms-2"><!--?xml version="1.0" ?-->
                                <svg version="1.1" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="icon_241754496615734" data-filename="arrow-right.svg" width="27" height="27">
                                    <polygon points="1,26 44.586,26 38.293,32.293 39.707,33.707 48.414,25 39.707,16.293 38.293,17.707 44.586,24 1,24  "></polygon>
                                </svg>
                            </div>
                        </span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="position-relative pb-5 d-none d-xl-block">
    <div class="position-absolute transform3dy-n50 left-0">
        <div class="appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1500" data-appear-animation-duration="1500ms">
            <div class="custom-square-1 bg-primary mt-0 mb-5"></div>
        </div>
    </div>
</div>
@endsection