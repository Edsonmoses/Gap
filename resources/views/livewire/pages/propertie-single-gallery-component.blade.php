<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
    <div class="bg-section">
        <img src="{{asset('assets/user/assets/images/page-titles')}}/{{ $property->image }}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>{{ $property->name }}</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">{{ $property->name }}</li>
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
                            <h5 class="property--title">{{ $property->name }}</h5>
                            <p class="property--location"><i class="fa fa-map-marker"></i>{{ $property->locations }}</p>
                        </div>
                        <div class="pull-right">
                            <span class="property--status">For {{ $property->status }}</span>
                            <p class="property--price">ksh {{ $property->SRprice }}</p>
                        </div>
                    </div>
                    <!-- .property-info end -->
                    <div class="property--meta clearfix">
                        <div class="pull-left">
                            <ul class="list-unstyled list-inline mb-0">
                                <li>
                                    Property ID:<span class="value">{{ $property->propertyID }}</span>
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
                        <div class="col-xs-12 col-sm-12 col-md-12 psc">
                            <div class="property-single-carousel-content" wire:ignore>
                                <div class="carousel carousel-thumbs slider-navs" data-slide="1" data-slide-res="1" data-autoplay="true" data-thumbs="true" data-nav="true" data-dots="false" data-space="30" data-loop="true" data-speed="800" data-slider-id="1">
                                     @foreach (explode(",",$property->gallery) as $gallery)
                                     @if (!empty($gallery))
                                    <img src="{{asset('assets/user/assets/images/properties')}}/{{ $gallery }}" alt="{{ $property->name }}">
                                    @endif
                                    @endforeach
                                </div>
                                <!-- .carousel end -->
                                <div class="owl-thumbs thumbs-bg" data-slider-id="1">
                                    @foreach (explode(",",$property->gallery) as $thumbs)
                                     @if (!empty($thumbs))
                                    <button class="owl-thumb-item">
                                        <img src="{{asset('assets/user/assets/images/properties')}}/{{ $thumbs }}" alt="{{ $property->name }}">
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
                        @if (!empty($area))
                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="feature-panel">
                                <div class="feature--img">
                                    <img src="{{asset('assets/user/assets/images/property-single/features/1.png')}}" alt="icon">
                                </div>
                                <div class="feature--content">
                                    <h5>Area:</h5>
                                    <p>{{ $property->area }} sq ft</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        <!-- feature-panel end -->
                        <!-- feature-panel #2 -->
                        @if (!empty($bedrooms))
                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="feature-panel">
                                <div class="feature--img">
                                    <img src="{{asset('assets/user/assets/images/property-single/features/2.png')}}" alt="icon">
                                </div>
                                <div class="feature--content">
                                    <h5>Beds:</h5>
                                    <p>{{ $property->bedrooms }} Bedrooms</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        <!-- feature-panel end -->
                        <!-- feature-panel #3 -->
                        @if (!empty($bathrooms))
                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="feature-panel">
                                <div class="feature--img">
                                    <img src="{{asset('assets/user/assets/images/property-single/features/3.png')}}" alt="icon">
                                </div>
                                <div class="feature--content">
                                    <h5>Baths:</h5>
                                    <p>{{ $property->bathrooms }} Bathrooms</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        <!-- feature-panel end -->
                        <!-- feature-panel #4 -->
                        @if (!empty($featured))
                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="feature-panel">
                                <div class="feature--img">
                                    <img src="{{asset('assets/user/assets/images/property-single/features/4.png')}}" alt="icon">
                                </div>
                                <div class="feature--content">
                                    <h5>Rooms:</h5>
                                    <p>{{ $property->propertyID }} Rooms</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        <!-- feature-panel end -->
                        <!-- feature-panel #5 -->
                        @if (!empty($floors))
                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="feature-panel">
                                <div class="feature--img">
                                    <img src="{{asset('assets/user/assets/images/property-single/features/5.png')}}" alt="icon">
                                </div>
                                <div class="feature--content">
                                    <h5>Floors:</h5>
                                    <p>{{ $property->floors }} Floors</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        <!-- feature-panel end -->
                        <!-- feature-panel #6 -->
                        @if (!empty($garages))
                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="feature-panel">
                                <div class="feature--img">
                                    <img src="{{asset('assets/user/assets/images/property-single/features/6.png')}}" alt="icon">
                                </div>
                                <div class="feature--content">
                                    <h5>Garage:</h5>
                                    <p>{{ $property->garages }} Garages</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        <!-- feature-panel end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="property--details">
                                <p>{!! $property->description !!}</p>
                            </div>
                            <!-- .property-details end -->
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .property-single-desc end -->


                <div class="property-single-features inner-box">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="heading">
                                <h2 class="heading--title">Features</h2>
                            </div>
                        </div>
                        
                          @foreach (explode(",",$property->featured) as $featured)
                        @if (!empty($featured))
                        <!-- feature-item #1 -->
                        <div class="col-xs-6 col-sm-12 col-md-12">
                            <div class="feature-item">
                                <p>{!! $featured !!} </p>
                            </div>
                        </div>
                        <!-- feature-item end -->
                        @endif
                    @endforeach
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .property-single-features end -->
                @if ($property->location_id)
                <div class="property-single-location inner-box">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="heading">
                                <h2 class="heading--title">Location</h2>
                            </div>
                        </div>
                        <!-- .col-md-12 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <ul class="list-unstyled mb-20">
                                <li><span>Address:</span>1220 Petersham Town</li>
                                <li><span>City:</span>Sydney</li>
                                <li><span>Country:</span>Australia</li>
                                <li><span>State:</span>Newcastle</li>
                                <li><span>Zip/Postal code:</span>54330</li>
                            </ul>
                        </div>
                        <!-- .col-md-12 end -->

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div id="googleMap" style="width:100%;height:380px;"></div>
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>
                @endif
                <!-- .property-single-location end -->
                @if ($property->videoURL)
                    <div class="property-single-video inner-box">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="heading">
                                    <h2 class="heading--title">Video</h2>
                                </div>
                            </div>
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="video--content text-center">
                                    <div class="bg-section">
                                        <img src="{{asset('assets/user/assets/images/video/1.jpg')}}" alt="Background" />
                                    </div>
                                    <div class="video--button">
                                        <div class="video-overlay">
                                            <div class="pos-vertical-center">
                                                <a class="popup-video" href="{{ $property->videoURL }}">
                                        <i class="fa fa-youtube-play"></i>  
                                    </a>
                                            </div>
                                        </div>
                                        <!-- .video-player end -->
                                    </div>
                                </div>
                                <!-- .video-content end -->
                            </div>
                            <!-- .col-md-12 end -->
                        </div>
                        <!-- .row end -->
                    </div>
                @endif
                <!-- .property-single-video end -->
            </div>
            <!-- .col-md-8 -->
            <div class="col-xs-12 col-sm-12 col-md-4">
                <!-- widget property agent
