<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Cart;
use App\Models\Checkout;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $d['users'] = User::all()->count();
        $d['kategori_produks'] = Kategori::all()->count();
        $d['produks'] = Produk::all()->count();
        $d['produk_masuks'] = Produk::orderBy("nama")->count();
        $d['produk_kosongs'] = Produk::where('stok', 0)->orderBy("nama")->count();
        $d['transaksis'] = Cart::where("user_id", \Auth::user()->id)->where("status", 1)->count();
        $d['checkouts'] = Checkout::all()->count();


        return view('home', $d);
    }
}
