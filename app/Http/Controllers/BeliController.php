<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use View;
use App\Models\customer;
use App\Models\beli;
class BeliController extends Controller

{

// Beli Barang
public function BeliBarang ()
{
    $data = DB::table('Produk')->get();
    return View::make('Beli')->with('Produk', $data);
}

// form beli barang
public function formbelibarang($id_produk)
        {
            $produk = DB::table('produk')->where('id_produk', $id_produk)->get();
            $cust = customer::all();
            return view('formbeli', ['produk' => $produk],['customer'=>$cust]);
        }

public function transaksibelibarang(Request $request)
{
          $this->validate($request,[
            // 'id_Order' => 'required',
            'id_produk' => 'required',
            'id_customer' => 'required',
            'nama_produk' => 'required',
            'CBNama_customer' => 'required',
            'harga_produk' => 'required',
            'jumlah_beli' => 'required',
            'total_harga' => 'required',
            'bayar' => 'required'
        ]); 

      Beli::create([
          'id_Order'=> $request->id_Order,
          'id_produk'=> $request->id_produk,
          'id_customer' => $request->id_customer,
          'nama_produk'=> $request->nama_produk,
          'nama_customer' => $request->nama_customer,
          'harga_produk'=> $request->harga_produk,
          'jumlah_beli'=> $request->jumlah_beli,
          'total_harga'=> $request->total_harga,
          'bayar' => $request->bayar
      ]);

    
DB::table('produk')->where('id_produk', $request->id_produk)->update([
    'stock' => $request->stock_Akhir
]);

return redirect('/BeliBarang');
}
}


