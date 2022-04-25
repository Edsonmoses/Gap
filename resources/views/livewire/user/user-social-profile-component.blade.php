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
                            <h1>Social Profile</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Social Profile</li>
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

<!-- #social-profile
============================================= -->
<section id="social-profile" class="social-profile">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
                @livewire('user.user-sidebar-component')
            </div>
            <!-- .col-md-4 -->
            <div class="col-xs-12 col-sm-12 col-md-8">
                <form class="mb-0">
                    <div class="form-box">
                        <h4 class="form--title">Social Profiles</h4>
                        <div class="form-group">
                            <label for="facebook-url">Facebook</label>
                            <input type="text" class="form-control" name="facebook-url" id="facebook-url" placeholder="Facebook URL">
                        </div>
                        <!-- .form-group end -->
                        <div class="form-group">
                            <label for="twitter-url">twitter</label>
                            <input type="text" class="form-control" name="twitter-url" id="twitter-url" placeholder="@Username">
                        </div>
                        <!-- .form-group end -->
                        <div class="form-group">
                            <label for="google-plus-url">Google+</label>
                            <input type="text" class="form-control" name="google-plus-url" id="google-plus-url" placeholder="google-plus URL">
                        </div>
                        <!-- .form-group end -->
                        <div class="form-group">
                            <label for="LinkedIn-url">LinkedIn</label>
                            <input type="text" class="form-control" name="LinkedIn-url" id="LinkedIn-url" placeholder="LinkedIn URL">
                        </div>
                        <!-- .form-group end -->
                        <div class="form-group">
                            <label for="Instagram-url">Instagram</label>
                            <input type="text" class="form-control" name="Instagram-url" id="Instagram-url" placeholder="@Username">
                        </div>
                        <!-- .form-group end -->
                        <div class="form-group">
                            <label for="Pinterest-url">Pinterest</label>
                            <input type="text" class="form-control" name="Pinterest-url" id="Pinterest-url" placeholder="@Username">
                        </div>
                        <!-- .form-group end -->
                    </div>
                    <!-- .form-box end -->
                    <input type="submit" value="Save Edits" name="submit" class="btn btn--primary">
                </form>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
    </div>
</section>
<!-- #social-profile  end -->