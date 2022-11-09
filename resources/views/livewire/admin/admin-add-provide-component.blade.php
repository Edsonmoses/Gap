<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
    
                                       <div class="button-list mb-2" style="float: right !important">
                                             <a href="/admin/provide" type="button" class="btn btn-outline-primary waves-effect waves-light">All Provides</a>
                                            <a href="/admin/add-provide" type="button" class="btn btn-outline-success waves-effect waves-light">Add Provide</a>
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
                                                            <label for="address">Name</label>
                                                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your title" required wire:model="name" wire:keyup="generateslug" />
                                                            @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label for="select-country">Slug</label>
                                                            <input class="form-control" name="slug" id="slug" wire:model="slug">
                                                            @error('slug') <span class="text-danger error">{{ $message }}</span>@enderror
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label for="city">Icon</label>
                                                            <input type="file" class="form-control" wire:model="icon">
                                                            @if($icon)
                                                            <img src="{{ $icon->temporaryUrl() }}" width="120" />
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                                                        <div class="form-group">
                                                            <label for="property-description">Description</label>
                                                            <textarea class="form-control" name="property-description" id="property-description" rows="2" wire:model="description"></textarea>
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                </div>
                                                <!-- .row end -->
                                            </div>
                                            <!-- .form-box end -->
                                            <input type="submit" value="Save Provide" name="submit" wire:click.prevent="storeProvide()" class="btn btn-info rounded-pill waves-effect waves-light">
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