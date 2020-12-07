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
            <h4 class="text-primary">Laporan Kategori Produk</h4>
        </div>
        <div class="hr-line"></div>
        <div class="table-responsive">
            <table class="table table-striped" id="table-1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori Produk</th>
                    <th>Dibuat Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @include("_function.tglIndo")
                @foreach($kategoriProduks as $res)
                    @php
                        $d = $res->created_at;
                        $t = $d->format('Y-m-d');
                    @endphp
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $res->kategori }}</td>
                    <td>
                        <div class="badge badge-primary">
                            {{ tgl_indo($t) }}
                        </div>
                    </td>
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
