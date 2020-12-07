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
                            <h5 class="m-b-10">Create Pengguna</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index-2.html"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Create Pengguna</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <!-- [ file-upload ] start -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <center><h5>Masukan Foto Jika Ada</h5></center>
                        </div>
                        <div class="card-body">
                            <div class="fallback">
                                <input type="file" name="foto" class="dropify" data-default-file="{{asset('assets/images/user/avatar-2.jpg')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ file-upload ] end -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h5>Tambah Data Pengguna</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukan name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="email">E-Mail Address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukan E-Mail Address">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group fill">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir"  name="tanggal_lahir" placeholder="123">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="alamat" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="level">Level</label>
                                        <select class="js-example-placeholder-multiple col-sm-12" name="level">
                                            @php
                                                $lev = ["AdminUtama", "AdminGudang", "Kasir"]
                                            @endphp
                                            @foreach($lev as $level)
                                                <option value=""></option>
                                                <option value="{{ $level }}">{{ $level }}</option>
                                            @endforeach
                                        </select>
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
    $('#penggunas').addClass('active');
</script>
@endsection