@extends("base")
@section("content")
<section class="section section-height-3 border-0 m-0">
    <div class="container position-relative pt-5 pb-5-5 mt-5 mb-5">
        <div class="row justify-content-end pt-1 mt-lg-5">
            <div class="col-7 col-md-5 position-relative">
                <ul class="breadcrumb d-block ps-2 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="200">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="active">Blogs</li>
                </ul>
                <h1 class="position-absolute top-100 left-0 text-color-light font-weight-bold text-6 line-height-3 text-end mt-5-5">
                    <span class="d-block position-relative z-index-1 pb-5 ps-lg-3 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="800">Blogs</span>
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
<div class="container pt-4 pb-5 pb-sm-0 my-5">
    <div class="row pb-2 mb-5">
        <h5>Coming Soon..</h5>
    </div>
</div>
@endsection