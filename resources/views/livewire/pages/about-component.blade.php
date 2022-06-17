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
                            <h1>About</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">About</li>
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

<!-- about #1
============================================= -->
<section id="about" class="about bg-white">
    <div class="container">
        <div class="row">
             @foreach ($pages as $about)
            @if($about->slug =='about' || $about->slug =='about-us')
            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="about--img"><img class="img-responsive" src="{{asset('assets/user/assets/images/pages')}}/{{$about->image}}" alt="{{$about->name}}"></div>
            </div>
            <!-- .col-md-5 -->
            <div class="col-xs-12 col-sm-7 col-md-6 col-md-offset-1">
                <!-- .about-panel end -->
                <div class="about--panel">
                    {!! $about->description!!}
                </div>
                <!-- .about-panel end -->
            </div>
            <!-- .col-md-6 -->
            @endif
            @endforeach
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #about end -->

<!-- Feature
============================================= -->
@foreach ($pagetitle as $titles)
    @if ($titles->podition == 'provide')
        <section id="feature" class="feature feature-left pt-90 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2 text-center mb-70">
                            <h2 class="heading--title">{{ $titles->title }}</h2>
                            <p class="heading--desc">{{ $titles->desc }}</p>
                        </div>
                        <!-- .heading-title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    @foreach ($page as $page)
                    @if($page)
                    <!-- feature Panel #1 -->
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="feature-panel">
                            <div class="feature--icon">
                                @if($page->icon)
                                <img src="{{asset('assets/user/assets/images/features/icons/')}}/{{$page->icon}}" alt="icon img">
                                @endif
                            </div>
                            <div class="feature--content">
                                <h3>{{$page->name}}</h3>
                                <p>{{$page->description}}</p>
                            </div>
                        </div>
                        <!-- .feature-panel end -->
                    </div>
                    <!-- .col-md-6 end -->
                    @endif
                    @endforeach
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
    @endif
 @endforeach
<!-- .feature end -->

<!-- agents
============================================= -->
@foreach ($pagetitle as $titles)
    @if ($titles->podition == 'trusted')
        <section id="agents" class="agents bg-white pt-90">
            <div class="container">
                @livewire('pages.trusted-agents-component')
        </section>
    @endif
 @endforeach
<!-- #agents end  -->