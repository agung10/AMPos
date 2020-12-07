@extends('layouts.app')

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Pengguna</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Pengguna</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        
        <div class="row justify-content-center">
            <!-- liveline-section start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <h5>Data Pengguna</h5>
                                <a href="{{ route('printUsers') }}" class="btn btn-primary btn-sm"><i class="feather icon-printer"></i> Cetak </a>
                            </div>
                            <div class="col-sm-7">
                                <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm"><i class="feather icon-plus"></i> New Pengguna </a>
                            </div>
                            <h5>Search:</h5>
                            <div class="col-sm-2">
                                <form method="get">
                                    <input type="text" class="form-control" name="q">
                                </form>
                            </div>
                        </div>
                        <!-- <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="pr-2 pl-1 text-muted" style="font-size: 20px;"> 
                                    <b>Sorting Options</b>
                                </a>
                            </li>
                        </ul>
                        <ul class="list-inline mb-0">
                            @php
                                $alphabet = range('A','Z');
                            @endphp
                            @foreach($alphabet as $a)
                                <li class="list-inline-item">
                                    <a href="#" class="pr-2 pl-1 text-muted">{{$a}}</a>
                                </li>
                            @endforeach
                        </ul> -->
                    </div>
                </div>
            </div>

            @include('_function.tglIndo')
            @foreach($users as $res)
            <div class="col-lg-4 col-md-6">
                <div class="card user-card user-card-1 mt-4">
                    <div class="card-body pt-0">
                        <div class="user-about-block text-center">
                            <div class="row align-items-end">
                                <div class="col text-left pb-3">
                                    <span class="badge badge-danger">{{ $res->level }}</span>
                                </div>
                                <div class="col">
                                    @if(!empty($res->foto))
                                        <img class="img-radius img-fluid wid-80" src="{{ asset('img_upload/pengguna/'.$res->foto) }}" alt="User image" style="width:60px; height:60px;">
                                    @else
                                        <img class="img-radius img-fluid wid-80" src="{{asset('assets/images/user/avatar-2.jpg')}}" alt="User image" style="width:60px; height:60px;">
                                    @endif
                                </div>
                                <div class="col text-right pb-3">
                                    <div class="dropdown">
                                        <a class="drp-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('users.edit', $res->id) }}">Edit</a>
                                            <a href="#" data-uri="{{ route('users.destroy', $res->id) }}" class="dropdown-item" data-toggle="modal" data-target="#modalDestroy">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#!" data-toggle="modal" data-target="#modal-report">
                                <h4 class="mb-1 mt-3">{{ $res->name }}</h4>
                            </a>
                            <p class="mb-3 text-muted"><i class="feather icon-calendar"></i>
                                @php
                                    $t = $res->tanggal_lahir;
                                @endphp
                                {{ tgl_indo($t)}}
                            </p>
                            <p class="mb-0"><b>Username : </b>{{ $res->username }}</p>
                            <p class="mb-1"><b>Email : </b><a href="{{ $res->email }}">{{ $res->email }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- liveline-section end -->
        </div>

        {{$users->links()}}
        <!-- [ Main Content ] end -->
    </div>
</div>
@include('layouts.component.modalDestroy')
@endsection

@section('customJS')
<script>
    $('#penggunas').addClass('active');
</script>
@endsection