=============================-->
                <div class="widget widget-property-agent">
                    <div class="widget--title">
                        <h5>About Agent</h5>
                    </div>
                    @forelse ($s_agents as $s_agent )
                        <div class="widget--content">
                            <a href="#">
                                <div class="agent--img">
                                    <img src="{{asset('assets/user/assets/images/agents/grid')}}/{{ $s_agent->image }}" alt="agent" class="img-responsive">
                                </div>
                                <div class="agent--info">
                                    <h5 class="agent--title">{{ $s_agent->title }}</h5>
                                </div>
                            </a>
                            <!-- .agent-profile-details end -->
                            <div class="agent--contact">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-phone"></i>{{ $s_agent->phone }}</li>
                                    <li><i class="fa fa-envelope-o"></i>{{ $s_agent->email }}</li>
                                    <li><i class="fa fa-link"></i>{{ $s_agent->website }}</li>
                                </ul>
                            </div>
                            <!-- .agent-contact end -->
                            <div class="agent--social-links">
                                <a href="{{ $s_agent->facebook }}"><i class="fa fa-facebook"></i></a>
                                <a href="{{ $s_agent->twitter }}"><i class="fa fa-twitter"></i></a>
                                <a href="{{ $s_agent->linkedin }}"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <!-- .agent-social-links -->
                        </div>
                    @empty
                        <p>No agent has been a signed</p>
                    @endforelse
                </div>
                <!-- . widget property agent end -->

                <!-- widget featured property
