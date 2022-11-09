<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
    
                                        <h4 class="header-title mt-0 mb-3">Latest Properties</h4>
    
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Property Name</th>
                                                    <th>Location</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Assign</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($properties as $property)
                                                    <tr>
                                                        <td>{{$property->id}}</td>
                                                        <td>{{$property->name}}</td>
                                                        <td>{{$property->locations }}</td>
                                                        <td>{{$property->created_at}}</td>
                                                        <td>
                                                             @if ($property->exclusive == 'exclusive')
                                                               <span class="badge bg-success">Active</span>
                                                            @else
                                                               <span class="badge bg-danger">Pending</span>
                                                            @endif
                                                        </td>
                                                        <td>{{$property->postedby}}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> 
                                </div>
                               
                            </div><!-- end col -->
                             <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
    
                                        <h4 class="header-title mt-0 mb-3">Latest Air BnB</h4>
    
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>BnB Name</th>
                                                    <th>Location</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Assign</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($bnb as $bnb)
                                                    <tr>
                                                        <td>{{$bnb->id}}</td>
                                                        <td>{{$bnb->name}}</td>
                                                        <td>{{$bnb->locations }}</td>
                                                        <td>{{$bnb->created_at}}</td>
                                                        <td>
                                                             @if ($bnb->active == 'Isactive')
                                                               <span class="badge bg-success">Active</span>
                                                            @else
                                                               <span class="badge bg-danger">Pending</span>
                                                            @endif
                                                        </td>
                                                        <td>{{$bnb->postedby}}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> 
                                </div>
                               
                            </div><!-- end col -->
                             <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
    
                                        <h4 class="header-title mt-0 mb-3">Latest Cars</h4>
    
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Image</th>
                                                    <th>Car Name</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Assign</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($cars as $car)
                                                    <tr>
                                                        <td>{{$car->id}}</td>
                                                        <td>
                                                            @php
                                                                    $image = explode(",",$car->image);
                                                                @endphp
                                                                    @if (!empty($image[1]))
                                                            <img src="{{asset('assets/user/assets/images/cars')}}/{{ $image[1] }}" alt="{{ $car->name }}" width="60"/>
                                                            @endif
                                                        </td>
                                                        <td>{{$car->name }}</td>
                                                        <td>{{$car->created_at}}</td>
                                                        <td>
                                                             @if ($car->status == '1')
                                                               <span class="badge bg-success">Active</span>
                                                            @else
                                                               <span class="badge bg-danger">Pending</span>
                                                            @endif
                                                        </td>
                                                        <td>{{$car->postedby}}</td>
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