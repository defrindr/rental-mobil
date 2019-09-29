@php
    use \App\Helpers\MyHelper;
@endphp
@extends('admin.layouts.admin_template')
@section('title','Dashboard')
@section('head','Dashboard')
@section('desc','')
@section('breadcrumb')
    <li><a href="#"><i class="fa fa-dashboard"></i> Index </a></li>
    <li><a href="#">Dahsboard</a></li>
@endsection

@section('content')
    <section class="content container-fluid">
        <div class='row'>
            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h3>
                            @if ($totalPemasukan > 0)
                                {{ "Rp. ".MyHelper::toMoney($totalPemasukan) }}
                            @else
                                {{ "Rp. -" }}
                            @endif
                        </h3>
                        <p>Pemasukan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                    <a src="{{ route('pinjam_index') }}" onclick="goto(this);return 0;" class="small-box-footer">More Info ...</a>
                </div>
            </div>
            {{-- totalPemasukan --}}
            <div class='@if(MyHelper::isAdmin()) col-lg-3 col-md-3 col-sm-3 @else col-lg-4 col-md-4 col-sm-4 @endif col-xs-12'>
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>
                            @if ($totalPemasukan > 0)
                                {{ $totalCount }}
                            @else
                                {{ "0" }}
                            @endif
                        </h3>
                        <p>Transaksi Bulan Ini</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a src="{{ route('pinjam_index') }}" onclick="goto(this);return 0;" class="small-box-footer">More Info ...</a>
                </div>
            </div>
            {{-- costumerCount --}}
            <div class='@if(MyHelper::isAdmin()) col-lg-3 col-md-3 col-sm-3 @else col-lg-4 col-md-4 col-sm-4 @endif  col-xs-12'>
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>
                            @if ($costumerCount > 0)
                                {{ $costumerCount }}
                            @else
                                {{ "0" }}
                            @endif
                        </h3>
                        <p>Jumlah Costumer</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-contacts"></i>
                    </div>
                    <a src="{{ route('costumer_index') }}" onclick="goto(this);return 0;" class="small-box-footer">More Info ...</a>
                </div>
            </div>
            {{-- mobilCount --}}
            <div class="@if(MyHelper::isAdmin()) col-lg-3 col-md-3 col-sm-3 @else col-lg-4 col-md-4 col-sm-4 @endif  col-xs-12">
                <div class="small-box bg-purple">
                    <div class="inner">
                        <h3>
                            @if ($mobilCount > 0)
                                {{ $mobilCount }}
                            @else
                                {{ "0" }}
                            @endif
                        </h3>
                        <p>Jumlah Mobil</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-car"></i>
                    </div>
                    <a src="{{ route('costumer_index') }}" onclick="goto(this);return 0;" class="small-box-footer">More Info ...</a>
                </div>
            </div>
            {{-- adminCount --}}
            @if(MyHelper::isAdmin())
            <div class="@if(MyHelper::isAdmin()) col-lg-3 col-md-3 col-sm-3 @else col-lg-4 col-md-4 col-sm-4 @endif  col-xs-12">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>
                            @if ($adminCount > 0)
                                {{ $adminCount }}
                            @else
                                {{ "0" }}
                            @endif
                        </h3>
                        <p>Jumlah Admin</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-person"></i>
                    </div>
                    <a src="{{ route('costumer_index') }}" onclick="goto(this);return 0;" class="small-box-footer">More Info ...</a>
                </div>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- LINE CHART -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Peminjaman Bulan Ini</h3>
                    </div>
                    <div class="box-body chart-responsive">
                        <div class="chart" id="line-chart" style="height: 250px;"></div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
@endsection
@section('foot-script')
<script>
    var line = new Morris.Line({
        element: 'line-chart',
        resize: true,
        data: <?= $datas ?>,
        xkey: 'month',
        ykeys: ['total'],
        labels: ['Total'],
        lineColors: ['#3c8dbc'],
        hideHover: 'auto',
        parseTime:false,
        hideHover:false,
        lineWidth:'3px',
        stacked: true
    });
</script>
@endsection