@extends('layouts.app')

@section('customCSS')
<link rel="stylesheet" href="{{asset('assets/css/plugins/dataTables.bootstrap4.min.css')}}">
<link href="{{asset('assets/css/plugins/select2.min.css')}}" rel="stylesheet">

<style>
	.modal-footer{
		border-top: none !important;
	}
</style>
@endsection

@section('content')
<div class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5>Transaksi</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="index-2.html">
									<i class="feather icon-home"></i>
								</a>
							</li>
							<li class="breadcrumb-item">
								<a href="#!">Transaksi</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">
			<div class="col-lg-4">
				<div class="card user-profile-list">
                <form method="POST" action="{{ route('transaksi.store') }}">
                @csrf
					<div class="card-header">
                        <center><h5>Pilih Produk</h5></center>
                    </div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <select id="produkSelect" class="js-example-placeholder-multiple-p col-sm-12" name="produk_id">
                                        <option value=""></option>
                                        @foreach($produks as $res)
                                            <option value="{{ $res->id }}">{{ $res->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div id="trDetailProduk" class="tr-detail-produk">
                                    <p>Stok Tersisa : <b id="tr_stok" >0</b></p>
                                    <p>Harga : <b id="tr_harga">IDR 101011</b></p>
                                    <span><i>Sudah termasuk PPN & Diskon toko</i></span>
                                </div>
							</div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input input onkeypress="return isNumberKey(event)" type="text" class="form-control" value="1" name="jumlah" required>
                                </div>
                                <div class="col-sm-4">
                                    <button class="btn btn-outline-primary has-ripple" id="submit-btn">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="card user-profile-list">
                    <div class="card-header d-flex justify-content-between">
                        <h4>Keranjang</h4>
                        @if($totalCarts != 0)
                        <a class="btn btn-warning btn-sm" href="{{ route('transaksiClean') }}"> <i class="fas fa-trash-alt"></i> Bersihkan Keranjang</a>
                        @endif
                    </div>
					<div class="card-body">
						<div class="dt-responsive table-responsive">
							<table id="user-list-table" class="table nowrap">
								<thead>
									<tr>
                                        <th>No</th>
                                        <th>Barcode Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Jumlah</th>
                                        <th>Total Harga</th>
										<th class="text-center">Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($carts as $res)
										<tr>
											<td>{{ $loop->iteration }}</td>
											<td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <img src="data:image/png;base64,{{DNS1D::getBarcodePNG(
                                                    $res->produk->barcode, 'C39')}}" height="20" width="130">
                                                    <span class="text-barcode">{{ $res->produk->barcode }}</span>
                                                </div>
                                            </td>
											<td>{{ $res->produk->nama }}</td>
                                            <td>{{ $res->jumlah }}</td>
                                            <td>{{ $res->produk->currency->currency }} {{ number_format($res->sub_total,2,',','.') }}</td>
											<td>
												<center><span class="badge badge-light-success">Delete</span></center>
												<div class="overlay-edit">
													<a href="#" data-uri="{{ route('transaksi.destroy', $res->id) }}" class="btn btn-icon btn-danger" data-toggle="modal" data-target="#modalDestroy"><i class="feather icon-trash-2"></i></a>
												</div>
											</td>
										</tr>
									@endforeach
								</tbody>
								<tfoot>
									<tr>
                                        <th>No</th>
                                        <th>Barcode Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Jumlah</th>
                                        <th>Total Harga</th>
										<th class="text-center">Aksi</th>
									</tr>
								</tfoot>
							</table>
                        </div>
                        <hr>
                            <div class="text-right">
                                <p class="h5">Total Harga : <b>IDR {{ number_format($totalCarts,2,',','.') }}</b></p>
                            </div>
                        </hr>
                    </div>
                    <div class="card-footer text-right">
                        @if($totalCarts != 0)
                        <a href="{{ route('checkout.index') }}" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Checkout</a>
                        @endif
                    </div>
				</div>
			</div>
		</div>
		<!-- [ Main Content ] end -->
	</div>
</div>
@include('layouts.component.modalDestroy')
@endsection

@section('customJS')
<script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/dataTables.bootstrap4.min.js')}}"></script>
<!-- select2 Js -->
<script src="{{asset('assets/js/plugins/select2.full.min.js')}}"></script>
<!-- form-select-custom Js -->
<script src="{{asset('assets/js/pages/form-select-custom.js')}}"></script>
<script>
    $('#user-list-table').DataTable();
</script>

<script>
        $('#trDetailProduk').hide()
        function formatMoney(amount, decimalCount = 2, decimal = ",", thousands = ".") {
            try {
                decimalCount = Math.abs(decimalCount);
                decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

                const negativeSign = amount < 0 ? "-" : "";

                let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
                let j = (i.length > 3) ? i.length % 3 : 0;

                return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
            } catch (e) {
                console.log(e)
            }
            };
        $('#produkSelect').change(function(){
            let _id = $(this).val()
            if(_id != ""){
                $.ajax({
                    url: "{{ url('produkAjax') }}/"+_id,
                    method: "GET",
                    success:function(data){
                        $('#tr_stok').html(data.stok)
                        $('#tr_harga').html("IDR "+formatMoney(data.harga_jual))
                        $('#trDetailProduk').slideDown("slow")
                    }
                })
            }
            else{
                $('#trDetailProduk').slideUp("slow")
            }
        })


        function isNumberKey(evt)
        {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

            return true;
        }
    </script>
@endsection