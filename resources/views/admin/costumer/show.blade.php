@extends('admin.layouts.admin_template') 
@section('title','Detail Costumer')
@section('head','Costumer')
@section('desc','detail')
@section('breadcrumb')
    <li><a href="{{ route("dashboard") }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a onclick="goto(this)" src="{{ route('costumer_index') }}">Costumer</a></li>
    <li><a href="#">{{ $costumer->nama }}</a></li>
    <li class="active">Detail</li>
@endsection
@section('content')
    <div class="box box-primary">
        <div class="box-header">
        	<a src="{{ route('costumer_index') }}" onclick="goto(this);return 0;" class="btn btn-danger btn-lg text-white">Back to index</a>
        </div>
        <div class="box-body">
        	<table class="table table-bordered table-stripped table-responsive">
        		<tbody>
        			<tr>
        				<td>ID Anggota</td><td>:</td><td>{{ $costumer->id }}</td>
        			</tr>
        			<tr>
        				<td>Nama</td><td>:</td><td>{{ $costumer->nama }}</td>
        			</tr>
        			<tr>
        				<td>Email</td><td>:</td><td>{{ $costumer->email }}</td>
        			</tr>
        			<tr>
        				<td>No KTP</td><td>:</td><td>{{ $costumer->no_ktp }}</td>
        			</tr>
        			<tr>
        				<td>No HP</td><td>:</td><td>{{ $costumer->no_hp }}</td>
        			</tr>
        			<tr>
        				<td>Nama</td><td>:</td><td>{{ $costumer->nama }}</td>
        			</tr>
        			<tr>
        				<td>Alamat</td><td>:</td><td>{{ $costumer->alamat }}</td>
        			</tr>
        			<tr>
        				<td>Terdaftar pada</td><td>:</td><td>{{ date('H:i A / d F Y',strtotime($costumer->created_at)) }}</td>
        			</tr>
        		</tbody>
        	</table>
        </div>
    </div>
@endsection