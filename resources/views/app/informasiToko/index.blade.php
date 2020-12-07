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
                            <h5 class="m-b-10">Informasi Toko</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index-2.html"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Informasi Toko</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <form method="POST" action="{{ route('informasiToko.update', $info->id) }}" enctype="multipart/form-data">
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
                                @if(!empty($info->foto))
                                    <input name="foto" type="file" class="dropify" data-default-file="{{ asset('img_upload/toko/'.$info->foto) }}"/>
                                @else
                                    <input name="foto" type="file" class="dropify" data-default-file="{{ asset('assets/images/custom/smk-10.png') }}" alt="SMK Negeri 10 Jakarta">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ file-upload ] end -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama" value="{{ $info->nama }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telepon">Telepon</label>
                                        <input input onkeypress="return isNumberKey(event)" type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukan Nomor" value="{{ $info->telepon }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" rows="2" name="alamat" placeholder="Masukan Alamat">{{ $info->alamat }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="kode_pos">Kode Pos</label>
                                        <input type="text" class="form-control" id="kode_pos" name="kode_pos" placeholder="Masukan Kode Pos" value="{{ $info->kode_pos }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group fill">
                                        <label for="keterangan">Keterangan</label>
                                        <input type="text" class="form-control" id="keterangan"  name="keterangan" placeholder="Keterangan" value="{{ $info->keterangan }}">
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                            <button type="submit" class="btn btn-outline-primary has-ripple">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
@endsection

@section('customJS')
<script>
    function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
          return false;

        return true;
    }
    
    $('#info_tokos').addClass('active');
</script>
@endsection