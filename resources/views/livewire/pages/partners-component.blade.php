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
                            <h1>Partners</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Partners</li>
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
                    @forelse ($partners as $partner )
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="#">
                    <img src="{{asset('assets/user/assets/images/partners')}}/{{ $partner->image }}" alt="{{ $partner->name }}"/>
                </a>
                            </div>
                            <div class="entry--content">
                                {{-- <div class="entry--meta">
                                    <a href="#">{{ $partner->created_at }}</a>
                                </div>--}}
                                <div class="entry--title">
                                    <h4><a href="#">{{ $partner->name }}</a></h4>
                                </div>
                                <div class="entry--bio">
                                   {{ $partner->desc }}
                                </div>
                                <div class="entry--more">
                                    <a href="#">Read More<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- .blog-entry end -->
                    </div>
                     @empty
                        <h1>no partners found !</h1>
                    @endforelse
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