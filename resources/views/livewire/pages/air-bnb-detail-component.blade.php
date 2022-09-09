<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
            <div class="bg-section">
                <img src="{{asset('assets/user/assets/images/page-titles')}}/{{ $airbnb->image }}" alt="{{ $airbnb->name }}" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="title title-1 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1>{{ $airbnb->name }}</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">{{ $airbnb->name }}</li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- .title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #page-title end -->

        <!-- property single gallery
============================================= -->
        <section id="property-single-gallery" class="property-single-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="property-single-gallery-info">
                            <div class="property--info clearfix">
                                <div class="pull-left">
                                    <h5 class="property--title">Entire home hosted by {{ $airbnb->postedby }}</h5>
                                    <p class="property--location"><i class="fa fa-map-marker"></i>{{ $airbnb->locations }}</p>
                                </div>
                                <div class="pull-right">
                                    <!--<span class="property--status">For Sale</span>
                                    <p class="property--price">$130,000</p>-->
                                </div>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--meta clearfix">
                                <div class="pull-left">
                                    <ul class="list-unstyled list-inline mb-0">
                                        <li>
                                            Property ID: <span class="value">5331</span>
                                        </li>
                                        <li>
                                            Add to favorites:<span class="value"> <i class="fa fa-heart-o"></i></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pull-right">
                                    <div class="property--meta-share">
                                        <span class="share--title">share</span>
                                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                        <a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
                                    </div>
                                    <!-- .property-meta-share end -->
                                </div>
                            </div>
                            <!-- .property-info end -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <div class="property-single-carousel inner-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2 class="heading--title">Gallery</h2>
                                    </div>
                                </div>
                                <!-- .col-md-12 end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="property-single-carousel-content">
                                        <div class="carousel carousel-thumbs slider-navs" data-slide="1" data-slide-res="1" data-autoplay="true" data-thumbs="true" data-nav="true" data-dots="false" data-space="30" data-loop="true" data-speed="800" data-slider-id="1">
                                             @foreach (explode(",",$airbnb->gallery) as $gallery)
                                                @if (!empty($gallery))
                                                <img src="{{asset('assets/user/assets/images/properties')}}/{{ $gallery }}" alt="{{ $airbnb->name }}" class="airimg">
                                                @endif
                                            @endforeach
                                        </div>
                                        <!-- .carousel end -->
                                        <div class="owl-thumbs thumbs-bg" data-slider-id="1">
                                             @foreach (explode(",",$airbnb->gallery) as $thumbs)
                                              @if (!empty($thumbs))
                                                <button class="owl-thumb-item">
                                                    <img src="{{asset('assets/user/assets/images/properties')}}/{{ $thumbs }}" alt="{{ $airbnb->name }}" width="130" height="90">
                                                </button>
                                             @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- .col-md-12 end -->
                                </div>
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .property-single-desc end -->
                        <div class="property-single-desc inner-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2 class="heading--title">Description</h2>
                                    </div>
                                </div>
                                <!-- feature-panel #1 -->
                                 @if ($airbnb->description)
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-panel">
                                        <div class="feature--img">
                                            <img src="{{asset('assets/user/assets/icons/1.png')}}" width="30" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Guests:</h5>
                                            <p>10</p>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <!-- feature-panel end -->
                                <!-- feature-panel #2 -->
                                 @if ($airbnb->bedrooms)
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-panel">
                                        <div class="feature--img">
                                            <img src="{{asset('assets/user/assets/icons/2.png')}}" width="30" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Beds:</h5>
                                            <p>{{ $airbnb->bedrooms }} Bedrooms</p>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <!-- feature-panel end -->
                                <!-- feature-panel #3 -->
                                 @if ($airbnb->bathrooms)
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-panel">
                                        <div class="feature--img">
                                            <img src="{{asset('assets/user/assets/icons/3.png')}}" width="30" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Baths:</h5>
                                            <p>{{ $airbnb->bathrooms }} Bathrooms</p>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <!-- feature-panel end -->
                                <!-- feature-panel #4 -->
                                 @if ($airbnb->bathrooms)
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-panel">
                                        <div class="feature--img">
                                            <img src="{{asset('assets/user/assets/icons/4.png')}}" width="30" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Rooms:</h5>
                                            <p>{{ $airbnb->bathrooms }} Rooms</p>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <!-- feature-panel end -->
                                <!-- feature-panel #5 -->
                                 @if ($airbnb->floors)
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-panel">
                                        <div class="feature--img">
                                            <img src="{{asset('assets/user/assets/icons/5.png')}}" width="30" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Floors:</h5>
                                            <p>{{ $airbnb->floors }} Floors</p>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <!-- feature-panel end -->
                                <!-- feature-panel #6 -->
                                @if ($airbnb->garages )
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-panel">
                                        <div class="feature--img">
                                            <img src="{{asset('assets/user/assets/icons/6.png')}}" width="30" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Garage:</h5>
                                            <p>{{ $airbnb->garages  }} Garages</p>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <!-- feature-panel end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="property--details">
                                        <p>{{ $airbnb->description }}</p>
                                    </div>
                                    <!-- .property-details end -->
                                </div>
                                <!-- .col-md-12 end -->
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .property-single-desc end -->
                    </div>
                    <!-- .col-md-8 -->
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <!-- widget property agent
=============================-->
                        <div class="widget widget-property-agent">
                            <div class="widget--title">
                                <h5>About Agent</h5>
                            </div>
                            <div class="widget--content">
                                <a href="#">
                                    <div class="agent--img">
                                        <img src="{{asset('assets/images/agents/grid/7.jpg')}}" alt="agent" class="img-responsive">
                                    </div>
                                    <div class="agent--info">
                                        <h5 class="agent--title">Matt Peters</h5>
                                    </div>
                                </a>
                                <!-- .agent-profile-details end -->
                                <div class="agent--contact">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-phone"></i>(950) 491-570-180</li>
                                        <li><i class="fa fa-envelope-o"></i>support@example.com</li>
                                        <li><i class="fa fa-link"></i>modernhouse.com</li>
                                    </ul>
                                </div>
                                <!-- .agent-contact end -->
                                <div class="agent--social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                                <!-- .agent-social-links -->
                            </div>
                        </div>
                        <!-- . widget property agent end -->
                    </div>
                    <!-- .col-md-4 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #property-single end -->
<style>
  .airimg{
    width: 690px;
    height: 400px;
    object-fit: cover;

  }
</style>