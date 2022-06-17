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
                            <li><a href="/">Home</a></li>
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

<!-- Blog Single Right Sidebar
=========================================-->
<section id="blog" class="blog blog-single pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8">
                <!-- Blog Entry -->
                <div class="blog-entry">
                    <div class="entry--img">
                        <img src="{{asset('assets/user/assets/images/blog/grid')}}/{{ $post->image }}" alt="entry image" />
                    </div>
                    <div class="entry--content">
                        <div class="entry--meta">
                            <a href="#">{{\Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY') }}</a>
                        </div>
                        <div class="entry--title">
                            <h4>{{ $post->name }}</h4>
                        </div>
                        <div class="entry--bio">
                            {{ $post->bio }}
                        </div>
                        <div class="entry--share">
                            <span class="share--title">share</span>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <!-- .entry-share end -->
                    </div>
                </div>
                <!-- .blog-entry end -->

                <div class="entry-widget entry-prev-next clearfix">
                    <div class="entry-prev">
                        <div class="entry-prev-content">
                            <div class="entry-desc">
                                <p><i class="lnr lnr-arrow-left"></i>previous</p>
                                <a href="#">Top Photo and Video Apps for Real Estate Marketing</a>
                            </div>
                        </div>
                    </div>
                    <div class="entry-next">
                        <div class="entry-next-content">
                            <div class="entry-desc">
                                <p>next<i class="lnr lnr-arrow-right"></i></p>
                                <a href="#">Creative Real Estate Marketing Ideas to Sell a Listing</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .entry-prev-next end -->

               <!-- <div class="entry-widget entry-comments clearfix">
                    <div class="entry-widget-title">
                        <h4>3 Comments</h4>
                    </div>
                    <div class="entry-widget-content">
                        <ul class="comments-list">
                            <li class="comment-body">
                                <div class="avatar">
                                    R
                                </div>
                                <div class="comment">
                                    <h6>Ryan Printz</h6>
                                    <div class="date">Feb 12, 2018</div>
                                    <a class="reply" href="#"><i class="fa fa-reply"></i>reply</a>
                                    <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed eiusmod tempor incididun ut labore dolor magna aliqua enim minim veniam, quis nostrud.</p>
                                </div>
                                <ul class="comment-children">
                                    <li class="comment-body">
                                        <div class="avatar">
                                            S
                                        </div>
                                        <div class="comment">
                                            <h6>Steve Martin</h6>
                                            <div class="date">Jan 16, 2018</div>
                                            <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed eiusmod tempor incididun ut labore dolor magna aliqua enim minim veniam, quis nostrud.</p>
                                        </div>
                                    </li>
                                    <-- comment end --
                                </ul>
                                <-- .comment-children end --
                            </li>
                            <-- comment end --

                            <li class="comment-body">
                                <div class="avatar">
                                    N
                                </div>
                                <div class="comment">
                                    <h6>Nicole Smith</h6>
                                    <div class="date">Nov 25, 2017</div>
                                    <a class="reply" href="#"><i class="fa fa-reply"></i>reply</a>
                                    <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed eiusmod tempor incididun ut labore dolor magna aliqua enim minim veniam, quis nostrud.</p>
                                </div>
                            </li>
                            <-- comment end --
                        </ul>
                        <-- .comments-list end --
                    </div>
                </div>-->
                <!-- .entry-comments end -->

               <!-- <div class="entry-widget entry-add-comment clearfix">
                    <div class="entry-widget-title">
                        <h4>Leave a Comment</h4>
                    </div>
                    <div class="entry-widget-content">
                        <form id="post-comment" class="mb-0">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Your Name*</label>
                                        <input type="text" class="form-control" id="name" required>
                                    </div>
                                </div>
                                <-- .col-md-6 end --
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="email">Your Email*</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                </div>
                                <-- .col-md-6 end --
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="comment">Comment</label>
                                        <textarea class="form-control" id="comment" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="submit" class="btn btn--primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>-->
                <!-- .entry-comments end -->
            </div>
            <!-- .col-md-8 end -->
            <div class="col-xs-12 col-sm-12 col-md-4">
                <!-- Search
===============================-->
                <div class="widget widget-search">
                    <div class="widget--title">
                        <h5>Blog Search</h5>
                    </div>
                    <div class="widget--content">
                        <form class="form-search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Type and hit enter">
                                <span class="input-group-btn">
            <button class="btn" type="button"><i class="fa fa-search"></i></button>
        </span>
                            </div>
                            <!-- /input-group -->
                        </form>
                    </div>
                </div>
                <!-- .widget-search end -->

                <!-- Recent Posts
============================================= -->
                <div class="widget widget-recent-posts">
                    <div class="widget--title">
                        <h5>recent posts</h5>
                    </div>
                    <div class="widget--content">
                        @foreach ($r_posts as $r_post )
                        <!-- entry #1 -->
                        <div class="entry">
                            <a href="{{ route('blog.single',['slug'=>$r_post->slug]) }}">
    <img src="{{asset('assets/user/assets/images/blog/grid')}}/{{ $r_post->image }}" alt="{{ $r_post->name }}" />
    </a>
                            <div class="entry-desc">
                                <div class="entry-title">
                                    <a href="{{ route('blog.single',['slug'=>$r_post->slug]) }}">{{ $r_post->name }}</a>
                                </div>
                                <div class="entry-meta">
                                    <a href="{{ route('blog.single',['slug'=>$r_post->slug]) }}">{{\Carbon\Carbon::parse($r_post->created_at)->isoFormat('MMM Do YYYY') }}</a>
                                </div>
                            </div>
                        </div>
                        <!-- .recent-entry end -->
                        @endforeach
                    </div>
                </div>
                <!-- .widget-recent end -->

                <!-- Categories
=============================-->
                <div class="widget widget-categories">
                    <div class="widget--title">
                        <h5>Archives</h5>
                    </div>
                    <div class="widget--content">
                        <ul class="list-unstyled mb-0">
                            @foreach ($archives as $archive )
                            <li>
                                <a href="#">{{\Carbon\Carbon::parse($r_post->created_at)->isoFormat('MMMM , YYYY') }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- .widget-categories end -->

            </div>
            <!-- .col-md-4 -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="entry-widget entry-related clearfix">
                    <div class="entry-widget-title">
                        <h4>Related Posts</h4>
                    </div>
                    <div class="entry-widget-content blog-grid">
                        <div class="row">
                             @foreach ($r_posts as $r_post )
                            <!-- Related Post #1 -->
                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="blog-entry">
                                    <div class="entry--img">
                                        <a href="{{ route('blog.single',['slug'=>$r_post->slug]) }}">
                                    <img src="{{asset('assets/user/assets/images/blog/grid')}}/{{ $r_post->image }}" alt="{{ $r_post->name }}"/>
                                </a>
                                    </div>
                                    <div class="entry--content">
                                        <div class="entry--meta">
                                            <a href="{{ route('blog.single',['slug'=>$r_post->slug]) }}">{{\Carbon\Carbon::parse($r_post->created_at)->isoFormat('MMM Do YYYY') }}</a>
                                        </div>
                                        <div class="entry--title">
                                             <h4><a href="{{ route('blog.single',['slug'=>$r_post->slug]) }}">{{ $r_post->name }}</a></h4>
                                        </div>
                                        <div class="entry--bio">
                                            {{substr($post->bio,0,82)}}
                                        </div>
                                        <div class="entry--more">
                                            <a href="{{ route('blog.single',['slug'=>$r_post->slug]) }}">Read More<i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .blog-entry end -->
                            </div>
                            <!-- .col-md-4 end -->
                            @endforeach
                        </div>
                        <!-- .row end -->
                    </div>
                </div>
                <!-- .entry-related end -->
            </div>
        </div>
    </div>
    <!-- .container end -->
</section>
<!-- #blog end -->