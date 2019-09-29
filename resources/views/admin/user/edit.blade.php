@extends('admin.layouts.admin_template') 
@section('title','Update User')
@section('head','User')
@section('desc','update')
@section('breadcrumb')
    <li><a href="{{ route("dashboard") }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a src="{{ route('user_index') }}" onclick="goto(this);return 0;">user</a></li>
    <li><a href="#">{{ $user->username }}</a></li>
    <li class="active">Edit</li>
    
@endsection
@section('content')
    <div class="box box-primary">
        <div class="box-header">
        </div>
        <div class="box-body">
            <form action="{{ route('user_update',$user->id) }}" method="POST" role="form">
                @include('admin.user.form')
            </form>
        </div>
    </div>
@endsection