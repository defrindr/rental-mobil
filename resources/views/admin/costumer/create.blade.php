@extends('admin.layouts.admin_template') 
@section('title','Create Costumer')
@section('head','Costumer')
@section('desc','create')
@section('breadcrumb')
    <li><a href="{{ route("dashboard") }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a onclick="goto(this)" src="{{ route('costumer_index') }}">Costumer</a></li>
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
            <form action="{{ route('costumer_store') }}" method="POST" class="form">
                @include('admin.costumer.form')
            </form>
        </div>
    </div>
@endsection