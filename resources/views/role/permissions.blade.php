@extends('layouts.admin')

@section('content')

<div id="main-wrapper">
    <!-- Breadcrumb Start -->
    <!--================================-->
    <div class="pageheader pd-t-25 pd-b-35">
        <div class="pd-t-5 pd-b-5">
            <h1 class="pd-0 mg-0 tx-20">Permissions</h1>
        </div>
        <div class="breadcrumb pd-0 mg-0">
            <a class="breadcrumb-item" href=""><i class="icon ion-ios-home-outline"></i>
                Dashboard</a>
            <span class="breadcrumb-item active">Permissions</span>
        </div>
    </div>
    <!--/ Breadcrumb End -->
    <div class="row clearfix">
        <!-- Permissions-->
        <!--================================-->
        <div class="col-lg-12">
            <div class="card mg-b-20">
                <div class="card-header">
                    <h4 class="card-header-title">
                        Permissions
                    </h4>
                    <div class="card-header-btn">
                        <a href="#" data-toggle="modal" data-target="#permission"
                            class="fa fa-plus-circle text-primary">
                            Create Permission
                        </a>
                    </div>
                </div>
                <div class="card-body pd-0 collapse show" id="latestProjects">
                    <div class="table-responsive">
                        <table class="table table-hover mg-b-0">
                            <thead class="tx-10 tx-uppercase">
                                <tr>
                                    <th width='5%'>No</th>
                                    <th>Permission Name</th>
                                    <th>Group Name</th>
                                    <th class="tx-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($permissions as $key => $permissions)
                                <tr>
                                    <td><span>{{$key + 1}}</span></td>
                                    <td><a href="" class="text-inherit">{{$permissions->name}}</a></td>
                                    <td>{{$permissions->group_name}}</td>
                                    <td class="text-right"> <a href="{{ route('permission.edit', $permission->id) }}"
                                            class="btn btn-label-primary btn-sm mg-y-5"><i class="fa fa-pencil"></i>
                                            Edit</a>
                                        <a id="delete" href="{{ route('permission.delete', $permission->id) }}"
                                            class="btn btn-label-danger btn-sm mg-y-5"><i class="fa fa-trash"></i>
                                            Delete</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">No permissions found. </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Permissions End -->
    </div>
</div>


<div class="modal" id="permission" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel_1"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel_1">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                </button>
            </div>
            <form method="post" action="{{ url('createPermission') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label active">Permission: <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="permission" placeholder="Enter Permission"
                                    value="{{ old('permission') }}">
                                <p class="text-danger">{{$errors->first('permission')}}
                                </p>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label active">Group Name: <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="group_name" placeholder="Enter Group Name"
                                    value="{{ old('group_name') }}">
                                <p class="text-danger">{{$errors->first('group_name')}}
                                </p>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create Permission</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection