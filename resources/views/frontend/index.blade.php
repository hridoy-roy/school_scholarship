@extends('frontend.layouts.main')

@section('main-container')

<!--home Section -->
<section id="home" class="home">



    <div class="overlay">
        <div class="home_skew_border">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 ">

                        <div class="main_home_slider text-center">

                            <div class="single_home_slider">

                                <div class="main_home wow fadeInUp" data-wow-duration="700ms">

                                    <h3>Our Clients Are Our First Priority</h3>

                                    <h1>WELCOME TO BINO</h1>

                                    <div class="separator"></div>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s, when an unknown printer took a
                                        galley
                                        of type and scrambled it to make a type specimen book.</p>

                                    <div class="home_btn">
                                        <a href="https://bootstrapthemes.co" class="btn btn-lg m_t_10">GET
                                            STARTED NOW</a>
                                        <a href="https://bootstrapthemes.co" class="btn btn-default">LEARN
                                            MORE</a>
                                    </div>

                                </div>

                            </div>


                            <div class="single_home_slider">
                                <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                    <h3>Our Clients Are Our First Priority</h3>
                                    <h1>WELCOME TO BINO</h1>
                                    <div class="separator"></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s, when an unknown printer took a
                                        galley
                                        of type and scrambled it to make a type specimen book.</p>
                                    <div class="home_btn">
                                        <a href="https://bootstrapthemes.co" class="btn btn-lg m_t_10">GET
                                            STARTED NOW</a>
                                        <a href="https://bootstrapthemes.co" class="btn btn-default">LEARN
                                            MORE</a>
                                    </div>

                                </div>
                            </div>



                            <div class="single_home_slider">
                                <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                    <h3>Our Clients Are Our First Priority</h3>
                                    <h1>WELCOME TO BINO</h1>
                                    <div class="separator"></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s, when an unknown printer took a
                                        galley
                                        of type and scrambled it to make a type specimen book.</p>
                                    <div class="home_btn">
                                        <a href="https://bootstrapthemes.co" class="btn btn-lg m_t_10">GET
                                            STARTED NOW</a>
                                        <a href="https://bootstrapthemes.co" class="btn btn-default">LEARN
                                            MORE</a>
                                    </div>

                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div class="scrooldown">
                <a href="#feature"><i class="fa fa-arrow-down"></i></a>
            </div>
        </div>
    </div>
</section>
<!--End of home section -->


<!--feature section -->
<section id="feature" class="feature sections">
    <div class="container">
        <div class="row">
            <div class="main_feature text-center">

                @foreach ($members as $member)
                <div class="col-sm-3">
                    <div class="single_feature">
                        <div class="single_feature_icon">
                            <img src="{{asset('upload/member/'.$member->banner)}}" alt="" />
                        </div>
                        <h4>{{$member->title}}</h4>
                        <div class="separator3"></div>
                        <p>{{$member->designation}}</p>
                    </div>
                </div>
                @endforeach




            </div>
        </div>
    </div>
    <!--End of container -->
</section>
<!--End of feature Section -->
<hr />


<!-- History section -->
<section id="history" class="history sections">
    <div class="container">
        <div class="row">
            <div class="main_history">
                <div class="col-sm-6">
                    <div class="single_history_img">
                        <img src="{{@$history->image}}" alt="" />
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="single_history_content">
                        <div class="head_title">
                            <h2>{{@$history->title}}</h2>
                        </div>
                        <p>{{@$history->description}} </p>

                        <a href="{{@$history->button_link}}" class="btn btn-lg">{{@$history->button}}</a>
                    </div>
                </div>
            </div>
        </div>
        <!--End of row -->
    </div>
    <!--End of container -->
</section>
<!--End of history -->



{{-- Start Gallery Section --}}

