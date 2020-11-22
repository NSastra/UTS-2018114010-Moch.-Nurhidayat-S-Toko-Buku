<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produks;
use App\Models\Produk;
use Illuminate\Http\Request;

/** Setiap kali ada model baru yang dibuat dan digunakan, maka harus
 * dideklarasikan dengan use App\Models\namamodel
 */
class TokobukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("layout.homepage");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tokobuku.tambah");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi Request
        $request->validate([
            'id_prod' => 'required',
            'nama_pro' => 'required',
            'kategori_id' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'jumlah' => 'required',
            'gambar' => 'required',

        ]);
        
        $produks = new Produks;
        $produks->id_prod = $request->id_prod;
        $produks->kategori_id = $request->kategori_id;
        $produks->nama_pro = $request->nama_pro;
        $produks->kategori = $request->kategori;
        $produks->deskripsi = $request->deskripsi;
        $produks->jumlah = $request->jumlah;
        $produks->gambar = $request->gambar;
        

        $produks->save();

        return redirect('/');
    }

    public function store2(Request $request)
    {
        // Validasi Request
        $request->validate([
            'username' => 'required',
            'password' => 'required',

        ]);
        
        $user = new User;
        $user->username = $request->username;
        $user->password = $request->password;

        $user->save();

        return redirect('/tokobuku/kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_prod)
    {
        $produks = Produk::where('id_prod', $id_prod)->first();
        return view('tokobuku.show', ['produks' => $produks]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $request->validate([
            'nama_pro' => 'required',
            'kategori_id' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'jumlah' => 'required',
            

        ]);

        Produk::find($id)->update([
            'nama_pro' => $request->nama_pro,
            'kategori_id' => $request->kategori_id,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'jumlah' => $request->jumlah,
            
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_prod)
    {
        Produk::find($id_prod)->delete();
        return redirect('/');
    }
}
