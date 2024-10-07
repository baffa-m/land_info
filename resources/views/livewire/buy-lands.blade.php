<div>
    {{-- Stop trying to control. --}}
    <style>
        .form-control {
            border-color: #343a40;
        }
    </style>

    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('assets/images/real/1.jpg') center;">
        <div class="bg-overlay bg-black opacity-7"></div>
        <div class="container">
            <div class="row my-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading title-heading">
                        <h2 class="text-white title-dark mb-0 text-2xl"> Find a land </h2>
                        <p class="text-white">(Search in real time)</p>
                    </div>
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
    <section class="section px-32">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11 col-12 text-center">
                    <div class="card text-center features-absolute rounded shadow">
                        <form class="card-body text-start">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="mb-3">
                                        <label class="form-label dark-border">Land Size :</label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="search" class="fea icon-sm icons"></i>
                                            <input wire:model.live.debounce.300ms="plot_size" name="plot_size" id="name" type="text" class="form-control ps-5" placeholder="Search (in Sqm) :">
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="mb-3">
                                        <label class="form-label dark-border">Select Land Type:</label>
                                        <select wire:model.live='land_type' name="land_type" class="form-control form-select" id="buy-properties">
                                            <option value="">Select Land Type</option>
                                            @foreach ($land_types as $land_type)
                                            <option value="{{ $land_type->id}}">{{ $land_type->land_type }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="mb-3">
                                        <label class="form-label dark-border">Min Price :</label>
                                        <input wire:model.live.debounce.300ms="min_price" type="number" class="form-control" name="min_price" placeholder="Min Price"/>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="mb-3">
                                        <label class="form-label dark-border">Max Price :</label>
                                        <input wire:model.live.debounce.300ms="max_price" type="number" class="form-control" name="max_price" placeholder="Max Price"/>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form><!--end form-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-10">
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
                                    <span class="text-muted">Plot Size: {{ $land->plot_size }}sqm</span>
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
            </div><!--end row-->

            <!-- PAGINATION START -->
            <div class="col-12 mt-4 pt-2">
                {{ $lands->links('pagination::bootstrap-5') }}
            </div><!--end col-->
            <!-- PAGINATION END -->
        </div><!--end container-->

    </section><!--end section-->
    <!-- End -->
</div>
