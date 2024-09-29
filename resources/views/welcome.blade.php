@extends('layouts.app')


@section('content')

<!-- Hero Start -->
<section class="bg-half-260 d-table w-100" id="home">
    <div class="bg-overlay bg-black opacity-7"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h4 class="display-4 fw-bold text-white title-dark mb-3">Search for your ideal plot</h4>
                    <p class="para-desc text-white-50 mb-0 mx-auto">Be confident in trusting our services for the best land solutions.</p>
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
                        <p class="text-muted mt-3 mb-0">Search Properties by Area.</p>
                        <div class="mt-2">
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
                        <p class="text-muted mt-3 mb-0">Filter properties Dynamically.</p>
                        <div class="mt-2">
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
                        <p class="text-muted mt-3 mb-0">Buy/Sell from range of available lands.</p>
                        <div class="mt-2">
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
                    <h4 class="title mt-3 mb-4">Latest Properties</h4>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            @foreach($lands as $land)
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card shop-list border-0 shadow position-relative overflow-hidden">
                    <div class="shop-image position-relative overflow-hidden shadow">
                        <!-- Display the first image of the land -->
                        @if($land->images->isNotEmpty())
                            <img src="{{ asset('storage/' . $land->images->first()->image_url) }}" class="img-fluid" alt="">
                        @else
                            <!-- Fallback image if no images available -->
                            <img src="assets/images/real/property/default.jpg" class="img-fluid" alt="">
                        @endif

                    </div>
                    <div class="card-body content p-4">
                        <a href="{{ route('show.land', ['land' => $land ])}}" class="text-dark product-name h6">{{ $land->address }}</a>

                        <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center">
                            <li class="d-flex align-items-center me-3">
                                <i class="uil uil-compress-arrows fs-5 me-1 text-primary"></i>
                                <span class="text-muted">Plot Size: {{ $land->plot_size }}sqf</span>
                            </li>
                        </ul>
                        <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                            <li class="list-inline-item mb-0">
                                <span class="text-muted">Price</span>
                                <p class="fw-semibold mb-0">₦{{ number_format($land->price, 2) }}</p>
                            </li>
                        </ul>
                    </div>
                </div><!--end items-->
            </div><!--end col-->
            @endforeach

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
