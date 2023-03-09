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
                            <h3>Edit Data Produk</h3>
                        </div>
                        <div class="card-body">
                        <div class="panel-body">
                        @foreach($produk as $data)
                        <form action="/FormEditProduk" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_kategori" value="{{ $data->id_kategori }}" class="form-control"readonly> <br/>
                        ID Produk <input type="text" required="required" name="id_produk" value="{{ $data->id_produk }}" class="form-control" style="color:black"> <br/>
                        <select class="form-control" name="id_kategori" id=" ">
                          @foreach($kategori as $d)
                            @if ($data->id_kategori == $d->id_kategori)
                              <option value="{{ $d->id_kategori }}" selected> {{ $d->nama_kategori }} </option>
                            @else
                              <option value="{{ $d->id_kategori }}"> {{ $d->nama_kategori }} </option>
                            @endif
                              @endforeach
                        </select>
                        <br>
                        Nama Produk <input type="text" required="required" name="nama_produk" value="{{ $data->nama_produk}}" class="form-control"style="color:black"> <br/>
                        Stock <input type="text" required="required" name="stock" value="{{ $data->stock}}" class="form-control"style="color:black"> <br/>
                        Description <input type="text" required="required" name="description" value="{{ $data->description}}" class="form-control"style="color:black"> <br/>
                        Harga <input type="text" required="required" name="harga" value="{{ $data->harga}}" class="form-control"style="color:black"> <br/>
                        <input type="submit" value="Simpan" class="form-control  button btn-success">
                        </form>
                        @endforeach
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