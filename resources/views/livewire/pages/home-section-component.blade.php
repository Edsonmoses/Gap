<div>
    
<!-- properties-carousel
============================================= -->
<section id="properties-carousel" class="properties-carousel pt-90 pb-90">
    <div class="container">
        @livewire('pages.latest-properties-component')
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #properties-carousel  end  -->

<!-- Feature
============================================= -->
<section id="feature" class="feature feature-1 text-center bg-white pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2 text-center mb-70">
                    <h2 class="heading--title">Simple Steps</h2>
                    <p class="heading--desc">Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
                </div>
                <!-- .heading-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <!-- feature Panel #1 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="{{asset('assets/user/assets/images/features/icons/5.png')}}" alt="icon img">
                    </div>
                    <div class="feature--content">
                        <h3>Search For Real Estates</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eule pariate.</p>
                    </div>
                </div>
                <!-- .feature-panel end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- feature Panel #2 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="{{asset('assets/user/assets/images/features/icons/6.png')}}" alt="icon img">
                    </div>
                    <div class="feature--content">
                        <h3>Select Your Favorite</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eule pariate.</p>
                    </div>
                </div>
                <!-- .feature-panel end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- feature Panel #3 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="{{asset('assets/user/assets/images/features/icons/7.png')}}" alt="icon img">
                    </div>
                    <div class="feature--content">
                        <h3>Take Your Key</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eule pariate.</p>
                    </div>
                </div>
                <!-- .feature-panel end -->
            </div>
            <!-- .col-md-4 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- .feature end -->
<!-- city-property
============================================= -->
<section id="city-property" class="city-property text-center pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2 text-center mb-70">
                    <h2 class="heading--title">Property By City</h2>
                    <p class="heading--desc">Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
                </div>
                <!-- .heading-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <!-- City #1 -->
             @foreach ($lproperties as $lproperty)
            <div class="col-xs-12 @if($lproperty->id % 2 == 0) col-sm-4 col-md-4 @else col-sm-8 col-md-8 @endif">
               
                <div class="property-city-item @if($lproperty->id % 2 == 0) cp @else cp2 @endif">
                    <div class="property--city-img">
                        <a href="{{ route('single_gallery',['slug'=>$lproperty->slug]) }}">
                            @php
                            $image = explode(",",$lproperty->gallery);
                        @endphp
                        @if (!empty($image[1]))
                <img src="{{asset('assets/user/assets/images/properties')}}/{{ $image[1] }}" alt="{{ $lproperty->locations}}" class="img-responsive">
                @endif
                <div class="property--city-overlay">
                    <div class="property--item-content">
                        <h5 class="property--title">{{ $lproperty->locations}}
                        </h5>
                        <p class="property--numbers">{{ $lproperty->location_id}} Properties</p>
                    </div>
                </div>
                </a>
                    </div>
                    <!-- .property-city-img end -->
                </div>
                <!-- . property-city-item end -->
            </div>
            <!-- .col-md-8 end -->
             @endforeach
            
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- .city-property end -->

<!-- agents
============================================= -->
<section id="agents" class="agents bg-white">
    <div class="container">
        @livewire('pages.trusted-agents-component')
    </div>
</section>
<!-- #agents end  -->

</div>
