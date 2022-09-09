<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
    <div class="bg-section">
        @foreach ( $cars as $car )
        <img src="{{asset('assets/user/assets/images/page-titles')}}/{{ $car->coverimg }}" alt="{{ $car->name }}" />
        @endforeach
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-3">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>Our Cars</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Our Cars</li>
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

<!-- Blog #1
============================================= -->
<section id="blog" class="blog blog-grid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row mb-50">
                    @foreach ( $cars as $car )
                    @if ($car)
                    <!-- Blog Entry #{{ $car->id }} -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="{{ route('cardetail',['slug'=>$car->slug]) }}">
                                     @php
                                             $image = explode(",",$car->image);
                                         @endphp
                                            @if (!empty($image[1]))
                                    <img src="{{asset('assets/user/assets/images/cars')}}/{{ $image[1] }}" alt="{{ $car->name }}"/>
                                     @endif
                            </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--title">
                                    <h4><a href="{{ route('cardetail',['slug'=>$car->slug]) }}">{{ $car->name }}</a></h4>
                                </div>
                                <div class="entry--bio">
                                    {{ substr($car->desc, 0,  100) }}
                                </div>
                                <div class="entry--more">
                                    <a href="{{ route('cardetail',['slug'=>$car->slug]) }}">Read More<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- .blog-entry end -->
                    </div>
                    <!-- .col-md-4 end -->
                     @endif
                  @endforeach
                </div>
                <!-- .row end -->
            </div>
            <!-- .col-md-12 end -->

        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #blog  end -->