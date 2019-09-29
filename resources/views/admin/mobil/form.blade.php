@if(isset($mobil))
                @csrf
                <div class="form-group">
                    <label for="merk">Merk Mobil</label>
                    <select type="text" name="merk" class="form-control">
                        <option value="">Pilih Merk</option>
                        @php $merk = ["Avanza","Toyota","Daihatsu","Marcedez","Honda"] @endphp
                        @foreach($merk as $row)
                            <option value="{{ $row }}" @if(isset($mobil->merk) == $row) selected @endif>{{ $row }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="plat_nomer">Plat Nomer</label>
                    <input type="text" name="plat_nomer" class="form-control" value="@if(isset($mobil)){{ trim($mobil->plat_nomer) }}@endif"/>
                </div>
                <div class="form-group">
                    <label for="harga">Harga/jam</label>
                    <input type="number" min="2000" max="20000" name="harga" class="form-control" value="@if($mobil){{ trim($mobil->harga) }}@endif"/>
                    </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control"/>
                </div>
                <div style="text-align:right">
                        <button type="submit" class="btn btn-success text-white btn-lg">Submit</button>
                        <a class="btn btn-danger btn-close text-white btn-lg" onclick="goto(this);return 0" src="{{ route('mobil_index') }}">Cancel</a>
                </div>
@else
                @csrf
                <div class="form-group">
                    <label for="merk">Merk Mobil</label>
                    <select type="text" name="merk" class="form-control">
                        <option value="">Pilih Merk</option>
                        @php $merk = ["Avanza","Toyota","Daihatsu","Marcedez","Honda"] @endphp
                        @foreach($merk as $row)
                            <option value="{{ $row }}">{{ $row }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="plat_nomer">Plat Nomer</label>
                    <input type="text" name="plat_nomer" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="harga">Harga/jam</label>
                    <input type="number" min="2000" max="20000" name="harga" class="form-control"/>
                    </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control"/>
                </div>
                <div style="text-align:right">
                        <button type="submit" class="btn btn-success text-white btn-lg">Submit</button>
                        <a class="btn btn-danger btn-close text-white btn-lg" onclick="goto(this);return 0" src="{{ route('mobil_index') }}">Cancel</a>
                </div>
@endif