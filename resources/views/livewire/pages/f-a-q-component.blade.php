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
                            <h1>FAQ</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">FAQ</li>
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

<!-- Accordion #1
============================================= -->
@foreach ($pagetitle as $titles)
    @if ($titles->podition == 'questions')
<section id="accordion1" class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading text-center mb-75">
                    <h2 class="heading--title">{{ $titles->title }}</h2>
                    <p class="heading--desc">{{ $titles->desc }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7">
                <div class="accordion accordion-1" id="accordion01">
                    @foreach ($faqs as $faq )
                    <!-- Panel 0{{ $faq->id }} -->
                    <div class="panel">
                        <div class="panel--heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-{{ $faq->id }}">{{ $faq->name }}</a>
                        </div>
                        <div id="collapse01-{{ $faq->id }}" class="panel--body panel-collapse collapse @if ($loop->first) in @endif">
                            <p>{{ $faq->desc }}</p>
                        </div>
                    </div>
                   @endforeach
                </div>
                <!-- End .Accordion-->
            </div>
            <!-- .col-md-7 end -->
            <div class="col-xs-12 col-sm-5 col-md-4">
                 @foreach ($faqs as $faq )
                 @if ($loop->first)
                     <img src="{{asset('assets/user/assets/images/accordion/')}}/{{ $faq->image }}" alt="{{ $faq->name }}">
                 @endif
                @endforeach
            </div>
            <!-- .col-md-4 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
 @endif
 @endforeach