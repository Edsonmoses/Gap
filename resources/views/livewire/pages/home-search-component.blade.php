<section id="heroSearch" class="hero-search mtop-100 pt-0 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="slider--content" style="top:368px !important">
                    <div class="text-center">
                        <h1>Find Your Favorite Property</h1>
                    </div>
                    {{-- <form  class="mb-0">
                        <div class="form-box search-properties">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select-location" id="select-location" wire:model="locations">
                                                <option>Any Location</option>
                                                @foreach($property as $property)
                                                     <option value="{{ $property->locations }}">{{ $property->locations }}</option>
                                                @endforeach
                                         </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select-type" id="select-type" wire:model="type_id">
                                                <option>Any Type</option>
                                                 <option value="1">Acre</option>
                                                 <option value="2">Plot</option>
                                                  <option value="3">House</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select-status" id="select-status" wire:model="status">
                                                <option>Any Status</option>
                                                 <option value="rent">For Rent</option>
                                                <option value="sale">For Sale</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <input wire:click.prevent="filter()" value="Search" name="submit" class="btn btn--primary btn--block">
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3 option-hide">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select-beds" id="select-beds" wire:model="area">
                                <option>Acre</option>
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
                                            <input id="propertyID" type="text" class="form-control" placeholder="Listing ID" wire:model="propertyID">
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-6 option-hide">
                                    <div class="filter mb-30">
                                        <p>
                                            <label for="amount">Price Range: </label>
                                            <input id="amount" type="text" class="amount" wire:model="pagesize" readonly>
                                        </p>
                                        <div class="slider-range"></div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <a href="#" class="less--options">More options</a>
                                </div>
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .form-box end -->
                    </form>--}}
                </div>
            </div>
            <!-- .container  end -->
        </div>
        <!-- .slider-text end -->
    </div>
    <div class="carousel slider-navs" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="false" data-space="0" data-loop="false" data-speed="800">
        <!-- Slide #1 -->
        <div class="slide--item bg-overlay bg-overlay-dark3">
            <div class="bg-section">
                <img src="{{asset('assets/user/assets/images/slider/slide-bg/Mt_Kenya.jpg')}}" alt="background">
            </div>
        </div>
        <!-- .slide-item end -->
        <!-- Slide #2 -->
        <div class="slide--item bg-overlay bg-overlay-dark3">
            <div class="bg-section">
                <img src="{{asset('assets/user/assets/images/slider/slide-bg/1.jpg')}}" alt="background">
            </div>
        </div>
        <!-- .slide-item end -->
        <!-- Slide #3 -->
        <div class="slide--item bg-overlay bg-overlay-dark3">
            <div class="bg-section">
                <img src="{{asset('assets/user/assets/images/slider/slide-bg/3.jpg')}}" alt="background">
            </div>
        </div>
        <!-- .slide-item end -->
    </div>
</section>
<!-- #property-single-slider end -->
@livewire('pages.home-section-component')