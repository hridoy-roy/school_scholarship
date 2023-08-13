@extends('frontend.layouts.main')

@section('main-container')
<!-- Blog Section -->
<section id="blog" class="blog">
    <div class="container">
        <div class="row">
            <div class="main_blog sections">
                <div class="head_title text-center">
                    <h2>BLOG Details</h2>
                    <div class="">
                        <h4>{{ $blog->title }}</h4>
                        {{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}
                    </div>
                    <div class="separator"></div>
                </div><!-- End off Head_title -->

                <div class="main_blog_content">
                    {!! $blog->body !!}
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End off Blog Section -->
@endsection
