@extends('admin.layouts.admin_template') 
@section('title','Edit Costumer')
@section('head','Costumer')
@section('desc','edit')
@section('breadcrumb')
    <li><a href="{{ route("dashboard") }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a onclick="goto(this)" src="{{ route('costumer_index') }}">Costumer</a></li>
    <li><a href="#">{{ $costumer->nama }}</a></li>
    <li class="active">Edit</li>
@endsection
@section('content')
    <div class="box box-primary">
        <div class="box-header">

        </div>
        <div class="box-body">
            <form action="{{ route('costumer_update',$costumer->id) }}" method="POST" class="form">
                @method('PUT')
                @include('admin.costumer.form')
            </form>
        </div>
    </div>
@endsection