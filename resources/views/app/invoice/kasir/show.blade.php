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
                            <h5 class="m-b-10">Riwayat Transaksi</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Riwayat Transaksi</a></li>
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
                                                        <h4>
                                                            {{ $informasiTokos->nama }}
                                                        </h4>
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
                                        @php
                                            $d = $checkouts->created_at;
                                            $t = $d->format('Y-m-d');
                                        @endphp
                                        <span>{{ hari_ini(date('D', strtotime($t))) }}, {{ tgl_indo($t) }}</span>
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
                                <div class="col-md-8 col-xs-12 invoice-client-info">
                                </div>
                                <div class="col-md-4 text-right">
                                    <h6>Bayar</h6>
                                    <h4 class="text-uppercase text-primary">
                                        <span>IDR {{ number_format($checkouts->bayar,2,',','.') }}</span>
                                    </h4>
                                </div>
                                <div class="col-md-8 col-xs-12 invoice-client-info">
                                </div>
                                <div class="col-md-4 text-right">
                                    <h6>Kembalian</h6>
                                    <h4 class="text-uppercase text-primary">
                                        <span>IDR {{ number_format($checkouts->kembalian,2,',','.') }}</span>
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
                    </div>
                </div>
            </div>
            <!-- [ Invoice ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
@endsection

@section('customJS')
<script>
    $('#user-list-table').DataTable();
</script>

<script>
        $('#printInvoice').click(function(){
            window.print()
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