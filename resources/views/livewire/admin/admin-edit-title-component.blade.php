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
                            <h1>Edit Page Title</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Edit Page Title</li>
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
            <div class="col-xs-12 col-sm-12 col-md-12 text-right mt-0">
            <a href="/admin/titles" class="btn btn--primary" style="margin-bottom: 15px;">All page Titles</a>
            </div>
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
                                         <label for="category-name">Page Name</label>
                                        <input type="text" class="form-control" placeholder="Enter title" wire:model="title"/>
                                        @error('title') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                               <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="select-status">Page Podition</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select id="select-status"  wire:model="podition">
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
                               <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="select-status">Page Status</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select id="select-status"  wire:model="hide">
                                                <option value="sale">Select status</option>
                                        <option value="Active">On</option>
                                        <option value="Inactive">off</option>
                                    </select>
                                     @error('hide') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
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
                    <button type="button" wire:click.prevent="pageTitles()" class="btn btn--primary">Update Page Title</button>
                </form>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
</section>
</div>