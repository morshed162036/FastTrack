@extends('client.layout.main')

@section('content')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('business/img/services-category/Slider-Business-Setup.jpg') }});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Business Setup</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('client.home') }}">Home ></a></li>
                    <li><span class="icon-down-arrow"></span></li>
                    <li>Business Setup</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End -->

    <!-- services section start -->

    <div class="row pt-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
        <div class="container">
        <div class="col-lg-12 col-xl-12 text-center">
                {{--  <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium mb-2 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250"><span
                            id="choose-text">Why
                            Choose Us</span></h2>  --}}
                <h3 class="text-9 line-height-1 text-transform-none font-weight-semibold mb-3 pb-1 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">License Options
                </h3>
                <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="750">Once you have formed your company, you will be eligible to apply for a free zone license. Our personalised approach to licensing and related procedures, coupled with a superior location and unmatched operational standards, makes setting up with us seamless, straightforward and flexible.
                </p>
            </div>
            </div>
        @foreach ($setups as $setup)
            <div class="col-md-4 mb-4 mb-md-0 col-lg-3">
                <div
                    class="card card-border card-border-top card-border-hover bg-color-light border-0 box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms anim-hover-inner-wrapper">
                    <div class="card-body p-relative zindex-1 p-5 text-center">
                        <div class="anim-hover-inner-translate-top-20px transition-3ms">
                            <img width="72" height="73" src="@if ($setup->image)
                                {{ asset('images/setup/'.$setup->image) }}
                            @endif" alt="image"/>
                            <h4 class="card-title mt-4 mb-2 text-5 font-weight-bold">{{ $setup->title }}</h4>
                        </div>
                        <div
                            class="w-100 text-center p-absolute opacity-0 bottom-30 left-0 transformY-p100 anim-hover-inner-opacity-10 anim-hover-inner-translate-top-0px transition-4ms">
                            <a href="@if ($setup->setup_details)
                                {{ route('setup-page.show',$setup->setup_details->id) }}
                            @endif"
                                class="read-more text-color-primary font-weight-semibold mt-2 text-2">Learn More <i
                                    class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <!-- services section end -->
    <ul class="custom-pagination-style-1 pagination pagination-rounded pagination-md justify-content-center">
        {{ $setups->links() }}
    </ul>
@endsection
