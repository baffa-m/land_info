@extends('layouts.app')


@section('content')


<!-- Hero Start -->
<section class="bg-half-260 bg-primary d-table w-100" style="background-image: url({{ asset('assets/images/real/1.jpg')}});">
    <!-- <div class="bg-overlay"></div> -->
</section><!--end section-->
<!-- Hero End -->

<!-- Company Detail Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-12">
                <div class="job-profile position-relative">
                    <div class="card rounded shadow">
                        <div class="text-center py-5 border-bottom">
                            <img src="{{ Storage::url($firm->logo_url) }}" class="avatar avatar-medium mx-auto rounded-circle d-block" alt="">
                            <h5 class="mt-3 mb-0">{{ $firm->company_name }}</h5>
                            <p class="text-muted mb-0">Established in {{ $firm->year_established }}</p>
                        </div>

                        <div class="p-4">
                            <h5>Company Details :</h5>
                            <ul class="list-unstyled mb-4">
                                <li class="h6"><i data-feather="map-pin" class="fea icon-sm text-warning me-3"></i><span class="text-muted">Location :</span> {{ $firm->address }}</li>
                                <li class="h6"><i data-feather="map-pin" class="fea icon-sm text-warning me-3"></i><span class="text-muted">State :</span> {{ $firm->state }}</li>
                                <li class="h6"><i data-feather="map-pin" class="fea icon-sm text-warning me-3"></i><span class="text-muted">Category :</span> {{ $firm->type->land_type }} Constructions</li>
                                <li class="h6"><i data-feather="link" class="fea icon-sm text-warning me-3"></i><span class="text-muted">Website :</span> {{ $firm->website_url }}</li>
                                <li class="h6"><i data-feather="dollar-sign" class="fea icon-sm text-warning me-3"></i><span class="text-muted">Email :</span> {{ $firm->contact_email }}</li>
                                <li class="h6"><i data-feather="users" class="fea icon-sm text-warning me-3"></i><span class="text-muted">Phone Contact :</span> {{ $firm->phone_number }}</li>
                            </ul>
                            <div class="d-grid">
                                <a href="tel:{{ $firm->phone_number}}" class="btn btn-primary"><i class="mdi mdi-phone"></i> Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-8 col-md-7 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="ms-md-4">
                    <h4>About us :</h4>
                    @foreach (explode("\n", $firm->description) as $desc)
                    <p class="text-muted">{{ $desc }}</p>
                    @endforeach

                    <h4 class="mt-lg-5 mt-4">Our Services :</h4>
                    @foreach (explode("\n", $firm->services_offered) as $service)
                    <p class="text-muted mb-0">{{ $service }}</p>
                    @endforeach
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->




@endsection
