<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
    
                                       <div class="button-list mb-2" style="float: right !important">
                                             <a href="/admin/our-cars" type="button" class="btn btn-outline-primary waves-effect waves-light">All Cars</a>
                                            <a href="/admin/our-cars" type="button" class="btn btn-outline-success waves-effect waves-light">Add Car</a>
                                        </div>
                                        <div class="clearfix"></div>
                                         @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                        @endif
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
                                                                <label for="category-image"> Image</label>
                                                                <input type="file" class="form-control" wire:model="newimage">
                                                                @if($newimage)
                                                                <img src="{{ $newimage->temporaryUrl() }}" width="120" />
                                                                @else
                                                                @foreach ($image as $image)
                                                                @if (!empty($image))
                                                                <img src="{{asset('assets/user/assets/images/cars')}}/{{ $image }}" width="100" style="float: left; padding:5px;" />
                                                                @endif
                                                                @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-2">
                                                            <div class="form-group">
                                                                <label for="partner-cover">Cover Image</label>
                                                                <input type="file" class="form-control mb-1" wire:model="newcoverimg">
                                                                @if($newcoverimg)
                                                                <img src="{{ $newcoverimg->temporaryUrl() }}" width="120" />
                                                                @else
                                                                <img src="{{asset('assets/user/assets/images/cars')}}/{{ $coverimg }}" width="120" />
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 mb-2">
                                                            <div class="form-group">
                                                                <label for="category-name">Price</label>
                                                                <input type="text" class="form-control" placeholder="Enter Price" wire:model="price">
                                                                @error('price') <span class="text-danger error">{{ $message }}</span>@enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-2">
                                                            <div class="form-group">
                                                                <label for="call"> Phone Number</label>
                                                                <input type="text" class="form-control" placeholder="Enter Phone no" wire:model="call">
                                                                @error('call') <span class="text-danger error">{{ $message }}</span>@enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-2">
                                                            <div class="form-group">
                                                                <label for="whatsapp"> Whatsapp</label>
                                                                <input type="text" class="form-control" placeholder="Enter Whatsapp" wire:model="whatsapp">
                                                                @error('whatsapp') <span class="text-danger error">{{ $message }}</span>@enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-2">
                                                            <div class="form-group">
                                                                <label for="finance"> Finance</label>
                                                                <input type="text" class="form-control" placeholder="Enter Name" wire:model="finance">
                                                                @error('finance') <span class="text-danger error">{{ $message }}</span>@enderror
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
                                                        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                                                            <div class="form-group">
                                                                <label for="description">Description*</label>
                                                                <textarea class="form-control" name="description" id="description" rows="2" wire:model="desc"></textarea>
                                                            </div>
                                                        </div>
                                                        <!-- .col-md-12 end -->

                                                    </div>
                                                    <!-- .row end -->
                                                </div>
                                                <!-- .add-input end -->
                                            </div>
                                            <!-- .form-box end -->
                                            <button type="button" wire:click.prevent="storeCars()" class="btn btn-info rounded-pill waves-effect waves-light">Updade Car</button>
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