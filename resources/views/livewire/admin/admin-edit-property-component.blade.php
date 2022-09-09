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
                            <h1>Edit Property</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Edit Property</li>
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
                <form class="mb-0" enctype="multipart/form-data" wire:ignore.self>
                    <div class="form-box">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h4 class="form--title">Property Description</h4>
                            </div>
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="property-title">Property Title*</label>
                                    <input type="text" class="form-control" name="property-title" id="property-title" wire:model="name" wire:keyup="generateslug" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="property-title">Property Image*</label>
                                     <input type="file" class="form-control" wire:model="newimage" wire:ignore.self>
                                        @if($newimage)
                                            <img src="{{ $newimage->temporaryUrl() }}" width="120"/>
                                         @else
                                         <img src="{{asset('assets/user/assets/images/page-titles')}}/{{ $image }}" width="120"/>
                                        @endif
                                </div>
                            </div>
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="property-description">Property Description*</label>
                                    <textarea class="form-control" name="property-description" id="property-description" rows="2" wire:model="description"></textarea>
                                </div>
                            </div>
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="select-type">Type</label>
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select id="select-type" wire:model="type_id">
                                            <option value="">Select property type</option>
                                        @foreach($ptype as $type)
                                             <option value="{{ $type->id }}">{{ $type->name }}</option>
                                         @endforeach
                                </select>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="select-status">Status</label>
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select id="select-status"  wire:model="status">
                                            <option value="sale">Select status</option>
                                    <option value="sale">Sale</option>
                                    <option value="rent">Rent</option>
                                </select>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" name="location" id="location" wire:model="locations">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Bedrooms">Bedrooms</label>
                                    <input type="text" class="form-control" name="Bedrooms" id="Bedrooms" wire:model="bedrooms">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Bathrooms">Bathrooms</label>
                                    <input type="text" class="form-control" name="Bathrooms" id="Bathrooms" wire:model="bathrooms">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Floors">Floors</label>
                                    <input type="text" class="form-control" name="Floors" id="Floors" wire:model="floors">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Garages">Garages</label>
                                    <input type="text" class="form-control" name="Garages" id="Garages" wire:model="garages">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Area">Area</label>
                                    <input type="text" class="form-control" name="Area" id="Area" placeholder="sq ft" wire:model="area">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Size">Size</label>
                                    <input type="text" class="form-control" name="Size" id="Size" placeholder="sq ft" wire:model="size">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Sale-Rent-Price">Sale or Rent Price*</label>
                                    <input type="text" class="form-control" name="Sale-Rent-Price" id="Sale-Rent-Price" wire:model="SRprice" required>
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Before-Price-Label">Before Price Label</label>
                                    <input type="text" class="form-control" name="Before-Price-Label" id="Before-Price-Label" placeholder="ex: start from" wire:model="Bprice">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="After-Price-Label">After Price Label</label>
                                    <input type="text" class="form-control" name="After-Price-Label" id="After-Price-Label" placeholder="ex: monthly" wire:model="Aprice">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Property-ID">Property ID*</label>
                                    <input type="text" class="form-control" name="Property-ID" id="Property-ID" wire:model="propertyID">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Video-URL">Video URL</label>
                                    <input type="text" class="form-control" name="Video-URL" id="Video-URL" placeholder="Youtube, Vimeo, Dailymotion, etc.." wire:model="videoURL">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
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
                           {{--  <!-- .col-md-12 end -->
                             @foreach($featureds as $feature)
                            <div class="col-xs-12 col-sm-6 col-md-3">
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
                            <div class="col-xs-12 col-sm-4 col-md-12">
                                <!--<div id="dZUpload" class="dropzone"></div>-->
                                 <input type="file" class="form-control" wire:model="newgallery" wire:ignore.self multiple/>
                                 <br/>
                                    @if($newgallery)
                                        @foreach ($newgallery as $newimage )
                                        @if ($newimage)
                                             <img src="{{ $newimage->temporaryUrl() }}" width="120"/>
                                        @endif
                                        @endforeach 
                                    @else
                                    @foreach ($gallery as $image )
                                        @if ($image)
                                        <img src="{{asset('assets/user/assets/images/properties')}}/{{ $image }}" width="120"/>
                                        @endif
                                        @endforeach
                                    @endif
                                    <br/>
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
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select id="select-country" wire:model="location_id">
                                    <option value="">Select property location</option>
                                     @foreach($Locations as $location)
                                             <option value="{{ $location->id }}">{{ $location->neighborhood }}</option>
                                     @endforeach
                                 </select>
                                    </div>
                                </div>
                            </div>
                             <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select id="select-country" wire:model="category_id">
                                    <option value="">Select Category</option>
                                     @foreach($category as $category)
                                             <option value="{{ $category->id }}">{{ $category->name }}</option>
                                     @endforeach
                                 </select>
                                    </div>
                                </div>
                            </div>
                             <!-- .col-md-4 end -->
                             <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <div class="input-group date" data-provide="datepicker">
                                        <input wire:model="fromDate"
                    type="text" class="form-control input-md datepicker" placeholder="Start Date" autocomplete="off"
                    data-provide="datepicker" data-datetime-autoclose="true" data-date-format="mm/dd/yyyy" data-date-today-highlight="true"                        
                    onchange="this.dispatchEvent(new InputEvent('input'))" id="datepicker">
                                        <div class="input-group-addon">
                                            <span class="fa fa-calendar"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <div class="input-group date" data-provide="datepicker">
                                        <input wire:model="toDate"
                    type="text" class="form-control input-md datepicker" placeholder="End Date" autocomplete="off"
                    data-provide="datepicker" data-datetime-autoclose="true" data-date-format="mm/dd/yyyy" data-date-today-highlight="true"                        
                    onchange="this.dispatchEvent(new InputEvent('input'))" id="datepickers">
                                        <div class="input-group-addon">
                                            <span class="fa fa-calendar"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- .col-md-4 end -->
                           <!-- <!-- .col-md-12 end --
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="address">Address*</label>
                                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter your property address" required>
                                </div>
                            </div>
                            <!-- .col-md-4 end --
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="select-country">Country</label>
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select id="select-country">
                                    <option>Select property country</option>
                                    <option>Select property country</option>
                                 </select>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-4 end --
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input class="form-control" name="city" id="city">
                                </div>
                            </div>
                            <!-- .col-md-4 end --
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input type="text" class="form-control" name="state" id="state">
                                </div>
                            </div>
                            <!-- .col-md-4 end --
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Zip/Postal-code">Zip/Postal Code</label>
                                    <input type="text" class="form-control" name="Zip/Postal-code" id="Zip/Postal-code">
                                </div>
                            </div>
                            <!-- .col-md-4 end --
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="neighborhood">Neighborhood</label>
                                    <input type="text" class="form-control" name="neighborhood" id="neighborhood">
                                </div>
                            </div>
                            <!-- .col-md-4 end --
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div id="googleMap" style="width:100%;height:380px;"></div>
                            </div>-->
                            <!-- .col-md-12 end -->
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .form-box end -->
                    <button type="button" wire:click.prevent="storeProperty()" class="btn btn--primary">Save Update</button>
                </form>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
</section>
</div>