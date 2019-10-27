@php
	use App\Helpers\MyHelper;
@endphp
<html>
	<head>
		<title>{{ $title }}</title>
		<style>
			h1{
				text-align: center;
			}
			.table {
				margin-top: 5%;
				width: 98vw;
				text-align: left;
			}
			.table-bordered{
				border: 1px solid #888;
			}
			td,th{
				padding: 6px;
			}
			.table > tbody > tr:nth-child(even){
				background: #EEE;
			}
			.table > tbody > tr:nth-child(odd){
				background: #FFE;
			}
			th{
				background: #EEE;
			}
			.table > tbody > tr:last-child{
				background: rgba(192,89,20,.5);
			}
		</style>
	</head>
	<body>
		<div class="text-center">
			<h1>{{ $title }}</h1>
			<hr>
			<table>
				<tr>
					<td>Jumlah transaksi bulan ini</td>
					<td>:</td>
					<td><?= $totalTransaksi ?></td>
				</tr>
				<tr>
					<td>Jumlah transaksi belum lunas</td>
					<td>:</td>
					<td><?= $transaksiBelumLunas ?></td>
				</tr>
				<tr>
					<td>Tanggal Laporan dibuat</td>
					<td>:</td>
					<td><?= MyHelper::getTimeNow() ?></td>
				</tr>
				<tr>
					<td>Pembuat laporan</td>
					<td>:</td>
					<td><?= MyHelper::getuserName() ?></td>
				</tr>
			</table>
			<table class="table table-stripped table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Costumer</th>
						<th>Mobil</th>
						<th>Harga Mobil</th>
						<th>Tanggal pinjam</th>
						<th>Tanggal kembali</th>
						<th>Status</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					@php ($no=1) @endphp
					@if(count($pinjams) > 0)
						@foreach ($pinjams as $pinjam)
							<tr>
								<td>{{ $no }}</td>
								<td>{{ $pinjam->costumer->nama }}</td>
								<td>{{ $pinjam->mobil->merk }} ( {{ $pinjam->mobil->plat_nomer }} )</td>
								<td>{{ "Rp. ".MyHelper::toMoney($pinjam->mobil->harga) }}</td>
								<td>{{ MyHelper::setDate($pinjam->tanggal_pinjam )}}</td>
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
									@endif
								</td>
								@php
									$no +=1;
								@endphp
							</tr>
						@endforeach
						<tr class="last">
							<td colspan="7">Jumlah Total</td>
							<td>{{ "Rp. ".MyHelper::toMoney($totalPendapatan) }}</td>
						</tr>
						@else
							<tr>
								<td colspan="8" style="text-align:center">Data tidak ada</td>
							</tr>
						@endif
				</tbody>
			</table>
		</div>
	</body>
</html>