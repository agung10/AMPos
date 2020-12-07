@extends('layouts.app')

@section('content')
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Invoice</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Invoice</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Invoice ] start -->
            <div class="container" id="printTable">
                <div>
                    <div class="card">
                        <div class="row invoice-contact">
                            <div class="col-md-8">
                                <div class="invoice-box row">
                                    <div class="col-sm-12">
                                        <table class="table table-responsive invoice-table table-borderless p-l-20">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('assets/images/custom/smk-10.png') }}" alt="SMK Negeri 10 Jakarta" style="width:60px;height:60px;">
                                                    </td>
                                                    <td style="padding-top:15px;">
                                                        <h3 style="padding-left:10px;">
                                                            {{ $informasiTokos->nama }}
                                                        </h3>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="card-body">
                            <div class="row invoive-info">
                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Name :</h6>
                                    <h6 class="m-0">{{ Auth::user()->name }}</h6>
                                </div>
                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                </div>
                                <div class="col-md-4 text-right">
                                    <h6 class="m-b-20">Tanggal :</h6>
                                    <h6 class="text-uppercase text-primary">
                                        @include('_function.tglIndo')
                                        <span>{{ hari_ini(date("D")) }}, {{ tgl_indo(date("Y-m-d")) }}</span>
                                    </h6>
                                </div>
                            </div>
                            <div class="row invoive-info">
                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6> <i class="feather icon-align-center"></i> Ringkasan Pembelian</h6>
                                    <p>Semua barang yang dibeli tidak dapat dihapus di sini.</p>
                                </div>
                                <br>
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                    <table id="user-list-table" class="table nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Barcode</th>
                                                <th>Nama Produk</th>
                                                <th>Harga</th>
                                                <th>Jumlah</th>
                                                <th colspan="2">Total Harga</th>
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
                                                <td>IDR {{ number_format($res->produk->harga_jual,2,',','.') }}</td>
                                                <td>{{ $res->jumlah }}</td>
                                                <td>IDR {{ number_format($res->sub_total,2,',','.') }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Barcode</th>
                                                <th>Nama Produk</th>
                                                <th>Harga</th>
                                                <th>Jumlah</th>
                                                <th colspan="2">Total Harga</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-xs-12 invoice-client-info">
                                    <h6> <i class="fas fa-money-bill-alt"></i> Metode Pembayaran</h6>
                                    <p>Metode pembayaran yang kami sediakan adalah untuk memudahkan Anda membayar faktur.</p>
                                </div>
                                <div class="col-md-4 text-right">
                                    <h6>Total</h6>
                                    <h4 class="text-uppercase text-primary">
                                        <span>IDR {{ number_format($totalCarts,2,',','.') }}</span>
                                    </h4>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5><i>Harga sudah termasuk PPN dan diskon toko kami.</i></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 invoice-btn-group text-left">
                            <button class="btn waves-effect waves-light btn-primary btn-print-invoice m-b-10" data-toggle="modal" data-target="#modalCreate">Pembayaran</button>
                            <a href="{{ url()->previous() }}" class="btn waves-effect waves-light btn-secondary m-b-10 ">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Invoice ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>

<!-- modalCreate -->
<div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog confirm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pilih Metode Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('checkout.store') }}" class="needs-validation" novalidate="">
                @csrf
                <input type="hidden" name="total" value="{{ $totalCarts }}">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="selectgroup w-100">
                            <label class="check-task custom-control custom-checkbox d-flex justify-content">
                                <input id="radioCash" type="radio" class="custom-control-input" name="metode_pembayaran" value="Cash" checked="">
                                <span class="custom-control-label">Cash</span>
                            </label>

                            <label class="check-task custom-control custom-checkbox d-flex justify-content">
                                <input id="radioDana" type="radio" class="custom-control-input" name="metode_pembayaran" value="Dana E-Bank">
                                <span class="custom-control-label">Dana E-Bank</span>
                            </label>
                        </div>
                    </div>
                    <div id="cashContent">
                        <div class="form-group">
                            <label>Bayar</label>
                            <input input onkeypress="return isNumberKey(event)" type="text" class="form-control" name="bayar" required="" placeholder="Bayar">
                        </div>
                    </div>
                    <div id="danaContent">
                        <span><i>*Comming Soon.</i></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary has-ripple" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary has-ripple">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('customJS')
<script>
    $('#user-list-table').DataTable();
</script>

<script>
        $('#printInvoice').click(function(){
            window.print()
        })

        $('#danaContent').hide()
        $('#radioCash').click(function(){
            $('#danaContent').hide()
            $('#cashContent').slideDown("slow")
        })
        $('#radioDana').click(function(){
            $('#cashContent').hide()
            $('#danaContent').slideDown("slow")
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