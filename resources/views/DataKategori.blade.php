@extends('Template.default')

@section('content')
@include('Template.Partials.sidebar')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Data Kategori</h4>

            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table width="100%" class="table table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                        <th>Nomor</th>
                        <th>ID Kategori</th>
                        <th>Nama Kategori</th>
                        <th>Description</th>
                        <th>Aksi</th>
                        </tr>
                        <?php $no=1; ?>
                        @foreach ($KategoriBarang as $data)
                        <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->id_kategori }}</td>
                        <td>{{ $data->nama_kategori }}</td>
                        <td>{{ $data->description }}</td>
                        <td><a class="btn btn-danger" href="/Deletekategori/{{ $data->id_kategori }}">DELETE</a> <a class="btn btn-warning" href="/EditDataKategori/{{ $data->id_kategori }}">EDIT</a></td>
                        </tr>
                        @endforeach
                    </thead>
                </table>
                <a class="btn btn-success" href="/TambahKategori">Tambah Data</i></a>
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
