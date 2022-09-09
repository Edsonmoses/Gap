<div>
     <section id="user-profile" class="user-profile">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                            @livewire('admin.admin-side-menu-component')
                    </div>
                    <!-- .col-md-4 -->
                    <div class="col-xs-12 col-sm-12 col-md-8">
                          @if (session()->has('message'))
                                    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3 mt-3"
                                        role="alert">
                                        <div class="flex">
                                            <div>
                                                <p class="text-sm">{{ session('message') }}</p>
                                            </div>
                                        </div>
                                    </div>
                            @endif
            
                    @if($isModalOpen)
                    <button wire:click="closeModalPopover()"
                                    class="btn btn-primary">
                            All Cars
                        </button>
                    @include('livewire.admin.create-cars')
                    @elseif($editModalOpen)

                    <button wire:click="closeModalPopedit()"
                            class="btn btn-primary">
                            All Cars
                        </button>
                        <button wire:click="create()"
                            class="btn btn-success mr-3">
                            Create Car
                        </button>
                                @include('livewire.admin.update')
                        @else
                        <button wire:click="create()"
                            class="btn btn-success">
                            Create Car
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
                                <td>{{$car->name}}</td>
                                <td>{{$car->category_id}}</td>
                                <td>{{$car->created_at}}</td>
                                <td>
                                    <a href="{{ route('admin.editourcars',['slug'=>$car->slug]) }}"><i  class="fa fa-edit fa-1x"></i></a>
                                    <a href="#" onclick="confirm('Ara you sure, You want to delete this vector') || event.stopImmediatePropagation()" wire:click.prevent="deleteProperty({{ $car->id }})" style="margin:0 10px 0 10px"><i class="fa fa-trash fa-1x text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                 @endif
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
        </section>
</div>
