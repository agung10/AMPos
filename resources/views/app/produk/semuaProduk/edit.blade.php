@extends('layouts.app')

@section('customCSS')
    <link href="{{asset('assets/libs/dropify/dropify.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/plugins/select2.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Tambah Produk</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index-2.html"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Tambah Produk</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <form method="POST" action="{{ route('semuaProduk.update', $produks->id) }}" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="row">
            <!-- [ file-upload ] start -->
            <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <center><h5>Masukan Foto Jika Ada</h5></center>
                        </div>
                        <div class="card-body">
                            <div class="fallback">
                                @if(!empty($produks->foto))
                                    <input name="foto" type="file" class="dropify" data-default-file="{{ asset('img_upload/produk/'.$produks->foto) }}"/>
                                @else
                                    <input type="file" name="foto" class="dropify" data-default-file="{{asset('assets/images/custom/makanan.jpg')}}"/>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            <!-- [ file-upload ] end -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Tambah Data Produk</h5>
                    </div>
                    <div class="card-body"> 
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="nama">Nama Produk</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Produk" value="{{ $produks->nama }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="js-example-placeholder-multiple-k col-sm-12" name="kategori_id">
                                    <option value=""></option>
                                        @foreach($kategoris as $res)
                                            @if($produks->kategori_id == $res->id)
                                                <option value="{{ $res->id }}" selected>{{ $res->kategori }}</option>
                                            @else
                                                <option value="{{ $res->id }}">{{ $res->kategori }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <input input onkeypress="return isNumberKey(event)" type="text" class="form-control" id="stok" name="stok" placeholder="Masukan Stok" value="{{ $produks->stok }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Currency</label>
                                    <select class="js-example-placeholder-multiple-c col-sm-12" name="currency_id">
                                    <option value=""></option>
                                        @foreach($currencies as $res)
                                            @if($produks->currency_id == $res->id)
                                                <option value="{{ $res->id }}" selected>{{ $res->currency }}</option>
                                            @else
                                                <option value="{{ $res->id }}">{{ $res->currency }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Unit</label>
                                    <select class="js-example-placeholder-multiple-u col-sm-12" name="unit_id">
                                    <option value=""></option>
                                        @foreach($units as $res)
                                            @if($produks->unit_id == $res->id)
                                                <option value="{{ $res->id }}" selected>{{ $res->unit }}</option>
                                            @else
                                                <option value="{{ $res->id }}">{{ $res->unit }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="harga_beli">Harga Beli</label>
                                    <input input onkeypress="return isNumberKey(event)" type="text" class="form-control" id="harga_beli" name="harga_beli" placeholder="Masukan Harga Beli" value="{{ $produks->harga_beli }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Harga Jual</label>
                                    <select class="js-example-placeholder-multiple-h col-sm-12" name="laba">
                                    <option value=""></option>
                                    <option value="{{ $produks->laba }}" selected>{{ $produks->laba }}%</option>
                                        @foreach($persentaseKeuntungans as $res)
                                            <option value="{{ $res->persentase_keuntungan }}">{{ $res->persentase_keuntungan }}%</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Stok Minimum &mdash; PPN</label>
                                    <select class="js-example-placeholder-multiple-s col-sm-12" name="ppn">
                                    <option value=""></option>
                                    <option value="{{ $produks->ppn }}" selected>{{ $produks->ppn }}%</option>
                                        @foreach($ppns as $res)
                                            <option value="{{ $res->ppn }}">{{ $res->stok_minimum }} &mdash; {{ $res->ppn }}%</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="diskon">Diskon Produk</label>
                                    <input input onkeypress="return isNumberKey(event)" type="text" class="form-control" id="diskon" name="diskon" placeholder="Masukan Diskon %" value="{{ $produks->diskon }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea class="form-control" rows="2" name="keterangan" placeholder="Masukan keterangan">{!! $produks->keterangan !!}</textarea>
                                </div>
                            </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-outline-primary has-ripple">Ubah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
@endsection

@section('customJS')
<script src="{{asset('assets/js/plugins/dropzone-amd-module.min.js')}}"></script>
<!-- dropify js -->
<script src="{{asset('assets/libs/dropify/dropify.min.js')}}"></script>
<!-- form-upload init -->
<script src="{{asset('assets/js/pages/form-fileupload.init.js')}}"></script>
<!-- select2 Js -->
<script src="{{asset('assets/js/plugins/select2.full.min.js')}}"></script>
<!-- form-select-custom Js -->
<script src="{{asset('assets/js/pages/form-select-custom.js')}}"></script>

<script>
    function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
          return false;

        return true;
    }
</script>
@endsection