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

                <div class="col-sm-3">
                    <div class="single_feature">
                        <div class="single_feature_icon">
                            <i class="fa fa-clone"></i>
                        </div>

                        <h4>SLEEK DESIGN</h4>
                        <div class="separator3"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting let.
                            Lorem Ipsum has been the industry.</p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="single_feature">
                        <div class="single_feature_icon">
                            <i class="fa fa-heart-o"></i>
                        </div>

                        <h4>CLEAN CODE</h4>
                        <div class="separator3"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting let.
                            Lorem Ipsum has been the industry.</p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="single_feature">
                        <div class="single_feature_icon">
                            <i class="fa fa-lightbulb-o"></i>
                        </div>
                        <h4>CREATIVE IDEAS</h4>
                        <div class="separator3"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting let.
                            Lorem Ipsum has been the industry.</p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="single_feature">
                        <div class="single_feature_icon">
                            <i class="fa fa-comments-o"></i>
                        </div>

                        <h4>FREE SUPPORT</h4>
                        <div class="separator3"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting let.
                            Lorem Ipsum has been the industry.</p>
                    </div>
                </div>

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
                        <img src="{{ url('frontend/assets/images/stab1.png') }}" alt="" />
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="single_history_content">
                        <div class="head_title">
                            <h2>OUR HISTORY</h2>
                        </div>
                        <p>It is a long established fact that a reader will be distracted by the readable
                            content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal
                            distribution of letters, as opposed to using 'Content here, content here', making it
                            look like readable English. Many desktop publishing packages and web page editors
                            now use
                            Lorem Ipsum as their default model text, and a search for 'lorem ipsum' </p>

                        <a href="" class="btn btn-lg">BROWSE OUR WORK</a>
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


                        <button class="btn-md fil-cat filter" data-rel="<?php echo $gallery->category;?>" data-filter=".<?php echo $gallery->category;?> ">{{ucfirst($gallery->title)}} </button>

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



<!-- Study Section -->
<section id="study" class="study text-center wow fadeIn" data-wow-duration="2s" data-wow-dealy="1.5s">
    <div class="container">
        <div class="row">
            <div class="main_study_area sections">
                <div class="head_title text-center">
                    <h2>CASE STUDY</h2>
                    <div class="subtitle">
                        A brief story about how this process works, keep an eye till the end.
                    </div>
                    <div class="separator"></div>
                </div>
                <div class="single_study_content">
                    <div class="col-sm-6">
                        <div class="single_study_slid_area">

                            <div class="single_study_text">
                                <div class="study_slider">
                                    <div class="item">
                                        <div class="s_study_icon">
                                            <i class="fa fa-lightbulb-o"></i>
                                        </div>
                                        <h4>aCCUMULATE CREATIVE IDEAS</h4>
                                        <div class="separator3"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting let.
                                            Lorem Ipsum has been the industry.
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            let.
                                            Lorem Ipsum has been the industry Printing and typelorem Ipsum has
                                            been the setting let.</p>

                                        <a href="" class="btn btn-lg">read more</a>
                                    </div>
                                    <div class="item">
                                        <div class="s_study_icon">
                                            <i class="fa fa-lightbulb-o"></i>
                                        </div>
                                        <h4>aCCUMULATE CREATIVE IDEAS</h4>
                                        <div class="separator3"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting let.
                                            Lorem Ipsum has been the industry.
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            let.
                                            Lorem Ipsum has been the industry Printing and typelorem Ipsum has
                                            been the setting let.</p>

                                        <a href="" class="btn btn-lg">read more</a>
                                    </div>
                                    <div class="item">
                                        <div class="s_study_icon">
                                            <i class="fa fa-lightbulb-o"></i>
                                        </div>
                                        <h4>aCCUMULATE CREATIVE IDEAS</h4>
                                        <div class="separator3"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting let.
                                            Lorem Ipsum has been the industry.
                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                            let.
                                            Lorem Ipsum has been the industry Printing and typelorem Ipsum has
                                            been the setting let.</p>

                                        <a href="" class="btn btn-lg">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="single_study_right_img">
                        <div class="col-sm-6">
                            <div class="single_study_img">
                                <img src="{{ url('frontend/assets/images/study.jpg') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End off row -->
    </div><!-- End off Container -->
