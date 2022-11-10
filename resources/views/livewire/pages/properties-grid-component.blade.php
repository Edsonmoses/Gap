<section id="map" class="hero-map pt-0 pb-0">
    <div class="container-fluid pr-0 pl-0">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div id="overlays"></div>
                <!--<div id="googleMap"></div>-->
                 <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d63820.700129724835!2d36.76227187014831!3d-1.2984927714313115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sGAP%20Pamstech%20House!5e0!3m2!1sen!2ske!4v1659515512356!5m2!1sen!2ske" width="100%" height="630" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
    {{--<div class="search-properties">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <form class="mb-0 ">
                        <div class="form-box ">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select-location" id="select-location">
                                    <option>Any Location</option>
                                    <option>Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Florida</option>
                                    <option>Mississippi</option>
                                    <option>Oregon</option>
                                </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select-type" id="select-type">
                                    <option>Any Type</option>
                                    <option>Apartment</option>
                                    <option>House</option>
                                    <option>Office</option>
                                    <option>Villa</option>
                                </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select-status" id="select-status">
                                   <option>Any Status</option>
                                    <option>For Rent</option>
                                    <option>For Sale</option>
                                </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <input type="submit" value="Search" name="submit" class="btn btn--primary btn--block mb-30">
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3 option-hide">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select-beds" id="select-beds">
                                    <option>Beds</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3 option-hide">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select-baths" id="select-baths">
                                    <option>Baths</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-6 option-hide">
                                    <div class="filter mb-30">
                                        <p>
                                            <label for="amount">Price Range: </label>
                                            <input id="amount" type="text" class="amount" readonly>
                                        </p>
                                        <div class="slider-range"></div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <a href="#" class="less--options">Less options</a>
                                </div>
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .form-box end -->
                    </form>
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </div>--}}
</section>
<!-- #map end -->

<!-- properties-grid
============================================= -->
<section id="properties-grid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
                <!-- widget property type
=============================-->
                <div class="widget widget-featured-property">
                    <div class="widget--title">
                        <h5>Featured Properties</h5>
                    </div>
                    <div class="widget--content plp">
                        <div class="carousel carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                            @foreach ($Featured as $pfeatured)
                            <!-- .property-item #1 -->
                            <div class="property-item">
                                <a href="{{ route('single_gallery',['slug'=>$pfeatured->slug]) }}">
                                <div class="property--img">
                                     @php
                                             $image = explode(",",$pfeatured->gallery);
                                         @endphp
                                            @if (!empty($image[1]))
                                    <img src="{{asset('assets/user/assets/images/properties')}}/{{ $image[1] }}" alt="property -{{ $pfeatured->name }}" class="img-responsive">
                                     @endif
                                    @if ($pfeatured->status == 'sale')
                                       <span class="property--status">For Sale</span>
                                    @else
                                        <span class="property--status">For Rent</span>
                                    @endif
                                </div>
                                </a>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a href="{{ route('single_gallery',['slug'=>$pfeatured->slug]) }}">{{ $pfeatured->name }}</a></h5>
                                        <p class="property--location">{{ $pfeatured->locations }}</p>
                                        <p class="property--price">Ksh {{ $pfeatured->SRprice }}<!--<span class="time">month</span>--></p>
                                         @if ($pfeatured->pin)
                                            <p class="mt-10"><a href="{{ $pfeatured->pin }}" target="_blank"><span class="feature"><i class="fa fa-map-marker" aria-hidden="true" style="color:red; font-size:25px;"></i></span><span class="feature-num ml-10">Google Pin</span></a></p>
                                        @endif
                                    </div>
                                    <!-- .property-info end -->
                                </div>
                            </div>
                            @endforeach
                            <!-- .property item end -->
                           
                        </div>
                        <!-- .carousel end -->
                    </div>
                </div>
                <!-- . widget featured property end -->
            </div>
            <!-- .col-md-4 end -->
            <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="properties-filter clearfix">
                            <div class="select--box pull-left">
                                <label>Sort by:</label>
                                <i class="fa fa-angle-up"></i>
                                <i class="fa fa-angle-down"></i>
                                <select>
                        <option selected="" value="Default">Default Sorting</option>
                        <option value="Larger">Newest Items</option>
                        <option value="Larger">oldest Items</option>
                        <option value="Larger">Hot Items</option>
                        <option value="Small">Highest Price</option>
                        <option value="Medium">Lowest Price</option>
                    </select>
                            </div>
                            <!-- .select-box -->
                            <div class="view--type pull-right">
                                <a id="switch-list" href="#" class=""><i class="fa fa-th-list"></i></a>
                                <a id="switch-grid" href="#" class="active"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="properties properties-grid plp">
                        <!-- .col-md-12 end -->
                        @foreach ($lproperties as $lproperty)
                        <!-- .property-item #1 -->
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="property-item">
                                <div class="property--img">
                                    <a href="{{ route('single_gallery',['slug'=>$lproperty->slug]) }}">
                                         @php
                                             $image = explode(",",$lproperty->gallery);
                                         @endphp
                                            @if (!empty($image[1]))
                                            <img src="{{asset('assets/user/assets/images/properties')}}/{{ $image[1] }}" alt="{{ $lproperty->name }}" class="img-responsive">
                                            @endif
                                     </a>
                                    @if ($lproperty->status == 'sale')
                                       <span class="property--status">For Sale</span>
                                    @else
                                        <span class="property--status">For Rent</span>
                                    @endif
                                </div>
                                <div class="property--content">
                                    <div class="property--info" style="height: 150px;">
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
                                                @if ($pfeatured->pin)
                                                    <li><a href="{{ $pfeatured->pin }}" target="_blank"><span class="feature"><i class="fa fa-map-marker" aria-hidden="true" style="color:red; font-size:25px;"></i></span><span class="feature-num">Google Pin</span></a></li>
                                                @endif
                                        </ul>
                                    </div>
                                    <!-- .property-features end -->
                                </div>
                            </div>
                        </div>
                        <!-- .property item end -->
                        @endforeach
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-50">
                        {{ $lproperties->links('vendor.pagination.custom') }}
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row -->
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #properties-grid  end  -->