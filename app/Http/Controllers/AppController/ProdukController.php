<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Unit;
use App\Models\Currency;
use App\Models\PersentaseKeuntungan;
use App\Models\Ppn;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->q;
        if(!empty($q)){
            $d['produks'] = Produk::where("nama", 'LIKE','%'.$q.'%')->orWhere("keterangan", 'LIKE','%'.$q.'%')->orderBy("id", "DESC")->paginate(3);
        }
        else{
            $d['produks'] = Produk::orderBy("id", "DESC")->paginate(3);
        }
        

        return view("app.produk.semuaProduk.index", $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d['kategoris'] = Kategori::orderBy("id", "DESC")->get();
        $d['units'] = Unit::orderBy("id", "DESC")->get();
        $d['currencies'] = Currency::orderBy("id", "DESC")->get();
        $d['persentaseKeuntungans'] = PersentaseKeuntungan::orderBy("id", "DESC")->get();
        $d['ppns'] = Ppn::orderBy("id", "DESC")->get();

        return view("app.produk.semuaProduk.create", $d);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $d = new Produk;
    	$barcode = rand(1111111111111111,9999999999999999);
    	$d->barcode = $barcode;
    	$d->kategori_id = $request->kategori_id;
    	$d->currency_id = $request->currency_id;
    	$d->unit_id = $request->unit_id;
    	$d->nama = $request->nama;
    	$d->stok = $request->stok;
    	$d->harga_beli = $request->harga_beli;
    	$d->keterangan = $request->keterangan;
        $d->diskon = $request->diskon;
        $d->laba = $request->laba;
        $d->ppn = $request->ppn;

        $foto = $request->file('foto');

        if(!empty($foto)){
            $rand = bin2hex(openssl_random_pseudo_bytes(50)).".".$foto->extension();
            $rand_md5 = md5($rand).".".$foto->extension();
            $d->foto = $rand_md5;

            $foto->move(public_path('img_upload/produk'),$rand_md5);
        }

        if($request->diskon != null){
            $diskon = $request->harga_beli * $request->diskon / '100';
            $minus = $request->harga_beli - $diskon;
            $persen = $minus * ($request->laba + $request->ppn) / '100';
            $d->harga_jual = $persen + $minus;
        }
        else{
            $persen = $request->harga_beli * ($request->laba + $request->ppn) / '100';
            $d->harga_jual = $request->harga_beli + $persen;
        }

    	$d->save();

        return redirect()->route("semuaProduk.index")->with("alertStore", $request->input("nama"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $d = Produk::find($id);

        return response()->json($d);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d['kategoris'] = Kategori::orderBy("id", "DESC")->get();
        $d['units'] = Unit::orderBy("id", "DESC")->get();
        $d['currencies'] = Currency::orderBy("id", "DESC")->get();
        $d['persentaseKeuntungans'] = PersentaseKeuntungan::orderBy("id", "DESC")->get();
        $d['ppns'] = Ppn::orderBy("id", "DESC")->get();

        $d['produks'] = Produk::find($id);

        return view("app.produk.semuaProduk.edit", $d);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $d = Produk::find($id);
        $barcode = rand(1111111111111111,9999999999999999);
    	$d->barcode = $barcode;
    	$d->kategori_id = $request->kategori_id;
    	$d->currency_id = $request->currency_id;
    	$d->unit_id = $request->unit_id;
    	$d->nama = $request->nama;
    	$d->stok = $request->stok;
    	$d->harga_beli = $request->harga_beli;
    	$d->keterangan = $request->keterangan;
        $d->diskon = $request->diskon;
        $d->laba = $request->laba;
        $d->ppn = $request->ppn;

        $foto = $request->file('foto');

        if(!empty($foto)){
            $rand = bin2hex(openssl_random_pseudo_bytes(50)).".".$foto->extension();
            $rand_md5 = md5($rand).".".$foto->extension();
            $d->foto = $rand_md5;

            $foto->move(public_path('img_upload/produk'),$rand_md5);
        }

        if($request->diskon != null){
            $diskon = $request->harga_beli * $request->diskon / '100';
            $minus = $request->harga_beli - $diskon;
            $persen = $minus * ($request->laba + $request->ppn) / '100';
            $d->harga_jual = $persen + $minus;
        }
        else{
            $persen = $request->harga_beli * ($request->laba + $request->ppn) / '100';
            $d->harga_jual = $request->harga_beli + $persen;
        }

        $d->save();

        return redirect()->route("semuaProduk.index")->with("alertUpdate", $request->input("nama"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Produk::find($id);
        $nama = $d->nama;
        $d->delete();

        return redirect()->route("semuaProduk.index")->with("alertDestroy", $nama);
    }
}
