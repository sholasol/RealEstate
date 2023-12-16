@extends('layouts.admin')

@section('content')

<div id="main-wrapper">
    <!-- Breadcrumb Start -->
    <!--================================-->
    <div class="pageheader pd-t-25 pd-b-35">
        <div class="pd-t-5 pd-b-5">
            <h1 class="pd-0 mg-0 tx-20">Property Types</h1>
        </div>
        <div class="breadcrumb pd-0 mg-0">
            <a class="breadcrumb-item" href=""><i class="icon ion-ios-home-outline"></i>
                Dashboard</a>
            <span class="breadcrumb-item active">Property Types</span>
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
                        Property Types
                    </h4>
                    <div class="card-header-btn">
                        <a href="{{ url('admin/create_type') }}" class="fa fa-plus-circle text-primary"> Create Type
                        </a>
                    </div>
                </div>
                <div class="card-body pd-0 collapse show" id="latestProjects">
                    <div class="table-responsive">
                        <table class="table table-hover mg-b-0">
                            <thead class="tx-10 tx-uppercase">
                                <tr>
                                    <th width='5%'>No</th>
                                    <th>Type Name</th>
                                    <th>Project Icon</th>
                                    <th class="tx-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($types as $key => $type)
                                <tr>
                                    <td><span>{{$key + 1}}</span></td>
                                    <td><a href="" class="text-inherit">{{$type->type_name}}</a></td>
                                    <td>{{$type->type_icon}}</td>
                                    <td class="text-right"> <a href="{{ route('admin.edit_type', $type->id) }}" class="btn btn-label-primary btn-sm mg-y-5"><i class="fa fa-pencil"></i>
                                            Edit</a>
                                        <a id="delete" href="{{ route('admin.delete_type', $type->id) }}" class="btn btn-label-danger btn-sm mg-y-5"><i class="fa fa-trash"></i>
                                            Delete</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">No property type found. </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Property types End -->
    </div>
</div>
@endsection