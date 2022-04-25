
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
    <div class="bg-section">
        <img src="{{asset('assets/user/assets/images/page-titles/1.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>Add Home</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Add Home</li>
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
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <form class="mb-0">
                        <div class="form-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Home Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($homes as $setting )
                                            <tr>
                                                <td>{{ $setting->id }}</td>
                                                <td>{{ $setting->name }}</td>
                                                @if ($setting->isActive == 'active')
                                                     <td><span class="btn--success">{{ $setting->isActive }}</span></td>
                                                @else
                                                    <td><span class="btn--danger">{{ $setting->isActive }}</span></td>
                                                @endif
        
                                            <td>
                                                @if ($setting->isActive == 'active')
                                                <a href="#" onclick="confirm('Ara you sure, You want to deactivate this slider header') || event.stopImmediatePropagation()" wire:click.prevent="deactivate({{ $setting->id }})" style="margin-left: 10px"><i class="fa fa-power-off fa-1x text-danger"></i></a>
                                                @else
                                                <a href="#" onclick="confirm('Ara you sure, You want to activate this slider header') || event.stopImmediatePropagation()" wire:click.prevent="updateSetting({{ $setting->id }})" style="margin-left: 10px"><i class="fa fa-power-off fa-1x text-success"></i></a>
                                                @endif
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
