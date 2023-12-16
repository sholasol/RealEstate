@extends('layouts.admin')

@section('content')

<div id="main-wrapper">
    <!-- Breadcrumb Start -->
    <!--================================-->
    <div class="pageheader pd-t-25 pd-b-35">
        <div class="pd-t-5 pd-b-5">
            <h1 class="pd-0 mg-0 tx-20">Create Types</h1>
        </div>
        <div class="breadcrumb pd-0 mg-0">
            <a class="breadcrumb-item" href=""><i class="icon ion-ios-home-outline"></i>
                Dashboard</a>
            <span class="breadcrumb-item active">Create Types</span>
        </div>
    </div>
    <!--/ Breadcrumb End -->
    <div class="row clearfix">
        <!-- Property types-->
        <!--================================-->
        <div class="col-lg-12">
            <div class="card mg-b-20">
                <div class="card-header">
                    <h4 class="card-header-title">
                        Edit Property Types
                    </h4>
                    <div class="card-header-btn">
                        <a href="{{ url('admin/create_type') }}" class="fa fa-plus-circle text-primary"> Create Type
                        </a>
                    </div>
                </div>
                <div class="card-body pd-0 collapse show" id="latestProjects">
                    <form method="post" action="{{ url('updatePropertyType') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class=" card-body collapse show" id="collapse2">
                            <div class="form-layout form-layout-2">
                                <div class="row no-gutters">
                                    <input type="hidden" name="id" value="{{ $type->id}}">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label active">Type Name: <span
                                                    class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="name"
                                                placeholder="Enter Type Name" value="{{ $type->type_name}}">
                                            <p class="text-danger">{{$errors->first('name')}}
                                            </p>
                                        </div>

                                    </div>
                                    <!-- col-4 -->
                                    <div class="col-md-6 mg-t--1 mg-md-t-0">
                                        <div class="form-group mg-md-l--1">
                                            <label class="form-control-label active">Type Icon: <span
                                                    class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="icon"
                                                placeholder="Enter Icon Name" value="{{ $type->type_icon}}">
                                            <p class="text-danger">{{$errors->first('icon')}}
                                            </p>
                                        </div>

                                    </div>




                                    <!-- row -->
                                    <div class="form-layout-footer bd pd-20 bd-t-0">
                                        <button type="submit" class="btn btn-custom-primary">Update Type</button>
                                        <button type="rest" class="btn btn-secondary">Reset</button>
                                    </div>
                                    <!-- form-group -->
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <!--/ Property types End -->
    </div>
</div>
@endsection