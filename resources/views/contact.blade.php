@extends("base")
@section("content")
<section class="section section-height-3 border-0 m-0">
    <div class="container position-relative pt-5 pb-5-5 mt-5 mb-5">
        <div class="row justify-content-end pt-1 mt-lg-5">
            <div class="col-7 col-md-5 position-relative">
                <ul class="breadcrumb d-block ps-2 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="200">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
                <h1 class="position-absolute top-100 left-0 text-color-light font-weight-bold text-6 line-height-3 text-end mt-5-5">
                    <span class="d-block position-relative z-index-1 pb-5 ps-lg-3 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="800">Contact Us</span>
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
        <div class="col-lg-6 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1200">
            <div class="row">
                <div class="col-auto">
                    <h3 class="d-block text-color-grey positive-ls-3 font-weight-medium text-2 mb-1">CALL US</h3>
                    <a href="tel:+971549905060" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5">
                        <img width="23" height="23" src="{{ asset('assets/img/demos/construction/icons/phone.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark me-2'}" />
                        +971 549905060
                    </a>
                </div>
                <div class="col-auto">
                    <h3 class="d-block text-color-grey positive-ls-3 font-weight-medium text-2 mb-1">SEND AN EMAIL</h3>
                    <a href="mailto:info@bluepearlgeneraltrading.com" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5">
                        <img width="23" height="23" src="{{ asset('assets/img/demos/construction/icons/email.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark me-2'}" />
                        info@bluepearlgeneraltrading.com
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1600">
            <h3 class="d-block text-color-grey positive-ls-3 font-weight-medium text-2 mb-1">OFFICE ADDRESS</h3>
            <span class="d-flex align-items-center text-color-dark font-weight-bold text-3-5">
                <img width="23" height="23" src="{{ asset('assets/img/demos/construction/icons/location.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark me-2'}" />
                AL SHMOOKH BUSINESS CENTRE, ONE UAQ, UAQ FREE TRADE ZONE, UMM AL QUWAIN, UAE.
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1400">
            <h2 class="font-weight-bold text-color-dark text-6 mb-0">Send Us a Message</h2>
            <p class="text-3-5 font-weight-light mb-5-5">Contact us or give us a call to discover how we can help.</p>
            <form class="" action="{{ route('contact.submit') }}" method="POST" id="contact-form">
                @csrf
                <div class="row">
                    <div class="form-group col mb-3-5">
                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-3-5" name="name" placeholder="Your Name" required>
                    </div>
                    @error('name')
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                    @enderror
                </div>
                <div class="row">
                    <div class="form-group col mb-3-5">
                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-3-5" name="email" placeholder="Your E-mail Address" required>
                    </div>
                    @error('email')
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                    @enderror
                </div>
                <div class="row">
                    <div class="form-group col mb-3-5">
                        <input type="text" value="" data-msg-required="Please enter the contact number." maxlength="100" class="form-control text-3 h-auto py-3-5" name="contact_number" placeholder="Contact Number" required>
                    </div>
                    @error('contact_number')
                    <small class="text-danger">{{ $errors->first('contact_number') }}</small>
                    @enderror
                </div>
                <div class="row">
                    <div class="form-group col mb-3-5">
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-3-5" name="message" placeholder="Message" required></textarea>
                    </div>
                    @error('message')
                    <small class="text-danger">{{ $errors->first('message') }}</small>
                    @enderror
                </div>
                <div class="row">
                    <div class="form-group col">
                        <button type="submit" class="g-recaptcha custom-view-more d-inline-flex align-items-center btn btn-primary font-weight-semibold rounded-0 text-3-5 btn-px-4 btn-py-2" data-loading-text="Loading..." data-sitekey="6Lf9L4grAAAAAGY_MntR7Jl99naGcEQIhIxhlBbt"
                            data-callback='onSubmit'
                            data-action='submit'>
                            Submit
                            <img width="27" height="27" src="{{ asset('assets/img/demos/construction/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light ms-2'}" />
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-12 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1800">
            <h2 class="font-weight-bold text-color-dark text-6 mb-3">Corporate Headquarters</h2>
            <div id="googlemaps" class="google-map m-0" style="min-height: 450px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3599.5253466244812!2d55.7431376!3d25.5541831!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef5f9177b544521%3A0x8ce36e1acfdaf26!2sUmm%20Al%20Quwain%20Free%20Trade%20Zone%20Authority!5e0!3m2!1sen!2sin!4v1752894294354!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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