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
            <img class="logo-light" src="{{asset('assets/user/assets/images/logo/logo-light.jpeg')}}" alt="Land Logo" width="126" height="35">
            <img class="logo-dark" src="{{asset('assets/user/assets/images/logo/logo-dark.jpeg')}}" alt="Land Logo" width="126" height="35">
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
                    <li class="has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Pages</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">agents</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/agents">All Agents</a>
                                    </li>
                                    <li>
                                        <a href="/agent-profile">agent profile</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">agencies</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/agency-list">all agencies</a>
                                    </li>
                                    <li>
                                        <a href="/agency-profile">agency profile</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">blog</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/blog">blog Grid</a>
                                    </li>
                                    <li>
                                        <a href="/blog-sidebar-right">blog Grid Right </a>
                                    </li>
                                    <li>
                                        <a href="/blog-sidebar-left">blog Grid Left </a>
                                    </li>
                                    <li>
                                        <a href="/blog-single">blog single</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="/about">page about</a></li>
                            <li><a href="/contact">page contact</a></li>
                            <li><a href="/faq">page FAQ</a></li>
                            <li><a href="/page-404">page 404</a></li>
                        </ul>
                    </li>
                    <!-- li end -->

                    <!-- Profile Menu-->
                    <li class="has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Profile</a>
                        <ul class="dropdown-menu">
                            <li><a href="/user/profile">user profile</a></li>
                            <li><a href="/user/social-profile">social profile</a></li>
                            <li><a href="/user/my-properties">my properties</a></li>
                            <li><a href="/user/favourite-properties">favourite properties</a></li>
                            <li><a href="/user/add-property">add property</a></li>
                        </ul>
                    </li>
                    <!-- li end -->

                    <!-- Properties Menu-->
                    <li class="has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Properties</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Properties grid</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/properties">properties grid</a>
                                    </li>
                                    <li>
                                        <a href="/properties-grid-split">properties grid split</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">properties list</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/properties-list">properties list</a>
                                    </li>
                                    <li>
                                        <a href="/properties-list-split">properties list split</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">properties single</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/property-single-gallery">single gallery</a>
                                    </li>
                                    <li>
                                        <a href="/property-single-slider">single slider</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- li end -->

                    <li><a href="/contact">contact</a></li>
                </ul>
                <!-- Module Signup  -->
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
                    <a href="/user/add-property" target="_blank" class="btn"><i class="fa fa-plus"></i> add property</a>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

</header>

