<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;
use Redirect;
use View;

class Controller extends BaseController
{
    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
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

    
}
