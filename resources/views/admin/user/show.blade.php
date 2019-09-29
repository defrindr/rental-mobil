@php
    use App\Helpers\MyHelper;
@endphp
@extends('admin.layouts.admin_template') 
@section('title','Detail User')
@section('head','User')
@section('desc','detail')
@section('breadcrumb')
    <li><a href="{{ route("dashboard") }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a src="{{ route('user_index') }}" onclick="goto(this);return 0;">user</a></li>
    <li><a href="#">{{ $user->username }}</a></li>
    <li class="active">detail</li>
@endsection
@section('content')
    <div class="box box-primary">
        <div class="box-header">
        </div>
        <div class="box-body">
            <table class="table table-stripped table-bordered">
            		<tr>
            			<td>Username</td><td>:</td><td>{{ $user->username }}</td>
            		</tr>
            		<tr>
            			<td>Email</td><td>:</td><td>{{ $user->email }}</td>
            		</tr>
                    <tr>
                        <td>Penanganan transaksi bulan ini</td><td>:</td><td>{{ $countPenanganan }}</td>
                    </tr>
            		<tr>
            			<td>Dibuat pada</td><td>:</td><td>{{ MyHelper::setDate($user->created_at) }}</td>
            		</tr>
            </table>
        </div>
    </div>
@endsection