<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
    
                                       <div class="button-list mb-2" style="float: right !important">
                                            <a href="/admin/titles" type="button" class="btn btn-outline-primary waves-effect waves-light">All Titles</a>
                                            <a href="/admin/add-title" type="button" class="btn btn-outline-success waves-effect waves-light">Add Title</a>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($pagetitle as $titles )
                                                    <tr>
                                                        <td>{{ $titles->id }}</td>
                                                        <td>{{ $titles->title }}</td>
                                                        @if ($titles->hide == 'active')
                                                        <td><span class="btn--success">{{ $titles->hide }}</span></td>
                                                        @else
                                                        <td><span class="btn--danger">{{ $titles->hide }}</span></td>
                                                        @endif

                                                        <td>
                                                            @if ($titles->hide == 'Active')
                                                            <a href="#" onclick="confirm('Ara you sure, You want to deactivate this section') || event.stopImmediatePropagation();" wire:click.prevent="deactivate({{ $titles->id }})" style="margin-left: 10px"><i class="fa fa-power-off fa-1x text-danger"></i></a>
                                                            @else
                                                            <a href="#" onclick="confirm('Ara you sure, You want to activate this section') || event.stopImmediatePropagation();" wire:click.prevent="updateSetting({{ $titles->id }})" style="margin-left: 10px"><i class="fa fa-power-off fa-1x text-success"></i></a>
                                                            @endif
                                                            <a href="{{ route('admin.edititles',['title'=>$titles->title]) }}" style="margin-left: 10px"><i class="fa fa-edit fa-1x text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
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