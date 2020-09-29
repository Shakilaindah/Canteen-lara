<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Makanan;
use App\Detailbeli;
use PDF;

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

    // TAMBAH MAKANAN
    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
            
            'nama'        =>'required',
            'harga'=> 'required',
            'stok'    => 'required',
            'gambar'    => 'required',
            
            ]
        );

        $image = $request->file('gambar');
        $nama_file = $image->getClientOriginalName();
        $image->move(base_path('/public/assets/gambar_makanan'), $nama_file);

        // $image = $request->file('gambar');
        // $nama_file = $image->getClientOriginalName();
        // $image->move(base_path('/public/assets/gambar_makanan'), $nama_file);
        
        $makanan = new Makanan();
        $makanan->nama = $validateData['nama'];
        $makanan->harga = $validateData['harga'];
        $makanan->stok = $validateData['stok'];
        $makanan->gambar = $nama_file;
        $makanan->save();

        return redirect('/makanan');
    }

    // EDIT FOOD
    public function edit($id_makanan){
        $makanan = Makanan::find($id_makanan);
        return view('admin.edit', ['makanan' => $makanan]);
    }
    
    // public function delete($id)
    // {
    //     $makanan = Makanan::where('id',$id)->delete();
    //     return redirect('/makanan')->back();
    // }

    public function update($id, Request $request)
    {
        $this->validate($request,
        [
            'nama'      =>'required',
            'harga'     => 'required',
            'stok'      => 'required',
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

    // kasir
    public function tampil()
    {
        $makanan = Makanan::all();
        return view('user.table',['makanan'=>$makanan]);
    }

    // beli
    public function beli($id)
    {
        $detailbeli = Makanan::find($id);
        return view('user.form-beli', ['makanan' => $detailbeli]);
    }

    public function storee(Request $request)
    {
        $validateData = $request->validate(
            [
            // 'noppdb'      =>'required|size:10',
            'id_makanan'     => 'required',
            'id_user'        => 'required',
            'nama_pembeli'   =>'required',
            'nama_menu'      => 'required',
            'stok'           => 'required',
            'harga'          => 'required',
            'jumlah_beli'    => 'required',
            'total_harga'    => 'required',
            'pembayaran'     => 'required',
            'kembalian'      => 'required'
            ]
        );
        
        $detailorder = new Detailbeli();
        $detailorder->id_makanan = $validateData['id_makanan'];
        $detailorder->id_user = $validateData['id_user'];
        $detailorder->nama_pembeli = $validateData['nama_pembeli'];
        $detailorder->nama_menu = $validateData['nama_menu'];
        $detailorder->harga = $validateData['harga'];
        $detailorder->stok = $validateData['stok'];
        $detailorder->jumlah_beli = $validateData['jumlah_beli'];
        $detailorder->total_harga = $validateData['total_harga'];
        $detailorder->pembayaran = $validateData['pembayaran'];
        $detailorder->kembalian = $validateData['kembalian'];
        $detailorder->save();

        return redirect('/transaksi');
    }

    // transaksi
    public function showtrans()
    {
        $detailbeli = Detailbeli::all();
        return view('user.transaksi',['detail' => $detailbeli]);
    }

    // CETAK PDF
    public function cetak_pdf()
    {
        $detail = Detailbeli::all();
        $pdf = PDF::loadview('user.transaksi_pdf',['detail'=>$detail]);
        return $pdf->download('transaksi_pdf.pdf');
    }

    // EDIT TRANSAKSI
    public function edit_transaksi($id_transaksi)
    {
        $detail = Detailbeli::find($id_transaksi);
        return view('user.form-detaill',['detail'=>$detail]);
    }
}
