<div>
    {{-- Stop trying to control. --}}


    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('assets/images/real/1.jpg') center;">
        <div class="bg-overlay bg-black opacity-7"></div>
        <div class="container">
            <div class="row my-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading title-heading">
                        <h2 class="text-white title-dark mb-0"> Find a land </h2>
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
                                        <label class="form-label">Land Size :</label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="search" class="fea icon-sm icons"></i>
                                            <input name="plot_size" id="name" type="text" class="form-control ps-5" placeholder="Search (in Sq) :">
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Select Land Type:</label>
                                        <select name="land_type" class="form-control form-select" id="buy-properties">
                                            <option>Houses</option>
                                            <option>Apartment</option>
                                            <option>Offices</option>
                                            <option>Townhome</option>
                                        </select>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Min Price :</label>
                                        <select class="form-control form-select" name="min_price" id="buy-min-price">
                                            <option>Min Price</option>
                                            <option>500</option>
                                            <option>1000</option>
                                            <option>2000</option>
                                            <option>3000</option>
                                            <option>4000</option>
                                            <option>5000</option>
                                            <option>6000</option>
                                        </select>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Max Price :</label>
                                        <select class="form-control form-select" name="max_price" id="buy-max-price">
                                            <option>Max Price</option>
                                            <option>500</option>
                                            <option>1000</option>
                                            <option>2000</option>
                                            <option>3000</option>
                                            <option>4000</option>
                                            <option>5000</option>
                                            <option>6000</option>
                                        </select>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-3 col-md-6 col-12">
                                    <a href="javascript:void(0)" class="btn btn-primary w-100">Search now</a>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form><!--end form-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
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
                                    <span class="text-muted">{{ $land->plot_size }}sqf</span>
                                </li>
                            </ul>
                            <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                <li class="list-inline-item mb-0">
                                    <span class="text-muted">Price</span>
                                    <p class="fw-semibold mb-0">${{ $land->price }}</p>
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
