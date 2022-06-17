<div id="page-title">
 <section  class="page-title bg-overlay bg-overlay-dark2">
    <div class="bg-section">
        <img src="{{asset('assets/user/assets/images/page-titles/1.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>Blogs</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Blogs</li>
                        </ol>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- .title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->
    <section id="add-property" class="add-property">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text-right mt-0">
            <a href="/admin/add-post" class="btn btn--primary" style="margin-bottom: 15px;">Add Post</a>
            </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                      @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                    <form class="mb-0 mt-3">
                        <div class="form-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Date created</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($posts as $post )
                                            <tr>
                                                <td>{{ $post->id }}</td>
                                                <td>{{ $post->name }}</td>
                                                <td><span class="btn--success">{{ $post->created_at }}</span></td>
        
                                            <td>
                                                <a href="#" onclick="confirm('Ara you sure, You want to delete this post') || event.stopImmediatePropagation();" wire:click.prevent="deleteFaq({{ $post->id }})" style="margin-left: 10px"><i class="fa fa-trash fa-1x text-danger"></i></a>
                                                 <a href="{{ route('admin.editfaq',['slug'=>$post->slug]) }}" style="margin-left: 10px"><i class="fa fa-edit fa-1x text-info"></i></a>
                                            </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- .col-md-12 end -->
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .form-box end -->
                    </form>
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
    </section>
    <!-- #social-profile  end -->
</div>
@if (Session::has('message'))
    <script>
        swal("Great Job","{!! Session::get('message') !!}","success"{
            button:"Ok"
        });
    </script>
@endif