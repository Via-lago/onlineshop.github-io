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
                            <h3>Edit Data Kategori</h3>
                        </div>
                        <div class="card-body">
                        <div class="panel-body">
                        @foreach($KategoriBarang as $data)
                        <form action="/FormEditKategori" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_kategori" value="{{ $data->id_kategori }}" class="form-control"readonly> <br/>
                        ID Kategori <input type="text" required="required" name="id_kategori" value="{{ $data->id_kategori }}" class="form-control" style="color:black"> <br/>
                        Nama Kategori <input type="text" required="required" name="nama_kategori" value="{{ $data->nama_kategori}}" class="form-control"style="color:black"> <br/>
                        Description <input type="text" required="required" name="description" value="{{ $data->description}}" class="form-control"style="color:black"> <br/>
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