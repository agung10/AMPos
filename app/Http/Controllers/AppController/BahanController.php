<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['bahans'] = Bahan::orderBy("id", "DESC")->get();

        return view("app.bahan.index", $d);
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
        $d = new Bahan;
        $d->bahan = $request->input("bahan");
        $d->satuan = $request->input("satuan");

        $d->save();

        return redirect()->route("bahan.index")->with("alertStore", $request->input("bahan"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bahan  $bahan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bahan  $bahan
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
     * @param  \App\Models\Bahan  $bahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $d = Bahan::find($id);
        $d->bahan = $request->input("bahan");
        $d->satuan = $request->input("satuan");

        $d->save();

        return redirect()->route("bahan.index")->with("alertUpdate", $request->input("bahan"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bahan  $bahan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Bahan::find($id);
        $bahan = $d->bahan;
        $d->delete();

        return redirect()->route("bahan.index")->with("alertDestroy", $bahan);
    }
}
