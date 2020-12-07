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
                            <h5 class="m-b-10">Produk</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Produk</a></li>
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
                                <h5>Data Produk</h5>
                            </div>
                            <div class="col-sm-7">
                                <a href="{{ route('semuaProduk.create') }}" class="btn btn-primary btn-sm"><i class="feather icon-plus"></i> New Produk </a>
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

            @foreach($produks as $res)
            <div class="col-lg-4 col-md-6">
                <div class="card user-card user-card-1 mt-4">
                    <div class="card-body pt-0">
                        <br>
						<div class="row">
							<div class="col-md-2">
								<div class="badge badge-primary" style="font-size:15px;">
									{{ $res->kategori->kategori }}
								</div>
							</div>
							<div class="col-md-7"></div>
							Stok :
							<div class="text-right" style="padding-left:3px;">
								<div class="badge badge-success" style="font-size:15px;">
									{{ $res->stok }}
								</div>
							</div>
						</div>
                        <div class="text-center" style="padding-top:10px;">
							@if(!empty($res->foto))
								<img class="img-fluid" src="{{ asset('img_upload/produk/'.$res->foto) }}" alt="User image" style="width:90%; height:90%; border-radius:10px;">
							@else
								<img class="img-fluid" src="{{asset('assets/images/custom/makanan.jpg')}}" alt="User image" style="width:100%; height:100%; border-radius:10px;">
							@endif
						</div>
						<br>
						<div class="text text-primary" style="font-size:18px;">
                            <b>{{ $res->nama }}</b>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="badge badge-primary" style="font-size:18px;">
									<b>{{ $res->currency->currency }} {{ number_format($res->harga_jual,2,',','.') }}</b>
								</div>
							</div>
							<div class="col-md-6">
							<div class="justify-content-center">
								<img src="data:image/png;base64,{{DNS1D::getBarcodePNG(
								$res->barcode, 'C39')}}" height="30" width="130">
							</div>
							<span class="text-barcode">{{ $res->barcode }}</span>
						</div>
						</div>
							<div style="padding-top:10px;">
								<div style="font-size:18px;">
									Keterangan:
								</div>
								<div class="badge badge-success" style="font-size:15px;">
									<b>{{ $res->keterangan }}</b>
								</div>
							</div>
                    </div>
                    <div style="padding:10px;" class="text-right">
                        <a class="badge badge-success" href="" style="font-size:16px;" data-toggle="modal" data-target=".bd-example-modal-lg">Pesan</a>

						<a class="badge badge-warning edit" href="{{ route('semuaProduk.edit', $res->id) }}" style="font-size:16px;">Ubah</a>
                        <a href="#" data-uri="{{ route('semuaProduk.destroy', $res->id) }}" class="badge badge-danger" data-toggle="modal" data-target="#modalDestroy" style="font-size:16px;">Hapus</a>
					</div>
                </div>
            </div>
            @endforeach
            <!-- liveline-section end -->
		</div>

		{{$produks->links()}}
        <!-- [ Main Content ] end -->
    </div>
</div>

@include('layouts.component.modalDetail')
@include('layouts.component.modalDestroy')
@endsection