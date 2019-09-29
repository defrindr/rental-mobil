@if(isset($pinjam))
	@csrf
	<div class="row">

		<div class="col-xs-12 col-md-6 col-xl-6 col-lg-6">

			<div class="form-group">
				<label for="id_costumer">Costumer Name</label>
				<select name="id_costumer" id="id_costumer" class="form-control">
					<option value="">Pilih Costumer</option>
					@foreach($costumers as $costumer)
						<option value="{{ $costumer->id }}" @if($pinjam->id_costumer == $costumer->id) {{ "selected" }}  @endif > {{ $costumer->nama }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="id_mobil">Merk Mobil</label>
				<select name="id_mobil" id="id_mobil" class="form-control">
					<option value="">Pilih Merk Mobil</option>
					@foreach($mobils as $mobil)
						<option value="{{ $mobil->id }}" @if($pinjam->id_mobil == $mobil->id) {{ "selected" }}  @endif >{{ $mobil->merk." / ".$mobil->plat_nomer }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="status">Status</label>
				<input id="status" class="form-control" type="checkbox" name="status" data-toggle="toggle" data-on="Dikembalikan" data-off="Masih Dipinjam" data-onstyle="success" data-offstyle="danger" @if($pinjam->status == 1) {{ "checked" }} @endif >
			</div>
			
		</div>
		<div class="col-xs-12 col-md-6 col-xl-6 col-lg-6">
			<div class="form-group">
				<label for="tanggal_pinjam">Tanggal Pinjam</label>
				<div class="input-group date" >
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
					<input type="text" class="form-control" id="datetimepicker1" name="tanggal_pinjam" value="{{ date("m/d/Y H:i A",strtotime($pinjam->tanggal_pinjam)) }}" placeholder="Tanggal Pinjam" />
				</div>
			</div>
			<div class="form-group">
				<label for="tanggal_kembali">Tanggal Kembali</label>
				<div class="input-group date" >
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
					<input type="text" class="form-control" id="datetimepicker2" @if(($pinjam->tanggal_kembali !=null) or ($pinjam->tanggal_kembali != "")) value="{{ date("m/d/Y H:i A",strtotime($pinjam->tanggal_kembali)) }}" @endif name="tanggal_kembali" placeholder="Tanggal Kembali" />
				</div>
			</div>
		</div>
	</div>


	<div class="form-group pull-right">
		<button class="btn btn-success">Submit</button>
		<a src="{{ route('pinjam_index') }}" onclick="goto(this);return 0" class="btn btn-danger text-white">Cancel</a>
	</div>
@else
	@csrf
	<div class="form-group">
		<label for="id_costumer">Costumer Name</label>
		<select name="id_costumer" id="id_costumer" class="form-control">
			<option value="">Pilih Costumer</option>
			@foreach($costumers as $costumer)
				<option value="{{ $costumer->id }}">{{ $costumer->nama }}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="id_mobil">Merk Mobil</label>
		<select name="id_mobil" id="id_mobil" class="form-control">
			<option value="">Pilih Merk Mobil</option>
			@foreach($mobils as $mobil)
				<option value="{{ $mobil->id }}">{{ $mobil->merk." / ".$mobil->plat_nomer }}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="tanggal_pinjam">Tanggal Pinjam</label>
		<div class="input-group date" >
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-calendar"></span>
			</span>
			<input type="text" class="form-control" id="datetimepicker1" name="tanggal_pinjam" placeholder="Tanggal Pinjam" />
		</div>
	</div>
	<div class="form-group pull-right">
		<button class="btn btn-success">Submit</button>
		<a src="{{ route('pinjam_index') }}" onclick="goto(this);return 0" class="btn btn-danger text-white">Cancel</a>
	</div>
@endif