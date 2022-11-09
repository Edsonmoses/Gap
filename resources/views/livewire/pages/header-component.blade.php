@if (Request::is('properties-grid-split') || Request::is('properties-list-split') )
<header id="navbar-spy" class="header header-1 header-light header-fixed">
@else
<header id="navbar-spy" class="header header-1 header-transparent header-fixed">
  @endif
    <nav id="primary-menu" class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
                <a class="logo" href="/">
            <img class="logo-light" src="{{asset('assets/user/assets/images/logo/GAP-Logo-All-White.png')}}" alt="Land Logo" width="126" height="35">
            <img class="logo-dark" src="{{asset('assets/user/assets/images/logo/GAP-Logo-FC.svg')}}" alt="Land Logo" width="126" height="35">
        </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                <ul class="nav navbar-nav nav-pos-center navbar-left">
                    <!-- Home Menu -->
                    <li class="active">
                        <a href="/">home</a>
                    </li>
                    <!-- li end -->

                    <!-- Pages Menu-->
                    <li><a href="/about">about</a></li>
                    <li class="has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">services</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/airbnb">airbnb</a>
                            </li>
                            <li>
                                <a href="/our-cars">our cars</a>
                            </li>
                        </ul>
                        </li>
                    <!-- li end -->
                    <!-- Properties Menu-->
                     <li><a href="/properties">properties</a></li>
                      <li><a href="/partners">partners</a></li>
                       <li><a href="/resources">resources</a></li>
                     @if (Auth::check())
                      <li><a href="/exclusive-properties">exclusive</a></li>
                     @endif
                    <!-- li end -->
                    <!-- <li><a href="/blog">blog</a> </li>-->
                    <li><a href="/contact">contact</a></li>
                </ul>
                <!-- Module Signup  -->
                @if (Route::has('login'))
                    @auth
                        @if (Auth::user()->utype === 'ADM')
                        <div class="module module-login pull-left">
                            <ul class="nav navbar-nav navbar-left">
                            <li class="has-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item"><i class="fa fa-user" aria-hidden="true"></i> ({{ Auth::user()->name }})</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/dashboard" title="Dashboard">Dashboard</a></li>
                                     <!-- Profile Menu-->
                                     <li><a href="/admin/properties">Properties</a></li>
                                    <li><a href="/admin/add-slider">Add slider</a></li>
                                    <li><a href="/admin/home">Setting</a></li>
                                     <!-- logout-->
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Logout">Logout</a></li>
                                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                            </ul>
                        </div>
                        <!-- Module Consultation  -->
                        <div class="module module-property pull-left">
                            <a href="/admin/add-property" target="_blank" class="btn"><i class="fa fa-plus"></i> add property</a>
                        </div>
                        @else
                        <div class="module module-login pull-left">
                            <ul class="nav navbar-nav navbar-left">
                            <li class="has-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Profile ({{ Auth::user()->name }})</a>
                                <ul class="dropdown-menu">
                                    <!-- Profile Menu-->
                                    <li><a href="/user/profile">user profile</a></li>
                                    <li><a href="/user/social-profile">social profile</a></li>
                                    <li><a href="/user/my-properties">my properties</a></li>
                                    <li><a href="/user/favourite-properties">favourite properties</a></li>
                                    <li><a href="/user/add-property">add property</a></li>
                                    <!-- logout-->
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Logout">Logout</a></li>
                                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                            </ul>
                        </div>
                        <!-- Module Consultation  -->
                        <div class="module module-property pull-left">
                            <a href="/user/add-property" target="_blank" class="btn"><i class="fa fa-plus"></i> add property</a>
                        </div>
                        @endif
                    
                @else
                <div class="module module-login pull-left">
                    <a class="btn-popup" data-toggle="modal" data-target="#signupModule">Login</a>
                    <div class="modal register-login-modal fade" tabindex="-1" role="dialog" id="signupModule">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="row">

                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#login" data-toggle="tab">login</a>
                                            </li>
                                            <li><a href="#signup" data-toggle="tab">signup</a>
                                            </li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="login">
                                                <div class="signup-form-container text-center">
                                                    <form class="mb-0" method="POST" action="{{ route('login') }}">
                                                            @csrf
                                                        <a href="#" class="btn btn--facebook btn--block"><i class="fa fa-facebook-square"></i>Login with Facebook</a>
                                                        <div class="or-text">
                                                            <span>or</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email" :value="old('email')" id="login-email" placeholder="Email Address"  required autofocus/>
                                                        </div>
                                                        <!-- .form-group end -->
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" name="password" id="login-password" placeholder="Password" required autocomplete="current-password"/>
                                                        </div>
                                                        <!-- .form-group end -->
                                                        <div class="input-checkbox">
                                                            <label for="remember_me" class="label-checkbox">
                                                                <span>Remember Me</span>
                                                                <input type="checkbox" id="remember_me" name="remember">
                                                                <span class="check-indicator"></span>
                                                            </label>
                                                            </div>
                                                        <input type="submit" class="btn btn--primary btn--block" value="Sign In">
                                                        <a href="{{ route('password.request') }}" class="forget-password">Forget your password?</a>
                                                    </form>
                                                    <!-- form  end -->
                                                </div>
                                                <!-- .signup-form end -->
                                            </div>
                                            <div class="tab-pane" id="signup">
                                                <form class="mb-0" method="POST" action="{{ route('register') }}">
                                                        @csrf
                                                    <a href="#" class="btn btn--facebook btn--block"><i class="fa fa-facebook-square"></i>Register with Facebook</a>
                                                    <div class="or-text">
                                                        <span>or</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="name" name="name" :value="old('name')" placeholder="Full Name" required autofocus autocomplete="name"/>
                                                    </div>
                                                    <!-- .form-group end -->
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" :value="old('email')"  id="email" placeholder="Email Address" required/>
                                                    </div>
                                                    <!-- .form-group end -->
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required autocomplete="new-password" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirmation password" required autocomplete="new-password" />
                                                    </div>
                                                    <!-- .form-group end -->
                                                    <div class="input-checkbox">
                                                        <label class="label-checkbox">
                                                        <span>I agree with all <a href="#">Terms & Conditions</a></span>
                                                        <input type="checkbox">
                                                        <span class="check-indicator"></span>
                                                    </label>
                                                    </div>
                                                    <input type="submit" class="btn btn--primary btn--block" value="Register">
                                                </form>
                                                <!-- form  end -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                </div>
                <!-- Module Consultation  -->
                <div class="module module-property pull-left">
                    <a data-toggle="modal" data-target="#signupModule" class="btn"><i class="fa fa-plus"></i> add property</a>
                </div>
                @endauth
                @endif
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

</header>