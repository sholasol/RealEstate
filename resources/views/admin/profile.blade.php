@extends('layouts.admin')

@section('content')


<div id="main-wrapper">
    <div class="page-inner pd-0-force mg-0-force bg-white">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="card bd-l-0-force bd-t-0-force bd-r-0-force">
                    <div class="card-body bg-primary pd-y-50">
                        <div class="row no-gutters">
                            <div class="col-md-6 mg-t-20">
                                <div class="d-flex align-items-center">
                                    <div class="mr-3">
                                        <span class="avatar avatar-lg avatar-online pd-b-20">
                                            <img src="{{  (!empty($data->photo)) ?  url('uploads/'.$data->photo) : url('uploads/no-image.png') }}" class="img-fluid wd-100" alt="">
                                        </span>
                                    </div>
                                    <div class="mg-b-0">
                                        <h5 class="tx-gray-100 tx-15 mg-b-0">{{$data->lastname}}
                                            {{$data->firstname}}
                                        </h5>
                                        <p class="mg-b-10 tx-gray-300">{{$data->username}}</p>
                                        <a href="" class="btn btn-sm btn-warning flex-fill">{{$data->email}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mg-t-10 mg-l-auto">
                                <ul class="list-unstyled tx-gray-100 mb-0">
                                    <!-- <li><i class="ti-target mr-2 font-18"></i> <b>Gender </b>: Meal</li> -->
                                    <li class="mt-2"><i class="ti-mobile mr-2 font-18"></i> <b>Phone </b>:
                                        {{$data->phone}}
                                    </li>
                                    <li class="mt-2"><i class="ti-email mr-2 font-18"></i> <b>Email </b>:
                                        {{$data->email}}
                                    </li>
                                    <li class="mt-2"><i class="ti-map mr-2 font-18"></i> <b>Username</b> :
                                        {{$data->username}}
                                    </li>
                                    <li class="mt-2"><i class="ti-calendar mr-2 font-18"></i> <b>Joined</b> :
                                        {{ date('d-m-Y', strtotime($data->created_at))}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bd-l-0-force bd-t-0-force bd-r-0-force bd-b-0-force">
                    <div class="card-body bg-light">
                        <div class="row no-gutters">
                            <div class="col-12">
                                <ul class="nav ft-sm-none ft-right" id="pills-tab" role="tablist">
                                    <li class="nav-item mg-r-10">
                                        <a class="btn btn-sm btn-label-primary active show" id="nav-profile-tab" data-toggle="pill" href="#my-profile" role="tab" aria-controls="my-profile" aria-selected="false">Profile Inforamtion</a>
                                    </li>
                                    <li class="nav-item mg-r-10">
                                        <a class="btn btn-sm btn-label-danger" id="nav-setting-tab" data-toggle="pill" href="#my-setting" role="tab" aria-controls="my-setting" aria-selected="true">Setting</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters mg-b-20">
            <div class="col-lg-4 col-xl-3 hidden-sm">
                <div class="card bd-l-0-force bd-t-0-force bd-r-0-force">
                    <div class="card-body pd-b-0">
                        <div class="d-flex">
                            <div class="pd-r-15">
                                <span class="avatar avatar-md avatar-online">
                                    <img src="assets/images/avatar/avatar1.png" class="img-fluid wd-40" alt="">
                                </span>
                            </div>
                            <div class="mg-t-10">
                                <h5 class="tx-15 tx-dark mb-0">{{$data->firstname}}</h5>
                                <span class="tx-gray-500">{{$data->department}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bd-l-0-force bd-t-0-force bd-r-0-force">
                    <div class="card-body pd-b-0">
                        <label class="tx-10 tx-uppercase tx-dark mg-b-10">About Information</label>
                        <ul class="list-unstyled profile-info-list">
                            <li class="pd-y-5"><i class="ti-crown tx-16 mr-2"></i><a href="">{{$data->firstname}}
                                    {{$data->lastname}}</a></li>
                            <li class="pd-y-5"><i class="ti-calendar tx-16 mr-2"></i><a href="">{{$data->hired}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card bd-l-0-force bd-t-0-force bd-r-0-force">
                    <div class="card-body pd-b-0">
                        <label class="tx-10 tx-uppercase tx-dark mg-b-10">Contact Information</label>
                        <ul class="list-unstyled profile-info-list">
                            <li class="pd-y-5"><i class="ti-home tx-16 mr-2"></i><a href="">{{$data->email}}</a>
                            </li>
                            <li class="pd-y-5"><i class="ti-mobile tx-16 mr-2"></i><a href="">{{$data->phone}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-9">
                <div class="card bd-t-0-force bd-b-0-force pd-t-20">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="my-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                            <div class="card-body pd-0 pd-x-20">
                                <form class="form-horizontal" action="{{ route('uploadImg')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class=" form-group">
                                        <label class="col-md-12">Firstname</label>
                                        <div class="col-md-12">
                                            <input type="text" name="firstname" value="{{ $data->firstname}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"> Lastname</label>
                                        <div class="col-md-12">
                                            <input type="text" name="lastname" value=" {{$data->lastname}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" name="email" value="{{$data->email}}" class="form-control" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone</label>
                                        <div class="col-md-12">
                                            <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Username</label>
                                        <div class="col-md-12">
                                            <input type="text" name="username" value="{{$data->username}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Address</label>
                                        <div class="col-md-12">
                                            <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Upload</label>
                                        <div class="col-md-12">
                                            <div class="custom-file">
                                                <input type="file" name="photo" class="form-control" id="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <img id="showImage" src="{{  (!empty($data->photo)) ?  url('uploads/'.$data->photo) : url('uploads/no-image.png') }}" class="img-fluid wd-100" alt="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-custom-primary">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="my-setting" role="tabpanel" aria-labelledby="nav-setting-tab">
                            <div class="card-body">
                                <tform class="form-horizontal">
                                    <div class="row row-xs">
                                        <label class="col-sm-4 form-control-label">Old Password: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="text" class="form-control" placeholder="Enter Your Name">
                                        </div>
                                    </div>
                                    <div class="row row-xs mg-t-20">
                                        <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <input type="text" class="form-control" placeholder="Enter Your Email">
                                        </div>
                                    </div>
                                    <div class="row row-xs mg-t-20">
                                        <label class="col-sm-4 form-control-label">Messates: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <textarea rows="5" class="form-contreol" placeholder="Enter Your Messages"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mg-t-20">
                                        <div class="col-sm-12">
                                            <button class="btn btn-custom-primary ft-right">Send Message</button>
                                        </div>


                                    </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ User Profile End -->
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js">
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.file['0']);
        });
    });
</script>
@endsection