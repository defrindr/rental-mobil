@extends('admin.layouts.admin_template') 
@section('title','Create Mobil')
@section('head','Mobil')
@section('desc','create')
@section('breadcrumb')
    <li><a href="{{ route("dashboard") }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a src="{{ route('mobil_index') }}" onclick="goto(this);return 0;">Mobil</a></li>
    <li class="active">Create</li>
@endsection
@section('content')
    <div class="box box-primary">
        <div class="box-header">

        </div>
        <div class="box-body">
            <form action="{{ route('mobil_store') }}" method="POST" class="form" enctype="multipart/form-data">
                @include('admin.mobil.form')
            </form>
        </div>
    </div>
@endsection