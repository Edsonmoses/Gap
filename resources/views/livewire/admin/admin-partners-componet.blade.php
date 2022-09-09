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
                                    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
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
                            All Partners
                        </button>
                    @include('livewire.admin.create-partners')
                    @elseif($editModalOpen)

                    <button wire:click="closeModalPopedit()"
                            class="btn btn-primary">
                            All Partners
                        </button>
                        <button wire:click="create()"
                            class="btn btn-success mr-3">
                            Create Partner
                        </button>
                                @include('livewire.admin.update')
                        @else
                        <button wire:click="create()"
                            class="btn btn-success">
                            Create Partner
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
                        @foreach ($partners as $partner)
                            <tr>
                                <td>{{$partner->id}}</td>
                                <td><img src="{{asset('assets/user/images/partners')}}/{{ $partner->image }}" width="60"/></td>
                                <td>{{$partner->name}}</td>
                                <td>{{$partner->category_id}}</td>
                                <td>{{$partner->created_at}}</td>
                                <td>
                                    <a href="{{ route('admin.editpartners',['slug'=>$partner->slug]) }}"><i  class="fa fa-edit fa-1x"></i></a>
                                    <a href="#" onclick="confirm('Ara you sure, You want to delete this vector') || event.stopImmediatePropagation()" wire:click.prevent="deleteProperty({{ $partner->id }})" style="margin:0 10px 0 10px"><i class="fa fa-trash fa-1x text-danger"></i></a>
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
