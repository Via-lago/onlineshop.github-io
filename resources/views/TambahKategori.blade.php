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
                            <h3>Input Kategori Barang</h3>
                        </div>
                        <div class="card-body">
                        <div class="panel-body">
                        <form action="/FormTambahKategori" method="post">
                        {{ csrf_field() }}
                        ID Kategori<input type="text" name="id_kategori" required="required" class="form-control" style="color:black"> <br/>
                        Nama Kategori<input type="text" name="nama_kategori" required="required" class="form-control" style="color:black"> <br/>
                        Description  <input type="text" name="description" required="required" class="form-control" style="color:black"> <br/>
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