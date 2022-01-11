@extends('layouts.guest')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(/fe/assets/img/slide/slide-1.jpg)">
          <div class="container">
            <h2>Selamat Datang di <span>Berobataja.com</span></h2>
            <p>Layanan Kesehatan Terbaik Di Makassar. Cari dan temukan tenaga kesehatan yang siap melayani segala keluhan anda.</p>
            <a target="_blank" href="https://api.whatsapp.com/send/?phone=6285242336105&text=Halo..%0ASaya%20ingin%20memesan%20layanan%20homecare%20dari%20berobataja.com" class="btn-get-started">Pesan Layanan Medis</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(/fe/assets/img/slide/slide-2.jpg)">
          <div class="container">
            <h2>Selamat Datang di <span>Berobataja.com</span></h2>
            <p>Layanan Kesehatan Terbaik Di Makassar. Cari dan temukan tenaga kesehatan yang siap melayani segala keluhan anda.</p>
            <a target="_blank" href="https://api.whatsapp.com/send/?phone=6285242336105&text=Halo..%0ASaya%20ingin%20memesan%20layanan%20homecare%20dari%20berobataja.com" class="btn-get-started">Pesan Layanan Medis</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(/fe/assets/img/slide/slide-3.jpg)">
          <div class="container">
            <h2>Selamat Datang di <span>Berobataja.com</span></h2>
            <p>Layanan Kesehatan Terbaik Di Makassar. Cari dan temukan tenaga kesehatan yang siap melayani segala keluhan anda.</p>
            <a target="_blank" href="https://api.whatsapp.com/send/?phone=6285242336105&text=Halo..%0ASaya%20ingin%20memesan%20layanan%20homecare%20dari%20berobataja.com" class="btn-get-started">Pesan Layanan Medis</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4 class="title"><a href="">Tenaga Medis Berpengalaman</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4 class="title"><a href="">Harga Layanan Murah</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-thermometer"></i></div>
              <h4 class="title"><a href="">Pelayanan Cepat</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4 class="title"><a href="">Tersebar di seluruh Indonesia</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Dalam keadaan darurat ? Butuh bantuan sekarang ?</h3>
          {{-- <p></p> --}}
          <a class="cta-btn" href="{{ route('mitra') }}">Cari Tenaga Medis</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        {{-- <div class="section-title">
          <h2>Tentang Kami</h2>
          <p>Layanan kesehatan Homecare percaya bahwa keamanan dan keahlian adalah hal terpenting dalam memilih layanan kesehatan untuk Anda.</p>
        </div> --}}

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="/fe/assets/img/gallery-7.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>LAYANAN PEMASANGAN DAN PENGGANTIAN INFUS Pemasangan  infus merupakan sebuah metode pemberian obat yang dilakukan secara langsung melalui pembuluh darah. Terapi ini biasanya menjadi pilihan terbaik jika kondisi tubuh pasien sudah tidak memungkinkan minum obat secara oral (lewat mulut).</h3>
            <p class="fst-italic">
              Indikasi pemasangan infus :
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Dehidrasi parah</li>
              <li><i class="bi bi-check-circle"></i> Keracunan makanan</li>
              <li><i class="bi bi-check-circle"></i> Stroke</li>
              <li><i class="bi bi-check-circle"></i> Serangan jantung</li>
              <li><i class="bi bi-check-circle"></i> Gangguan sistem imun</li>
              <li><i class="bi bi-check-circle"></i> Mengalami infeksi yang membuat pasien tidak responsif terhadap antibiotik oral</li>
              <li><i class="bi bi-check-circle"></i> Menggunakan obat-obatan kemoterapi untuk menangani kanker</li>
              <li><i class="bi bi-check-circle"></i> Penggunaan obat-obatan tertentu untuk mengatasi rasa sakit</li>
              <li><i class="bi bi-check-circle"></i> Mengalami peradangan kronis</li>
              <li><i class="bi bi-check-circle"></i> Diare</li>
              <li><i class="bi bi-check-circle"></i> Nyeri ulu hati</li>
              <li><i class="bi bi-check-circle"></i> Kondisi lemas dan anoreksia</li>
              <li><i class="bi bi-check-circle"></i> Mual muntah</li>
            </ul>
            <p>
              Pemberian terapi intervena (infus) tidak hanya terbatas pada kondisi di atas. Mungkin ada beberapa kondisi lain yang tidak disebutkan di atas, namun membutuhkan pemasangan infus
            <br>
            Pemberian infus harus dilakukan oleh dokter atau perawat professional . Pasalnya, dosis yang digunakan pada terapi infus tergantung pada berat badan, riwayat medis, obat-obatan yang sedang dikonsumsi, serta kondisi kesehatan pasien secara menyeluruh..
            </p>
          </div>
        </div>

      </div>
    </section>

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>

              <p><strong>Doctors</strong></p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>

              <p><strong>Perawat</strong></p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>

              <p><strong>Bidan</strong></p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan</h2>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title"><a href="">Pemasangan Infus</a></h4>
            <p class="description">Tujuan utama pemberian terapi infus adalah memberikan sejumlah cairan ke dalam tubuh pasien sebagai pengganti cairan tubuh dan elektrolit yang hilang akibat penyakit atau prosedur medis tertentu.</p>
          </div>
          
        </div>

      </div>
    </section>

    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Dokumentasi saat proses pengobatan</p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="gallery-lightbox" href="/fe/assets/img/gallery-1.jpeg"><img src="/fe/assets/img/gallery-1.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="/fe/assets/img/gallery-2.jpeg"><img src="/fe/assets/img/gallery-2.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="/fe/assets/img/gallery-3.jpeg"><img src="/fe/assets/img/gallery-3.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="/fe/assets/img/gallery-4.jpeg"><img src="/fe/assets/img/gallery-4.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="/fe/assets/img/gallery-5.jpeg"><img src="/fe/assets/img/gallery-5.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="/fe/assets/img/gallery-6.jpeg"><img src="/fe/assets/img/gallery-6.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="/fe/assets/img/gallery-7.jpeg"><img src="/fe/assets/img/gallery-7.jpeg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    
    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="/fe/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="/fe/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="/fe/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="/fe/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="/fe/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> --}}

  </main><!-- End #main -->

@endsection