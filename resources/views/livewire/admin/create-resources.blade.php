@if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                        @endif
<div class="clearfix"></div>
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
                                                    <label for="pdf"> Pdf</label>
                                                    <input type="file" class="form-control" wire:model="pdf">
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-group">
                                                    <label for="partner-cover">Cover Image</label>
                                                    <input type="file" class="form-control" wire:model="coverimg">
                                                    @if($coverimg)
                                                    <img src="{{ $coverimg->temporaryUrl() }}" width="120" />
                                                    @endif
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

                                        </div>
                                        <!-- .row end -->
                                    </div>
                                    <!-- .add-input end -->
                                </div>
                                <!-- .form-box end -->
                                <button type="button" wire:click.prevent="store()" class="btn btn-info rounded-pill waves-effect waves-light">Save Resources</button>
                            </form>
                                