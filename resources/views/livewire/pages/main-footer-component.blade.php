@if (Request::is('properties-grid-split'))
</div>
@elseif (Request::is('properties-list-split'))
</div>
@else
<!-- cta #1
============================================= -->
<section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark pt-90 cth">
    <div class="bg-section"><img src="{{asset('assets/user/assets/images/cta/bg-1.jpg')}}" alt="Background"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <h3>Join our professional team & agents to start selling your house</h3>
                <a href="#" class="btn btn--primary">Contact</a>
            </div>
            <!-- .col-md-6 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #cta1 end -->

<!-- Footer #1
============================================= -->
<footer id="footer" class="footer footer-1 bg-white cth">
    <!-- Widget Section
============================================= -->
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 widget--about">
                    <div class="widget--content">
                        <div class="footer--logo">
                            <img src="{{asset('assets/user/assets/images/logo/GAP-Logo-FC.svg')}}" alt="logo" width="126" height="35">
                        </div>
                        <p>Pamstech House 4th Floor
                            Woodvale Grove, Westland, Nairobi
                            P.O.Box 2497-00606</p>
                        <div class="footer--contact">
                            <ul class="list-unstyled mb-0">
                                <li>+254721516516</li>
                                <li><a href="mailto:pg@gap.co.ke">pg@gap.co.ke</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-2 end -->
                <div class="col-xs-12 col-sm-3 col-md-2 col-md-offset-1 widget--links">
                    <div class="widget--title">
                        <h5>Company</h5>
                    </div>
                    <div class="widget--content">
                        <ul class="list-unstyled mb-0">
                            <li><a href="/about">About us</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="/properties">Properties</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- .col-md-2 end -->
                <div class="col-xs-12 col-sm-3 col-md-2 widget--links">
                    <div class="widget--title">
                        <h5>Learn More</h5>
                    </div>
                    <div class="widget--content">
                        <ul class="list-unstyled mb-0">
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="/user/profile">Account</a></li>
                            <li><a href="/faq">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <!-- .col-md-2 end -->
                <div class="col-xs-12 col-sm-12 col-md-4 widget--newsletter">
                    <div class="widget--title">
                        <h5>newsletter</h5>
                    </div>
                    <div class="widget--content">
                        <form class="newsletter--form mb-40">
                            <input type="email" class="form-control" id="newsletter-email" placeholder="Email Address">
                            <button type="submit"><i class="fa fa-arrow-right"></i></button>
                        </form>
                        <h6>Get In Touch</h6>
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-vimeo"></i></a>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 end -->

            </div>
        </div>
        <!-- .container end -->
    </div>
    <!-- .footer-widget end -->

    <!-- Copyrights
============================================= -->
    <div class="footer--copyright text-center">
        <div class="container">
            <div class="row footer--bar">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <span>© <?php echo date("Y");?> <a href="https://gap.co.ke">Ground & Properties Ltd - Gap</a>, All Rights Reserved.</span>
                </div>

            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </div>
    <!-- .footer-copyright end -->
</footer>
</div>
@endif
<!-- #wrapper end -->
<script src="{{asset('assets/user/assets/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('assets/user/assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/user/assets/js/functions.js')}}"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyCiRALrXFl5vovX0hAkccXXBFh7zP8AOW8"></script>
<script src="{{asset('assets/user/assets/js/plugins/jquery.gmap.min.js')}}"></script>
@if (Request::is('user/add-property'))
<script>
    $('#googleMap').gMap({
        address: "121 King St,Melbourne, Australia",
        zoom: 12,
        maptype: 'ROADMAP',
        markers: [{
            address: "Melbourne, Australia",
            maptype: 'ROADMAP',
            icon: {
                image: "{{asset('assets/user/assets/images/gmap/marker1.png')}}",
                iconsize: [52, 75],
                iconanchor: [52, 75]
            }
        }]
    });

</script>
@endif
<script src="{{asset('assets/user/assets/js/map-addresses.js')}}"></script>
<script src="{{asset('assets/user/assets/js/map-custom.js')}}"></script>