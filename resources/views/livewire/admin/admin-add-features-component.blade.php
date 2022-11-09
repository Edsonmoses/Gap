<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
    
                                       <div class="button-list mb-2" style="float: right !important">
                                             <a href="/admin/agents" type="button" class="btn btn-outline-primary waves-effect waves-light">All Agents</a>
                                            <a href="/admin/add-agent" type="button" class="btn btn-outline-success waves-effect waves-light">Add Agents</a>
                                        </div>
                                        <div class="clearfix"></div>
                                         @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                        @endif
                                       <form class="mb-0" wire:ignore.self>
                                            <!-- .form-box end -->
                                            <div class="form-box">
                                                <div class=" add-input">
                                                    <div class="row">
                                                        <div class="col-md-5 mb-2">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Enter Name" wire:model="name" wire:keyup="generateslug">
                                                                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 mb-2">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" wire:model="slug" placeholder="Enter Slug">
                                                                @error('slug') <span class="text-danger error">{{ $message }}</span>@enderror
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- .row end -->
                                                </div>
                                                <!-- .add-input end -->
                                            </div>
                                            <!-- .form-box end -->
                                            <button type="button" wire:click.prevent="storeFeatures()" class="btn btn-info rounded-pill waves-effect waves-light">Save Feature</button>
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