@extends('layouts.app')

@section('content')

<!-- Hero Start -->
<section class="bg-top-74 d-table w-100">
    <div class="container-fluid">
        <div class="row">
            <!-- Main Image Display -->
            @if ($land->images->isNotEmpty())
                <div class="col-lg-6 p-1">
                    <div class="work-container work-primary work-modern position-relative d-block overflow-hidden rounded">
                        <!-- Display the first image as the main image -->
                        <img src="{{ asset('storage/' . $land->images->first()->image_url) }}" class="img-fluid rounded shadow" alt="">
                        <div class="overlay-work"></div>
                        <div class="icons text-center">
                            <a href="{{ asset('storage/' . $land->images->first()->image_url) }}" class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                        </div>
                    </div>
                </div><!--end col-->
            @endif

            <!-- Thumbnail Image Display -->
            <div class="col-lg-6">
                <div class="row">
                    @foreach($land->images->skip(1) as $image) <!-- Skip the first image, as it’s the main image -->
                        <div class="col-md-6 p-1">
                            <div class="work-container work-primary work-modern position-relative d-block overflow-hidden rounded">
                                <img src="{{ asset('storage/' . $image->image_url) }}" class="img-fluid rounded shadow" alt="">
                                <div class="overlay-work"></div>
                                <div class="icons text-center">
                                    <a href="{{ asset('storage/' . $image->image_url) }}" class="work-icon bg-white d-inline-flex rounded-pill lightbox"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->
                    @endforeach
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
        <div class="row px-52 text-xl">
            <div class="col-lg-8 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0 order-2 order-md-1">
                <div class="work-detail">
                    <h4 class="title mb-3"><span class="text-muted fs-5">Address: </span>{{ $land->address }}</h4>

                    <ul class="list-unstyled mt-3 d-flex align-items-center">
                        <li class="d-flex align-items-center me-3">
                            <i class="uil uil-compress-arrows fs-4 me-1 text-primary"></i>
                            <span class="text-muted fs-5">Land Size: {{ $land->plot_size }}sqf</span>
                        </li>
                    </ul>
                    <h3 class="mt-5">Additonal Information</h3>
                    <p class="description text-muted">{{ $land->additional_info }}</p>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 order-1 order-md-2">
                <div class="sticky-bar work-detail">
                    <div class="p-4 rounded shadow">
                        <h4 class="title">Price:</h4>

                        <ul class="list-unstyled mb-0">
                            <li class="mt-3 d-flex justify-content-between">
                                <b class="fs-5">₦ {{ number_format($land->price, 2) }}</b>
                                <span class="text-primary fw-bold">For Sale</span>
                            </li>
                            <li class="mt-3 d-flex justify-content-between">
                                <small class="text-muted">Land Type</small>
                                <small class="fw-bold">{{ $land->type->land_type }}</small>
                            </li>
                            <li class="mt-3 d-flex justify-content-between">
                                <small class="text-muted">Plot Size</small>
                                <small class="fw-bold">{{ $land->plot_size }}</small>
                            </li>
                            <li class="mt-3 d-flex justify-content-between">
                                <small class="text-muted">Plot Number</small>
                                <small class="fw-bold">{{ $land->plot_no }}</small>
                            </li>
                            <li class="mt-3 d-flex justify-content-between">
                                <small class="text-muted">Block Number</small>
                                <small class="fw-bold">{{ $land->block_no }}</small>
                            </li>
                            <li class="mt-3 d-flex justify-content-between">
                                <small class="text-muted">Land Owner</small>
                                <small class="fw-bold">{{ $land->name }}</small>
                            </li>
                            <li class="mt-3 d-flex justify-content-between">
                                <small class="text-muted">Occupation</small>
                                <small class="fw-bold">{{ $land->occupation }}</small>
                            </li>
                        </ul>
                    </div>

                    <div class="text-center mt-4 pt-2">
                        <h5>Have Questions? Get in touch!</h5>
                        <a href="javascript:void(0)" class="btn btn-soft-primary mt-3"><i class="mdi mdi-phone"></i> Contact us</a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

@endsection