<section id="portfolio" class="portfolio sections">
    <div class="container-fluid">
        <div class="row">
            <div class="main_portfolio">
                <div class="col-sm-12">
                    <div class="head_title text-center">
                        <h2>Gallery</h2>
                        <div class="subtitle">
                            It has survived not only five centuries, but also the leap scrambled it to make a
                            type.
                        </div>

                        <div class="separator"></div>

                    </div>

                </div>

                <div class="work_menu text-center">
                    <div id="filters" class="toolbar mb2 mt2">

                        <button class="btn-md fil-cat filter active" data-filter="all">ALL</button>/



                        @if (count($gallerys) > 0)
                        @foreach ($gallerys as $gallery)


                        <button class="btn-md fil-cat filter" data-rel="<?php echo $gallery->category;?>"
                            data-filter=".<?php echo $gallery->category;?> ">{{ucfirst($gallery->title)}} </button>

                        @endforeach
                        @endif

                    </div>

                </div>


                <div style="clear:both;"></div>

                <div id="portfoliowork">

                    @if (count($gallerys) > 0)
                    @foreach ($gallerys as $gallery)


                    <div class="single_portfolio tile scale-anm web grid-item-width2 <?php echo $gallery->category;?>">
                        <img src="{{url($gallery->small_image)}}" alt="Image" />

                        <a href="{{url($gallery->big_image)}}" class="portfolio-img">

                            <div class="grid_item_overlay">
                                <div class="separator4"></div>

                                <h3>{{$gallery->title}}</h3>
                                <p>{{$gallery->sub_title}}</p>
                            </div>
                        </a>
                    </div>

                    @endforeach
                    @endif


                </div>

                <div style="clear:both;"></div>
            </div>
        </div>
    </div><!-- End off container -->
</section> <!-- End off Work Section -->



<!-- Counter Section -->
<section id="counter" class="counter">
    <div class="video_overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main_counter_area text-center">

                        <div class="row">
                            <div class="single_counter border_right">
                                <div class="col-sm-3 col-xs-12">
                                    <div class="single_counter_item">
                                        <i class="icon icon-thumbs-up"></i>
                                        <h2 class="statistic-counter">{{@$counters->total_applicant_number}}</h2>
                                        <h4 class="">{{@$counters->total_applicant}}</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="single_counter">
                                <div class="col-sm-3 col-xs-12">
                                    <div class="single_counter_item">
                                        <i class="icon icon-business-3"></i>
                                        <h2 class="statistic-counter">{{@$counters->total_scholarship_number}}</h2>
                                        <h4 class="">{{@$counters->total_scholarship}}</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="single_counter">
                                <div class="col-sm-3 col-xs-12">
                                    <div class="single_counter_item">
                                        <i class="icon icon-people-32"></i>
                                        <h2 class="statistic-counter">{{@$counters->total_school_number}}</h2>
                                        <h4 class="">{{@$counters->total_school}}</h4>
                                    </div>

                                </div>
                            </div>

                            <div class="single_counter">
                                <div class="col-sm-3 col-xs-12">
                                    <div class="single_counter_item">
                                        <i class="icon icon-cup"></i>
                                        <h2 class="statistic-counter">{{@$counters->total_exam_center_number}}</h2>
                                        <h4 class="">{{@$counters->total_exam_center}}</h4>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End off container -->
</section> <!-- End of counter section -->



<!-- Client Logo Section -->
<section id="clogo" class="clogo">
    <div class="container">
        <div class="row">
            <div class="main_clogo sections text-center">
                <div class="head_title text-center">
                    <h2>Great Integrations with Others</h2>
                    <div class="subtitle">
                        Suspendisse sed eros mollis, tincidunt felis eget, interdum erat.
                        Nullam sit amet odio eu est aliquet euismod a a urna. Proin eu urna suscipit, dictum
                        quam nec.
                    </div>
                    <div class="separator"></div>
                </div><!-- End off Head_title -->
                @for ($i=1; $i <9; $i++) <div class="col-sm-3 col-xs-6">
                    <a href=""><img src="{{@$sponsor->$i}}" alt="" /></a>
            </div>
            @endfor
        </div>
    </div>
    </div>
    <div class="divider"></div>
</section><!-- End off clogo Section -->


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
    </div><!-- End off container -->
</section><!-- End off Blog Section -->


<!-- Contact Section -->
<section id="contact" class="contact">
    <section class="contact-container">
        <div class="form-container">
            <h3>Message us</h3>
            <form method="post" action="{{ route('contact.store') }}" class="contact-form">
                @csrf
                <input type="text" name="name" placeholder="Enter Your Name" required>
                <input type="text" name="mobile" placeholder="Enter Your mobile" required>
                <input type="email" name="email" placeholder="Enter Your email" required>
                <input type="text" name="subject" placeholder="Subject" required>
                <textarea name="massage" id="" cols="30" rows="10" placeholder="Write Message Here" required></textarea>
                <input type="submit" value="send" class="send-button">
            </form>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116833.95338886736!2d90.41968899999999!3d23.7808405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2z4Kai4Ka-4KaV4Ka-!5e0!3m2!1sbn!2sbd!4v1691609661530!5m2!1sbn!2sbd"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</section><!-- End of contact section -->
@endsection