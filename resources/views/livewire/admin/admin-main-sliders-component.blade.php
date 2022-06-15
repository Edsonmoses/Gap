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
                            <h1>Add Slider</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Add Slider</li>
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
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h4 class="form--title">Slider Description</h4>
                            </div>
                            <!-- .col-md-6 end -->
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Slider Name*</label>
                                    <input type="text" class="form-control" name="name" id="name" wire:model="name"  wire:keyup="generateslug" required>
                                </div>
                            </div>
                            <!-- .col-md-6 end -->
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" name="slug" id="slug" wire:model="slug">
                                </div>
                            </div>
                            <!-- .col-md-6 end -->
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="url">Link to a page or post</label>
                                    <input type="text" class="form-control" name="url" id="url" wire:model="url">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" name="image" id="image" wire:model="image">
                                     @if($image)
                                            <img src="{{ $image->temporaryUrl() }}" width="120"/>
                                        @endif
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .form-box end -->
                    <input type="submit" value="Save Slider" wire:click.prevent="storeSlider()" name="submit" class="btn btn--primary">
                </form>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
</section>
</div>