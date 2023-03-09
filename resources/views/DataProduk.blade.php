@extends('Template.default')

@section('content')
@include('Template.Partials.sidebar')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Data Produk</h4>

            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table width="100%" class="table table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                        <th>Nomor</th>
                        <th>ID Produk</th>
                        <th>ID Kategori</th>
                        <th>Nama Produk</th>
                        <th>Stock</th>
                        <th>Description</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                        </tr>
                        <?php $no=1; ?>
                        @foreach ($Produk as $data)
                        <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->id_produk }}</td>
                        <td>{{ $data->id_kategori }}</td>
                        <td>{{ $data->nama_produk }}</td>
                        <td>{{ $data->stock }}</td>
                        <td>{{ $data->description }}</td>
                        <td>{{ $data->harga }}</td>
                        <td><a class="btn btn-danger" href="/DeleteProduk/{{ $data->id_produk }}">DELETE</a> <a class="btn btn-warning" href="/EditDataProduk/{{ $data->id_produk }}">EDIT</a></td>
                        </tr>
                        @endforeach
                    </thead>
                </table>
                <a class="btn btn-success" href="/TambahProduk">Tambah Data </i></a>
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
