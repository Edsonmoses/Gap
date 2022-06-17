<div>
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
    <div class="bg-section">
        <img src="{{asset('assets/user/assets/images/page-titles')}}/{{ $cover }}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>Edit Agent</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Edit Agent</li>
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
                <form class="mb-0" wire:ignore.self>
                    <div class="form-box">
                        <div class="row">
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="address">Name</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter your title" wire:model="title" wire:keyup="generateslug"/>
                                     @error('title') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="select-country">Slug</label>
                                    <input class="form-control" name="slug" id="slug"  placeholder="Enter your slug" wire:model="slug">
                                     @error('slug') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                             <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="select-country">Position</label>
                                    <input class="form-control" name="position" id="position" placeholder="Enter your position" wire:model="position">
                                     @error('position') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                             <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="city">Image</label>
                                   <input type="file" class="form-control" wire:model="newimage">
                                        @if($newimage)
                                            <img src="{{ $newimage->temporaryUrl() }}" width="120"/>
                                        @else
                                          <img src="{{asset('assets/user/assets/images/agents/grid')}}/{{ $image }}" width="120"/>
                                        @endif
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="cover">Cover</label>
                                   <input type="file" class="form-control" wire:model="newcover">
                                        @if($newcover)
                                            <img src="{{ $newcover->temporaryUrl() }}" width="120"/>
                                       @else
                                          <img src="{{asset('assets/user/assets/images/page-titles')}}/{{ $cover }}" width="120"/>
                                        @endif
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
                                    <option value="1">Approved</option>
                                    <option value="0">Pending</option>
                                </select>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="details">Details</label>
                                   <textarea class="form-control" name="details" id="details" rows="2" wire:model="details"></textarea>
                                </div>
                            </div>
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="address">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Enter your facebook" wire:model="facebook"/>
                                     @error('facebook') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="select-country">Twitter</label>
                                    <input class="form-control" name="twitter" id="twitter" placeholder="Enter your twitter" wire:model="twitter"/>
                                     @error('twitter') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                             <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="select-country">Linkedin</label>
                                    <input class="form-control" name="linkedin" id="linkedin" placeholder="Enter your linkedin" wire:model="linkedin">
                                     @error('linkedin') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                             <!-- .col-md-4 end -->
                             <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="address">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your phone" wire:model="phone"/>
                                     @error('phone') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="select-country">Mobile</label>
                                    <input class="form-control" name="mobile" id="mobile" placeholder="Enter your mobile" wire:model="mobile"/>
                                     @error('mobile') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                             <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="select-country">Email</label>
                                    <input class="form-control" name="email" id="email" placeholder="Enter your email" wire:model="email">
                                     @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                             <!-- .col-md-4 end -->
                             <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="select-country">Website</label>
                                    <input class="form-control" name="website" id="website" placeholder="Enter your website" wire:model="website">
                                     @error('website') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                             <!-- .col-md-4 end -->
                             <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="select-status">Property</label>
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select id="select-status"  wire:model="property_id">
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
                    <input type="submit" value="Save Agent" name="submit" wire:click.prevent="storeAgent()" class="btn btn--primary">
                </form>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
</section>
</div>