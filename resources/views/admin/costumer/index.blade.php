@extends('admin.layouts.admin_template')
@section('title','Costumer')
@section('head','Costumer')
@section('desc','index')
@section('breadcrumb')
    <li><a href="{{ route("dashboard") }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a src="#">Costumer</a></li>
    <li class="active">Index</li>
@endsection
@section('content')
    <!-- Main content -->
        <div class='row'>
            <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        @include('admin.costumer.indexFilter')
                    </div>
                    <div class="box-body table-responsive" id="table-content">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No KTP</th>
                                <th>No HP</th>
                                <th>Alamat</th>
                                <th colspan="3" style="text-align:center">Action</th>
                            </thead>
                            <tbody>
                                @if (count($costumers) < 1)
                                    <td colspan="9" class="text-center"> Data Tidak ada</td>
                                @else
                                    @if (isset($_GET['page']) and $_GET['page'] != null)
                                        @php ($no=1+(($_GET['page']-1)*5)) @endphp
                                    @else
                                        @php ($no=1) @endphp
                                    @endif
                                    @foreach ($costumers as $costumer)
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $costumer->nama }}</td>
                                            <td>{{ $costumer->email }}</td>
                                            <td>{{ $costumer->no_ktp }}</td>
                                            <td>{{ $costumer->no_hp }}</td>
                                            <td>{{ $costumer->alamat }}</td>
                                            @php
                                                $no +=1;
                                            @endphp
                                            <td style="text-align:center;padding:3px">
                                                <a src="{{ route('costumer_show',$costumer->id) }}" onclick="goto(this);return 0" class="btn btn-primary btn-xs text-white"><i class="fa fa-eye"></i></a>
                                            </td>
                                            <td style="text-align:center;padding:3px">
                                                <a src="{{ route('costumer_edit',$costumer->id) }}" onclick="goto(this);return 0" class="btn btn-warning btn-xs text-white"><i class="fa fa-pencil-square-o"></i></a>
                                            </td>
                                            <td style="text-align:center;padding:3px">
                                                <form method="POST" action="{{ route('costumer_destroy',$costumer->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini');">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        {{ $costumers->links('admin.default.paginate') }}
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
@endsection