@foreach ($pagetitle as $titles)
    @if ($titles->podition == 'latest')
       {{-- <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2 text-center mb-70">
                    <h2 class="heading--title">{{ $titles->title }}</h2>
                    <p class="heading--desc">{{ $titles->desc }}</p>
                </div>
                <!-- .heading-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>--}}
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="carousel carousel-dots lp" data-slide="3" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="false" data-space="25" data-loop="true" data-speed="800">
                    <!-- .property-item #1 -->
                @foreach ($lproperties as $lproperty)
                    <div class="property-item">
                        <div class="property--img">
                            <a href="{{ route('single_gallery',['slug'=>$lproperty->slug]) }}">
                                @php
                                    $image = explode(",",$lproperty->gallery);
                                @endphp
                                @if (!empty($image[1]))
                    <img src="{{asset('assets/user/assets/images/properties')}}/{{ $image[1] }}" alt="property image" class="img-responsive" width="364" height="364">
                    @endif
                    <span class="property--status">For Sale</span>
        </a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="{{ route('single_gallery',['slug'=>$lproperty->slug]) }}">{{ $lproperty->name }}</a></h5>
                                <p class="property--location">{{ $lproperty->locations}}</p>
                                <p class="property--price">Ksh {{ $lproperty->SRprice }}</p>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--features">
                                <ul class="list-unstyled mb-0">
                                    @if ($lproperty->bedroom)
                                    <li><span class="feature">Beds:</span><span class="feature-num">{{ $lproperty->bedrooms }}</span></li>
                                    @endif
                                    @if ($lproperty->bathrooms)
                                    <li><span class="feature">Baths:</span><span class="feature-num">{{ $lproperty->bathrooms }}</span></li>
                                    @endif
                                    @if ($lproperty->area)
                                    <li><span class="feature">Acre:</span><span class="feature-num">{{ $lproperty->area }}</span></li>
                                    @endif
                                    @if ($lproperty->pin)
                                    <li><a href="{{ $lproperty->pin }}" target="_blank"><span class="feature"><i class="fa fa-map-marker" aria-hidden="true" style="color:red; font-size:25px;"></i></span><span class="feature-num">Google Pin</span></a></li>
                                    @endif
                                </ul>
                            </div>
                            <!-- .property-features end -->
                        </div>
                    </div>
                    <!-- .property item end -->
                @endforeach
                </div>
                <!-- .carousel end -->
            </div>
            <!-- .col-md-12 -->
        </div>
     @endif
 @endforeach