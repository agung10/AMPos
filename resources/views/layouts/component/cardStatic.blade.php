@if(\Auth::user()->level == "AdminUtama")
<!-- visitors  start -->
<div class="col-sm-4">
    <div class="card bg-c-red text-white widget-visitor-card">
        <div class="card-body text-center">
            <h2 class="text-white">{{$users}}</h2>
            <h6 class="text-white">Seluruh Pengguna</h6>
            <i class="fas fa-user-friends"></i>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="card bg-c-yellow text-white widget-visitor-card">
        <div class="card-body text-center">
            <h2 class="text-white">{{$kategori_produks}}</h2>
            <h6 class="text-white">Kategori Produk</h6>
            <i class="fas fa-cubes"></i>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="card bg-c-green text-white widget-visitor-card">
        <div class="card-body text-center">
            <h2 class="text-white">{{$produks}}</h2>
            <h6 class="text-white">Semua Produk</h6>
            <i class="fas fa-box-open"></i>
        </div>
    </div>
</div>
<!-- visitors  end -->

<!-- customar project  start -->
<div class="col-xl-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-auto">
                    <i class="fas fa-clipboard-list f-30 text-c-purple"></i>
                </div>
                <div class="col-auto">
                    <h6 class="text-muted m-b-10">Produk Masuk</h6>
                    <h2 class="m-b-0">{{$produk_masuks}}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-auto">
                    <i class="fas fa-truck-loading f-30 text-c-green"></i>
                </div>
                <div class="col-auto">
                    <h6 class="text-muted m-b-10">Stok Kosong</h6>
                    <h2 class="m-b-0">{{ $produk_kosongs }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-auto">
                    <i class="fas fa-shopping-cart f-30 text-c-red"></i>
                </div>
                <div class="col-auto">
                    <h6 class="text-muted m-b-10">Transaksi</h6>
                    <h2 class="m-b-0">{{ $transaksis }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-auto">
                    <i class="fas fa-history f-30 text-c-blue"></i>
                </div>
                <div class="col-auto">
                    <h6 class="text-muted m-b-10">Riwayat Transaksi</h6>
                    <h2 class="m-b-0">{{$checkouts}}</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Revenue-section start -->
<div class="col-xl-12 col-md-12">
    <div class="card">
        <div class="card-body p-0">
            <div class="row d-flex align-items-center m-0">
                <div class="col-6 text-center">
                    <div style="padding:20px 25px;">
                        <h2 class="text-c-purple mb-0">
                            <div id="date"></div>
                        </h2>
                    </div>
                </div>
                <div class="col-6 text-center bg-primary p-0">
                    <div style="padding:20px 25px;">
                        <h2 class="mb-0 text-white f-w-400">
                            <div id="time"></div>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Revenue-section end -->

@elseif(\Auth::user()->level == "AdminGudang")
<!-- visitors  start -->
<div class="col-sm-6">
    <div class="card bg-c-yellow text-white widget-visitor-card">
        <div class="card-body text-center">
            <h2 class="text-white">{{$kategori_produks}}</h2>
            <h6 class="text-white">Kategori Produk</h6>
            <i class="fas fa-cubes"></i>
        </div>
    </div>
</div>
<div class="col-sm-6">
    <div class="card bg-c-green text-white widget-visitor-card">
        <div class="card-body text-center">
            <h2 class="text-white">{{$produks}}</h2>
            <h6 class="text-white">Semua Produk</h6>
            <i class="fas fa-box-open"></i>
        </div>
    </div>
</div>
<!-- visitors  end -->

<!-- customar project  start -->
<div class="col-xl-4 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-auto">
                    <i class="fas fa-clipboard-list f-30 text-c-purple"></i>
                </div>
                <div class="col-auto">
                    <h6 class="text-muted m-b-10">Produk Masuk</h6>
                    <h2 class="m-b-0">{{$produk_masuks}}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-auto">
                    <i class="fas fa-truck-loading f-30 text-c-green"></i>
                </div>
                <div class="col-auto">
                    <h6 class="text-muted m-b-10">Stok Kosong</h6>
                    <h2 class="m-b-0">{{ $produk_kosongs }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Revenue-section start -->
<div class="col-xl-12 col-md-12">
    <div class="card">
        <div class="card-body p-0">
            <div class="row d-flex align-items-center m-0">
                <div class="col-6 text-center">
                    <div style="padding:20px 25px;">
                        <h2 class="text-c-purple mb-0">
                            <div id="date"></div>
                        </h2>
                    </div>
                </div>
                <div class="col-6 text-center bg-primary p-0">
                    <div style="padding:20px 25px;">
                        <h2 class="mb-0 text-white f-w-400">
                            <div id="time"></div>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Revenue-section end -->

@elseif(\Auth::user()->level == "Kasir")
<div class="col-xl-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-auto">
                    <i class="fas fa-shopping-cart f-30 text-c-red"></i>
                </div>
                <div class="col-auto">
                    <h6 class="text-muted m-b-10">Transaksi</h6>
                    <h2 class="m-b-0">{{ $transaksis }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center m-l-0">
                <div class="col-auto">
                    <i class="fas fa-history f-30 text-c-blue"></i>
                </div>
                <div class="col-auto">
                    <h6 class="text-muted m-b-10">Riwayat Transaksi</h6>
                    <h2 class="m-b-0">{{$checkouts}}</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Revenue-section start -->
<div class="col-xl-12 col-md-12">
    <div class="card">
        <div class="card-body p-0">
            <div class="row d-flex align-items-center m-0">
                <div class="col-6 text-center">
                    <div style="padding:20px 25px;">
                        <h2 class="text-c-purple mb-0">
                            <div id="date"></div>
                        </h2>
                    </div>
                </div>
                <div class="col-6 text-center bg-primary p-0">
                    <div style="padding:20px 25px;">
                        <h2 class="mb-0 text-white f-w-400">
                            <div id="time"></div>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Revenue-section end -->
@endif
