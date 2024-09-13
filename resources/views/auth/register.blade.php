@extends('layouts.app')


@section('content')


<!-- Start -->
<section class="section bg-gray-100">

    <div class="container mt-20">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="flex justify-center">
                    <div class="section-title mb-4 pb-2 w-full max-w-3xl border border-black"> <!-- Added w-full and max-w-3xl -->
                      <form>
                        @include('auth.form')
                    </form>
                    </div>
                  </div>

            </div><!--end col-->
        </div><!--end row-->>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

@endsection
