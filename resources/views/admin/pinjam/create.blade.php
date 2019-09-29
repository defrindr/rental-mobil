@extends('admin.layouts.admin_template')
@section('title','Create Pinjam')
@section('head','Pinjam')
@section('desc','Create')
@section('breadcrumb')
    <li><a href="{{ route("dashboard") }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Pinjam</a></li>
    <li class="active">Create</li>
@endsection
@section('content')
<div class="box box-primary">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<form action="{{ route('pinjam_store') }}" method="POST" role="form">
			@method('post')
			@include('admin.pinjam.form')
		</form>
	</div>
</div>
@endsection