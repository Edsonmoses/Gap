<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
    <div class="bg-section">
        <img src="{{asset('assets/user/assets/images/page-titles/1.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-3">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>Airbnb</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Airbnb</li>
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
                    <!-- Blog Entry #1 -->
                    @foreach ($airbnb as $airbnb )
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="{{ route('airbnbdetail',['slug'=>$airbnb->slug]) }}">
                                @php
                                    $image = explode(",",$airbnb->gallery);
                                @endphp
                                @if (!empty($image[1]))
                                    <img src="{{asset('assets/user/assets/images/properties')}}/{{  $image[1] }}" alt="entry image" width="370" height="240"/>
                                @endif
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--title">
                                    <h4><a href="{{ route('airbnbdetail',['slug'=>$airbnb->slug]) }}">{{ $airbnb->name }}</a></h4>
                                </div>
                                <div class="entry--bio">
                                    {{ $airbnb->locations}}<br/>
                                    @if ($airbnb->fromDate)
                                    {{\Carbon\Carbon::parse($airbnb->fromDate)->isoFormat('MMM D') }} - {{\Carbon\Carbon::parse($airbnb->toDate)->isoFormat('MMM D') }}
                                    @endif
                                </div>
                                <div class="entry--more">
                                    @if ( $airbnb->SRprice)
                                         {{ $airbnb->SRprice}} night
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                        <!-- .blog-entry end -->
                    </div>
                    @endforeach
                    <!-- .col-md-4 end -->

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
<style>
   .blog-entry .entry--img img{
    width: 370px;
    height: 270px;
    object-fit: cover;

   }
</style>