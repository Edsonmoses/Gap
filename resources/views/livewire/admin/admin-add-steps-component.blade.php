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
                            <h1>Add Steps</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Add Steps</li>
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
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your title" required wire:model="name" wire:keyup="generateslug"/>
                                     @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="select-country">Slug</label>
                                    <input class="form-control" name="slug" id="slug" wire:model="slug">
                                     @error('slug') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="city">Icon</label>
                                     <input type="file" class="form-control" wire:model="icon">
                                        @if($icon)
                                            <img src="{{ $icon->temporaryUrl() }}" width="120"/>
                                        @endif
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
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
                    <input type="submit" value="Save Steps" name="submit" wire:click.prevent="storeSteps()" class="btn btn--primary">
                </form>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
</section>
</div>
