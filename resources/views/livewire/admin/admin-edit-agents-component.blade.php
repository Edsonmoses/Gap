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
                                        <form class="mb-0" wire:ignore.self>
                                            <div class="form-box">
                                                <div class="row">
                                                    <!-- .col-md-12 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label for="address">Name</label>
                                                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter your title" wire:model="title" wire:keyup="generateslug" />
                                                            @error('title') <span class="text-danger error">{{ $message }}</span>@enderror
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label for="select-country">Slug</label>
                                                            <input class="form-control" name="slug" id="slug" placeholder="Enter your slug" wire:model="slug">
                                                            @error('slug') <span class="text-danger error">{{ $message }}</span>@enderror
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label for="select-country">Position</label>
                                                            <input class="form-control" name="position" id="position" placeholder="Enter your position" wire:model="position">
                                                            @error('position') <span class="text-danger error">{{ $message }}</span>@enderror
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label for="city">Image</label>
                                                            <input type="file" class="form-control mb-1" wire:model="newimage">
                                                            @if($newimage)
                                                            <img src="{{ $newimage->temporaryUrl() }}" width="120" />
                                                            @else
                                                            <img src="{{asset('assets/user/assets/images/agents/grid')}}/{{ $image }}" width="120" />
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label for="cover">Cover</label>
                                                            <input type="file" class="form-control mb-1" wire:model="newcover">
                                                            @if($newcover)
                                                            <img src="{{ $newcover->temporaryUrl() }}" width="120" />
                                                            @else
                                                            <img src="{{asset('assets/user/assets/images/page-titles')}}/{{ $cover }}" width="120" />
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
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
                                                    <!-- .col-md-4 end -->
                                                    <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                                                        <div class="form-group">
                                                            <label for="details">Details</label>
                                                            <textarea class="form-control" name="details" id="details" rows="2" wire:model="details"></textarea>
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-12 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label for="address">Facebook</label>
                                                            <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Enter your facebook" wire:model="facebook" />
                                                            @error('facebook') <span class="text-danger error">{{ $message }}</span>@enderror
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label for="select-country">Twitter</label>
                                                            <input class="form-control" name="twitter" id="twitter" placeholder="Enter your twitter" wire:model="twitter" />
                                                            @error('twitter') <span class="text-danger error">{{ $message }}</span>@enderror
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label for="select-country">Linkedin</label>
                                                            <input class="form-control" name="linkedin" id="linkedin" placeholder="Enter your linkedin" wire:model="linkedin">
                                                            @error('linkedin') <span class="text-danger error">{{ $message }}</span>@enderror
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label for="address">Phone</label>
                                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your phone" wire:model="phone" />
                                                            @error('phone') <span class="text-danger error">{{ $message }}</span>@enderror
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label for="select-country">Mobile</label>
                                                            <input class="form-control" name="mobile" id="mobile" placeholder="Enter your mobile" wire:model="mobile" />
                                                            @error('mobile') <span class="text-danger error">{{ $message }}</span>@enderror
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label for="select-country">Email</label>
                                                            <input class="form-control" name="email" id="email" placeholder="Enter your email" wire:model="email">
                                                            @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label for="select-country">Website</label>
                                                            <input class="form-control" name="website" id="website" placeholder="Enter your website" wire:model="website">
                                                            @error('website') <span class="text-danger error">{{ $message }}</span>@enderror
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label for="select-status">Property</label>
                                                            <div class="select--box">
                                                                <select class="form-select" id="select-status" wire:model="property_id">
                                                                    <option value="sale">Assign property</option>
                                                                    <option value="1">Approved</option>
                                                                    <option value="0">Pending</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                </div>
                                                <!-- .row end -->
                                            </div>
                                            <!-- .form-box end -->
                                            <input type="submit" value="Save Agent" name="submit" wire:click.prevent="storeAgent()" class="btn btn-info rounded-pill waves-effect waves-light">
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
            @push('scripts')
    <script>
        $(function(){
            $('#description').summernote({
                placeholder: 'Enter description',
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ],
                callbacks: {
                    onChange: function(contents, $editable) {
                        @this.set('description', contents);
                    }
                }
            });
        });
    </script>
@endpush