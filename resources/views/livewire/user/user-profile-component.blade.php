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
                            <h1>user Profile</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">user Profile</li>
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

<!-- #user-profile
============================================= -->
<section id="user-profile" class="user-profile">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
                @livewire('user.user-sidebar-component')
            </div>
            <!-- .col-md-4 -->
            <div class="col-xs-12 col-sm-12 col-md-8">
                <form class="mb-0">
                    <div class="form-box">
                        <h4 class="form--title">Profile Picture</h4>
                        <div class="upload--img-area">
                            <div class="preview--img">
                                <img src="#" id="output--img" class="output--img">
                            </div>
                            <a class="btn btn--primary btn-file ml-30">Upload
                        <input type="file" hidden>
                        <input type="file" accept="image/*" onchange="loadFile(event)"> 
                    </a>
                            <a href="#" class="btn delete--img"><i class="fa fa-times"></i>Delete</a>
                            <script>
                                var loadFile = function(event) {
                                    var reader = new FileReader();
                                    reader.onload = function() {
                                        var output = document.getElementById('output--img');
                                        output.src = reader.result;
                                    };
                                    reader.readAsDataURL(event.target.files[0]);
                                };

                            </script>
                        </div>
                    </div>
                    <div class="form-box">
                        <h4 class="form--title">Personal Details</h4>
                        <div class="form-group">
                            <label for="first-name">First Name</label>
                            <input type="text" class="form-control" name="first-name" id="first-name">
                        </div>
                        <!-- .form-group end -->
                        <div class="form-group">
                            <label for="last-name">Last Name</label>
                            <input type="text" class="form-control" name="last-name" id="last-name">
                        </div>
                        <!-- .form-group end -->
                        <div class="form-group">
                            <label for="email-address">Email Address</label>
                            <input type="email" class="form-control" name="email-address" id="email-address">
                        </div>
                        <!-- .form-group end -->
                        <div class="form-group">
                            <label for="phone-number">Phone</label>
                            <input type="text" class="form-control" name="phone-number" id="phone-number">
                        </div>
                        <!-- .form-group end -->
                        <div class="form-group">
                            <label for="about-me">About Me</label>
                            <textarea class="form-control" name="about-me" id="about-me" rows="2"></textarea>
                        </div>
                        <!-- .form-group end -->
                    </div>
                    <!-- .form-box end -->
                    <div class="form-box">
                        <h4 class="form--title">Change Password</h4>
                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <!-- .form-group end -->
                        <div class="form-group">
                            <label for="confirm-password">confirm password</label>
                            <input type="password" class="form-control" name="confirm-password" id="confirm-password">
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
<!-- #user-profile  end -->