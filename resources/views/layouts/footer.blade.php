<footer class="footer bg-light section-pattern footer-bg"
        data-bg-img="{{ asset('img/section-pattern/footer-pattern.png') }}">
    <!-- Footer Top Begin -->
    <div class="footer-top pt-60">
        <div class="container border-bottom">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <!-- Contact Widget Begin -->
                    <div class="widget widget_contact_info">
                        <!-- Widget Logo Begin -->
                        <div class="widget-logo">
                            <img src="{{ asset('img/footer_logo.png') }}" data-rjs="2" alt="">
                        </div>
                        <!-- Widget Logo End -->

                        <!-- Widget Content Begin -->
                        <div class="info-content">
                            <div class="single-info">
                                <span>Je kan ons vinden</span>
                                <p>Spijkenisse</p>
                            </div>
                            <div class="single-info">
                                <span>Bel ons</span>
                                <p><a href="#">+0096665431</a></p>
                            </div>
                            <div class="single-info">
                                <span>Email ons</span>
                                <p>
                                    <a href="#">test@test.com</a>
                                </p>
                            </div>
                        </div>
                        <!-- Widget Content End -->
                    </div>
                    <!-- About Widget End -->
                </div>
{{--                <div class="col-lg-3 col-sm-6">--}}
{{--                    <!-- Widget Recent Post Begin -->--}}
{{--                    <div class="widget widget_recent_entries">--}}
{{--                        <!-- Widget Title Begin  -->--}}
{{--                        <div class="widget-title">--}}
{{--                            <h4>Recent Posts</h4>--}}
{{--                        </div>--}}
{{--                        <!-- Widget Title End  -->--}}

{{--                        <!-- Single Latest Post Begin -->--}}
{{--                        <div class="single-post media">--}}
{{--                            <div class="post-image">--}}
{{--                                <img src="{{ asset('img/blog/recent-post.png') }}" data-rjs="2" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="post-content media-body">--}}
{{--                                <span class="posted-on">18 Feb, 2019</span>--}}
{{--                                <h5><a href="#">Funds in Institutional Portfolios</a></h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Single Latest Post End -->--}}

{{--                        <!-- Single Latest Post Begin -->--}}
{{--                        <div class="single-post media">--}}
{{--                            <div class="post-image">--}}
{{--                                <img src="{{ asset('img/blog/recent-post.png') }}" data-rjs="2" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="post-content media-body">--}}
{{--                                <span class="posted-on">18 Feb, 2019</span>--}}
{{--                                <h5><a href="#">Funds in Institutional Portfolios</a></h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Single Latest Post End -->--}}
{{--                    </div>--}}
{{--                    <!-- Widget Recent Post End -->--}}
{{--                </div>--}}
                <div class="col-lg-6 col-sm-6">
                    <!-- Widget Quick Nav -->
                    <div class="widget widget_nav_menu">
                        <!-- Widget Title Begin  -->
                        <div class="widget-title">
                            <h4>Quick Links</h4>
                        </div>
                        <!-- Widget Title End  -->

                        <!-- Menu Begin -->
                        <ul class="menu">
                            <li><a href="#">Terms and Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                        <!-- Menu End -->
                    </div>
                    <!-- Widget Quick Nav -->
                </div>
{{--                <div class="col-lg-4 col-sm-6">--}}
{{--                    <!-- Widget Newsletter Begin -->--}}
{{--                    <div class="widget widget_newsletter">--}}
{{--                        <!-- Widget Title Begin  -->--}}
{{--                        <div class="widget-title">--}}
{{--                            <h4>Newsletter</h4>--}}
{{--                        </div>--}}
{{--                        <!-- Widget Title End  -->--}}

{{--                        <div class="newsletter-content">--}}
{{--                            <P>Cuteness you exquisite ourselves now end--}}
{{--                                forfeited. Enquire ye without it garrets himself. Interest our nor received followed--}}
{{--                                was.</P>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Widget Newsletter End -->--}}

{{--                    <!-- Widget Social Icon Begin -->--}}
{{--                    <div class="widget widget_social_icon">--}}
{{--                        <ul class="social_icon_list list-inline">--}}
{{--                            <li>--}}
{{--                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <!-- Widget Social Icon End -->--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- Footer Top End -->

    <!-- Footer Bottom Begin -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright-text text-center">
                        <span><a href="{{ route('home.index') }}">{{ config('app.name') }}</a> &copy; Copyright {{ \Carbon\Carbon::now()->year }}. All rights reserved.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->

</footer>
