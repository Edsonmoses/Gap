<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
    <div class="bg-section">
        <img src="{{asset('assets/user/assets/images/page-titles/1.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>Agent Profile</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Agent Profile</li>
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


<!-- agent-profile 
============================================= -->
<section id="agent-profile" class="agent-profile bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="agent--profile-img">
                    <img src="{{asset('assets/user/assets/images/agents/grid')}}/{{ $agents->image }}" alt="agent" />
                </div>
            </div>
            <!-- .col-md-5 end -->
            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                <div class="agent--profile-content">
                    <div class="agent--info">
                        <h5 class="agent--title">{{ $agents->title }}</h5>
                        <p class="agent--position">{{ $agents->position }}</p>
                    </div>
                    <!-- .agent-info end -->
                    <div class="agent--profile-details">
                        <p>{{ $agents->details }}</p>
                    </div>
                    <!-- .agent-profile-details end -->
                    <div class="agent--profile-contact">
                        <ul class="list-unstyled mb-20 clearfix">
                            <li><span>Phone:</span>{{ $agents->phone}}</li>
                            <li><span>Email:</span>s{{ $agents->email }}</li>
                            <li><span>Mobile:</span>{{ $agents->mobile }}</li>
                            <li><span>Website:</span>{{ $agents->website }}</li>
                        </ul>
                    </div>
                    <!-- .agent-profile-contact end -->
                    <div class="agent--social-links">
                        <a href="{{ $agents->facebook }}"><i class="fa fa-facebook"></i></a>
                        <a href="{{ $agents->twitter }}"><i class="fa fa-twitter"></i></a>
                        <a href="{{ $agents->linkedin }}"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <!-- .agent-social-links end -->
                </div>
            </div>
            <!-- .col-md-5 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container -->
</section>
<!-- #agent-profile  end  -->


<!-- properties-carousel
============================================= -->
<section id="properties-carousel" class="properties-carousel">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2  mb-70">
                    <h2 class="heading--title">My Properties</h2>
                </div>
                <!-- .heading-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="carousel carousel-dots" data-slide="3" data-slide-rs="2" data-autoplay="false" data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                @foreach ($myproperties as $myproperty)
                    <!-- .property-item #1 -->
                    <div class="property-item">
                        <div class="property--img">
                            <a href="#">
                                @php
                                    $image = explode(",",$myproperty->gallery);
                                @endphp
                                @if (!empty($image[1]))
                                   <img src="{{asset('assets/user/assets/images/properties')}}/{{ $image[1] }}" alt="property image" class="img-responsive">
                                @endif
                            <span class="property--status">For Sale</span>
</a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="#">House in Kent Street</a></h5>
                                <p class="property--location">127 Kent Street, Sydney, NSW 2000</p>
                                <p class="property--price">$130,000</p>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--features">
                                <ul class="list-unstyled mb-0">
                                    <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                    <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                    <li><span class="feature">Area:</span><span class="feature-num">587 sq ft</span></li>
                                </ul>
                            </div>
                            <!-- .property-features end -->
                        </div>
                    </div>
                     @endforeach
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

<!-- Contact #2
============================================= -->
<section id="contact2" class="contact contact-2 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2 mb-50">
                    <h2 class="heading--title">Contact Us</h2>
                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <form class="mb-0">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="contact-name">Your Name*</label>
                                <input type="text" class="form-control" name="contact-name" id="contact-name" required>
                            </div>
                        </div>
                        <!-- .col-md-4 end -->
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="contact-email">Email Address*</label>
                                <input type="email" class="form-control" name="contact-email" id="contact-email" required>
                            </div>
                        </div>
                        <!-- .col-md-4 end -->
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="phone-number">Phone Number</label>
                                <input type="text" class="form-control" name="phone-number" id="phone-number" placeholder="(optional)">
                            </div>
                        </div>
                        <!-- .col-md-4 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="message">Message*</label>
                                <textarea class="form-control" name="contact-message" id="message" rows="2" required></textarea>
                            </div>
                        </div>
                        <!-- .col-md-12 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <input type="submit" value="Send Message" name="submit" class="btn btn--primary">
                        </div>
                        <!-- .col-md-12 -->
                    </div>
                </form>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
</section>
<!-- #contact2  end -->