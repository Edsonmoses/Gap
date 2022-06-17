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
                            <th>Position</th>
                            <th>Date Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agents as $agent)
                            <tr>
                                <td>{{$agent->id}}</td>
                                <td><img src="{{ asset('assets/user/assets/images/agents/grid') }}/{{ $agent->image }}" width="60"/></td>
                                <td>{{$agent->title}}</td>
                                <td>{{$agent->position}}</td>
                                <td>{{$agent->created_at}}</td>
                                <td>
                                    <a href="{{ route('admin.editagent',['slug'=>$agent->slug]) }}"><i  class="fa fa-edit fa-1x"></i></a>
                                    <a href="#" onclick="confirm('Ara you sure, You want to delete this agent') || event.stopImmediatePropagation()" wire:click.prevent="deleteAgent({{ $agent->id }})" style="margin:0 10px 0 10px"><i class="fa fa-trash fa-1x text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $agents->links()}}
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
        </section>
</div>
