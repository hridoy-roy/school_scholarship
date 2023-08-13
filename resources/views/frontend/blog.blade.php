@extends('frontend.layouts.main')

@section('main-container')
<!-- Blog Section -->
<section id="blog" class="blog">
    <div class="container-fluid">
        <div class="row">
            <div class="main_blog sections">
                <div class="head_title text-center">
                    <h2>OUR BLOG</h2>
                    <div class="subtitle">
                        Suspendisse sed eros mollis, tincidunt felis eget, interdum eratullam sit amet odio.
                    </div>
                    <div class="separator"></div>
                </div><!-- End off Head_title -->

                <div class="main_blog_content">
                    @foreach ($blogs as $blog)
                    <div class="col-sm-6">
                        <div class="single_blog_area textwhite">
                            <div class="row">
                                <div class="col-sm-6 no-padding">
                                    <div class="single_blog_img">
                                        <img src="{{asset('upload/blog/'.$blog->banner)}}" alt="" />
                                    </div>
                                </div>
                                <div class="col-sm-6 no-padding">
                                    <div class="single_blog_text s_b_left">
                                        <p>{{ $blog->slug }}</p>
                                        <h3>{{ $blog->title }}</h3>
                                        <div class="separator2"></div>
                                        <p>
                                            {!! Str::words($blog->body, 30, '...') !!}
                                        </p>

                                    </div>
                                    <a href="{{ url('blog').'/'.$blog->slug }}" class="read_more">Read More >></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</section>
<!-- End off Blog Section -->

@endsection