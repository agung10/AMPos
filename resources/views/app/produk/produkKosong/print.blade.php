@include("layouts.component.head")

<style>
    body{
        background-color: #fff !important;
    }
    .img-print img{
        width: 100px;
    }
</style>
<section class="section">
    <div class="print-padding d-flex flex-column text-left">
        <div class="img-print d-flex justify-content-center mb-4">
            @if(!empty($informasiTokos->foto))
                <img style="border-radius:15px;" src="{{ asset('img_upload/toko/'.$informasiTokos->foto) }}" alt="{{ $informasiTokos->nama }}">
            @else
                <img style="border-radius:15px;" src="{{ asset('assets/images/custom/smk-10.png') }}" alt="SMK Negeri 10 Jakarta">
            @endif
        </div>
        <div class="w-full text-center d-flex justify-content-center flex-column">
            <h1>{{ $informasiTokos->nama }}</h1>
            <p>{!! $informasiTokos->alamat !!}</p>
        </div>
        <div class="text-center mt-3">
            <h4 class="text-primary">Laporan Produk Kosong</h4>
        </div>
        <div class="hr-line"></div>
        <div class="table-responsive">
            <table class="table table-striped" id="table-1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barcode</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produkKosongs as $res)
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
                    <td>{!! $res->keterangan !!}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</section>
<script>
    window.print()
</script>
