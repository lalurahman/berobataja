@extends('layouts.guest')

@section('content')
<main id="main">

  <section class="inner-page">
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Cari Tenaga Medis</h3>
          <div class="row">
            <div class="col-12">
              <div class="input-group">
                <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                  <option selected>Pilih Provinsi</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                  <option selected>Pilih Kabupaten</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                <button class="btn btn-primary px-3" type="button">Cari</button>
              </div>
            </div>
          </div>
        </div>

        <div class="row">

          @foreach ($mitra as $item)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  @if ($item->photo)
                    <img src="/fe/assets/img/doctors/doctors-1.jpg" class="img-fluid" alt="">  
                    @else
                    <img src="/fe/assets/img/doctors/doctors-2.jpg" class="img-fluid" alt="">  
                  @endif
                </div>
                <div class="member-info">
                  <h4>{{ $item->name }}</h4>
                  <span class="text-capitalize">{{ $item->mitra_category->name }}</span>
                  <a href="{{ route('profil-mitra', $item->username) }}" class="btn btn-primary px-5 mt-2">
                    Lihat Profil
                  </a>
                </div>
              </div>
            </div>
          @endforeach

        </div>

      </div>
    </section>
  </section>

</main><!-- End #main -->
@endsection