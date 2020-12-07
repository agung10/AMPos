@include('_function.tglIndo')
@foreach($produks as $res)
@php
    $d = $res->created_at;
    $t = $d->format('Y-m-d');
@endphp

@if($res != null)
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">Detail Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                <!-- customar project  start -->
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="text-center">
                                @if(!empty($res->foto))
                                    <img class="img-fluid" src="{{ asset('img_upload/produk/'.$res->foto) }}" alt="User image" style="width:100%; height:100%; border-radius:10px;">
                                @else
                                    <img class="img-fluid" src="{{asset('assets/images/custom/makanan.jpg')}}" alt="User image" style="width:100%; height:100%; border-radius:10px;">
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <form class="pl-lg-4">
                                <h6 class="text-muted">Kategori: {{$res->kategori->kategori}}</h6>
                                <h4 class="mt-0">{{$res->nama}} <a href="javascript: void(0);" class="text-muted"><i class="mdi mdi-square-edit-outline ml-2"></i></a> </h4>
                                <p class="mb-1">Ditambahkan Tanggal: <span class="badge badge-success"> {{ tgl_indo($t) }} </span> </p>
                                <div class="mt-3">
                                    <h5>Stok: <span class="badge badge-success">{{$res->stok}}</span></h5>
                                </div>
                                <div class="mt-4">
                                    <h6>Spesial Harga:</h6>
                                    <h3>{{ $res->currency->currency }} {{ number_format($res->harga_jual,2,',','.') }} <small class="text-success h5">{{$res->diskon}}% off</small></h3>
                                </div>
                                <br>
                                <div class="row">
                                    @if(\Auth::user()->level == "AdminGudang")
                                    @else
                                    <div class="col-sm-6">
                                        <h6><i class="feather icon-map-pin"></i> Jakarta</h6>
                                    </div>
                                        <a href="{{ route('transaksi.index') }}" class="btn btn-block btn-md btn-danger mt-md-0 mt-2"><i class="fas fa-bolt mr-1"></i> Pembelian </a>
                                    @endif
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-12">
                            <div class="mt-4">
                                <h6>Deskripsi:</h6>
                                <p>{{ $res->keterangan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- customar project  end -->
            </div>
        </div>
        </div>
    </div>
</div>
@else
@endif
@endforeach