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
							<h5>Unit</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="index-2.html">
									<i class="feather icon-home"></i>
								</a>
							</li>
							<li class="breadcrumb-item">
								<a href="#!">Unit</a>
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
					<div class="card-header">
                        <center><h5>Tambah Unit</h5></center>
                    </div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<form method="POST" action="{{ route('unit.store') }}">
								@csrf
									<div class="form-group">
										<label for="unit">Unit</label>
										<input type="text" class="form-control" id="unit" name="unit" placeholder="Masukan Unit">
									</div>
									<button type="submit" class="btn btn-outline-primary has-ripple">Tambah</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="card user-profile-list">
                    <div class="card-header">
                        <h5>Table Unit</h5>
                    </div>
					<div class="card-body">
						<div class="dt-responsive table-responsive">
							<table id="user-list-table" class="table nowrap">
								<thead>
									<tr>
										<th>No</th>
										<th>Unit</th>
										<th>Dibuat Tanggal</th>
										<th class="text-center">Aksi</th>
									</tr>
								</thead>
								<tbody>
									@include('_function.tglIndo')
									@foreach($units as $res)
									@php
										$d = $res->created_at;
										$t = $d->format('Y-m-d');
									@endphp
										<tr>
											<td>{{ $loop->iteration }}</td>
											<td>{{ $res->unit }}</td>
											<td>
												<span class="badge badge-light-success">{{ tgl_indo($t) }}</span>
											</td>
											<td>
												<center><span class="badge badge-light-success">Edit dan Delete</span></center>
												<div class="overlay-edit">
													<a href="#"__unit="{{ $res->unit }}" __action="{{ route('unit.update', $res->id) }}" class="btn btn-icon btn-warning edit"><i class="feather icon-edit"></i></a>
													<a href="#" data-uri="{{ route('unit.destroy', $res->id) }}" class="btn btn-icon btn-danger" data-toggle="modal" data-target="#modalDestroy"><i class="feather icon-trash-2"></i></a>
												</div>
											</td>
										</tr>
									@endforeach
								</tbody>
								<tfoot>
									<tr>
                                        <th>No</th>
										<th>Unit</th>
										<th>Dibuat Tanggal</th>
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

<!-- modalEdit -->
<button id="openModalEdit" data-toggle="modal" data-target="#modalEdit" style="display:none"></button>
<div id="modalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Unit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<form id="formEdit" method="POST" action="" class="needs-validation" novalidate="">
			@csrf
			{{ method_field('PUT') }}
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="unit">Unit</label>
								<input type="text" class="form-control" id="unitInputEdit" name="unit" placeholder="Masukan Unit">
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
<script>
	$('.edit').click(function(e){
		e.preventDefault()

		let __unit = $(this).attr("__unit")
		let __action = $(this).attr("__action")

		$('#formEdit').attr("action", __action)
		$("#unitInputEdit").val(__unit)

		$("#openModalEdit").click()
	})
</script>
<script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/dataTables.bootstrap4.min.js')}}"></script>

<script>
    $('#user-list-table').DataTable();
</script>
@endsection