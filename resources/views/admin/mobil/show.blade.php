@extends('admin.layouts.admin_template') 
@section('title','Show Mobil')
@section('head','Mobil')
@section('desc','show')
@section('breadcrumb')
    <li><a href="{{ route("dashboard") }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a src="{{ route('mobil_index') }}" onclick="goto(this);return 0;">Mobil</a></li>
    <li class="active">{{ $mobil->merk." / ".$mobil->plat_nomer }}</li>
@endsection
@section('content')
    <div class="box box-primary">
        <div class="box-header">
			<a src="{{ route('mobil_index') }}" onclick="goto(this);return 0;" class="btn btn-danger btn-lg text-white">Back</a>
			<a src="{{ route('mobil_edit',$mobil->id) }}" onclick="goto(this);return 0;" class="btn btn-warning btn-lg text-white">Update</a>
        </div>
        <div class="box-body">
        	<center>
        		<img src="@if(($mobil->image != "") and file_exists('media/mobil/'.$mobil->image)) {{ "/media/mobil/".$mobil->image }} @else {{ "/media/image/no-image.gif" }} @endif" class="img img-fluid img-responsive img-thumbnail">
        	</center>
        	<br>
    		<table class="table text-lg-left">
	    		<tr>
	    			<th>ID</th>
	    			<td>:</td>
	    			<td>{{ $mobil->id }}</td>
	    		</tr>
	    		<tr>
	    			<th>Merk Mobil</th>
	    			<td>:</td>
	    			<td>{{ $mobil->merk }}</td>
	    		</tr>
	    		<tr>
	    			<th>Plat Nomer</th>
	    			<td>:</td>
	    			<td>{{ $mobil->plat_nomer }}</td>
	    		</tr>
	    		<tr>
	    			<th>Harga sewa / Jam</th>
	    			<td>:</td>
	    			<td>{{ "Rp. ".$mobil->harga }}</td>
	    		</tr>
	    		<tr>
	    			<th>Terdaftar Pada</th>
	    			<td>:</td>
	    			<td>{{ $mobil->created_at }}</td>
	    		</tr>
    		</table>
        </div>
    </div>
@endsection