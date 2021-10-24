@extends('layouts.guest')

@section('content')
<main id="main">

    
    <section class="inner-page mt-5">
      @if ($mitra->username)
        <div class="container doctors">
          <div class="row">
            <div class="col-12">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="/fe/assets/img/doctors/doctors-1.jpg" width="300" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4 class="d-block">{{ $mitra->name }}</h4>
                  <span class="d-block text-capitalize">{{ $mitra->mitra_category->name }}</span>
                  <span class="d-block">Jl. Daeng tata, Perumahan Villa Permata Harapan, Blok B/16</span>
                  @if ($mitra->is_open == 1)
                    <span class="badge bg-success text-white px-3 mt-2">BUKA</span>  
                  @else
                    <span class="badge bg-danger text-white px-3 mt-2">TUTUP</span>  
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Layanan</h2>
              {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>

            <div class="row">

              <div class="col-lg-3 col-md-6 mt-4" data-aos="fade-up" data-aos-delay="200">
                <img src="/fe/assets/img/gallery/gallery-1.jpg" class="img-fluid w-100" alt="">
                <div class="box">
                  {{-- <h4><sup>$</sup>19<span> / month</span></h4> --}}
                  <h5 class="text-capitalize">Perawatan Luka Ringan</h5>
                  {{-- <p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> --}}
                  <p><span>Perawatan luka sedang seperti luka ringan, tidak terlalu dalam</span></p>
                  <h6 class="text-danger"><del>Rp. 200.000,-</del></h6>
                  <h4>Rp. 200.000,-</h4>
                  <a href="https://api.whatsapp.com/send?phone=6285298457655&text=Saya%20ingin%20memesan%20layanan%20ini%20dari%20perawat%20{{ $mitra->name }}" class="btn btn-buy btn-block px-5">Pesan Layanan</a>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 mt-4" data-aos="fade-up" data-aos-delay="400">
                <img src="/fe/assets/img/gallery/gallery-1.jpg" class="img-fluid w-100" alt="">
                <div class="box">
                  {{-- <h4><sup>$</sup>19<span> / month</span></h4> --}}
                  <h5 class="text-capitalize">Perawatan Luka Sedang</h5>
                  {{-- <p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> --}}
                  <p><span>Terdiri dari beberapa luka</span></p>
                  <h6 class="text-danger"><del>Rp. 200.000,-</del></h6>
                  <h4>Rp. 300.000,-</h4>
                  <a href="#" class="btn btn-buy btn-block px-5">Pesan Layanan</a>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 mt-4" data-aos="fade-up" data-aos-delay="600">
                <img src="/fe/assets/img/gallery/gallery-1.jpg" class="img-fluid w-100" alt="">
                <div class="box">
                  {{-- <h4><sup>$</sup>19<span> / month</span></h4> --}}
                  <h5 class="text-capitalize">Penyewaan Alat Tabung oksigen</h5>
                  {{-- <p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> --}}
                  <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, quaerat!</span></p>
                  {{-- <h6 class="text-danger"><del>Rp. 200.000,-</del></h6> --}}
                  <h4>Rp. 120.000,-</h4>
                  <a href="#" class="btn btn-buy btn-block px-5">Pesan Layanan</a>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 mt-4" data-aos="fade-up" data-aos-delay="800">
                <img src="/fe/assets/img/gallery/gallery-1.jpg" class="img-fluid w-100" alt="">
                <div class="box">
                  {{-- <h4><sup>$</sup>19<span> / month</span></h4> --}}
                  <h5 class="text-capitalize">Perawatan Luka</h5>
                  {{-- <p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> --}}
                  <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, quaerat!</span></p>
                  <h6 class="text-danger"><del>Rp. 200.000,-</del></h6>
                  <h4>Rp. 120.000,-</h4>
                  <a href="#" class="btn btn-buy btn-block px-5">Pesan Layanan</a>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 mt-4" data-aos="fade-up" data-aos-delay="1000">
                <img src="/fe/assets/img/gallery/gallery-1.jpg" class="img-fluid w-100" alt="">
                <div class="box">
                  {{-- <h4><sup>$</sup>19<span> / month</span></h4> --}}
                  <h5 class="text-capitalize">Perawatan Luka</h5>
                  {{-- <p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> --}}
                  <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, quaerat!</span></p>
                  {{-- <h6 class="text-danger"><del>Rp. 200.000,-</del></h6> --}}
                  <h4>Rp. 120.000,-</h4>
                  <a href="#" class="btn btn-buy btn-block px-5">Pesan Layanan</a>
                </div>
              </div>
            </div>

          </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Galeri</h2>
            </div>

            <div class="gallery-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><a class="gallery-lightbox" href="/fe/assets/img/gallery/gallery-1.jpg"><img src="/fe/assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="gallery-lightbox" href="/fe/assets/img/gallery/gallery-2.jpg"><img src="/fe/assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="gallery-lightbox" href="/fe/assets/img/gallery/gallery-3.jpg"><img src="/fe/assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="gallery-lightbox" href="/fe/assets/img/gallery/gallery-4.jpg"><img src="/fe/assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="gallery-lightbox" href="/fe/assets/img/gallery/gallery-5.jpg"><img src="/fe/assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="gallery-lightbox" href="/fe/assets/img/gallery/gallery-6.jpg"><img src="/fe/assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="gallery-lightbox" href="/fe/assets/img/gallery/gallery-7.jpg"><img src="/fe/assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="gallery-lightbox" href="/fe/assets/img/gallery/gallery-8.jpg"><img src="/fe/assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>
        </section><!-- End Gallery Section -->
      @else
         <p>tidak ada user</p> 
      @endif
    </section>

</main>
@endsection