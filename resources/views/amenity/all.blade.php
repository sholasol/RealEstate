@extends('layouts.admin')

@section('content')

<div id="main-wrapper">
    <!-- Breadcrumb Start -->
    <!--================================-->
    <div class="pageheader pd-t-25 pd-b-35">
        <div class="pd-t-5 pd-b-5">
            <h1 class="pd-0 mg-0 tx-20">Amenities</h1>
        </div>
        <div class="breadcrumb pd-0 mg-0">
            <a class="breadcrumb-item" href=""><i class="icon ion-ios-home-outline"></i>
                Dashboard</a>
            <span class="breadcrumb-item active">Amenities </span>
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
                        Amenities
                    </h4>
                    <div class="card-header-btn">
                        <a href="#" data-toggle="modal" data-target="#amenity" class="fa fa-plus-circle text-primary">
                            Create
                            Amenity
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
                                    <th class="tx-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($amenities as $key => $aminity)
                                <tr>
                                    <td><span>{{$key + 1}}</span></td>
                                    <td><a href="" class="text-inherit">{{$aminity->amenity}}</a></td>
                                    <td class="text-right"> <a href="#" data-toggle="modal" data-target="#amenityUpd{{$aminity->id}}" class="btn btn-label-primary btn-sm mg-y-5"><i class="fa fa-pencil"></i>
                                            Edit</a>
                                        <a id="delete" href="{{ route('amenity.delete', $aminity->id) }}" class="btn btn-label-danger btn-sm mg-y-5"><i class="fa fa-trash"></i>
                                            Delete</a>
                                    </td>
                                </tr>





                                <div class="modal" id="amenityUpd{{$aminity->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel_1" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel_1">Amenity </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                                                </button>
                                            </div>
                                            <form method="post" action="{{ url('updateAmenity') }}" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="modal-body">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-12">
                                                            <input class="form-control" type="hidden" name="id" value="{{$aminity->id}}">
                                                            <div class="form-group">
                                                                <label class="form-control-label active">Amenity: <span class="tx-danger">*</span></label>
                                                                <input class="form-control" type="text" name="amenity" placeholder="Enter Amenity" value="{{$aminity->amenity}}">
                                                                <p class="text-danger">{{$errors->first('amenity')}}
                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update
                                                        Amenity</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>









                                @empty
                                <tr>
                                    <td colspan="4">No Amenity found. </td>
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

<div class="modal" id="amenity" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel_1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel_1">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                </button>
            </div>
            <form method="post" action="{{ url('createAmenity') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label active">Amenity: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="amenity" placeholder="Enter Amenity" value="{{ old('amenity') }}">
                                <p class="text-danger">{{$errors->first('amenity')}}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create Amenity</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection