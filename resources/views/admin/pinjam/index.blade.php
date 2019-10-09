@php
    use \Illuminate\Support\Facades\DB;
    use \App\Helpers\MyHelper;
@endphp
@extends('admin.layouts.admin_template')
@section('title','Pinjam')
@section('head','Pinjam')
@section('desc','Index')
@section('breadcrumb')
    <li><a href="{{ route("dashboard") }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a src="#">Pinjam</a></li>
    <li class="active">Index</li>
@endsection
@section('content')
    <!-- Main content -->
        <div class='row'>
            <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        @include('admin.pinjam.indexFilter')
                    </div>
                    <div class="box-body table-responsive" id="table-content">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>NO</th>
                                <th>Costumer</th>
                                <th>Mobil</th>
                                <th>Harga / Jam</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Status</th>
                                <th>Total</th>
                                {{-- @if(MyHelper::isAdmin())
                                    <th>Dibuat oleh </th>
                                @endif --}} {{-- ***Enable this if u need to show , who created pinjam transaction  --}}
                                <th colspan="4" style="text-align:center">Action</th>
                            </thead>
                            <tbody>
                                @if (count($pinjams) < 1)
                                    <td colspan="9" class="text-center"> Data Tidak ada</td>
                                @else
                                    @if (isset($_GET['page']) and $_GET['page'] != null)
                                        @php ($no=1+(($_GET['page']-1)*5)) @endphp
                                    @else
                                        @php ($no=1) @endphp
                                    @endif
                                    @foreach ($pinjams as $pinjam)
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $pinjam->costumer->nama }}</td>
                                            <td>{{ $pinjam->mobil->merk }} / {{ $pinjam->mobil->plat_nomer }}</td>
                                            <td>{{ "Rp. ".MyHelper::toMoney($pinjam->mobil->harga) }}</td>
                                            <td>{{ MyHelper::setDate($pinjam->tanggal_pinjam) }}</td>
                                            <td>
                                                @if ($pinjam->tanggal_kembali !=null)
                                                    {{ MyHelper::setDate($pinjam->tanggal_kembali) }}
                                                @else
                                                    {{ "-" }}
                                                @endif
                                            </td>
                                            <td>
                                                @if($pinjam->status == 1)
                                                    {{ "Telah dikembalikan" }}
                                                @else
                                                    {{ "Masih dipinjam" }}
                                                @endif
                                            </td>
                                            <td>
                                                @if(($pinjam->total == 0 )or($pinjam->total == null))
                                                {{ "-" }}
                                                @else
                                                {{ "Rp. ".MyHelper::toMoney($pinjam->total) }}
                                                @endif1 
                                            </td>
                                            {{-- @if (MyHelper::isAdmin())
                                                <td>{{ DB::table('admin_module')->Where('id','=',$pinjam->created_by)->select('username')->get()[0]->username }}</td>
                                            @endif --}} {{-- ***Enable this if u need to show , who created pinjam transaction  --}}
                                            @php
                                                $no +=1;
                                            @endphp
                                            <td style="text-align:center;padding:3px">
                                                <a href="{{ route('pinjam_cetak',$pinjam->id) }}" class="btn btn-success text-white btn-xs"><i class="fa fa-print"></i></a>
                                            </td>
                                            <td style="text-align:center;padding:3px">
                                                <form method="POST" action="{{ route('pinjam_kembali',$pinjam->id) }}">@csrf @method('PUT')<button class="btn btn-primary btn-xs"><i class="fa fa-spinner"></i></button></form>
                                            </td>
                                            <td style="text-align:center;padding:3px">
                                                <a src="{{ route('pinjam_edit',$pinjam->id) }}" onclick="goto(this);return 0" class="btn btn-warning btn-xs text-white"><i class="fa fa-pencil-square-o"></i></a>
                                            </td>
                                            <td style="text-align:center;padding:3px">
                                                <form method="POST" action="{{ route('pinjam_destroy',$pinjam->id) }}">@csrf @method('DELETE')<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        {{ $pinjams->links('admin.pinjam.paginate') }}
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
@endsection