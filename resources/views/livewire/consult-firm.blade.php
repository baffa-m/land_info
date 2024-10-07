<div>
    {{-- The Master doesn't talk, he acts. --}}


<!-- Hero Start -->
<section class="bg-half-170 bg-primary d-table w-100" style="background-image: url('{{ asset('assets/images/real/1.jpg') }}');">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <h2 class="title text-white title-dark mb-0">Work with Our Experts </h2>
                    <p class="text-white title-darl mb-0">Consult our experts for professional results</p>
                </div>
            </div>  <!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Shape Start -->
<div class="position-relative">
    <div class="shape overflow-hidden text-color-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!--Shape End-->

<!-- Job List Start -->
<section class="section">
    <div class="container mt-5 mt-sm-0">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="sidebar p-4 rounded shadow">
                    <!-- SEARCH -->
                    <div class="widget">
                        <form role="search" method="get">
                            <div class="input-group mb-3 border rounded">
                                <input type="text" wire:model.debounce.300ms="search"class="form-control border-0" placeholder="Search Keywords...">
                                <button type="submit" class="input-group-text bg-transparent border-0" id="searchsubmit"><i class="uil uil-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- SEARCH -->

                </div>
            </div><!--end col-->

            @foreach ($firms as $firm)
            <div class="col-lg-8 col-md-6 col-12">
                <div class="row">
                    <div class="col-12 mt-4 pt-2">
                        <div class="job-box job-primary d-md-flex align-items-center border-0 shadow rounded p-4 position-relative">
                            <img src="storage/{{ $firm->logo_url }}" class="avatar avatar-md-sm rounded-circle" alt="">

                            <div class="ms-md-4 mt-4 mt-sm-0">
                                <a href="{{ route('firm.show', ['firm' => $firm])}}" class="title text-dark h5">{{ $firm->company_name }}</a>

                                <ul class="list-unstyled mb-0 mt-2">
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i class="uil uil-map-marker icons"></i> <a href="javascript:void(0)" class="text-dark">{{ $firm->address }}</li>
                                    <li class="d-lg-inline text-muted h6 mb-0 me-lg-2"><i class="uil uil-layers icons"></i> {{ $firm->type->land_type }}</li>
                                </ul>

                                <div class="mt-2">
                                    <span class="badge bg-soft-warning">Established in {{ $firm->year_established }}</span>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end col-->
            @endforeach
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Job List End -->

</div>
