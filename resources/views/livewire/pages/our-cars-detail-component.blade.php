<section id="property-single-slider" class="property-single-slider pt-0 pb-0">
    <!-- .slider-text end -->

    <div class="carousel slider-navs" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="800">
         @foreach (explode(",",$cars->image) as $image)
         @if (!empty($image))
        <!-- Slide #{{ $cars->id }} -->
        <div class="slide--item bg-overlay bg-overlay-gradient">
            <div class="bg-section">
                 <img src="{{asset('assets/user/assets/images/cars')}}/{{ $image }}" alt="{{ $cars->name }}"/>
            </div>
        </div>
        <!-- .slide-item end -->
        @endif
        @endforeach
    </div>
</section>
<!-- #property-single-slider end -->

<!-- property-single
============================================= -->
<section id="property-single" class="property-single">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="property-single-desc inner-box">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="heading">
                                <h2 class="heading--title">Description</h2>
                            </div>
                        </div>
                        <!-- feature-panel end -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="property--details text-center">
                                <p>{{!! $cars->desc !!}}</p>
                               <a href="tel:{{ $cars->call }}" type="button" class="btn btn-primary mt-10 mb-10">CALL US</a><br/>
                               <a href="https://wa.me/{{ $cars->whatsapp }}/?text=how may we help you?" type="button" class="btn btn-success mt-10 mb-10">WHATSAPP US</a><br/>
                               <a href="tel:{{ $cars->call }}" type="button" class="btn btn-warning mt-10 mb-10">VISIT SHOWROOM</a><br/>
                               <a href="tel:{{ $cars->finance }}" type="button" class="btn btn-info mt-10 mb-10">FINANCE THIS CAR</a>
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
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #property-single end -->

