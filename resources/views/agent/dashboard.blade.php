@extends('layouts.admin')
@section('content')

<div id="main-wrapper">
    <!--================================-->
    <!-- Breadcrumb Start -->
    <!--================================-->
    <div class="pageheader pd-t-25 pd-b-35">
        <div class="pd-t-5 pd-b-5">
            <h1 class="pd-0 mg-0 tx-20">Projects Management</h1>
        </div>
        <div class="breadcrumb pd-0 mg-0">
            <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i>
                Home</a>
            <a class="breadcrumb-item" href="">Dashboard</a>
            <span class="breadcrumb-item active">Projects Management</span>
        </div>
    </div>
    <!--/ Breadcrumb End -->
    <!--================================-->
    <!-- Count Card Start -->
    <!--================================-->
    <div class="row clearfix">
        <div class="col-lg-12 col-xl-6">
            <div class="row row-xs">
                <div class="col-sm-6">
                    <div class="card mg-b-20">
                        <div class="card-body">
                            <div class="media d-inline-flex">
                                <div>
                                    <span class="tx-uppercase tx-10 mg-b-10">Growth</span>
                                    <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">
                                        $<span class="counter">2,450</span></h2>
                                </div>
                            </div>
                            <div class="clearfix">
                                <span class="float-left tx-11 tx-gray-500">Achievement</span>
                                <span class="float-right">
                                    <i class="ion-android-arrow-up mr-1 tx-success"></i><span
                                        class="tx-dark">92</span><span class="small mg-b-0">/100</span>
                                </span>
                            </div>
                            <div class="progress ht-3 op-5">
                                <div class="progress-bar bg-primary wd-90p" role="progressbar" aria-valuenow="90"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card mg-b-20">
                        <div class="card-body">
                            <div class="media d-inline-flex">
                                <div>
                                    <span class="tx-uppercase tx-10 mg-b-10">Project</span>
                                    <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">
                                        <span class="counter">2,320</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="clearfix">
                                <span class="float-left tx-11 tx-gray-500">Achievement</span>
                                <span class="float-right">
                                    <i class="ion-android-arrow-up mr-1 tx-success"></i><span
                                        class="tx-dark">95</span><span class="small mg-b-0">/100</span>
                                </span>
                            </div>
                            <div class="progress ht-3 op-5">
                                <div class="progress-bar bg-warning wd-95p" role="progressbar" aria-valuenow="95"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card mg-b-20">
                        <div class="card-body">
                            <div class="media d-inline-flex">
                                <div>
                                    <span class="tx-uppercase tx-10 mg-b-10">Income</span>
                                    <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">
                                        $<span class="counter">9,750</span> </h2>
                                </div>
                            </div>
                            <div class="clearfix">
                                <span class="float-left tx-11 tx-gray-500">Achievement</span>
                                <span class="float-right">
                                    <i class="ion-android-arrow-down mr-1 tx-danger"></i><span
                                        class="tx-dark">81</span><span class="small mg-b-0">/100</span>
                                </span>
                            </div>
                            <div class="progress ht-3 op-5">
                                <div class="progress-bar bg-danger wd-80p" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card mg-b-20">
                        <div class="card-body">
                            <div class="media d-inline-flex">
                                <div>
                                    <span class="tx-uppercase tx-10 mg-b-10">Employers</span>
                                    <h2 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">
                                        <span class="counter">1,250</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="clearfix">
                                <span class="float-lef tx-11 tx-gray-500">Achievement</span>
                                <span class="float-right">
                                    <i class="ion-android-arrow-down mr-1 tx-success"></i><span
                                        class="tx-dark">85</span><span class="small mg-b-0">/100</span>
                                </span>
                            </div>
                            <div class="progress ht-3 op-5">
                                <div class="progress-bar bg-teal wd-85p" role="progressbar" aria-valuenow="85"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card mg-b-20">
                        <div class="card card-body">
                            <div class="d-flex">
                                <span
                                    class="wd-80 ht-80 card-icon-primary d-flex align-items-center justify-content-center rounded hidden-xs"><i
                                        class="ion-ios-speedometer-outline tx-50"></i></span>
                                <div class="mg-l-0 mg-md-l-20">
                                    <h6 class="mg-b-5">Download your projects report.</h6>
                                    <p class="tx-12 mg-b-5">Lorem ipsum sed do eiusmod tempor incididunt
                                        ut labore et dolore. <a href="">Learn More</a></p>
                                    <p class="mg-b-0">
                                        <a href="" class="btn btn-sm btn-label-primary mg-t-5"><i
                                                class="mdi mdi-file-pdf"></i> CSV Formate</a>
                                        <a href="" class="btn btn-sm btn-label-danger mg-t-5"><i
                                                class="mdi mdi-file-pdf"></i> XLM Formate</a>
                                        <a href="" class="btn btn-sm btn-label-success mg-t-5"><i
                                                class="mdi mdi-file-pdf"></i> PDF Formate</a>
                                        <a href="" class="btn btn-sm btn-label-warning mg-t-5"><i
                                                class="mdi mdi-file-pdf"></i> Word Formate</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xl-6">
            <div class="card mg-b-20">
                <div class="card-header">
                    <h4 class="card-header-title">
                        Projects Budget
                    </h4>
                    <div class="card-header-btn">
                        <a href="" data-toggle="collapse" class="btn card-collapse" data-target="#projectsBudget"
                            aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                        <a href="" data-toggle="refresh" class="btn card-refresh"><i
                                class="ion-android-refresh"></i></a>
                        <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                        <a href="" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                    </div>
                </div>
                <div class="card-body pd-y-0 collapse show" id="projectsBudget">
                    <div class="row clearfix">
                        <div
                            class="col-lg-4 col-md-4 col-sm-12 pd-t-20 d-flex align-items-center justify-content-center">
                            <div class="wd-10 ht-10 rounded-circle bd bd-3 bd-info mg-r-10"></div>
                            <div>
                                <span class="tx-uppercase tx-10 mg-b-10">Total Budget</span>
                                <h3 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">
                                    $<span class="counter">25,350</span></h3>
                                <div class="tx-11 d-flex tx-gray-500"><span
                                        class="text-success mr-2 d-flex align-items-center"><i
                                            class="ion-android-arrow-up mr-1"></i>+535%</span>avg. per
                                    month</div>
                            </div>
                        </div>
                        <div
                            class="col-lg-4 col-md-4 col-sm-12 pd-t-20 d-flex align-items-center justify-content-center">
                            <div class="wd-10 ht-10 rounded-circle bd bd-3 bd-info mg-r-10 op-5"></div>
                            <div>
                                <span class="tx-uppercase tx-10 mg-b-10">Total Expense</span>
                                <h3 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">
                                    $<span class="counter">20,830</span></h3>
                                <div class="tx-11 d-flex tx-gray-500"><span
                                        class="text-success mr-2 d-flex align-items-center"><i
                                            class="ion-android-arrow-up mr-1"></i>+230%</span>avg. per
                                    month</div>
                            </div>
                        </div>
                        <div
                            class="col-lg-4 col-md-4 col-sm-12 pd-t-20 d-flex align-items-center justify-content-center">
                            <div class="wd-10 ht-10 rounded-circle bd bd-3 bd-success mg-r-10"></div>
                            <div>
                                <span class="tx-uppercase tx-10 mg-b-10">Total Target</span>
                                <h3 class="tx-20 tx-sm-18 tx-md-24 mb-0 mt-2 mt-sm-0 tx-normal tx-rubik tx-dark">
                                    $<span class="counter">30,360</span></h3>
                                <div class="tx-11 d-flex tx-gray-500"><span
                                        class="text-danger mr-2 d-flex align-items-center"><i
                                            class="ion-android-arrow-down mr-1"></i>-135%</span>avg. per
                                    month</div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div id="projectsBudgetChaart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Count Card End -->
    <div class="row row-xs clearfix">
        <!--================================-->
        <!-- Latest Projects Start-->
        <!--================================-->
        <div class="col-lg-12 col-xl-8">
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
                                    <th>Project Name</th>
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
        <!--/ Latest Projects End -->
        <!--================================-->
        <!-- Project By Country Start-->
        <!--================================-->
        <div class="col-md-6 col-xl-4">
            <div class="card mg-b-20">
                <div class="card-header">
                    <h4 class="card-header-title">
                        Project By Country
                    </h4>
                    <div class="card-header-btn">
                        <a href="" data-toggle="collapse" class="btn card-collapse" data-target="#projectByCountry"
                            aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                        <a href="" data-toggle="refresh" class="btn card-refresh"><i
                                class="ion-android-refresh"></i></a>
                        <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                        <a href="" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                    </div>
                </div>
                <div class="card-body pd-0 collapse show" id="projectByCountry">
                    <div class="table-responsive">
                        <table class="table table-hover mg-b-0">
                            <thead class="tx-10 tx-uppercase">
                                <tr>
                                    <th>Country</th>
                                    <th class="text-right">Clients</th>
                                    <th class="text-right d-none d-md-table-cell w-50">Percentage (%)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><i class="flag-icon flag-icon-us mr-1"></i> en-us</td>
                                    <td class="text-right">735</td>
                                    <td class="d-none d-md-table-cell align-middle">
                                        <div class="progress ht-3 op-5">
                                            <div class="progress-bar bg-success wd-95p" role="progressbar"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"> </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="flag-icon flag-icon-gb mr-1"></i> en-gb</td>
                                    <td class="text-right">223</td>
                                    <td class="d-none d-md-table-cell align-middle">
                                        <div class="progress ht-3 op-5">
                                            <div class="progress-bar bg-info wd-85p" role="progressbar"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="flag-icon flag-icon-fr mr-1"></i> fr-fr</td>
                                    <td class="text-right">181</td>
                                    <td class="d-none d-md-table-cell align-middle">
                                        <div class="progress ht-3 op-5">
                                            <div class="progress-bar bg-danger wd-90p" role="progressbar"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="flag-icon flag-icon-es mr-1"></i> es-es</td>
                                    <td class="text-right">132</td>
                                    <td class="d-none d-md-table-cell align-middle">
                                        <div class="progress ht-3 op-5">
                                            <div class="progress-bar bg-teal wd-75p" role="progressbar"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="flag-icon flag-icon-de mr-1"></i> de-de</td>
                                    <td class="text-right">118</td>
                                    <td class="d-none d-md-table-cell align-middle">
                                        <div class="progress ht-3 op-5">
                                            <div class="progress-bar bg-warning wd-60p" role="progressbar"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="flag-icon flag-icon-bd mr-1"></i> bn-bd</td>
                                    <td class="text-right">302</td>
                                    <td class="d-none d-md-table-cell align-middle">
                                        <div class="progress ht-3 op-5">
                                            <div class="progress-bar bg-indigo wd-75p" role="progressbar"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="flag-icon flag-icon-au mr-1"></i> au-au</td>
                                    <td class="text-right">520</td>
                                    <td class="d-none d-md-table-cell align-middle">
                                        <div class="progress ht-3 op-5">
                                            <div class="progress-bar bg-pink wd-75p" role="progressbar"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Project By Country End -->
        <!--================================-->
        <!-- Employee Status Start-->
        <!--================================-->
        <div class="col-md-6 col-xl-4">
            <div class="card mg-b-20">
                <div class="card-header">
                    <h4 class="card-header-title">
                        Employee Status
                    </h4>
                    <div class="card-header-btn">
                        <a href="" data-toggle="collapse" class="btn card-collapse" data-target="#employeeStatus"
                            aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                        <a href="" data-toggle="refresh" class="btn card-refresh"><i
                                class="ion-android-refresh"></i></a>
                        <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                        <a href="" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                    </div>
                </div>
                <div class="card-body pd-0 collapse show" id="employeeStatus">
                    <div class="table-responsive">
                        <table class="table table-hover mg-b-0">
                            <thead class="tx-10 tx-uppercase">
                                <tr>
                                    <th class="w-1">No</th>
                                    <th>Name</th>
                                    <th class="wd-30p">Level</th>
                                    <th class="tx-right">Experience</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span>01</span></td>
                                    <td><img src="{{ url('public/assets/images/user/user1.png')}}"
                                            class="img-fluid wd-40 ht-40 rounded-circle mr-2" alt="">Maria Grant</td>
                                    <td>
                                        <div class="clearfix">
                                            <div class="float-left"> <strong>67%</strong> </div>
                                        </div>
                                        <div class="progress ht-3 op-5">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 67%"
                                                aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">2+ Year</td>
                                </tr>
                                <tr>
                                    <td><span>02</span></td>
                                    <td><img src="{{ url('public/assets/images/user/user2.png')}}"
                                            class="img-fluid wd-40 ht-40 rounded-circle mr-2" alt="">AB
                                        Mako</td>
                                    <td>
                                        <div class="clearfix">
                                            <div class="float-left"> <strong>77%</strong> </div>
                                        </div>
                                        <div class="progress ht-3 op-5">
                                            <div class="progress-bar bg-cyan" role="progressbar" style="width: 77%"
                                                aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">3+ Year</td>
                                </tr>
                                <tr>
                                    <td><span>03</span></td>
                                    <td><img src="{{ url('public/assets/images/user/user3.png')}}"
                                            class="img-fluid wd-40 ht-40 rounded-circle mr-2" alt="">Pusiz bia</td>
                                    <td>
                                        <div class="clearfix">
                                            <div class="float-left"> <strong>85%</strong> </div>
                                        </div>
                                        <div class="progress ht-3 op-5">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 85%"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">2.5+ Year</td>
                                </tr>
                                <tr>
                                    <td><span>04</span></td>
                                    <td><img src="{{ url('public/assets/images/user/user4.png')}}"
                                            class="img-fluid wd-40 ht-40 rounded-circle mr-2" alt="">Hileri Soli</td>
                                    <td>
                                        <div class="clearfix">
                                            <div class="float-left"> <strong>65%</strong> </div>
                                        </div>
                                        <div class="progress ht-3 op-5">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">1.5+ Year</td>
                                </tr>
                                <tr>
                                    <td><span>05</span></td>
                                    <td><img src="{{ url('public/assets/images/user/user5.png')}}"
                                            class="img-fluid wd-40 ht-40 rounded-circle mr-2" alt="">John Deo</td>
                                    <td>
                                        <div class="clearfix">
                                            <div class="float-left"> <strong>95%</strong> </div>
                                        </div>
                                        <div class="progress ht-3 op-5">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 95%"
                                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">5+ Year</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Employee Status End -->
        <!--================================-->
        <!-- New Users Start-->
        <!--================================-->
        <div class="col-md-6 col-xl-4">
            <div class="card mg-b-20">
                <div class="card-header">
                    <h4 class="card-header-title">
                        New Users
                    </h4>
                    <div class="card-header-btn">
                        <a href="" data-toggle="collapse" class="btn card-collapse" data-target="#newUsers"
                            aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                        <a href="" data-toggle="refresh" class="btn card-refresh"><i
                                class="ion-android-refresh"></i></a>
                        <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                        <a href="" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                    </div>
                </div>
                <div class="card-body pd-0 collapse show" id="newUsers">
                    <div class="table-responsive">
                        <table class="table table-hover mg-0">
                            <thead class="tx-10 tx-uppercase">
                                <tr>
                                    <th>User</th>
                                    <th class="tx-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="d-flex pd-y-15-force">
                                        <div class="avatar avatar-30 mr-2">
                                            <img src="{{ url('public/assets/images/user/user5.png')}}"
                                                class="img-fluid wd-40 ht-40 rounded-circle" alt="">
                                        </div>
                                        <div class="d-block">
                                            <a href="" class="my-0 mt-1 tx-13">Stanley C. Owens</a>
                                            <p class="tx-12 mg-b-0 tx-gray-500 tx-normal">New Jersey, UK
                                            </p>
                                        </div>
                                    </td>
                                    <td class="tx-right align-middle">
                                        <a href="" class="btn btn-sm btn-label-primary">Contact</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="d-flex pd-y-10-force">
                                        <div class="avatar avatar-30 mr-2">
                                            <img src="{{ url('public/assets/images/user/user4.png')}}"
                                                class="img-fluid wd-40 ht-40 rounded-circle" alt="">
                                        </div>
                                        <div class="d-block">
                                            <a href="" class="my-0 mt-1 tx-13">John Doe</a>
                                            <p class="tx-12 mg-b-0 tx-gray-500 tx-normal">New Jersey, UK
                                            </p>
                                        </div>
                                    </td>
                                    <td class="tx-right align-middle">
                                        <a href="" class="btn btn-sm btn-label-warning">Contact</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="d-flex pd-y-10-force">
                                        <div class="avatar avatar-30 mr-2">
                                            <img src="{{ url('public/assets/images/user/user3.png')}}"
                                                class="img-fluid wd-40 ht-40 rounded-circle" alt="">
                                        </div>
                                        <div class="d-block">
                                            <a href="" class="my-0 mt-1 tx-13">Stanley Owens</a>
                                            <p class="tx-12 mg-b-0 tx-gray-500 tx-normal">New Jersey, UK
                                            </p>
                                        </div>
                                    </td>
                                    <td class="tx-right align-middle">
                                        <a href="" class="btn btn-sm btn-label-success">Contact</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="d-flex pd-y-15-force">
                                        <div class="avatar avatar-30 mr-2">
                                            <img src="{{ url('public/assets/images/user/user2.png')}}"
                                                class="img-fluid wd-40 ht-40 rounded-circle" alt="">
                                        </div>
                                        <div class="d-block">
                                            <a href="" class="my-0 mt-1 tx-13">Adam L. Easter</a>
                                            <p class="tx-12 mg-b-0 tx-gray-500 tx-normal">New Jersey, UK
                                            </p>
                                        </div>
                                    </td>
                                    <td class="tx-right align-middle">
                                        <a href="" class="btn btn-sm btn-label-danger">Contact</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="d-flex pd-y-10-force">
                                        <div class="avatar avatar-30 mr-2">
                                            <img src="{{ url('public/assets/images/user/user1.png')}}"
                                                class="img-fluid wd-40 ht-40 rounded-circle" alt="">
                                        </div>
                                        <div class="d-block">
                                            <a href="" class="my-0 mt-1 tx-13">Jeffery M. Jensen</a>
                                            <p class="tx-12 mg-b-0 tx-gray-500 tx-normal">New Jersey, UK
                                            </p>
                                        </div>
                                    </td>
                                    <td class="tx-right align-middle">
                                        <a href="" class="btn btn-sm btn-label-success">Contact</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/ New Users End -->
        <!--================================-->
        <!-- Transaction History Start-->
        <!--================================-->
        <div class="col-md-6 col-xl-4">
            <div class="card mg-b-20">
                <div class="card-header">
                    <h4 class="card-header-title">
                        Transaction History
                    </h4>
                    <div class="card-header-btn">
                        <a href="" data-toggle="collapse" class="btn card-collapse" data-target="#transactionHistory"
                            aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                        <a href="" data-toggle="refresh" class="btn card-refresh"><i
                                class="ion-android-refresh"></i></a>
                        <a href="" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                        <a href="" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
                    </div>
                </div>
                <div class="collapse show" id="transactionHistory">
                    <ul class="list-group list-group-flush tx-13">
                        <li class="list-group-item d-flex pd-sm-x-20">
                            <div class="d-none d-sm-block"><span
                                    class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-success"><i
                                        class="icon ion-checkmark"></i></span></div>
                            <div class="pd-sm-l-10">
                                <p class="tx-dark mg-b-0">Payment from <a href=""
                                        class="tx-dark mg-b-0 tx-semibold">#985632</a></p>
                                <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #857423</span>
                            </div>
                            <div class="mg-l-auto text-right">
                                <p class="mg-b-0 tx-rubik tx-dark">+$450<small class="tx-10">.50</small>
                                </p>
                                <span class="tx-12 tx-success mg-b-0">Completed</span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex pd-sm-x-20">
                            <div class="d-none d-sm-block"><span
                                    class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-success"><i
                                        class="icon ion-checkmark"></i></span></div>
                            <div class="pd-sm-l-10">
                                <p class="tx-dark mg-b-0">Process refund to <a href=""
                                        class="tx-dark mg-b-0 tx-semibold">#458762</a></p>
                                <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #354155</span>
                            </div>
                            <div class="mg-l-auto text-right">
                                <p class="mg-b-0 tx-rubik tx-dark">+$180<small class="tx-10">.50</small>
                                </p>
                                <span class="tx-12 tx-success mg-b-0">Completed</span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex pd-sm-x-20">
                            <div class="d-none d-sm-block"><span
                                    class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-warning"><i
                                        class="icon ion-shuffle"></i></span></div>
                            <div class="pd-sm-l-10">
                                <p class="tx-dark mg-b-0">Process delivery to <a href=""
                                        class="tx-dark mg-b-0 tx-semibold">#698524</a></p>
                                <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #452356</span>
                            </div>
                            <div class="mg-l-auto text-right">
                                <p class="mg-b-0 tx-rubik tx-dark">5 Items</p>
                                <span class="tx-12 tx-warning mg-b-0">For pickup</span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex pd-sm-x-20">
                            <div class="d-none d-sm-block"><span
                                    class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-success"><i
                                        class="icon ion-checkmark"></i></span></div>
                            <div class="pd-sm-l-10">
                                <p class="tx-dark mg-b-0">Payment from <a href=""
                                        class="tx-dark mg-b-0 tx-semibold">#365845</a></p>
                                <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #748562</span>
                            </div>
                            <div class="mg-l-auto text-right">
                                <p class="mg-b-0 tx-rubik tx-dark">+$129<small class="tx-10">.50</small>
                                </p>
                                <span class="tx-12 tx-success mg-b-0">Completed</span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex pd-sm-x-20">
                            <div class="d-none d-sm-block"><span
                                    class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-danger"><i
                                        class="icon ion-close"></i></span></div>
                            <div class="pd-sm-l-10">
                                <p class="tx-dark mg-b-0">Payment failed from <a href=""
                                        class="tx-dark mg-b-0 tx-semibold">#475821</a></p>
                                <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #457771</span>
                            </div>
                            <div class="mg-l-auto text-right">
                                <p class="mg-b-0 tx-rubik tx-dark">-$150<small class="tx-10">.50</small>
                                </p>
                                <span class="tx-12 tx-danger mg-b-0">Declined</span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex pd-sm-x-20">
                            <div class="d-none d-sm-block"><span
                                    class="wd-40 ht-40 mg-r-10 d-flex align-items-center justify-content-center rounded card-icon-success"><i
                                        class="icon ion-checkmark"></i></span></div>
                            <div class="pd-sm-l-10">
                                <p class="tx-dark mg-b-0">Payment from <a href=""
                                        class="tx-dark mg-b-0 tx-semibold">#365845</a></p>
                                <span class="tx-12 mg-b-0 tx-gray-500">Customar ID: #748562</span>
                            </div>
                            <div class="mg-l-auto text-right">
                                <p class="mg-b-0 tx-rubik tx-dark">+$129<small class="tx-10">.50</small>
                                </p>
                                <span class="tx-12 tx-success mg-b-0">Completed</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Transaction History End -->
    </div>
</div>
@endsection