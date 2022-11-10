@foreach ($pagetitle as $titles)
    @if ($titles->podition == 'trusted')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2 text-center mb-70">
                    <h2 class="heading--title">{{ $titles->title }}</h2>
                    <p class="heading--desc">{{ $titles->desc }}</p>
                </div>
                <!-- .heading end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            @foreach ($agents as $agent)
            <!-- agent #1 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <a href="{{ route('agents.profile',['slug'=>$agent->slug]) }}">
                <div class="agent">
                    <div class="agent--img">
                        <img src="{{asset('assets/user/assets/images/agents/grid')}}/{{ $agent->image }}" alt="agent" />
                        <div class="agent--details">
                            <p>{{ Str::limit($agent->details, 550) }}</p>
                            <div class="agent--social-links">
                                <a href="{{ $agent->facebook }}"><i class="fa fa-facebook"></i></a>
                                <a href="{{ $agent->twitter }}"><i class="fa fa-twitter"></i></a>
                                <a href="{{ $agent->linkedin }}"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- .agent-img end -->
                    <div class="agent--info">
                        <h5 class="agent--title">{{ $agent->title }}</h5>
                        <h6 class="agent--position">{{ $agent->position }}</h6>
                    </div>
                    <!-- .agent-info end -->
                </div>
                </a>
                <!-- .agent end -->
            </div>
            <!-- .col-md-4 end -->
            @endforeach

        </div>
   @endif
 @endforeach