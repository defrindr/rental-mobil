@php
	use App\Helpers\MyHelper;
@endphp
<html>
	<head>
		<title>{{ $title }}</title>
		<style>
			.container{
				width: 350px;
				margin: 10px auto;
				display: block;
				border: 1px solid #888;
				padding: 1px 10px;
			}
			h1,h2,h3,h4,h5{
				text-align: center;
			}
			.table {
				text-align: left;
			}
			.table-bordered{
				/* border: 1px solid #888; */
			}
			td,th{
				padding: 6px;
			}
			tr:nth-child(even){
				background: #EEE;
			}
			tr:nth-child(odd){
				background: #FFE;
			}
			th{
				background: #EEE;
			}
		</style>
	</head>
	<body>
		<div class="text-center">
			<div class="container">
				<h4>Bukti peminjaman</h4>
				<h1>"Rental Mobil Jaya"</h1>
				<hr>
				<table class="table table-stripped table-bordered">
					<tbody>
						<tr>
							<td>Nama</td><td>:</td><td>{{ $pinjam->costumer->nama }}</td>
						</tr>
						<tr>
							<td>Mobil</td><td>:</td><td>{{ $pinjam->mobil->merk }} / {{ $pinjam->mobil->plat_nomer }}</td>
						</tr>
						<tr>
							<td>Biaya sewa / jam</td><td>:</td><td>{{ "Rp. ".MyHelper::toMoney($pinjam->mobil->harga) }}</td>
						</tr>
						<tr>
							<td>Tanggal pinjam</td><td>:</td><td>{{ MyHelper::setDate($pinjam->tanggal_pinjam )}}</td>
						</tr>
						<tr>
							<td>Tanggal kembali</td><td>:</td><td>
								@if ($pinjam->tanggal_kembali !=null)
									{{ MyHelper::setDate($pinjam->tanggal_kembali) }}
								@else
									{{ "-" }}
								@endif
							</td>
						</tr>
						<tr>
							<td>Status peminjaman</td><td>:</td><td>
								@if($pinjam->status == 1)
									{{ "Telah dikembalikan" }}
								@else
									{{ "Masih dipinjam" }}
								@endif
							</td>
							</tr>
							<tr>
							<td>Total biaya pinjam</td><td>:</td><td>
								@if(($pinjam->total == 0 )or($pinjam->total == null))
									{{ "-" }}
								@else
									{{ "Rp. ".MyHelper::toMoney($pinjam->total) }}
								@endif
							</td>
						</tr>
					</tbody>
				</table>
				<h3>Terimakasih telah meminjam</h3>
			</div>
		</div>
	</body>
</html>