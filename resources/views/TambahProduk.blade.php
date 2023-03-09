@extends('Template.default')
@push('style')
    {{-- aditional style --}}
@endpush

@section('content')
@include('Template.Partials.sidebar')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <div class="container">
                    <div class="card shadow my-5">
                        <div class="card-header text-center">
                            <h3>Input Data Produk</h3>
                        </div>
                        <div class="card-body">
                        <div class="panel-body">
                        <form action="/FormTambahProduk" method="post">
                        {{ csrf_field() }}
                        ID Produk<input type="text" name="id_produk" required="required" class="form-control" style="color:black"> <br/>
                        <select class="form-control" name="id_kategori" id=" ">
                          @foreach($Produk as $data)
                              <option value="{{ $data->id_kategori }}"> {{ $data->nama_kategori }} </option>
                          @endforeach
                        </select>
                        <br>
                        Nama Produk<input type="text" name="nama_produk" required="required" class="form-control" style="color:black"> <br/>
                        Stok  <input type="text" name="stock" required="required" class="form-control" style="color:black"> <br/>
                        Description  <input type="text" name="description" required="required" class="form-control" style="color:black"> <br/>
                        Harga <input type="text" name="harga" required="required" class="form-control" style="color:black"> <br/>
                        <input type="submit" value="Simpan" class="form-control button btn-success">
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
  
      </div>
    </div>
  </div>
  
@endsection

@push('scripts')
    @include('Template.Partials.Script')
@endpush