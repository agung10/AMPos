<?php

namespace App\Http\Controllers\AppController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Models\InformasiToko;

class UserController extends Controller
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
            $d['users'] = User::where("name", 'LIKE','%'.$q.'%')->orWhere("username", 'LIKE','%'.$q.'%')->orWhere("email", 'LIKE','%'.$q.'%')->orWhere("alamat", 'LIKE','%'.$q.'%')->orderBy("id", "DESC")->paginate(3);
        }
        else{
            $d['users'] = User::orderBy("id", "DESC")->paginate(3);
        }
        $d['alphabets'] = User::all();

        return view("app.users.index", $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d['users'] = User::all();

        return view('app.users.create', $d);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email'    => 'required|unique:users',
            'username' => 'required|unique:users'
        ]);
        $d = new User;
        $d->name = $request->input("name");
        $d->username = $request->input("username");
        $d->email = $request->input("email");
        $d->tanggal_lahir = $request->input("tanggal_lahir");
        $d->alamat = $request->input("alamat");
        $d->level = $request->input("level");
        $d->password= \Hash::make($request->input("password"));

        $d->koperasi_id = 1;

        $foto = $request->file('foto');

        if(!empty($foto)){
            $rand = bin2hex(openssl_random_pseudo_bytes(50)).".".$foto->extension();
            $rand_md5 = md5($rand).".".$foto->extension();
            $d->foto = $rand_md5;

            $foto->move(public_path('img_upload/pengguna'),$rand_md5);
        }

        $d->save();

        return redirect()->route("users.index")->with("alertStore", $request->input("name"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d['users'] = User::find($id);

        return view("app.users.edit", $d);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $d = User::find($id);
        $d->name = $request->input("name");
        $d->username = $request->input("username");
        $d->tanggal_lahir = $request->input("tanggal_lahir");
        $d->alamat = $request->input("alamat");
        $d->level = $request->input("level");
        if(!empty($request->input("password"))){
            $d->password= \Hash::make($request->input("password"));
        }
        $d->koperasi_id = 1;

        $foto = $request->file('foto');

        if(!empty($foto)){
            $rand = bin2hex(openssl_random_pseudo_bytes(50)).".".$foto->extension();
            $rand_md5 = md5($rand).".".$foto->extension();
            $d->foto = $rand_md5;

            $foto->move(public_path('img_upload/pengguna'),$rand_md5);
        }

        $d->save();

        return redirect()->route("users.index")->with("alertUpdate", $request->input("name"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = User::find($id);
        $name = $d->name;
        $d->delete();

        return redirect()->route("users.index")->with("alertDestroy", $name);
    }

    public function print(){
        $d['users'] = User::orderBy("ID", "DESC")->get();
        $d['informasiTokos'] = InformasiToko::first();
        
        return view('app.users.print', $d);
    }
}
