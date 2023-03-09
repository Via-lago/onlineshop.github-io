<?php

namespace App\Http\Controllers;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use DB;
use Redirect;
use View;

class AdminController extends Controller
{
    public function Admin(){
        return view('admin');
      }

      // view kategori
      public function viewdataKategori()
          {
              $data = DB::table('KategoriBarang')->get();
              return View::make('DataKategori')->with('KategoriBarang', $data);
          }

          //Delete Kategori

          public function deletedataKategori($id_kategori)
      {
          DB::table('KategoriBarang')->where('id_kategori','=',$id_kategori)->delete();
          return Redirect::to('/Kategori')->with('message','Berhasil Menghapus Data');
      }

        // Tambah Kategori
      public function TambahKategori()
      {
          return View('TambahKategori');
      }
      public function formTambahKategori()
      {
          $data = array(
              'id_kategori' => Request()->get('id_kategori'),
              'nama_kategori' => Request()->get('nama_kategori'),
              'Description' => Request()->get('description')
          );
          DB::table('KategoriBarang')->insert($data);
          return Redirect::to('/Kategori');
      }

      //Edit Kategori

      public function editdataKategori($id_kategori)
      {
      $data=DB::table('KategoriBarang')->where('id_kategori','=',$id_kategori)->get();
          return View('EditKategori',['KategoriBarang' => $data]);
      }

    public function formeditKategori()
    {
    	$data = array(
        'id_kategori' => Request()->get('id_kategori'),
        'nama_kategori' => Request()->get('nama_kategori'),
        'Description' => Request()->get('description')
    );
        DB::table('KategoriBarang')->where('id_kategori','=',request()->get('id_kategori'))->update($data);
        return Redirect::to('/Kategori');
    }

    // view produk
      public function viewdataProduk()
      {
          $data = DB::table('Produk')->get();
          return View::make('DataProduk')->with('Produk', $data);
      }

      //delete produk
  public function deletedataProduk($id_produk)
      {
          DB::table('Produk')->where('id_produk','=',$id_produk)->delete();
          return Redirect::to('/Produk')->with('message','Berhasil Menghapus Data');
      }
  
      //Tambah Produk
      public function TambahProduk()
      {
        $data=DB::table('KategoriBarang')->get();      
        return View('TambahProduk',['Produk'=> $data]);
      }

      public function formTambahProduk()
      {
          $data = array(
              'id_produk' => Request()->get('id_produk'),
              'nama_produk' => Request()->get('nama_produk'),
              'description' => Request()->get('description'),
              'stock' => Request()->get('stock'),
              'harga' => Request()->get('harga'),
              'id_kategori' => Request()->get('id_kategori')
          );
          DB::table('Produk')->insert($data);
          return Redirect::to('/Produk');
      }
      //edit produk
      public function editdataProduk($id_produk)
      {
        $d=DB::table('KategoriBarang')->get(); 
      $data=DB::table('produk')->where('id_produk','=',$id_produk)->get();
          return View('EditProduk',['produk' => $data,'kategori'=>$d]);
      }

      //form edit produk
      public function formeditProduk()
    {
    	$data = array(
              'id_produk' => Request()->get('id_produk'),
              'nama_produk' => Request()->get('nama_produk'),
              'description' => Request()->get('description'),
              'stock' => Request()->get('stock'),
              'harga' => Request()->get('harga'),
              'id_kategori' => Request()->get('id_kategori')
    );
        DB::table('Produk')->where('id_produk','=',request()->get('id_produk'))->update($data);
        return Redirect::to('/Produk');
    }


}
