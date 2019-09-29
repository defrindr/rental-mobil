@extends('admin.layouts.admin_template')
@section('title','Create User')
@section('head','User')
@section('desc','create')
@section('breadcrumb')
    <li><a href="{{ route("dashboard") }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a src="{{ route('user_index') }}" onclick="goto(this);return 0;">User</a></li>
    <li class="active">Create</li>
@endsection
@section('content')
    <div class="box box-primary">
        <div class="box-header">
            @if (session('success'))
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="alert alert-success alert-dismissable" >
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
            @endif
            @if (session('error'))
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            {{ session('error') }}
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="box-body">
            <form action="{{ route('user_store') }}" method="POST" class="form">
                @include('admin.user.form')
            </form>
        </div>
    </div>
@endsection