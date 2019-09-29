@extends('admin.layouts.admin_template')
@section('title','Update Pinjam')
@section('head','Pinjam')
@section('desc','Update')
@section('breadcrumb')
    <li><a href="{{ route("dashboard") }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a src="{{ route('pinjam_index') }}" onclick="goto(this);return 0;">Pinjam</a></li>
    <li class="active">Edit</li>
@endsection
@section('content')
<div class="box box-primary">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<form action="{{ route('pinjam_update',$pinjam->id) }}" method="POST" role="form">
			@method('put')
			@include('admin.pinjam.form')
		</form>
	</div>
</div>
@endsection