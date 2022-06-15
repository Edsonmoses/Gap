<div>
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
                            <h1>Add Location</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Add Location</li>
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

<!-- #Add Property
============================================= -->
<section id="add-property" class="add-property">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                 @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                <form class="mb-0" wire:ignore.self>
                    <div class="form-box">
                        <div class="row">
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="address">Address*</label>
                                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter your property address" required wire:model="address">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="select-country">Country</label>
                                    <input class="form-control" name="country" id="country" wire:model="country">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input class="form-control" name="city" id="city" wire:model="city">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input type="text" class="form-control" name="state" id="state" wire:model="state">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Zip/Postal-code">Zip/Postal Code</label>
                                    <input type="text" class="form-control" name="Zip/Postal-code" id="Zip/Postal-code" wire:model="zipcode">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="neighborhood">Neighborhood</label>
                                    <input type="text" class="form-control" name="neighborhood" id="neighborhood" wire:model="neighborhood">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .form-box end -->
                    <input type="submit" value="Save Location" name="submit" wire:click.prevent="storeLocation()" class="btn btn--primary">
                </form>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
</section>
</div>
