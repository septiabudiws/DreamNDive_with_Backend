@extends('layout.template')

@section('content')
  <div class="card mb-5">
    <h5 class="card-header fs-xlarge">Adjustment</h5>
  </div>
  <div class="card mb-5">
    <div class="about-text m-3">
      <h2 class="wow fadeInDown" data-wow-delay="0.4s">
        {{ $about->title }}
      </h2>
      <p class="wow fadeInDown" data-wow-delay="0.6s">
        {!! $about->deskripsi !!}
      </p>
      <a class="btn btn-primary" href="/about/edit/{{ $about->id }}">Ubah</a>
    </div>
  </div>
  <div class="card mb-5">
    <div class="row m-3">
        @foreach ($service as $get)
        <div class="col-md-3 col-sm-6">
          <div class="single-service wow fadeInUp" data-wow-delay="0.2s">
            <i class="bx {{ $get->icon }}"></i>
            <h2>{{ $get->title }}</h2>
            <p>
              {!! $get->deskripsi !!}
            </p>
            <a class="btn btn-primary" href="/service/edit/{{ $get->id }}">Ubah</a>
          </div>
        </div>
        @endforeach
      </div>
  </div>
@endsection
