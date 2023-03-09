@extends('Template.default')
@push('style')
    {{-- aditional style --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontAwesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/light-box.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">
@endpush

@section('content')
@include('Template.Partials.Navbar')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="full-screen-portfolio" id="portfolio">
          <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="Gambar/NCT 2020 Past Ver.png" data-lightbox="image-1"><div class="thumb">
                            <div class="image">
                                <img src="Gambar/NCT 2020 Past Ver.png">
                            </div>
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <h1 style="color:white; font-size: 14px;"  >NCT 2020 Resonance <em>Pt.1 Past Ver</em></h1>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="Gambar/NCT 2020 Future Ver.png" data-lightbox="image-1"><div class="thumb">
                            <div class="image">
                                <img src="Gambar/NCT 2020 Future Ver.png">
                            </div>
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <h1 style="color:white; font-size: 14px;" >NCT 2020 Resonance <em>Pt.1 Future Ver</em></h1>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="Gambar/NCT 2020 Pt 2.png" data-lightbox="image-1"><div class="thumb">
                            <div class="image">
                                <img src="Gambar/NCT 2020 Pt 2.png">
                            </div>
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <h1 style="color:white; font-size: 14px;" >NCT 2020 Resonance <em>Pt.2</em></h1>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="Gambar/Album/NCT Dream We Boom.jpeg" data-lightbox="image-1"><div class="thumb">
                            <div class="image">
                                <img src="Gambar/Album/NCT Dream We Boom.jpeg">
                            </div>
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <h1 style="color:white; font-size: 14px;" >NCT Dream <em>We Boom</em></h1>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="Gambar/Album/NCT 2018 Emphaty.jpeg" data-lightbox="image-1"><div class="thumb">
                            <div class="image">
                                <img src="Gambar/Album/NCT 2018 Emphaty.jpeg">
                            </div>
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <h1 style="color:white; font-size: 14px;" > NCT 2018 <em>Emphaty</em></h1>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <a href="Gambar/Album/Awake The World.jpeg" data-lightbox="image-1"><div class="thumb">
                            <div class="image">
                                <img src="Gambar/Album/Awake The World.jpeg">
                            </div>
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <h1 style="color:white; font-size: 14px;" > WayV <em>Awake The World</em></h1>
                                </div>
                            </div>
                        </div></a>
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
    <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
@endpush

