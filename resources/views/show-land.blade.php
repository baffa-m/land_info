@extends('layouts.app')


@section('content')


<!-- Hero Start -->
<section class="bg-top-74 d-table w-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-1">
                <div class="work-container work-primary work-modern position-relative d-block overflow-hidden rounded">
                    <img src="assets/images/real/property/single/1.jpg" class="img-fluid rounded shadow" alt="">
                    <div class="overlay-work"></div>
                    <div class="icons text-center">
                        <a href="assets/images/real/property/single/1.jpg" class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                    </div>
                </div>
            </div><!--end col-->


            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12 p-1">
                                <div class="work-container work-primary work-modern position-relative d-block overflow-hidden rounded">
                                    <img src="assets/images/real/property/single/2.jpg" class="img-fluid rounded shadow" alt="">
                                    <div class="overlay-work"></div>
                                    <div class="icons text-center">
                                        <a href="assets/images/real/property/single/2.jpg" class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-12 p-1">
                                <div class="work-container work-primary work-modern position-relative d-block overflow-hidden rounded">
                                    <img src="assets/images/real/property/single/3.jpg" class="img-fluid rounded shadow" alt="">
                                    <div class="overlay-work"></div>
                                    <div class="icons text-center">
                                        <a href="assets/images/real/property/single/3.jpg" class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12 p-1">
                                <div class="work-container work-primary work-modern position-relative d-block overflow-hidden rounded">
                                    <img src="assets/images/real/property/single/4.jpg" class="img-fluid rounded shadow" alt="">
                                    <div class="overlay-work"></div>
                                    <div class="icons text-center">
                                        <a href="assets/images/real/property/single/4.jpg" class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-12 p-1">
                                <div class="work-container work-primary work-modern position-relative d-block overflow-hidden rounded">
                                    <img src="assets/images/real/property/single/5.jpg" class="img-fluid rounded shadow" alt="">
                                    <div class="overlay-work"></div>
                                    <div class="icons text-center">
                                        <a href="assets/images/real/property/single/5.jpg" class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-color-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- Hero End -->

<!-- Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0 order-2 order-md-1">
                <div class="work-detail">
                    <h4 class="title mb-3">{{ $land->adress}}</h4>

                    <ul class="list-unstyled mt-3 d-flex align-items-center">
                        <li class="d-flex align-items-center me-3">
                            <i class="uil uil-compress-arrows fs-4 me-1 text-primary"></i>
                            <span class="text-muted fs-5">{{ $land->plot_size}}sqf</span>
                        </li>
                    </ul>

                    <p class="description text-muted">{{ $land->additonal_info }}</p>


                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 order-1 order-md-2">
                <div class="sticky-bar work-detail">
                    <div class="p-4 rounded shadow">
                        <h4 class="title">Price:</h4>

                        <ul class="list-unstyled mb-0">
                            <li class="mt-3 d-flex justify-content-between">
                                <b class="fs-5">$ 45,231</b>
                                <span class="text-primary fw-bold">For Sale</span>
                            </li>
                            <li class="mt-3 d-flex justify-content-between">
                                <small class="text-muted">Days on Hously</small>
                                <small class="fw-bold">124 Days</small>
                            </li>
                            <li class="mt-3 d-flex justify-content-between">
                                <small class="text-muted">Price per sq ft</small>
                                <small class="fw-bold">$ 186</small>
                            </li>
                            <li class="mt-3 d-flex justify-content-between">
                                <small class="text-muted">Monthly Payment (estimate)</small>
                                <small class="fw-bold">$ 1497/Monthly</small>
                            </li>
                        </ul>
                    </div>

                    <div class="text-center mt-4 pt-2">
                        <h5>Have Question ? Get in touch!</h5>
                        <a href="" class="btn btn-soft-primary mt-3"><i class="mdi mdi-phone"></i> Contact us</a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->



@endsection
