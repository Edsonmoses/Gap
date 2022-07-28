<div>
     <section id="user-profile" class="user-profile">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                            @livewire('admin.admin-side-menu-component')
                    </div>
                    <!-- .col-md-4 -->
                    <div class="col-xs-12 col-sm-12 col-md-8">
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
                        @foreach ($property as $property)
                            <tr>
                                <td>{{$property->id}}</td>
                                <td><img src="{{ asset('assets/user/assets/images/page-titles') }}/{{ $property->image }}" width="60"/></td>
                                <td>{{$property->name}}</td>
                                <td>{{$property->status}}</td>
                                <td>{{$property->created_at}}</td>
                                <td>
                                    <a href="{{ route('admin.editproperty',['slug'=>$property->slug]) }}"><i  class="fa fa-edit fa-1x"></i></a>
                                    <a href="#" onclick="confirm('Ara you sure, You want to delete this vector') || event.stopImmediatePropagation()" wire:click.prevent="deleteProperty({{ $property->id }})" style="margin:0 10px 0 10px"><i class="fa fa-trash fa-1x text-danger"></i></a>
                                    @if ($property->exclusive == 'exclusive')
                                     <a href="#" onclick="confirm('Ara you sure, You want to remove this property from exclusive section') || event.stopImmediatePropagation()" wire:click.prevent="deactivate({{ $property->id }})" style="margin:0 10px 0 10px"><i class="fa fa-toggle-on h fa-1x text-success"></i></a> 
                                    @else
                                     <a href="#" onclick="confirm('Ara you sure, You want to add this property to exclusive section') || event.stopImmediatePropagation()" wire:click.prevent="activate({{ $property->id }})" style="margin:0 10px 0 10px"><i class="fa fa-toggle-off fa-1x text-danger"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- $property->links() --}}
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
        </section>
</div>
