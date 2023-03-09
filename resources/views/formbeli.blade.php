@extends('Template.default')
@section('content')


@include('Template.Partials.Navbar')


<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <header class="section-header">
          <h3 class="section-title">Form Jual Barang</h3>
        </header>
        <div class="form">
          @foreach($produk as $data)
          <form action="/transaksi" method="post" class="php-email-form">
            @csrf
            <!-- {{ csrf_field() }} -->
            <input type="hidden" name="id_Order" id="id_Order">
            <div class="form-group">
              <label for="id_produk">Id Produk :</label>
              <input type="text" class="form-control" name="id_produk" id="id_produk" value="{{ $data->id_produk}}"placeholder="id_produk" data-rule="minlen:1" readonly />
            </div>
            <div class="form-group">
              <label for="nama_produk">Nama Produk :</label>
              <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Nama produk" value="{{ $data->nama_produk}}"data-rule="minlen:1" readonly />
            </div>
            <div class="form-group">
              @foreach($customer as $cust)
              <label for="id_customer">Id Customer :</label>
              <input type="text" class="form-control" name="id_customer" id="id_customer" value="{{$cust->id_customer}}" placeholder="{{$cust->id_customer}}" data-rule="minlen:1" />
              @endforeach
            </div>
            <div class="form-group">
                @foreach($customer as $cust)
                <label for="nama_customer">Nama Customer</label>
                <input type="text" class="form-control" name="nama_customer" id="nama_customer" value="{{$cust->name}}" placeholder="{{$cust->name}}" data-rule="minlen:1" />
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="stock">Sisa Stock</label>
              <input type="number" class="form-control" name="stock" id="stock" value="{{$data->stock}}" />
            </div>
            <div class="form-group">
              <label for="harga">Harga Produk :</label>
              <input type="number" class="form-control" name="harga_produk" id="harga_produk" placeholder="harga"  onchange="totalharga()" value="{{ $data->harga}}"data-rule="minlen:1"  />
            </div>
            <div class="form-group">
              <label for="jumlah_beli">Jumlah Beli :</label>
              <input type="number" class="form-control" name="jumlah_beli" id="jumlah_beli" placeholder="jumlah_beli" onchange="totalharga()" data-rule="minlen:8" data-msg="Masukkan Jumlah " />
            </div>
            <div class="form-group">
              <label for="total_harga">Total Harga :</label>
              <input type="text" required="required" class="form-control" name="total_harga" id="total_harga" placeholder="Rp." data-rule="minlen:8" />
            </div>
            <div class="form-group">
              <label for="bayar">Bayar :</label>
              <input type="text" name="bayar" id="bayar" required="required" class="form-control" onchange="totalharga();" placeholder="Bayar " data-rule="minlen:8" data-msg="Masukkan Jumlah Bayar"/>
            </div>
            <div class="form-group">
              <label for="kembalian">Kembalian :</label>
              <input type="text" name="kembalian" required="required" class="form-control" name="kembalian" id="kembalian" placeholder="Kembalian" data-rule="minlen:8"/>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-success"> Beli Produk</button>
            </div>
          </form>
          @endforeach
         </div>
      </div>
    </div>
</div>
<br>

</div>
@endsection

@push('scripts')
    @include('Template.Partials.Script')
    <script type="text/javascript">

    window.onload = function() {
    $("#Nama_customer").change(function() {
     var ambilid = $("#customer-" + this.value).data('id_customer');
    $("#id_customer").val(ambilid);
    });
      }
        function totalharga() {
          var jmlbeli = document.getElementById('jumlah_beli').value;
          var harga = document.getElementById('harga_produk').value;
          var result = parseInt(jmlbeli) * parseInt(harga);
          var byr = document.getElementById('bayar').value;
          var kembalian = parseInt(byr) - parseInt(result);
          document.getElementById('total_harga').value = result;
          document.getElementById('kembalian').value = kembalian;
        }
      
        function stock() {
          var jmlbeli = document.getElementById('jumlah_beli').value;
          var stocksekarang = document.getElementById('stock').value;
          var result = parseInt(stocksekarang) - parseInt(jmlbeli);
          if (result < 0 ){
            alert('Stok Makanan Tidak Cukup');
          }else{
            document.getElementById('stock_Akhir').value = result;
          }
        }
      </script>
@endpush