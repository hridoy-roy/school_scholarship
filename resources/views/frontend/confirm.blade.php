@extends('frontend.layouts.main')

@section('main-container')
<!-- Blog Section -->
<section id="blog" class="blog">
    <div class="container-fluid">
        <div class="row">
            <div class="main_blog sections">
                <div class="head_title text-center">
                    <h2>Confirm</h2>
                    <div class="subtitle">
                        Registation Success
                    </div>
                    <div class="separator"></div>
                </div><!-- End off Head_title -->

                <div class="test-center">
                    <a href="{{ route('print.student.info',$student->id) }}" class="btn btn-success text-center">Print
                    Info</a>
                <a href="/" class="btn btn-success text-center">Home</a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End off Blog Section -->

@endsection
