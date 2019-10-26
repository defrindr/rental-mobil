@if(isset($costumer))
        @csrf
        <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Admin" required="required" value="{{ $costumer->nama }}">
        </div> <!-- Nama -->
        <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="admin@rental.com" required="required" value="{{ $costumer->email }}">
        </div><!-- Email -->
        <div class="form-group">
                <label for="no_ktp">No. KTP</label>
                <input type="text" minlength="16" maxlength="16" placeholder="1234567890123456" class="form-control" name="no_ktp" required="required" value="{{ $costumer->no_ktp }}">
        </div> <!-- No KTP -->
        <div class="form-group">
                <label for="no_hp">No. Handphone</label>
                <input type="text" minlength="11" maxlength="14" placeholder="085604845432" class="form-control" name="no_hp" required="required" value="{{ $costumer->no_hp }}">
        </div><!-- No hp -->
        <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" placeholder="Jln.bwabwabwa No.12 Kow Kow Kab. Po " class="form-control" required="required">{{ $costumer->alamat }}</textarea> 
        </div><!-- Alamat -->
        <div style="text-align:right">
                <button type="submit" class="btn btn-success text-white btn-lg"  onclick="return confirm('Apakah data yang anda masukkan sudah benar ?')">Submit</button>
                <a class="btn btn-danger btn-close text-white btn-lg" onclick="goto(this);return 0" src="{{ route('costumer_index') }}">Cancel</a>
        </div>
@else
        @csrf
        <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Admin" required="required">
        </div> <!-- Nama -->
        <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="admin@rental.com" required="required">
        </div><!-- Email -->
        <div class="form-group">
                <label for="no_ktp">No. KTP</label>
                <input type="text" minlength="16" maxlength="16" placeholder="1234567890123456" class="form-control" name="no_ktp" required="required">
        </div> <!-- No KTP -->
        <div class="form-group">
                <label for="no_hp">No. Handphone</label>
                <input type="text" minlength="11" maxlength="14" placeholder="085604845432" class="form-control" name="no_hp" required="required">
        </div><!-- No hp -->
        <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" placeholder="Jln.bwabwabwa No.12 Kow Kow Kab. Po " class="form-control" required="required"></textarea> 
        </div><!-- Alamat -->
        <div style="text-align:right">
                <button type="submit" class="btn btn-success text-white btn-lg"  onclick="return confirm('Apakah data yang anda masukkan sudah benar ?')">Submit</button>
                <a class="btn btn-danger btn-close text-white btn-lg" onclick="goto(this);return 0" src="{{ route('costumer_index') }}">Cancel</a>
        </div>
@endif