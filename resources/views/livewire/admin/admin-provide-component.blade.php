<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
    
                                       <div class="button-list mb-2" style="float: right !important">
                                            <a href="/admin/provide" type="button" class="btn btn-outline-primary waves-effect waves-light">All Provide</a>
                                            <a href="/admin/add-provide" type="button" class="btn btn-outline-success waves-effect waves-light">Add Provide</a>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="table-responsive">
                                             <table class="table table-striped">
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
                                                    @foreach ($pages as $page)
                                                    <tr>
                                                        <td>{{$page->id}}</td>
                                                        <td><img src="{{ asset('assets/user/assets/images/features/icons') }}/{{ $page->icon }}" width="60" /></td>
                                                        <td>{{$page->name}}</td>
                                                        <td>{{$page->category_id}}</td>
                                                        <td>{{$page->created_at}}</td>
                                                        <td>
                                                            <a href="{{ route('admin.editprovide',['slug'=>$page->slug]) }}"><i class="fa fa-edit fa-1x"></i></a>
                                                            <a href="#" onclick="confirm('Ara you sure, You want to delete this vector') || event.stopImmediatePropagation()" wire:click.prevent="deleteProperty({{ $page->id }})" style="margin:0 10px 0 10px"><i class="fa fa-trash fa-1x text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{ $pages->links()}}
                                        </div>
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