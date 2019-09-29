@extends('admin.layouts.admin_template') 
@section('title','Update Mobil')
@section('head','Mobil')
@section('desc','update')
@section('breadcrumb')
    <li><a href="{{ route("dashboard") }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a src="{{ route('mobil_index') }}" onclick="goto(this);return 0;">Mobil</a></li>
    <li><a src="#">{{ $mobil->jenis_mobil }} {{ $mobil->plat_nomer }}</a></li>
    <li class="active">Edit</li>
    
@endsection
@section('content')
    <div class="box box-primary">
        <div class="box-header">
        </div>
        <div class="box-body">
            <form action="{{ route('mobil_update',$mobil->id) }}" method="POST" class="form" enctype="multipart/form-data">
                @method('PUT')
                @include('admin.mobil.form')
            </form>
        </div>
    </div>
@endsection