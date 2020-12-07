<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PersentaseKeuntungan;

class PersentaseKeuntunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['persentase_keuntungans'] = PersentaseKeuntungan::orderBy("ID", "DESC")->get();

        return view('app.persentaseKeuntungan.index', $d);
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
        $d = new PersentaseKeuntungan;
        $d->persentase_keuntungan = $request->input("persentase_keuntungan");

        $d->save();

        return redirect()->route("persentaseKeuntungan.index")->with("alertStore", $request->input("persentase_keuntungan"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersentaseKeuntungan  $persentaseKeuntungan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersentaseKeuntungan  $persentaseKeuntungan
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
     * @param  \App\Models\PersentaseKeuntungan  $persentaseKeuntungan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $d = PersentaseKeuntungan::find($id);
        $d->persentase_keuntungan = $request->input("persentase_keuntungan");

        $d->save();

        return redirect()->route("persentaseKeuntungan.index")->with("alertUpdate", $request->input("persentase_keuntungan"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersentaseKeuntungan  $persentaseKeuntungan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = PersentaseKeuntungan::find($id);
        $persen = $d->persentase_keuntungan;

        $d->delete();

        return redirect()->route("persentaseKeuntungan.index")->with("alertDestroy", $persen);
    }
}
