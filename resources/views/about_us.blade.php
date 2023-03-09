@extends('Template.default')
@section('content')

@include('Template.Partials.Navbar')

<header class="masthead" style="background-image: url('{{ asset('Gambar/Album/Gambar/NCT 2020.png') }}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>NCTzen World</h1>
            <span class="subheading">Jual/Beli merchandes K-popers</span>
          </div>
        </div>
      </div>
    </div>
  </header>
</body>

<br>
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h2>NCTen World</h2>
        <p> Sebuah Aplikasi yang menjual berbagai merchandes NCT  </p>
        <p> Dimana aplikasi ini membantu para K-popers terlebih NCtzen dalam Mencari Merchandes tetang nct 127, nct dream, dan Way V</p>
          
      </div>
    </div>
  </div>

@endsection

@push('scripts')
    @include('Template.Partials.Script')
@endpush