@extends('layouts.app')


@section('content')

<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('assets/images/real/1.jpg') center;">
    <div class="bg-overlay bg-black opacity-7"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading title-heading">
                    <h2 class="text-white title-dark mb-0"> Sell Faster. Save Thousands. </h2>
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
            <div class="col-12">
                <div class="section-title mb-4 pb-2 text-center">
                    <h4 class="title mb-4">How It Works</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card border-0 text-center features feature-primary feature-clean rounded p-4">
                    <div class="icons text-center mx-auto">
                        <i class="uil uil-estate rounded h3 mb-0"></i>
                    </div>

                    <div class="card-body p-0 mt-4">
                        <a href="javascript:void(0)" class="title h5 text-dark">Evaluate Property</a>
                        <p class="text-muted mt-3 mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card border-0 text-center features feature-primary feature-clean rounded p-4">
                    <div class="icons text-center mx-auto">
                        <i class="uil uil-bag rounded h3 mb-0"></i>
                    </div>

                    <div class="card-body p-0 mt-4">
                        <a href="javascript:void(0)" class="title h5 text-dark">Meeting with Agent</a>
                        <p class="text-muted mt-3 mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card border-0 text-center features feature-primary feature-clean rounded p-4">
                    <div class="icons text-center mx-auto">
                        <i class="uil uil-key-skeleton rounded h3 mb-0"></i>
                    </div>

                    <div class="card-body p-0 mt-4">
                        <a href="javascript:void(0)" class="title h5 text-dark">Close the Deal</a>
                        <p class="text-muted mt-3 mb-0">Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title mb-4 pb-2 text-center">
                    <h4 class="title mb-4">Fill Out the form below</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Submit the form so we can evaluate your property</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Your Name <span class="text-danger">*</span></label>
                    <div class="form-icon position-relative">
                        <i data-feather="user" class="fea icon-sm icons"></i>
                        <input name="name" id="name" type="text" class="form-control ps-5" placeholder="First Name :">
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Your Email <span class="text-danger">*</span></label>
                    <div class="form-icon position-relative">
                        <i data-feather="mail" class="fea icon-sm icons"></i>
                        <input name="email" id="email" type="email" class="form-control ps-5" placeholder="Your email :">
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Subject</label>
                    <div class="form-icon position-relative">
                        <i data-feather="book" class="fea icon-sm icons"></i>
                        <input name="subject" id="subject" class="form-control ps-5" placeholder="Your subject :">
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Comments</label>
                    <div class="form-icon position-relative">
                        <i data-feather="message-circle" class="fea icon-sm icons"></i>
                        <textarea name="comments" id="comments" rows="4" class="form-control ps-5" placeholder="Your Message :"></textarea>
                    </div>
                </div>
            </div>
        </div><!--end row-->
        <div class="row">
            <div class="col-sm-12">
                <input type="submit" id="submit" name="send" class="btn btn-primary" value="Send Message">
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

@endsection
