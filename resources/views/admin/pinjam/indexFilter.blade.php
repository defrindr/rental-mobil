
                    @if (session('success'))
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="alert alert-success alert-dismissable" >
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ session('success') }}
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ session('error') }}
                                </div>
                            </div>
                        </div>
                    @endif
                    <form onsubmit="return false" id="filterPinjam" class="form">
                        <div class="row">
                            <div class="col-xs-6 col-md-2">
                                    <a class="btn btn-success btn-block text-white" onclick="goto(this);return 0" src="{{ route('pinjam_create') }}"><i class="fa fa-plus-circle"></i> Tambah</a>
                            </div>
                            <div class="col-xs-6 col-md-2">
                                    <a class="btn btn-primary btn-block text-white" href="{{ route('pinjam_cetak_all') }}" id="cetakPinjam" target="blank"><i class="fa fa-plus-circle"></i> Cetak</a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <input type="text" name="q" class="form-control" placeholder="Search ....">
                            </div>
                            <div class="col-md-2">
                                <select name="month" id="month" class="form-control">
                                    @php $monthName = [] @endphp
                                    @for($a=1;$a<=12;$a++)
                                    @php 
                                            array_push($monthName,DateTime::createFromFormat('!m', $a)->format('F'));
                                        @endphp
                                    @endfor
                                    @for($i=0;$i<12;$i++)
                                    <option value="{{ $i+1 }}" @if(($i+1) == Date('m',time())) {{ "selected" }} @endif>{{ $monthName[$i] }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select name="year" id="year" class="form-control">
                                    @php $yearNow = (int)Date('Y',time()) @endphp
                                    @for($i=0;$i<5;$i++)
                                        <option value="{{ $yearNow-$i }}" @if(($yearNow-$i) == Date('Y',time())) {{ "selected" }} @endif>{{ $yearNow-$i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </form>