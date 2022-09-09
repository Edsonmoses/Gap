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
                            <h1>Add Category</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Add Category</li>
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
                    <!-- .form-box end -->
                    <div class="form-box">
                        <div class=" add-input">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                         <label for="category-name">Category Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Name" wire:model="name" wire:keyup="generateslug">
                                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                         <label for="category-slug">Category Slug</label>
                                        <input type="text" class="form-control" wire:model="slug" placeholder="Enter Slug">
                                        @error('slug') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                         <label for="category-image">Category Image</label>
                                        <input type="file" class="form-control" wire:model="image">
                                        @if($image)
                                            <img src="{{ $image->temporaryUrl() }}" width="120"/>
                                        @endif
                                    </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                         <label for="category-cover">Category Cover Image</label>
                                        <input type="file" class="form-control" wire:model="cover">
                                        @if($cover)
                                            <img src="{{ $cover->temporaryUrl() }}" width="120"/>
                                        @endif
                                    </div>
                                </div>
                
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .add-input end -->
                    </div>
                    <!-- .form-box end -->
                    <button type="button" wire:click.prevent="storeCategory()" class="btn btn--primary">Save Category</button>
                </form>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
</section>
</div>