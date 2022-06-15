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
                            <h1>Add Property</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Add Property</li>
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

                <form class="mb-0" wire:submit.prevent="storeProperty">
                    <div class="form-box">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h4 class="form--title">Property Description</h4>
                            </div>
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="property-title">Property Title*</label>
                                    <input type="text" class="form-control" name="name" id="name" required wire:model="name"> 
                                    <input type="hidden" class="form-control" name="slug" id="slug" required wire:model="slug"> 
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
                                    <option value="2">house</option>
                                    <option value="3">appartment</option>
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
                                        <select id="select-status" wire:model="status">
                                    <option value="1">Sale</option>
                                    <option value="3">Rent</option>
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
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .form-box end -->
                    <div class="form-box">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h4 class="form--title">Property Features</h4>
                            </div>
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                <span>Center Cooling</span>
                                <input type="checkbox" value="1" wire:model="features_id">
                                <span class="check-indicator"></span>
                            </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                <span>Balcony</span>
                                <input type="checkbox" value="2" wire:model="features_id">
                                <span class="check-indicator"></span>
                            </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                <span>Pet Friendly</span>
                                <input type="checkbox" value="3" wire:model="features_id">
                                <span class="check-indicator"></span>
                            </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                <span>Barbeque</span>
                                <input type="checkbox" value="4" wire:model="features_id">
                                <span class="check-indicator"></span>
                            </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                <span>Fire Alarm</span>
                                <input type="checkbox" value="5" wire:model="features_id">
                                <span class="check-indicator"></span>
                            </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                <span>Modern Kitchen</span>
                                <input type="checkbox" value="6" wire:model="features_id">
                                <span class="check-indicator"></span>
                            </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                <span>Storage</span>
                                <input type="checkbox" value="7" wire:model="features_id">
                                <span class="check-indicator"></span>
                            </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                <span>Dryer</span>
                                <input type="checkbox" value="8" wire:model="features_id">
                                <span class="check-indicator"></span>
                            </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                <span>Heating</span>
                                <input type="checkbox" value="9" wire:model="features_id">
                                <span class="check-indicator"></span>
                            </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                <span>Pool</span>
                                <input type="checkbox" value="10" wire:model="features_id">
                                <span class="check-indicator"></span>
                            </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                <span>Laundry</span>
                                <input type="checkbox"value="11" wire:model="features_id">
                                <span class="check-indicator"></span>
                            </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                <span>Sauna</span>
                                <input type="checkbox" value="12" wire:model="features_id">
                                <span class="check-indicator"></span>
                            </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                <span>Gym</span>
                                <input type="checkbox" value="13" wire:model="features_id">
                                <span class="check-indicator"></span>
                            </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                <span>Elevator</span>
                                <input type="checkbox" value="14" wire:model="features_id">
                                <span class="check-indicator"></span>
                            </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                <span>Dish Washer</span>
                                <input type="checkbox" value="15" wire:model="features_id">
                                <span class="check-indicator"></span>
                            </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                <span>Emergency Exit</span>
                                <input type="checkbox" value="16" wire:model="features_id">
                                <span class="check-indicator"></span>
                            </label>
                                </div>
                            </div>
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
                               <!-- <div id="dZUpload" class="dropzone"></div>-->
                                <input type="file" class="form-control" name="gallery" id="gallery" wire:model="gallery">
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
                                        <select id="select-country" wire:model="country">
                                    <option value="">Select property location</option>
                                     @foreach($locations as $location)
                                             <option value="{{ $location->id }}">{{ $location->neighborhood }}</option>
                                     @endforeach
                                 </select>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-12 end -->
                           <!-- <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="address">Address*</label>
                                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter your property address" required wire:model="address">
                                </div>
                            </div>
                            <!-- .col-md-4 end --
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="select-country">Country</label>
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select id="select-country" wire:model="country">
                                    <option value="kimbu">Select property country</option>
                                    <option value="thika">Select property country</option>
                                 </select>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-4 end --
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input class="form-control" name="city" id="city" wire:model="city">
                                </div>
                            </div>
                            <!-- .col-md-4 end --
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input type="text" class="form-control" name="state" id="state" wire:model="state">
                                </div>
                            </div>
                            <!-- .col-md-4 end --
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Zip/Postal-code">Zip/Postal Code</label>
                                    <input type="text" class="form-control" name="Zip/Postal-code" id="Zip/Postal-code" wire:model="zipcode">
                                </div>
                            </div>
                            <!-- .col-md-4 end --
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="neighborhood">Neighborhood</label>
                                    <input type="text" class="form-control" name="neighborhood" id="neighborhood" wire:model="neighborhood ">
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
                    <input type="submit" value="Save Edits" name="submit" class="btn btn--primary">
                </form>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
</section>
<!-- #social-profile  end -->