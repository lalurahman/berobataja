<!-- Slider Section -->
    <section class="slider-section-two">
		<div class="pattern-image" style="background-image: url(/fe/images/main-slider/pattern-2.png)"></div>
		<div class="main-slider-carousel owl-carousel owl-theme">
            
    <div class="slide" style="background-image: url(/fe/images/main-slider/pexels-nataliya-vaitkevich-6941878.jpg)">
				<div class="auto-container">
					
					<!-- Content Boxed -->
					<div class="content-boxed">
						<div class="inner-boxed">
							<h1>Kami Melayani Pasien<br>Dengan Sepenuh Hati</h1>
							<div class="btns-box">
								<a href="/home/mitra?role=perawat" class="theme-btn btn-style-one"><span class="txt">Cari Perawat</span></a>
								<a href="/home/layanan" class="theme-btn btn-style-two"><span class="txt">Lihat Layanan</span></a>
							</div>
						</div>
					</div>
						
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Slider Section -->
	
	<!-- Clients Section -->
    <section class="clients-section d-none">
        <div class="auto-container">
            
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/fe/images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/fe/images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/fe/images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/fe/images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/fe/images/clients/5.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/fe/images/clients/1.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="/fe/images/clients/2.png" alt=""></a></figure></li>
                </ul>
            </div>
            
        </div>
    </section>
    <!--End Clients Section-->
	
	<!-- Services Section -->
    <section class="services-section style-two">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
						<i class="fa fa-solid fa-user-doctor"></i>
						</div>
						<h4>Perawat Bersertifkat</h4>
						<div class="text">Semua perawat yang terdaftar disini adalah yang telah memiliki sertifiksi.</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<i class="fa-solid fa-hospital-user"></i>
						</div>
						<h4>Professional</h4>
						<div class="text">Semua perawat yang terdaftar disini adalah yang telah memiliki sertifiksi.</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
						<i class="fa-solid fa-briefcase-medical"></i>
						</div>
						<h4>Perawatan Darurat</h4>
						<div class="text">Silahkan menghubungi perawat terdekat untuk keadaan darurat.</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Services Section -->
	
	<!-- About Section Two -->
    <section class="about-section-two style-two">
		<div class="auto-container">
			<div class="row clearfix">
				
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>Sekilas Tentang Kami</h2>
						<div class="text">
							<p>{!!$cnfgrs->excerpt_about!!}</p>
							<a href="/about">Selengkapnya &rightarrow;</a>
						</div>
						<!-- <div class="button-box">
							<a href="about.html" class="theme-btn btn-style-one"><span class="txt">More About Us</span></a>
						</div> -->
					</div>
				</div>
				
				
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image" data-tilt data-tilt-max="3">
							<img src="/{{$cnfgrs->cover_about}}" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End About Section Two -->
	
	
	<!-- Services Section Three -->
	<section class="services-section-three style-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Layanan Kami</h2>
				<div class="text">Replenish him third creature and meat most of the blessed best <br> of the void a fruit gathered.</div>
			</div>
			<div class="row clearfix">
				
				<!-- Service Block Two -->
				@foreach ($service as $item)
						
				<div class="service-block-two col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="number-box">
							<div class="number">{{$loop->iteration}}</div>
						</div>
						<h4><a href="/service/{{$item->id}}">{{$item->name}}</a></h4>
						<div class="text">{{$item->desc}}</div>
					</div>
				</div>
				
				@endforeach
				
			</div>
			
			<div class="btn-box text-center">
				<a href="/service" class="theme-btn btn-style-six"><span class="txt">Lihat Semua Layanan</span></a>
			</div>
			
		</div>
	</section>
	<!-- End Services Section Three -->



	
	<!-- Main Footer -->
    <footer class="main-footer style-three">
		<div class="pattern-layer" style="background-image: url(/fe/images/background/pattern-7.png)"></div>
		<div class="curve-layer" style="background-image: url(/fe/images/background/pattern-8.png)"></div>
		<div class="auto-container">
			
			<!-- Upper Box -->
			<div class="upper-boxed">
				<div class="inner-container">
					<div class="clearfix">
						<div class="pull-left">
							<div class="appointment"> <i class="fas fa-phone"></i>  </span>Hubungi Kami</div>
						</div>
						<div class="pull-right">
							<a class="phone" href="tel:{{$cnfgrs->contact_admin}}">{{$cnfgrs->contact_admin}}</a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Upper Box -->
			
        	<!-- Widgets Section -->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
						
							
		
							
						</div>
					</div>
					

					
				</div>
			</div>
			
		</div>
		
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="copyright">Copyright &copy; 2020 AuburnForest</div>
			</div>
		</div>
		
	</footer>