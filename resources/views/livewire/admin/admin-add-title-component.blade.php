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
                                            <a href="/admin/add-agent" type="button" class="btn btn-outline-success waves-effect waves-light">Add Agent</a>
                                        </div>
                                        <div class="clearfix"></div>
                                         @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                        @endif
                                        <form class="mb-0" enctype="multipart/form-data" wire:ignore.self>
                                            <!-- .form-box end -->
                                            <div class="form-box">
                                                <div class=" add-input">
                                                    <div class="row">
                                                        <div class="col-md-4 mb-2">
                                                            <div class="form-group">
                                                                <label for="category-name">Page Name</label>
                                                                <input type="text" class="form-control" placeholder="Enter title" wire:model="title" />
                                                                @error('title') <span class="text-danger error">{{ $message }}</span>@enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                            <div class="form-group">
                                                                <label for="select-status">Page Podition</label>
                                                                <div class="select--box">
                                                                    <select class="form-select" id="select-status" wire:model="podition">
                                                                        <option value="pages">Select podition</option>
                                                                        <option value="latest">Latest Properties</option>
                                                                        <option value="steps">Simple Steps</option>
                                                                        <option value="city">Property By City</option>
                                                                        <option value="trusted">Trusted Agents</option>
                                                                        <option value="provide">What We Provide</option>
                                                                        <option value="questions">Asked Questions</option>
                                                                    </select>
                                                                    @error('podition') <span class="text-danger error">{{ $message }}</span>@enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                            <div class="form-group">
                                                                <label for="select-status">Page Status</label>
                                                                <div class="select--box">
                                                                    <select class="form-select" id="select-status" wire:model="hide">
                                                                        <option value="sale">Select status</option>
                                                                        <option value="Active">On</option>
                                                                        <option value="Inactive">off</option>
                                                                    </select>
                                                                    @error('hide') <span class="text-danger error">{{ $message }}</span>@enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-2">
                                                            <div class="form-group">
                                                                <label for="category-slug">Page Description</label>
                                                                <textarea class="form-control" name="property-description" id="property-description" rows="2" wire:model="desc"></textarea>
                                                                @error('desc') <span class="text-danger error">{{ $message }}</span>@enderror
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- .row end -->
                                                </div>
                                                <!-- .add-input end -->
                                            </div>
                                            <!-- .form-box end -->
                                            <button type="button" wire:click.prevent="pageTitles()" class="btn btn-info rounded-pill waves-effect waves-light">Save Page Title</button>
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