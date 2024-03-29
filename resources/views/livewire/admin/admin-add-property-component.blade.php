<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
    
                                       <div class="button-list mb-2" style="float: right !important">
                                             <a href="/admin/properties" type="button" class="btn btn-outline-primary waves-effect waves-light">All Properties</a>
                                            <a href="/admin/add-property" type="button" class="btn btn-outline-success waves-effect waves-light">Add Property</a>
                                        </div>
                                        <div class="clearfix"></div>
                                         @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                        @endif

                                                    <form class="mb-0" wire:ignore.self enctype="multipart/form-data">
                                                        <div class="form-box">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                                    <h4 class="form--title">Property Description</h4>
                                                                </div>
                                                                <!-- .col-md-12 end -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                                                                    <div class="form-group">
                                                                        <label for="property-title">Property Title*</label>
                                                                        <input type="text" class="form-control" name="property-title" id="property-title" wire:model="name" wire:keyup="generateslug" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                                                                    <div class="form-group">
                                                                        <label for="property-title">Property Image*</label>
                                                                        <input type="file" class="form-control" wire:model="image">
                                                                        @if($image)
                                                                        <img src="{{ $image->temporaryUrl() }}" width="120" />
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <!-- .col-md-12 end -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                                                                    <div class="form-group">
                                                                        <label for="property-description">Property Description*</label>
                                                                        <textarea class="form-control" name="property-description" id="property-description" rows="2" wire:model="description"></textarea>
                                                                    </div>
                                                                </div>
                                                                <!-- .col-md-12 end -->
                                                                <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                                    <div class="form-group">
                                                                        <label for="select-type">Type</label>
                                                                        <div class="select--box">
                                                                            <select class="form-select" id="select-type" wire:model="type_id">
                                                                                <option value="">Select property type</option>
                                                                                @foreach($ptype as $type)
                                                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- .col-md-4 end -->
                                                                <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                                    <div class="form-group">
                                                                        <label for="select-status">Status</label>
                                                                        <div class="select--box">
                                                                            <select class="form-select" id="select-status" wire:model="status">
                                                                                <option value="sale">Select status</option>
                                                                                <option value="sale">Sale</option>
                                                                                <option value="rent">Rent</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- .col-md-4 end -->
                                                                <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                                    <div class="form-group">
                                                                        <label for="location">Location</label>
                                                                        <input type="text" class="form-control" name="location" id="location" wire:model="locations">
                                                                    </div>
                                                                </div>
                                                                <!-- .col-md-4 end -->
                                                                <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                                    <div class="form-group">
                                                                        <label for="Bedrooms">Bedrooms</label>
                                                                        <input type="text" class="form-control" name="Bedrooms" id="Bedrooms" wire:model="bedrooms">
                                                                    </div>
                                                                </div>
                                                                <!-- .col-md-4 end -->
                                                                <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                                    <div class="form-group">
                                                                        <label for="Bathrooms">Bathrooms</label>
                                                                        <input type="text" class="form-control" name="Bathrooms" id="Bathrooms" wire:model="bathrooms">
                                                                    </div>
                                                                </div>
                                                                <!-- .col-md-4 end -->
                                                                <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                                    <div class="form-group">
                                                                        <label for="Floors">Floors</label>
                                                                        <input type="text" class="form-control" name="Floors" id="Floors" wire:model="floors">
                                                                    </div>
                                                                </div>
                                                                <!-- .col-md-4 end -->
                                                                <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                                    <div class="form-group">
                                                                        <label for="Garages">Garages</label>
                                                                        <input type="text" class="form-control" name="Garages" id="Garages" wire:model="garages">
                                                                    </div>
                                                                </div>
                                                                <!-- .col-md-4 end -->
                                                                <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                                    <div class="form-group">
                                                                        <label for="Area">Area</label>
                                                                        <input type="text" class="form-control" name="Area" id="Area" placeholder="sq ft" wire:model="area">
                                                                    </div>
                                                                </div>
                                                                <!-- .col-md-4 end -->
                                                                <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                                    <div class="form-group">
                                                                        <label for="Size">Size</label>
                                                                        <input type="text" class="form-control" name="Size" id="Size" placeholder="sq ft" wire:model="size">
                                                                    </div>
                                                                </div>
                                                                <!-- .col-md-4 end -->
                                                                <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                                    <div class="form-group">
                                                                        <label for="Sale-Rent-Price">Sale or Rent Price*</label>
                                                                        <input type="text" class="form-control" name="Sale-Rent-Price" id="Sale-Rent-Price" wire:model="SRprice" required>
                                                                    </div>
                                                                </div>
                                                                <!-- .col-md-4 end -->
                                                                <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                                    <div class="form-group">
                                                                        <label for="Before-Price-Label">Before Price Label</label>
                                                                        <input type="text" class="form-control" name="Before-Price-Label" id="Before-Price-Label" placeholder="ex: start from" wire:model="Bprice">
                                                                    </div>
                                                                </div>
                                                                <!-- .col-md-4 end -->
                                                                <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                                    <div class="form-group">
                                                                        <label for="After-Price-Label">After Price Label</label>
                                                                        <input type="text" class="form-control" name="After-Price-Label" id="After-Price-Label" placeholder="ex: monthly" wire:model="Aprice">
                                                                    </div>
                                                                </div>
                                                                <!-- .col-md-4 end -->
                                                                <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                                    <div class="form-group">
                                                                        <label for="Property-ID">Property ID*</label>
                                                                        <input type="text" class="form-control" name="Property-ID" id="Property-ID" wire:model="propertyID">
                                                                    </div>
                                                                </div>
                                                                <!-- .col-md-4 end -->
                                                                <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                                    <div class="form-group">
                                                                        <label for="Video-URL">Video URL</label>
                                                                        <input type="text" class="form-control" name="Video-URL" id="Video-URL" placeholder="Youtube, Vimeo, Dailymotion, etc.." wire:model="videoURL">
                                                                    </div>
                                                                </div>
                                                                <!-- .col-md-4 end -->
                                                                <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                                    <div class="form-group">
                                                                        <label for="pin">Google Pin</label>
                                                                        <input type="text" class="form-control" name="pin" id="pin" placeholder="Google pin.." wire:model="pin">
                                                                    </div>
                                                                </div>
                                                                <!-- .col-md-4 end -->
                                                            </div>
                                                            <!-- .row end -->
                                                        </div>
                                                        <!-- .form-box end -->
                                                        <div class="form-box">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                                    <h4 class="form--title">Property Features</h4>
                                                                </div>
                                                                {{-- <!-- .col-md-12 end -->
                                                            @foreach($featureds as $feature)
                                                            <div class="col-xs-12 col-sm-6 col-md-3 mb-2">
                                                                <div class="input-checkbox">
                                                                    <label class="label-checkbox">
                                                                <span>{{ $feature->name}}</span>
                                                                <input type="checkbox" value="{{ $feature->id }}" wire:model="features_id.{{ $feature->name}}">
                                                                <span class="check-indicator"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        @endforeach--}}
                                                        <input type="text" class="form-control" name="featured" id="featured" wire:model="featured">
                                                        <!-- .col-md-3 end -->

                                                </div>
                                                <!-- .row end -->
                                            </div>
                                            <!-- .form-box end -->

                                            <div class="form-box">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <h4 class="form--title">Property Gallery</h4>
                                                    </div>
                                                    <!-- .col-md-12 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-12 mb-2">
                                                        <!--<div id="dZUpload" class="dropzone"></div>-->
                                                        <input type="file" class="form-control" wire:model="gallery" multiple />
                                                        @if($gallery)
                                                        @foreach ($gallery as $image )
                                                        <img src="{{ $image->temporaryUrl() }}" width="120" />
                                                        @endforeach
                                                        @endif
                                                    </div>
                                                    <!-- .col-md-12 end -->

                                                </div>
                                                <!-- .row end -->
                                            </div>
                                            <!-- .form-box end -->

                                            <div class="form-box">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <h4 class="form--title">Property Location</h4>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label for="property-location">Property Location</label>
                                                            <div class="select--box">
                                                                <select class="form-select" id="select-country" wire:model="location_id">
                                                                    <option value="">Select property location</option>
                                                                    @foreach($Locations as $location)
                                                                    <option value="{{ $location->id }}">{{ $location->neighborhood }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label for="category">Category</label>
                                                            <div class="select--box">
                                                                <select class="form-select" id="select-country" wire:model="category_id">
                                                                    <option value="">Select Category</option>
                                                                    @foreach($category as $category)
                                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label for="fromDate">From Date</label>
                                                            <div class="input-group date" data-provide="datepicker">
                                                                <input type="text" class="form-control" data-date-format="dd/mm/yyyy" id="datepicker" wire:model="fromDate">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                    <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label for="toDate">To Date</label>
                                                            <div class="input-group date" data-provide="datepicker">
                                                                <input type="text" class="form-control" data-date-format="dd/mm/yyyy" id="datepickers" wire:model="toDate">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                     <div class="col-xs-12 col-sm-4 col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <div class="select--box">
                                                                <label for="agent">Assign Agent</label>
                                                                <select class="form-select" id="select-status" wire:model="agent_id">
                                                                    <option value="sale">Assign Agent</option>
                                                                    @foreach($pagents as $pagent)
                                                                         <option value="{{ $pagent->id }}">{{ $pagent->title }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .col-md-4 end -->
                                                </div>
                                                <!-- .row end -->
                                            </div>
                                            <!-- .form-box end -->
                                            <button type="button" wire:click.prevent="storeProperty()" class="btn btn-info rounded-pill waves-effect waves-light">Save Property</button>
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