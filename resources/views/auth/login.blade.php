@extends('auth.layout')
@section('title','Login')

@section('content')
{{-- <div class="container-fluid">
    <div class="box-login">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <img src="image/adlog.jpg" alt="" srcset="" class="image-login">
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="container-fluid">
                        <div class="login-head">
                                <strong>Login Form</strong>
                        </div>
                        <hr>
                            @if( session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if (isset($error))
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ $error }}
                                </div>
                            @endif
                            <form class="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Email" autofocus required>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit"  id="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                </div>
                
            </div>
        </div>
    </div>
</div> --}}

<div class="lay">
    <img src="{{ asset('/media/image/login.jpg') }}" alt="" srcset="" class="image-login">
</div>
<div class="cover-container">
    <div class="text-center login-head text-white">
        <h2><strong>LOGIN</strong></h2>
    </div>
    @if( session('success'))
        <div class="row">
            <div class="alert alert-success col-lg-offset-3">{{ session('success') }}</div>
        </div>
    @endif
    @if (isset($error))
        <div class="container">
            <center>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ $error }}
                </div>
            </center>
        </div>
    @endif
    <form class="form-signin" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <div class="form-label-group form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" id="email" class="form-control" name="email" placeholder="Email address" required autofocus>
            <label for="email">Email address</label>
        </div>
        <div class="form-label-group form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit">LOG IN</button>
        <p class="mt-5 mb-3 text-white text-center">&copy; 2019</p>
    </form>
</div>

@endsection