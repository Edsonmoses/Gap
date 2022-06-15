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
                            <th>Date Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td><img src="{{ asset('assets/user/assets/images/pages') }}/{{ $category->image }}" width="60"/></td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->created_at}}</td>
                                <td>
                                    <a href="{{ route('admin.editcategory',['slug'=>$category->slug]) }}"><i  class="fa fa-edit fa-1x"></i></a>
                                    <a href="#" onclick="confirm('Ara you sure, You want to delete this category') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{ $category->id }})" style="margin:0 10px 0 10px"><i class="fa fa-trash fa-1x text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $categories->links()}}
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
        </section>
</div>
