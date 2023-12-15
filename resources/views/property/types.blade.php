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
                        <a href="" data-toggle="collapse" class="btn card-collapse" data-target="#latestProjects"
                            aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                        <a href="" data-toggle="refresh" class="btn card-refresh"><i
                                class="ion-android-refresh"></i></a>
                        <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                        <a href="" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                    </div>
                </div>
                <div class="card-body pd-0 collapse show" id="latestProjects">
                    <div class="table-responsive">
                        <table class="table table-hover mg-b-0">
                            <thead class="tx-10 tx-uppercase">
                                <tr>
                                    <th class="w-1">No</th>
                                    <th>Type Name</th>
                                    <th>Project Icon</th>
                                    <th class="tx-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($types as $key => $type)
                                <tr>
                                    <td><span>01</span></td>
                                    <td><a href="" class="text-inherit">#MN67GNF6</a></td>
                                    <td>Maria Grant</td>
                                    <td class="text-right"> <a href="" class="btn btn-label-primary btn-sm mg-y-5"><i
                                                class="fa fa-pencil"></i> Edit</a> <a href=""
                                            class="btn btn-label-success btn-sm mg-y-5"><i class="fa fa-link"></i>
                                            Add</a> <a href="" class="btn btn-label-danger btn-sm mg-y-5"><i
                                                class="fa fa-trash"></i> Delete</a> </td>
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