</section><!-- End off Study Section -->


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
                                        <h2 class="statistic-counter">3891</h2>
                                        <h4 class="">User Favourites</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="single_counter">
                                <div class="col-sm-3 col-xs-12">
                                    <div class="single_counter_item">
                                        <i class="icon icon-business-3"></i>
                                        <h2 class="statistic-counter">281</h2>
                                        <h4 class="">Posts Last 24 Hours</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="single_counter">
                                <div class="col-sm-3 col-xs-12">
                                    <div class="single_counter_item">
                                        <i class="icon icon-people-32"></i>
                                        <h2 class="statistic-counter">618</h2>
                                        <h4 class="">Total Posts</h4>
                                    </div>

                                </div>
                            </div>

                            <div class="single_counter">
                                <div class="col-sm-3 col-xs-12">
                                    <div class="single_counter_item">
                                        <i class="icon icon-cup"></i>
                                        <h2 class="statistic-counter">178</h2>
                                        <h4 class="">Amazing Features</h4>

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



<!-- Team Section -->
<section id="team" class="team">
    <div class="main_team_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="head_title textwhite text-center margin-top-80">
                        <h2>OUR TEAM</h2>
                        <div class="subtitle">
                            Meet the craziest team. Share your thoughts with them.
                        </div>
                        <div class="separator"></div>
                    </div><!-- End off Head_title -->

                    <div class="main_team">
                        <ul>
                            <li>
                                <div class="single_team_img">
                                    <img src="{{ url('frontend/assets/images/team1.jpg') }}" alt="" />
                                </div>
                                <div class="single_team_text">
                                    <h4>Semf Ucuk</h4>
                                    <p>Founder</p>
                                </div>
                            </li>
                            <li>
                                <div class="single_team_img">
                                    <img src="{{ url('frontend/assets/images/team2.jpg') }}" alt="" />
                                </div>
                                <div class="single_team_text">
                                    <h4>Kazi Erfan</h4>
                                    <p>Engineering</p>
                                </div>
                            </li>
                            <li>
                                <div class="single_team_img">
                                    <img src="{{ url('frontend/assets/images/team3.jpg') }}" alt="" />
                                </div>
                                <div class="single_team_text">
                                    <h4>Jeng Koli</h4>
                                    <p>Designer</p>
                                </div>
                            </li>
                            <li>
                                <div class="single_team_img">
                                    <img src="{{ url('frontend/assets/images/team4.jpg') }}" alt="" />
                                </div>
                                <div class="single_team_text">
                                    <h4>Pet Romak</h4>
                                    <p>Marketing</p>
                                </div>
                            </li>
                            <li>
                                <div class="single_team_img">
                                    <img src="{{ url('frontend/assets/images/test2.jpg') }}" alt="" />
                                </div>
                                <div class="single_team_text">
                                    <h4>Chet Pok</h4>
                                    <p>Web Developer</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div><!-- End of main team contant -->
            </div>
        </div><!-- End of container -->
    </div>
</section><!-- End off Team Section -->

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

                <div class="col-sm-3 col-xs-6">
                    <a href=""><img src="{{ url('frontend/assets/images/clogo1.png') }}" alt="" /></a>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <a href=""><img src="{{ url('frontend/assets/images/clogo2.png') }}" alt="" /></a>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <a href=""><img src="{{ url('frontend/assets/images/clogo3.png') }}" alt="" /></a>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <a href=""><img src="{{ url('frontend/assets/images/clogo4.png') }}" alt="" /></a>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <a href=""><img src="{{ url('frontend/assets/images/clogo5.png') }}" alt="" /></a>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <a href=""><img src="{{ url('frontend/assets/images/clogo6.png') }}" alt="" /></a>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <a href=""><img src="{{ url('frontend/assets/images/clogo9.png') }}" alt="" /></a>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <a href=""><img src="{{ url('frontend/assets/images/clogo8.png') }}" alt="" /></a>
                </div>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116833.95338886736!2d90.41968899999999!3d23.7808405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2z4Kai4Ka-4KaV4Ka-!5e0!3m2!1sbn!2sbd!4v1691609661530!5m2!1sbn!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </section><!-- End of contact section -->
@endsection
