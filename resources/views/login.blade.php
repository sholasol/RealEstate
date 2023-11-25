@extends('layouts.auth')

@section('content')

<div class="card shadow-none pd-20 mx-auto wd-300 text-center bd-1 align-self-center mtop">
    <h4 class="card-title mt-3 text-center">RealEstate</h4>
    <p class="text-center">Sing in to your account</p>
    @include('_message')

    <form action="{{ route('login') }}" method="post">
        {{csrf_field()}}
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text pd-x-9"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input class="form-control form-control-sm" name="email" placeholder="Email address" type="email">
        </div>
        <p class="text-danger">{{$errors->first('email')}}</p>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input class="form-control form-control-sm" name="password" placeholder="Create password" type="password">
        </div>
        <p class="text-danger">{{$errors->first('password')}}</p>
        <p class="text-center"><a href="{{url('forgot_password')}}">Forget Password?</a></p>
        <div class="form-group">
            <button type="submit" class="btn btn-custom-primary btn-block tx-13 hover-white"> Login </button>
        </div>
        <p class="text-center">Don't have an account?<br /> <a href="{{url('register')}}">Create Account</a> </p>
    </form>
</div>

@endsection