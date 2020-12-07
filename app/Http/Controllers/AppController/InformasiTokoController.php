<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\InformasiToko;

class InformasiTokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['info'] = InformasiToko::first();

        return view('app.informasiToko.index', $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InformasiToko  $informasiToko
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InformasiToko  $informasiToko
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InformasiToko  $informasiToko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $d = InformasiToko::find($id);
        $d->nama = $request->input("nama");
        $d->alamat = $request->input("alamat");
        $d->telepon = $request->input("telepon");
        $d->kode_pos = $request->input("kode_pos");
        $d->keterangan = $request->input("keterangan");

        $foto = $request->file('foto');

        if(!empty($foto)){
            $rand = bin2hex(openssl_random_pseudo_bytes(50)).".".$foto->extension();
            $rand_md5 = md5($rand).".".$foto->extension();
            $d->foto = $rand_md5;

            $foto->move(public_path('img_upload/toko'),$rand_md5);
        }

        $d->save();

        return redirect()->route("informasiToko.index")->with("alertUpdate", $request->input("nama"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InformasiToko  $informasiToko
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort(404);
    }
}
