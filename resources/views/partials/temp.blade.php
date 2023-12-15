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
                        Latest Projects
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
                                    <th>Project Type</th>
                                    <th>Project Lead</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th class="tx-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span>01</span></td>
                                    <td><a href="" class="text-inherit">#MN67GNF6</a></td>
                                    <td>Maria Grant</td>
                                    <td>
                                        <div class="clearfix">
                                            <div class="float-left"> <strong>67%</strong> </div>
                                            <div class="float-right"> <small class="tx-gray-500">Mar 01,
                                                    2018 - Sep 30, 2019</small> </div>
                                        </div>
                                        <div class="progress ht-3 op-5">
                                            <div class="progress-bar bg-cyan" role="progressbar" style="width: 67%"
                                                aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$26,908</td>
                                    <td class="text-right"> <a href="" class="btn btn-label-primary btn-sm mg-y-5"><i
                                                class="fa fa-pencil"></i> Edit</a> <a href=""
                                            class="btn btn-label-success btn-sm mg-y-5"><i class="fa fa-link"></i>
                                            Add</a> <a href="" class="btn btn-label-danger btn-sm mg-y-5"><i
                                                class="fa fa-trash"></i> Delete</a> </td>
                                </tr>
                                <tr>
                                    <td><span>02</span></td>
                                    <td><a href="" class="text-inherit">#4FGB65GN</a></td>
                                    <td>Stewart Bower</td>
                                    <td>
                                        <div class="clearfix">
                                            <div class="float-left"> <strong>87%</strong> </div>
                                            <div class="float-right"> <small class="tx-gray-500">Jun 01,
                                                    2018 - Sep 17, 2019</small> </div>
                                        </div>
                                        <div class="progress ht-3 op-5">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 87%"
                                                aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$15,987</td>
                                    <td class="text-right"> <a href="" class="btn btn-label-primary btn-sm mg-y-5"><i
                                                class="fa fa-pencil"></i> Edit</a> <a href=""
                                            class="btn btn-label-success btn-sm mg-y-5"><i class="fa fa-link"></i>
                                            Add</a> <a href="" class="btn btn-label-danger btn-sm mg-y-5"><i
                                                class="fa fa-trash"></i> Delete</a> </td>
                                </tr>
                                <tr>
                                    <td><span>03</span></td>
                                    <td><a href="" class="text-inherit">#RGB654NH</a></td>
                                    <td>Kevin Gill</td>
                                    <td>
                                        <div class="clearfix">
                                            <div class="float-left"> <strong>17%</strong> </div>
                                            <div class="float-right"> <small class="tx-gray-500">Jun 09,
                                                    2018 - Oct 30, 2019</small> </div>
                                        </div>
                                        <div class="progress ht-3 op-5">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 17%"
                                                aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$12,456</td>
                                    <td class="text-right"> <a href="" class="btn btn-label-primary btn-sm mg-y-5"><i
                                                class="fa fa-pencil"></i> Edit</a> <a href=""
                                            class="btn btn-label-success btn-sm mg-y-5"><i class="fa fa-link"></i>
                                            Add</a> <a href="" class="btn btn-label-danger btn-sm mg-y-5"><i
                                                class="fa fa-trash"></i> Delete</a> </td>
                                </tr>
                                <tr>
                                    <td><span>04</span></td>
                                    <td><a href="" class="text-inherit">#3HBN547R</a></td>
                                    <td>Johnsie Arel</td>
                                    <td>
                                        <div class="clearfix">
                                            <div class="float-left"> <strong>30%</strong> </div>
                                            <div class="float-right"> <small class="tx-gray-500">July
                                                    13, 2018 - Nov 20, 2019</small> </div>
                                        </div>
                                        <div class="progress ht-3 op-5">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 30%"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$17,376</td>
                                    <td class="text-right text-white"> <a href=""
                                            class="btn btn-label-primary btn-sm mg-y-5"><i class="fa fa-pencil"></i>
                                            Edit</a> <a href="" class="btn btn-label-success btn-sm mg-y-5"><i
                                                class="fa fa-link"></i> Add</a> <a href=""
                                            class="btn btn-label-danger btn-sm mg-y-5"><i class="fa fa-trash"></i>
                                            Delete</a> </td>
                                </tr>
                                <tr>
                                    <td><span>05</span></td>
                                    <td><a href="" class="text-inherit">#KR346GSH</a></td>
                                    <td>Wallace Aliff</td>
                                    <td>
                                        <div class="clearfix">
                                            <div class="float-left"> <strong>50%</strong> </div>
                                            <div class="float-right"> <small class="tx-gray-500">Aug 05,
                                                    2018 - Dec 21, 2019</small> </div>
                                        </div>
                                        <div class="progress ht-3 op-5">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$23,876</td>
                                    <td class="text-right"> <a href="" class="btn btn-label-primary btn-sm mg-y-5"><i
                                                class="fa fa-pencil"></i> Edit</a> <a href=""
                                            class="btn btn-label-success btn-sm mg-y-5"><i class="fa fa-link"></i>
                                            Add</a> <a href="" class="btn btn-label-danger btn-sm mg-y-5"><i
                                                class="fa fa-trash"></i> Delete</a> </td>
                                </tr>
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