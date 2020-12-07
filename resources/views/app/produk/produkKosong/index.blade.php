@extends('layouts.app')

@section('customCSS')
<link rel="stylesheet" href="{{asset('assets/css/plugins/dataTables.bootstrap4.min.css')}}">

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
							<h5>Produk Kosong</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="index-2.html">
									<i class="feather icon-home"></i>
								</a>
							</li>
							<li class="breadcrumb-item">
								<a href="#!">Produk Kosong</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">
			<div class="col-lg-12">
				<div class="card user-profile-list">
                    <div class="card-header">
                        <h5>Produk Kosong</h5>
                        <a href="{{ route('printProdukKosongs') }}" class="btn btn-primary btn-sm"><i class="feather icon-printer"></i> Cetak </a>
                    </div>
					<div class="card-body">
						<div class="dt-responsive table-responsive">
							<table id="user-list-table" class="table nowrap">
								<thead>
									<tr>
                                        <th>No</th>
                                        <th>Barcode</th>
                                        <th>Nama Produk</th>
                                        <th>Kategori</th>
                                        <th>Stok</th>
                                        <th class="text-center">Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($produks as $res)
										<tr>
											<td>{{ $loop->iteration }}</td>
											<td>
                                                <div class="d-flex flex-column justify-content-center">
                                                <img src="data:image/png;base64,{{DNS1D::getBarcodePNG(
                                                    $res->barcode, 'C39')}}" height="20" width="130">
                                                <span class="text-barcode">{{ $res->barcode }}</span>
                                                </div>
                                            </td>
											<td>{{ $res->nama }}</td>
                                            <td>{{ $res->kategori->kategori }}</td>
                                            <td>{{ $res->stok }}</td>
                                            <td>
												<center><span class="badge badge-light-success">Edit</span></center>
												<div class="overlay-edit">
                                                    <a href="#"__stok="{{ $res->stok }}" __action="{{ route('produkKosong.update', $res->id) }}" class="btn btn-icon btn-warning edit"><i class="feather icon-edit"></i></a>
												</div>
											</td>
										</tr>
									@endforeach
								</tbody>
								<tfoot>
									<tr>
                                        <th>No</th>
                                        <th>Barcode</th>
                                        <th>Nama Produk</th>
                                        <th>Kategori</th>
                                        <th>Stok</th>
                                        <th class="text-center">Aksi</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- [ Main Content ] end -->
	</div>
</div>

<!-- modalCreate -->
<button id="openFormEdit" data-toggle="modal" data-target="#modalCreate" style="display:none"></button>
<div id="modalCreate" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Stok</h5>
                &nbsp;&nbsp;<span id="namaProduk" class="badge badge-secondary"></span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
			</div>
			<form id="formEdit" method="POST" action="" class="needs-validation" novalidate="">
			@csrf
			{{ method_field('PUT') }}
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="stok">Stok</label>
								<input type="text" class="form-control" name="stok" value="0" required="" placeholder="Masukan Stok">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary has-ripple" data-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-outline-primary has-ripple">Ubah</button>
				</div>
			</form>
        </div>
    </div>
</div>
@include('layouts.component.modalDestroy')
@endsection

@section('customJS')
<script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/dataTables.bootstrap4.min.js')}}"></script>

<script>
    $('#user-list-table').DataTable();

    $('.edit').click(function(){
        let __stok = $(this).attr("__stok")
        let __action = $(this).attr("__action")

        $('#formEdit').attr("action", __action)
        $('#namaProduk').html(__stok)
        $('#openFormEdit').click()
    })
</script>
@endsection