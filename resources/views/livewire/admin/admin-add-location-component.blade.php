<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
    
                                       <div class="button-list mb-2" style="float: right !important">
                                             <a href="/admin/locations" type="button" class="btn btn-outline-primary waves-effect waves-light">All Locations</a>
                                            <a href="/admin/add-location" type="button" class="btn btn-outline-success waves-effect waves-light">Add Location</a>
                                        </div>
                                        <div class="clearfix"></div>
                                         @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                        @endif
                                        <form class="mb-0" wire:ignore.self>
                                                <div class="form-box">
                                                    <div class="row">
                                                        <!-- .col-md-12 end -->
                                                        <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                            <div class="form-group">
                                                                <label for="address">Address*</label>
                                                                <input type="text" class="form-control" name="address" id="address" placeholder="Enter your property address" required wire:model="address">
                                                            </div>
                                                        </div>
                                                        <!-- .col-md-4 end -->
                                                        <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                            <div class="form-group">
                                                                <label for="select-country">Country</label>
                                                                <input class="form-control" name="country" id="country" wire:model="country">
                                                            </div>
                                                        </div>
                                                        <!-- .col-md-4 end -->
                                                        <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                            <div class="form-group">
                                                                <label for="city">City</label>
                                                                <input class="form-control" name="city" id="city" wire:model="city">
                                                            </div>
                                                        </div>
                                                        <!-- .col-md-4 end -->
                                                        <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                            <div class="form-group">
                                                                <label for="state">State</label>
                                                                <input type="text" class="form-control" name="state" id="state" wire:model="state">
                                                            </div>
                                                        </div>
                                                        <!-- .col-md-4 end -->
                                                        <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                            <div class="form-group">
                                                                <label for="Zip/Postal-code">Zip/Postal Code</label>
                                                                <input type="text" class="form-control" name="Zip/Postal-code" id="Zip/Postal-code" wire:model="zipcode">
                                                            </div>
                                                        </div>
                                                        <!-- .col-md-4 end -->
                                                        <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
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
                                                <input type="submit" value="Save Location" name="submit" wire:click.prevent="storeLocation()" class="btn btn-info rounded-pill waves-effect waves-light">
                                            </form>
                                        <!--end form-->
                                    </div> 
                                </div>
                               
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->       
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; {{ config('app.name', 'Ground & Properties Ltd - Gap') }}
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="/about">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="/contact">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>