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
							<h5>Riwayat Transaksi</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="index-2.html">
									<i class="feather icon-home"></i>
								</a>
							</li>
							<li class="breadcrumb-item">
								<a href="#!">Riwayat Transaksi</a>
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
                        <h5>Riwayat Transaksi</h5>
                        <a href="{{ route('printRiwayatTransaksi') }}" class="btn btn-primary btn-sm"><i class="feather icon-printer"></i> Cetak </a>
                    </div>
					<div class="card-body">
						<div class="dt-responsive table-responsive">
							<table id="user-list-table" class="table nowrap">
								<thead>
									<tr>
                                        <th>No</th>
                                        <th>Barcode Transaksi</th>
                                        <th>Total Pembelian</th>
                                        <th class="text-center">Metode Pembayaran</th>
										<th class="text-center">Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($checkouts as $res)
										<tr>
											<td>{{ $loop->iteration }}</td>
											<td>
                                                <div class="d-flex flex-column justify-content-center">
                                                <img src="data:image/png;base64,{{DNS1D::getBarcodePNG(
                                                    $res->barcode, 'C39')}}" height="20" width="130">
                                                <span class="text-barcode">{{ $res->kode_unik }}</span>
                                                </div>
                                            </td>
											<td>IDR {{ number_format($res->total,2,',','.') }}</td>
                                            <td class="text-center">
                                                <div class="badge badge-primary">
                                                    {{ $res->metode_pembayaran }}
                                                </div>
                                            </td>
											<td>
												<center><span class="badge badge-light-success">Selengkapnya</span></center>
												<div class="overlay-edit">
													<a class="btn btn-icon btn-secondary edit" href="{{ route('invoice.show', $res->kode_unik) }}"><i class="feather icon-monitor"></i></a>
												</div>
											</td>
										</tr>
									@endforeach
								</tbody>
								<tfoot>
									<tr>
                                        <th>No</th>
                                        <th>Barcode Transaksi</th>
                                        <th>Total Pembelian</th>
                                        <th>Metode Pembayaran</th>
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
@include('layouts.component.modalDestroy')
@endsection

@section('customJS')
<script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/dataTables.bootstrap4.min.js')}}"></script>

<script>
    $('#user-list-table').DataTable();
</script>
@endsection