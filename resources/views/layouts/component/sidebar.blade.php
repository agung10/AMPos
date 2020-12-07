<nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">

            <div class="">
                <div class="main-menu-header">
                    @if(!empty(\Auth()->user()->foto))
                        <img class="img-radius img-fluid wid-80" src="{{ asset('img_upload/pengguna/'.\Auth()->user()->foto) }}" alt="User image" style="width:60px; height:60px;">
                    @else
                        <img class="img-radius img-fluid wid-80" src="{{asset('assets/images/user/avatar-2.jpg')}}" alt="User image" style="width:60px; height:60px;">
                    @endif
                    <div class="user-details">
                        <div id="more-details">
                            {{ \Auth::user()->name }}
                            <i class="fa fa-caret-down"></i>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="" data-toggle="tooltip" title="Profile">
                                <i class="feather icon-user"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" data-toggle="tooltip" title="Logout" class="text-danger">
                                
                                <i class="feather icon-power"></i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

            @if(\Auth::user()->level == "AdminUtama")
                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Dashboard</label>
                    </li>
                    <li class="nav-item active">
                        <a href="{{route('home')}}" class="nav-link " id="Info">
                            <span class="pcoded-micon">
                                <i class="feather icon-home"></i>
                            </span>
                            <span class="pcoded-mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Manajemen Toko</label>
                    </li>
                    <li class="nav-item" id="info_tokos">
                        <a href="{{route('informasiToko.index')}}" class="nav-link ">
                            <span class="pcoded-micon">
                                <i class="fas fa-home"></i>
                            </span>
                            <span class="pcoded-mtext">Informasi Toko</span>
                        </a>
                    </li>
                    <li class="nav-item" id="penggunas">
                        <a href="{{route('users.index')}}" class="nav-link ">
                            <span class="pcoded-micon">
                                <i class="fas fa-user-friends"></i>
                            </span>
                            <span class="pcoded-mtext">Pengguna</span>
                        </a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Konfigurasi Master</label>
                    </li>
                    <li class="nav-item" id="currencies">
                        <a href="{{route('currencies.index')}}" class="nav-link">
                            <span class="pcoded-micon">
                                <i class="fas fa-dollar-sign"></i>
                            </span>
                            <span class="pcoded-mtext">Currencies</span>
                        </a>
                    </li>
                    <li class="nav-item" id="ppn">
                        <a href="{{ route('ppn.index') }}" class="nav-link ">
                            <span class="pcoded-micon">
                                <i class="fas fa-money-bill-wave"></i>
                            </span>
                            <span class="pcoded-mtext">PPN</span>
                        </a>
                    </li>
                    <li class="nav-item" id="units">
                        <a href="{{ route('unit.index') }}" class="nav-link ">
                            <span class="pcoded-micon">
                                <i class="fas fa-clipboard-list"></i>
                            </span>
                            <span class="pcoded-mtext">Unit</span>
                        </a>
                    </li>
                    <li class="nav-item" id="keuntungans">
                        <a href="{{ route('persentaseKeuntungan.index') }}" class="nav-link ">
                            <span class="pcoded-micon">
                                <i class="fas fa-percentage"></i>
                            </span>
                            <span class="pcoded-mtext">Keuntungan</span>
                        </a>
                    </li>
                    <li class="nav-item" id="kategori">
                        <a href="{{ route('kategoriProduk.index') }}" class="nav-link ">
                            <span class="pcoded-micon">
                                <i class="fas fa-cubes"></i>
                            </span>
                            <span class="pcoded-mtext">Kategori Produk</span>
                        </a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Inventory</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link ">
                            <span class="pcoded-micon">
                                <i class="fas fa-box-open"></i>
                            </span>
                            <span class="pcoded-mtext">Produk</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li id="semua_produks"><a href="{{ route('semuaProduk.index') }}">Semua Produk</a></li>
                            <li id="laporan_semua_produks"><a href="{{ route('produkMasuk') }}">Produk Masuk</a></li>
                            <li id="stok_kosongs"><a href="{{ route('produkKosong.index') }}">Stok Kosong</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Transaksi</label>
                    </li>
                    <li class="nav-item" id="transaksis">
                        <a href="{{ route('transaksi.index') }}" class="nav-link ">
                            <span class="pcoded-micon">
                                <i class="fas fa-shopping-cart"></i>
                            </span>
                            <span class="pcoded-mtext">Transaksi</span>
                        </a>
                    </li>
                    <li class="nav-item" id="riwayat_transaksis">
                        <a href="{{ route('invoice.index') }}" class="nav-link ">
                            <span class="pcoded-micon">
                                <i class="fas fa-history"></i>
                            </span>
                            <span class="pcoded-mtext">Riwayat Transaksi</span>
                        </a>
                    </li>
                </ul>
            @elseif(\Auth::user()->level == "AdminGudang")
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Dashboard</label>
                </li>
                <li class="nav-item active">
                    <a href="{{route('home')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-home"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Konfigurasi Master</label>
                </li>
                <li class="nav-item" id="currencies">
                    <a href="{{route('currencies.index')}}" class="nav-link">
                        <span class="pcoded-micon">
                            <i class="fas fa-dollar-sign"></i>
                        </span>
                        <span class="pcoded-mtext">Currencies</span>
                    </a>
                </li>
                <li class="nav-item" id="ppn">
                    <a href="{{ route('ppn.index') }}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="fas fa-money-bill-wave"></i>
                        </span>
                        <span class="pcoded-mtext">PPN</span>
                    </a>
                </li>
                <li class="nav-item" id="units">
                    <a href="{{ route('unit.index') }}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="fas fa-clipboard-list"></i>
                        </span>
                        <span class="pcoded-mtext">Unit</span>
                    </a>
                </li>
                <li class="nav-item" id="keuntungans">
                    <a href="{{ route('persentaseKeuntungan.index') }}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="fas fa-percentage"></i>
                        </span>
                        <span class="pcoded-mtext">Keuntungan</span>
                    </a>
                </li>
                <li class="nav-item" id="kategori">
                    <a href="{{ route('kategoriProduk.index') }}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="fas fa-cubes"></i>
                        </span>
                        <span class="pcoded-mtext">Kategori Produk</span>
                    </a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Inventory</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="fas fa-box-open"></i>
                        </span>
                        <span class="pcoded-mtext">Produk</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li id="semua_produks"><a href="{{ route('semuaProduk.index') }}">Semua Produk</a></li>
                        <li id="laporan_semua_produks"><a href="{{ route('produkMasuk') }}">Laporan Produk Masuk</a></li>
                        <li id="stok_kosongs"><a href="{{ route('produkKosong.index') }}">Stok Kosong</a></li>
                    </ul>
                </li>
            </ul>

            @elseif(\Auth::user()->level == "Kasir")
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Dashboard</label>
                </li>
                <li class="nav-item active">
                    <a href="{{route('home')}}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-home"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Transaksi</label>
                </li>
                <li class="nav-item" id="transaksis">
                    <a href="{{ route('transaksi.index') }}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="fas fa-shopping-cart"></i>
                        </span>
                        <span class="pcoded-mtext">Transaksi</span>
                    </a>
                </li>
                <li class="nav-item" id="riwayat_transaksis">
                    <a href="{{ route('invoice.index') }}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="fas fa-history"></i>
                        </span>
                        <span class="pcoded-mtext">Riwayat Transaksi</span>
                    </a>
                </li>
            </ul>
            @endif
        </div>
    </div>
</nav>