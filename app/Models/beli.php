<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beli extends Model
{

  use HasFactory;
  protected $table = "orderbarang";

  protected $fillable = [
  'id_Order',
  'id_produk',
  'id_customer',
  'nama_produk',
  'nama_customer',
  'harga_produk',
  'jumlah_beli',
  'bayar',
  'total_harga'];
}
