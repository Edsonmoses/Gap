<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
    
                                       <div class="button-list mb-2" style="float: right !important">
                                             <a href="/admin/resources" type="button" class="btn btn-outline-primary waves-effect waves-light">All Agents</a>
                                            <a href="/admin/resources" type="button" class="btn btn-outline-success waves-effect waves-light">Add Agent</a>
                                        </div>
                                       @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                        @endif
<div class="clearfix"></div>
                        <form class="mt-10" enctype="multipart/form-data" wire:ignore.self>
                                <!-- .form-box end -->
                                <div class="form-box">
                                    <div class=" add-input">
                                        <div class="row">
                                            <div class="col-md-4 mb-2">
                                                <div class="form-group">
                                                    <label for="category-name"> Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Name" wire:model="name" wire:keyup="generateSlug">
                                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-group">
                                                    <label for="category-slug"> Slug</label>
                                                    <input type="text" class="form-control" wire:model="slug" placeholder="Enter Slug">
                                                    @error('slug') <span class="text-danger error">{{ $message }}</span>@enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-group">
                                                    <label for="pdf"> Pdf</label>
                                                    <input type="file" class="form-control" wire:model="newpdf">
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-group">
                                                    <label for="partner-cover">Cover Image</label>
                                                    <input type="file" class="form-control" wire:model="newcoverimg">
                                                    @if($newcoverimg)
                                                    <img src="{{ $newcoverimg->temporaryUrl() }}" width="120" />
                                                    @else
                                                    <img src="{{ asset('assets/user/assets/images/resources') }}/{{ $coverimg }}" width="120" />
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-group">
                                                    <label for="select-status">Status</label>
                                                    <div class="select--box">
                                                        <select class="form-select" id="select-status" wire:model="status">
                                                            <option value="sale">Select status</option>
                                                            <option value="1">Approved</option>
                                                            <option value="0">Pending</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .col-md-4 mb-2 end -->

                                        </div>
                                        <!-- .row end -->
                                    </div>
                                    <!-- .add-input end -->
                                </div>
                                <!-- .form-box end -->
                                <button type="button" wire:click.prevent="storeResources()" class="btn btn-info rounded-pill waves-effect waves-light">Update Resources</button>
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