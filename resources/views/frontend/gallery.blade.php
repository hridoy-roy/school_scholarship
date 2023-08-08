@extends('frontend.layouts.main')

@section('main-container')

<!-- Start off Gallery Section -->

    <section id="portfolio" class="portfolio sections">
        <div class="container-fluid">
            <div class="row">
                <div class="main_portfolio">
                    <div class="col-sm-12">
                        <div class="head_title text-center">
                            <h2>RECENT WORKS</h2>
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
                            <button class="btn-md fil-cat filter" data-rel="web" data-filter=".web">WEB
                                DESIGN</button>/
                            <button class="btn-md fil-cat filter" data-rel="design" data-filter=".design">PRINT
                                DESIGN</button>/
                            <button class="btn-md fil-cat filter" data-rel="flyers"
                                data-filter=".flyers">ANIMATION</button>/
                            <button class="btn-md fil-cat filter" data-rel="bcards"
                                data-filter=".bcards">ART</button>/
                            <button class="btn-md fil-cat filter" data-rel="photo"
                                data-filter=".photo">PHOTOGRAPHY</button>/
                            <button class="btn-md fil-cat filter" data-rel="video"
                                data-filter=".video">VIDEO</button>
                        </div>

                    </div>

                    <div style="clear:both;"></div>
                    <div id="portfoliowork">
                        <div class="single_portfolio tile scale-anm web grid-item-width2 video">
                            <img src="assets/images/pf1.jpg" alt="" />
                            <a href="assets/images/pf1.jpg" class="portfolio-img">
                                <div class="grid_item_overlay">
                                    <div class="separator4"></div>
                                    <h3>T-SHIRT DESIGN</h3>
                                    <p>art / t-shirt</p>
                                </div>
                            </a>
                        </div>
                        <div class="single_portfolio tile scale-anm bcards photo">
                            <img src="assets/images/pf2.jpg" alt="" />
                            <a href="assets/images/pf2.jpg" class="portfolio-img">
                                <div class="grid_item_overlay">
                                    <div class="separator4"></div>
                                    <h3>T-SHIRT DESIGN</h3>
                                    <p>art / t-shirt</p>
                                </div>
                            </a>
                        </div>
                        <div class="single_portfolio tile scale-anm web video">
                            <img src="assets/images/pf3.jpg" alt="" />
                            <a href="assets/images/pf3.jpg" class="portfolio-img">
                                <div class="grid_item_overlay">
                                    <div class="separator4"></div>
                                    <h3>T-SHIRT DESIGN</h3>
                                    <p>art / t-shirt</p>
                                </div>
                            </a>
                        </div>
                        <div class="single_portfolio tile scale-anm web photo">
                            <img src="assets/images/pf4.jpg" alt="" />
                            <a href="assets/images/pf4.jpg" class="portfolio-img">
                                <div class="grid_item_overlay">
                                    <div class="separator4"></div>
                                    <h3>T-SHIRT DESIGN</h3>
                                    <p>art / t-shirt</p>
                                </div>
                            </a>
                        </div>
                        <div class="single_portfolio tile scale-anm bcards design">
                            <img src="assets/images/pf5.jpg" alt="" />
                            <a href="assets/images/pf5.jpg" class="portfolio-img">
                                <div class="grid_item_overlay">
                                    <div class="separator4"></div>
                                    <h3>T-SHIRT DESIGN</h3>
                                    <p>art / t-shirt</p>
                                </div>
                            </a>
                        </div>

                        <div class="single_portfolio tile scale-anm flyers video design">
                            <img src="assets/images/pf6.jpg" alt="" />
                            <a href="assets/images/pf6.jpg" class="portfolio-img">
                                <div class="grid_item_overlay">
                                    <div class="separator4"></div>
                                    <h3>T-SHIRT DESIGN</h3>
                                    <p>art / t-shirt</p>
                                </div>
                            </a>
                        </div>
                        <div class="single_portfolio tile scale-anm photo flyers">
                            <img src="assets/images/pf7.jpg" alt="" />
                            <a href="assets/images/pf7.jpg" class="portfolio-img">
                                <div class="grid_item_overlay">
                                    <div class="separator4"></div>
                                    <h3>T-SHIRT DESIGN</h3>
                                    <p>art / t-shirt</p>
                                </div>
                            </a>
                        </div>

                        <div class="single_portfolio tile scale-anm bcards video">
                            <img src="assets/images/pf8.jpg" alt="" />
                            <a href="assets/images/pf8.jpg" class="portfolio-img">
                                <div class="grid_item_overlay">
                                    <div class="separator4"></div>
                                    <h3>T-SHIRT DESIGN</h3>
                                    <p>art / t-shirt</p>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div style="clear:both;"></div>
                </div>
            </div>
        </div><!-- End off container -->
    </section>

<!-- End off Gallery Section -->

@endsection
