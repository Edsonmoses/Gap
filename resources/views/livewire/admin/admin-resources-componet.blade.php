<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="clearfix"></div>
                                         @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                        @endif
                                            @if($isModalOpen)
                                            <button wire:click="closeModalPopover()" class="btn btn-outline-primary waves-effect waves-light" style="float: right">
                                                All Resources
                                            </button>
                                            @include('livewire.admin.create-resources')
                                            @elseif($editModalOpen)

                                            <button wire:click="closeModalPopedit()" class="btn btn-outline-primary waves-effect waves-light" style="float: right">
                                                All Resources
                                            </button>
                                            <button wire:click="create()" class="btn btn-outline-success waves-effect waves-light mr-3"  style="float: right">
                                                Create Resource
                                            </button>
                                            @include('livewire.admin.update')
                                            @else
                                            <button wire:click="create()" class="btn btn-outline-success waves-effect waves-light" style="float: right">
                                                Create Resource
                                            </button>
                                            <table class="table table-striped mt-10">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Status</th>
                                                        <th>Date Created</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($resources as $resource)
                                                    <tr>
                                                        <td>{{$resource->id}}</td>
                                                        <td><img src="{{ asset('assets/user/assets/images/resources') }}/{{ $resource->coverimg }}" width="60" /></td>
                                                        <td>{{$resource->name}}</td>
                                                        <td>{{$resource->category_id}}</td>
                                                        <td>{{$resource->created_at}}</td>
                                                        <td>
                                                            <a href="{{ route('admin.editresources',['slug'=>$resource->slug]) }}"><i class="fa fa-edit fa-1x"></i></a>
                                                            <a href="#" onclick="confirm('Ara you sure, You want to delete this vector') || event.stopImmediatePropagation()" wire:click.prevent="deleteProperty({{ $resource->id }})" style="margin:0 10px 0 10px"><i class="fa fa-trash fa-1x text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            @endif
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