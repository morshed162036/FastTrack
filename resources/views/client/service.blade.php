@extends('client.layout.main')

@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg"
        style="background-image: url({{ asset('business/img/services-category/Services-Slider.jpg') }});">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Services</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('client.home') }}">Home ></a></li>
                <li><span class="icon-down-arrow"></span></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End -->

<!-- services section start -->

<section class="section-height-4">
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-10 text-center">
                {{--  <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium mb-2 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250"><span
                            id="choose-text">Why
                            Choose Us</span></h2>  --}}
                <h3 class="text-9 line-height-1 text-transform-none font-weight-semibold mb-3 pb-1 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Service Offerings
                </h3>
                <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="750">FastTrack offers a diverse range of business consultancy services
                    tailored to Dubai's dynamic market. From strategic planning to financial guidance, we provide
                    actionable solutions to help your business excel. Discover how we can elevate your business success.
                </p>
            </div>
        </div>
        <div class="row row-gutter-sm justify-content-center mb-5 appear-animation"
            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
            @foreach ($services as $service)
            <div class="col-sm-9 col-md-6 col-lg-4 mb-4">
                <a href="@if ($service->service_details)
                                {{ route('service-page.show',$service->service_details->id) }}
                            @endif" class="custom-link-hover-effects text-decoration-none"
                    data-cursor-effect-hover="plus">
                    <div class="card box-shadow-2" style="height: 480px; overflow:hidden">
                        <div class="card-img-top position-relative">
                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">

                                <div class="custom-crooked-line">

                                </div>

                            </div>
                            <img src="@if ($service->image)
                                            {{ asset('images/service/'.$service->image) }}
                                        @endif" class="img-fluid" alt="Card Image" />
                        </div>
                        <h4 class="font-weight-semibold text-color-black text-6 text-center mt-4 mb-1">
                            {{ $service->title }}
                        </h4>
                        <div class="card-body d-flex align-items-center custom-view-more px-4">
                            <div class="card-text w-100 mb-0">@if ($service->service_details)
                                {!! Str::limit($service->service_details->description, 50) !!}
                                @endif</div>
                            <img width="50" height="50" class="w-auto" id="arrow-right"
                                src="{{ asset('business/img/demos/business-consulting-3/icons/arrow-right.svg') }}"
                                alt="" data-icon
                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                style="width: 50px;" />
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

    </div>

</section>
<!-- services section end -->
<ul class="custom-pagination-style-1 pagination pagination-rounded pagination-md justify-content-center">
    {{ $services->links() }}
</ul>
@endsection
