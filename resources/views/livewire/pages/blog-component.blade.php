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
                            <h1>Blog</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Blog</li>
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
        <div class="row mb-50">
            @foreach ($posts as $post )
                <!-- Blog Entry #{{ $post->id }} -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="{{ route('blog.single',['slug'=>$post->slug]) }}">
                        <img src="{{asset('assets/user/assets/images/blog/grid')}}/{{ $post->image }}" alt="{{ $post->name }}"/>
                    </a>
                        </div>
                        <div class="entry--content">
                            <div class="entry--meta">
                                <a href="{{ route('blog.single',['slug'=>$post->slug]) }}">{{\Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY') }}</a>
                            </div>
                            <div class="entry--title">
                                <h4><a href="{{ route('blog.single',['slug'=>$post->slug]) }}">{{ $post->name }}</a></h4>
                            </div>
                            <div class="entry--bio">
                                {{substr($post->bio,0,82)}}
                            </div>
                            <div class="entry--more">
                                <a href="{{ route('blog.single',['slug'=>$post->slug]) }}">Read More<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- .blog-entry end -->
                </div>
                <!-- .col-md-4 end -->
           @endforeach

        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 clearfix text--center">
                <ul class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">...</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                    <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                </a>
                    </li>
                </ul>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #blog  end -->