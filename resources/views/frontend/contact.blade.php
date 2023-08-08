@extends('frontend.layouts.main')

@section('main-container')

<!-- Start of contact section -->

    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact_contant sections">
                        <div class="head_title text-center">
                            <h2>kEEP IN TOUCH</h2>
                            <div class="subtitle">
                                Nullam sit amet odio eu est aliquet euismod a a urna. Proin eu urna suscipit, dictum
                                quam nec.
                            </div>
                            <div class="separator"></div>
                        </div><!-- End off Head_title -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="main_contact_info">
                                    <div class="row">
                                        <div class="contact_info_content padding-top-90 padding-bottom-60 p_l_r">
                                            <div class="col-sm-12">
                                                <div class="single_contact_info">
                                                    <div class="single_info_text">
                                                        <h3>OUR ADDRESS</h3>
                                                        <h4>House #13, Streat road, Sydney
                                                            2310 Australia</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single_contact_info">
                                                    <div class="single_info_text">
                                                        <h3>CALL US</h3>
                                                        <h4>+ 880 168 109 1425</h4>
                                                        <h4>+ 0216809142</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single_contact_info">
                                                    <div class="single_info_text">
                                                        <h3>EMAIL US</h3>
                                                        <h4>contactus@email.com</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single_contant_left padding-top-90 padding-bottom-90">
                                    <form action="#" id="formid">
                                        <div
                                            class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name"
                                                            placeholder="First Name" required="">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email"
                                                            placeholder="Email" required="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject"
                                                            placeholder="Subject" required="">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <textarea class="form-control" name="message" rows="7"
                                                    placeholder="Message"></textarea>
                                            </div>

                                            <div class="">
                                                <input type="submit" value="SEND MESSAGE" class="btn btn-lg">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- End of contact section -->

@endsection