=============================-->
                <div class="widget widget-featured-property">
                    <div class="widget--title">
                        <h5>Featured Properties</h5>
                    </div>
                    <div class="widget--content plp">
                        <div class="carousel carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                            <!-- .property-item #1 -->
                            @forelse ($Featured as $featured )
                                <div class="property-item">
                                    <div class="property--img">
                                         @php
                                             $image = explode(",",$featured->gallery);
                                         @endphp
                                            @if (!empty($image[1]))
                                        <img src="{{asset('assets/user/assets/images/properties')}}/{{ $image[1] }}" alt="property -{{ $featured->name }}" class="img-responsive">
                                        @endif
                                        @if ($featured->status == 'sale')
                                        <span class="property--status">For Sale</span>
                                        @else
                                            <span class="property--status">For Rent</span>
                                        @endif
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title">{{ $featured->name }}</h5>
                                            <p class="property--location">{{ $featured->locations }}</p>
                                            <p class="property--price">Ksh {{ $featured->SRprice }}</p>
                                        </div>
                                        <!-- .property-info end -->
                                    </div>
                                </div>
                            @empty
                                
                            @endforelse
                            <!-- .property item end -->
                        </div>
                        <!-- .carousel end -->
                    </div>
                </div>
                <!-- . widget featured property end -->
            </div>
            <!-- .col-md-4 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #property-single end -->


<!-- properties-carousel
============================================= -->
<section id="properties-carousel" class="properties-carousel pt-0">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2  mb-70">
                    <h2 class="heading--title">Similar Properties</h2>
                </div>
                <!-- .heading-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 plp">
                <div class="carousel carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                <!-- .property-item #2 -->
                    @forelse ($related_property as $r_property )
                        <div class="property-item">
                            <div class="property--img">
                                <a href="{{ route('single_gallery',['slug'=>$r_property->slug]) }}">
                                     @php
                                        $image = explode(",",$r_property->gallery);
                                    @endphp
                                    @if (!empty($image[1]))
                                          <img src="{{asset('assets/user/assets/images/properties')}}/{{ $image[1] }}" alt="{{ $r_property->name }}" class="img-responsive">
                                    @endif
                                    @if ($r_property->status == 'sale')
                                        <span class="property--status">For Sale</span>
                                    @else
                                        <span class="property--status">For Rent</span>
                                    @endif
                                </a>
                            </div>
                            <div class="property--content">
                                <div class="property--info">
                                    <h5 class="property--title"><a href="{{ route('single_gallery',['slug'=>$r_property->slug]) }}">{{ $r_property->name }}</a></h5>
                                    <p class="property--location">{{ $r_property->locations}}</p>
                                    <p class="property--price">Ksh {{ $r_property->SRprice }}</p>
                                </div>
                                <!-- .property-info end -->
                                <div class="property--features">
                                    <ul class="list-unstyled mb-0">
                                         @if ($r_property->bedroom)
                                        <li><span class="feature">Beds:</span><span class="feature-num">{{ $r_property->bedrooms }}</span></li>
                                        @endif
                                        @if ($r_property->bathrooms)
                                        <li><span class="feature">Baths:</span><span class="feature-num">{{ $r_property->bathrooms }}</span></li>
                                        @endif
                                        @if ($r_property->area)
                                        <li><span class="feature">Acre:</span><span class="feature-num">{{ $r_property->area }}</span></li>
                                        @endif
                                        @if ($r_property->pin)
                                            <li><a href="{{ $r_property->pin }}" target="_blank"><span class="feature"><i class="fa fa-map-marker" aria-hidden="true" style="color:red; font-size:25px;"></i></span><span class="feature-num">Google Pin</span></a></li>
                                        @endif
                                    </ul>
                                </div>
                                <!-- .property-features end -->
                            </div>
                        </div>
                        
                    @empty
                        
                    @endforelse
                    <!-- .property item end -->

                </div>
                <!-- .carousel end -->
            </div>
            <!-- .col-md-12 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #properties-carousel  end  -->