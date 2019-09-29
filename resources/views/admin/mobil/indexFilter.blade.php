                    @if (session('success'))
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="alert alert-success alert-dismissable" >
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ session('success') }}
                                </div>
                            </div>
                        </div>
                    @elseif (session('error'))
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ session('error') }}
                                </div>
                            </div>
                        </div>
                    @endif
                    <form onsubmit="return false" id="filterMobil" class="form">
                        <div class="row">
                            <div class="col-xs-12 col-md-3">
                                    <a class="btn btn-success btn-block text-white" onclick="goto(this);return 0" src="{{ route('mobil_create') }}"><i class="fa fa-plus-circle"></i> Tambah</a>
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <input type="text" name="q" class="form-control" placeholder="Search...">
                            </div>
                            <div class="col-md-2 col-xs-12">
                                <select name="jenis_mobil" class="form-control">
                                    <option value="">Pilih Jenis</option>
                                    @php
                                        $arr = ['Avanza','Toyota','Honda','Daihatsu','Isuzu']
                                    @endphp
                                    @foreach ($arr as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <select name="harga" id="harga" class="form-control">
                                    <option value="">Pilih Harga</option>
                                    @php
                                        $arr = [25000,40000,50000,60000]
                                    @endphp
                                    @foreach ($arr as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <select name="status" id="statuses" class="form-control">
                                    <option value="">Pilih Status</option>
                                    @php
                                        $arr = ["Tersedia","Kosong"]
                                    @endphp
                                    @foreach ($arr as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>