@extends('layouts.app')


@section('content')

<!-- Hero Start -->
<section class="bg-half-260 d-table w-100" id="home">
    <div class="bg-overlay bg-black opacity-7"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h4 class="display-4 fw-bold text-white title-dark mb-3">Find your perfect property</h4>
                    <p class="para-desc text-white-50 mb-0 mx-auto">Benefit from our expertise on managing and designing conversion centered around you.</p>
                </div>
            </div>
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Start -->
<section class="section px-32">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title mb-4 pb-2 text-center">
                    <span class="badge rounded-pill bg-soft-primary">Process</span>
                    <h4 class="title mt-3 mb-4">How it works</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card border-0 text-center features feature-primary feature-clean rounded p-4">
                    <div class="icons text-center mx-auto">
                        <i class="uil uil-map-marker-plus rounded h3 mb-0"></i>
                    </div>

                    <div class="card-body p-0 mt-4">
                        <a href="javascript:void(0)" class="title h5 text-dark">Area Search</a>
                        <p class="text-muted mt-3 mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                        <div class="mt-2">
                            <a href="javascript:void(0)" class="text-primary">Read More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card border-0 text-center features feature-primary feature-clean rounded p-4">
                    <div class="icons text-center mx-auto">
                        <i class="uil uil-estate rounded h3 mb-0"></i>
                    </div>

                    <div class="card-body p-0 mt-4">
                        <a href="javascript:void(0)" class="title h5 text-dark">Property Lookup</a>
                        <p class="text-muted mt-3 mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                        <div class="mt-2">
                            <a href="javascript:void(0)" class="text-primary">Read More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card border-0 text-center features feature-primary feature-clean rounded p-4">
                    <div class="icons text-center mx-auto">
                        <i class="uil uil-house-user rounded h3 mb-0"></i>
                    </div>

                    <div class="card-body p-0 mt-4">
                        <a href="javascript:void(0)" class="title h5 text-dark">Buy / Sell Property</a>
                        <p class="text-muted mt-3 mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                        <div class="mt-2">
                            <a href="javascript:void(0)" class="text-primary">Read More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title mb-4 pb-2 text-center">
                    <span class="badge rounded-pill bg-soft-primary">Featured Items</span>
                    <h4 class="title mt-3 mb-4">Latest Property</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card shop-list border-0 shadow position-relative overflow-hidden">
                    <div class="shop-image position-relative overflow-hidden shadow">
                        <img src="assets/images/real/property/1.jpg" class="img-fluid" alt="">
                        <ul class="list-unstyled shop-icons">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-estate"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-heart"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary"><i class="uil uil-camera"></i></a></li>
                        </ul>
                    </div>
                    <div class="card-body content p-4">
                        <a href="property-detail.html" class="text-dark product-name h6">10765 Hillshire Ave, Baton Rouge, LA 70810, USA</a>

                        <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center">
                            <li class="d-flex align-items-center me-3">
                                <i class="uil uil-compress-arrows fs-5 me-1 text-primary"></i>
                                <span class="text-muted">8000sqf</span>
                            </li>

                            <li class="d-flex align-items-center me-3">
                                <i class="uil uil-bed-double fs-5 me-1 text-primary"></i>
                                <span class="text-muted">4 Beds</span>
                            </li>

                            <li class="d-flex align-items-center">
                                <i class="uil uil-bath fs-5 me-1 text-primary"></i>
                                <span class="text-muted">4 Baths</span>
                            </li>
                        </ul>
                        <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                            <li class="list-inline-item mb-0">
                                <span class="text-muted">Price</span>
                                <p class="fw-semibold mb-0">$5000</p>
                            </li>
                            <li class="list-inline-item mb-0 text-muted">
                                <span class="text-muted">Rating</span>
                                <ul class="fw-semibold text-warning list-unstyled mb-0">
                                    <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div><!--end items-->
            </div><!--end col-->

            <div class="col-12 mt-4 pt-2">
                <div class="text-center">
                    <a href="{{ route('buy.land')}}" class="mt-3 h6 text-primary">View More Properties <i class="uil uil-angle-right-b align-middle"></i></a>
                </div>
            </div>
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->


@endsection
