@php
    use \App\Helpers\MyHelper;
@endphp
@extends('admin.layouts.admin_template')
@section('title','Mobil')
@section('head','Mobil')
@section('desc','index')
@section('breadcrumb')
    <li><a href="{{ route("dashboard") }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a src="#">Mobil</a></li>
    <li class="active">Index</li>
@endsection
@section('content')
    <!-- Main content -->
        <div class='row'>
            <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        @include('admin.mobil.indexFilter')
                    </div>
                    <div class="box-body table-responsive" id="table-content">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>NO</th>
                                <th>Jenis</th>
                                <th>Plat Nomer</th>
                                <th>Harga Sewa / Jam</th>
                                <th>Status</th>
                                <th colspan="4" style="text-align:center">Action</th>
                            </thead>
                            <tbody>
                                @if (count($mobils) < 1)
                                    <td colspan="9" class="text-center"> Data Tidak ada</td>
                                @else
                                    @if (isset($_GET['page']) and $_GET['page'] != null)
                                        @php ($no=1+(($_GET['page']-1)*5)) @endphp
                                    @else
                                        @php ($no=1) @endphp
                                    @endif
                                    @foreach ($mobils as $mobil)
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $mobil->merk }}</td>
                                            <td>{{ $mobil->plat_nomer }}</td>
                                            <td>{{ "Rp. ".MyHelper::toMoney($mobil->harga) }}</td>
                                            @if ($mobil->status)
                                                <td>Tersedia</td>
                                            @else
                                                <td>Kosong</td>
                                            @endif
                                            @php
                                                $no +=1;
                                            @endphp
                                            <td style="text-align: center;padding:3px">
                                                <a href=""></a>
                                            </td>
                                            <td style="text-align:center;padding:3px">
                                                <a src="{{ route('mobil_show',$mobil->id) }}" onclick="goto(this);return 0;" class="btn btn-primary btn-xs text-white"><i class="fa fa-eye"></i></a>
                                            </td>
                                            <td style="text-align:center;padding:3px">
                                                <a src="{{ route('mobil_edit',$mobil->id) }}" onclick="goto(this);return 0" class="btn btn-warning btn-xs text-white"><i class="fa fa-pencil-square-o"></i></a>
                                            </td>
                                            <td style="text-align:center;padding:3px">
                                                <form method="POST" action="{{ route('mobil_destroy',$mobil->id) }}">
                                                    @csrf 
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-xs">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        {{ $mobils->links('admin.default.paginate',["js" => "pageMobil"]) }}
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
@endsection