@extends('admin.layouts.admin_template')
@section('title','Users')
@section('head','User')
@section('desc','index')
@section('breadcrumb')
    <li><a href="{{ route("dashboard") }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">User</a></li>
    <li class="active">Index</li>
@endsection
@section('content')
    <!-- Main content -->
        <div class='row'>
            <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        @include('admin.user.indexFilter')
                    </div>
                    <div class="box-body table-responsive" id="table-content">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>NO</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th colspan="3" style="text-align:center">Action</th>
                            </thead>
                            <tbody>
                                @if (count($users) < 1)
                                    <td colspan="9" class="text-center"> Data Tidak ada</td>
                                @else
                                    @if (isset($_GET['page']) and $_GET['page'] != null)
                                        @php ($no=1+(($_GET['page']-1)*5)) @endphp
                                    @else
                                        @php ($no=1) @endphp
                                    @endif
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>{{ $user->updated_at }}</td>
                                            @php
                                                $no +=1;
                                            @endphp
                                            <td style="text-align:center;padding:3px">
                                                <a src="{{ route('user_show',$user->id) }}" onclick="goto(this);return 0" class="btn btn-primary btn-xs text-white"><i class="fa fa-eye"></i></a>
                                            </td>
                                            <td style="text-align:center;padding:3px">
                                                <a src="{{ route('user_edit',$user->id) }}" onclick="goto(this);return 0" class="btn btn-warning btn-xs text-white"><i class="fa fa-pencil-square-o"></i></a>
                                            </td>
                                            <td style="text-align:center;padding:3px">
                                                <form method="POST" action="{{ route('user_destroy',$user->id) }}">
                                                    @csrf 
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini ?')">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        {{ $users->links('admin.default.paginate') }}
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
@endsection