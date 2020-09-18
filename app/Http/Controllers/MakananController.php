<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Makanan;

class MakananController extends Controller
{
    public function create()
    {
        return view('admin.form_makanan');
    }

    public function showw()
    {
        $makanan = Makanan::all();
        return view('admin.table',['makanan'=>$makanan]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
            // 'noppdb'      =>'required|size:10',
            'nama'        =>'required',
            'harga'       => 'required',
            'stok'        => 'required',
            'gambar'      => 'required',
            // 'alamat'      => 'required',
            // 'nohp'        => 'required'
            ]
        );
        $makanan = new Makanan();
        $makanan->nama = $validateData['nama'];
        $makanan->harga = $validateData['harga'];
        $makanan->stok = $validateData['stok'];
        $makanan->gambar = $validateData['gambar'];
        $makanan->save();

        return redirect('/makanan');
    }
    
    // public function delete($id)
    // {
    //     $makanan = Makanan::where('id',$id)->delete();
    //     return redirect('/makanan')->back();
    // }

    public function edit($id){
        $makanan = Makanan::find($id);
        return view('admin.edit', ['makanan' => $makanan]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,
        [
            'nama'        =>'required',
            'harga'=> 'required',
            'stok'    => 'required',
            'gambar'    => 'required',
        ]);
    
        $makanan = Makanan::find($id);
        $makanan->nama = $request->nama;
        $makanan->harga = $request->harga;
        $makanan->stok = $request->stok;
        // $makanan->deskripsi = $request->deskripsi;
        // $makanan->harga = $request->harga;
        $makanan->gambar = $request->gambar;
        $makanan->save();
 
     return redirect('/makanan');
    }

    //delete food
    public function delete_menu($id)
    {
        $foods = Makanan::find($id);
        $foods->delete();
        return redirect('/makanan');
    }
}
