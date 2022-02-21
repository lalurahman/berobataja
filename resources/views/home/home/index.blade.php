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
								<a href="doctor.html" class="theme-btn btn-style-one"><span class="txt">Cari Perawat</span></a>
								<a href="service.html" class="theme-btn btn-style-two"><span class="txt">Lihat Layanan</span></a>
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
							<span class="icon flaticon-doctor"></span>
						</div>
						<h4><a href="service-detail.html">Perawat Bersertifkat</a></h4>
						<div class="text">Semua perawat yang terdaftar disini adalah yang telah memiliki sertifiksi.</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-male"></span>
						</div>
						<h4><a href="service-detail.html">Professional</a></h4>
						<div class="text">Semua perawat yang terdaftar disini adalah yang telah memiliki sertifiksi.</div>
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-stethoscope"></span>
						</div>
						<h4><a href="service-detail.html">Perawatan Darurat</a></h4>
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
							<p>Replenish him third creature and meat blessed void a fruit gathered you’re behold had seed. Replenish him third creature and meat blessed.seed.</p>
							<p>Replenish him third creature and meat blessed void a fruit gathered you’re behold had seed.</p>
						</div>
						<!-- <div class="button-box">
							<a href="about.html" class="theme-btn btn-style-one"><span class="txt">More About Us</span></a>
						</div> -->
					</div>
				</div>
				
				
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image" data-tilt data-tilt-max="3">
							<img src="/fe/images/gallery-4.jpeg" alt="" />
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

	<!-- Team Section / Style Three -->
	<section class="team-section style-three d-none">
		<div class="auto-container">
		
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Meet our experts doctors</h2>
				<div class="text">Replenish him third creature and meat most of the blessed <br> void a fruit gathered.</div>
			</div>
		
			<div class="three-item-carousel owl-carousel owl-theme">
				
				<!-- Team Block -->
				<div class="team-block style-three">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="/fe/images/resource/team-1.jpg" alt="" />
							<div class="overlay-box">
								<div class="content">
									<h4><a href="doctor-detail.html">Dr. Juan Annato</a></h4>
									<div class="designation">Dental Specialist</div>
								</div>
								<ul class="social-box">
									<li><a href="#" class="fab fa-facebook-f"></a></li>
									<li><a href="#" class="fab fa-twitter"></a></li>
									<li><a href="#" class="fab fa-linkedin"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block style-three">
					<div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="/fe/images/resource/team-2.jpg" alt="" />
							<div class="overlay-box">
								<div class="content">
									<h4><a href="doctor-detail.html">Dr. Jonathon Deo</a></h4>
									<div class="designation">Cardiologists</div>
								</div>
								<ul class="social-box">
									<li><a href="#" class="fab fa-facebook-f"></a></li>
									<li><a href="#" class="fab fa-twitter"></a></li>
									<li><a href="#" class="fab fa-linkedin"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block style-three">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="/fe/images/resource/team-3.jpg" alt="" />
							<div class="overlay-box">
								<div class="content">
									<h4><a href="doctor-detail.html">Dr. Jaffrin Skote</a></h4>
									<div class="designation">Gastroenterologists</div>
								</div>
								<ul class="social-box">
									<li><a href="#" class="fab fa-facebook-f"></a></li>
									<li><a href="#" class="fab fa-twitter"></a></li>
									<li><a href="#" class="fab fa-linkedin"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block style-three">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="/fe/images/resource/team-1.jpg" alt="" />
							<div class="overlay-box">
								<div class="content">
									<h4><a href="doctor-detail.html">Dr. Juan Annato</a></h4>
									<div class="designation">Dental Specialist</div>
								</div>
								<ul class="social-box">
									<li><a href="#" class="fab fa-facebook-f"></a></li>
									<li><a href="#" class="fab fa-twitter"></a></li>
									<li><a href="#" class="fab fa-linkedin"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block style-three">
					<div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="/fe/images/resource/team-2.jpg" alt="" />
							<div class="overlay-box">
								<div class="content">
									<h4><a href="doctor-detail.html">Dr. Jonathon Deo</a></h4>
									<div class="designation">Cardiologists</div>
								</div>
								<ul class="social-box">
									<li><a href="#" class="fab fa-facebook-f"></a></li>
									<li><a href="#" class="fab fa-twitter"></a></li>
									<li><a href="#" class="fab fa-linkedin"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block style-three">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="/fe/images/resource/team-3.jpg" alt="" />
							<div class="overlay-box">
								<div class="content">
									<h4><a href="doctor-detail.html">Dr. Jaffrin Skote</a></h4>
									<div class="designation">Gastroenterologists</div>
								</div>
								<ul class="social-box">
									<li><a href="#" class="fab fa-facebook-f"></a></li>
									<li><a href="#" class="fab fa-twitter"></a></li>
									<li><a href="#" class="fab fa-linkedin"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Team Section -->
	
	<!-- Appointment Section -->
	<section class="appointment-section style-two d-none">
		<div class="auto-container">
			<div class="inner-container">
				<div class="appointment-box">
					<!-- Sec Title -->
					<div class="sec-title centered">
						<div class="title">Book Now</div>
						<h2>Make An Appointment</h2>
					</div>
					
					<!-- Appointment Form -->
					<div class="appointment-form">
					
						<!-- Appointment Form -->
						<form method="post" action="blog.html">
							<div class="row clearfix">
								
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<input type="text" name="username" placeholder="Patient Name*" required="">
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<input type="text" name="phone" placeholder="Phone Number*" required="">
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<input type="email" name="email" placeholder="Email Address" required="">
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<select class="custom-select-box">
										<option>Department</option>
										<option>Department 01</option>
										<option>Department 02</option>
										<option>Department 03</option>
										<option>Department 04</option>
									</select>
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<select class="custom-select-box">
										<option>Doctor</option>
										<option>Doctor 01</option>
										<option>Doctor 02</option>
										<option>Doctor 03</option>
										<option>Doctor 04</option>
									</select>
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-12 form-group">
									<input type="text" class="datepicker" name="date" placeholder="Booking Date" required="">
									<span class="icon far fa-calendar-check"></span>
								</div>
								
								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<textarea class="" name="message" placeholder="Shortly describe the deases"></textarea>
								</div>
								
								<div class="col-lg-12 col-md-12 col-sm-12 form-group">
									<button class="theme-btn btn-style-one style-two" type="submit" name="submit-form"><span class="txt">Get Appointment</span></button>
								</div>
								
							</div>
						</form>
							
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Appointment Section -->
	
	<!-- News Section Two -->
	<section class="news-section-two style-two d-none">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Our Latest Blog Posts</h2>
				<div class="text">Replenish him third creature and meat blessed <br> best of the void a fruit gathered.</div>
			</div>
			<div class="row clearfix">
				
				<!-- News Block Two -->
				<div class="news-block-two style-two col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="blog-detail.html"><img src="/fe/images/resource/news-2.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h4><a href="blog-detail.html">To apply signal detection theory</a></h4>
							<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re, they’re two waters</div>
							<a href="blog-detail.html" class="read-more">Continue Reading</a>
						</div>
					</div>
				</div>
				
				<!-- News Block Two -->
				<div class="news-block-two style-two col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="blog-detail.html"><img src="/fe/images/resource/news-3.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h4><a href="blog-detail.html">Find out which posts are a hit with Blogger’s built.</a></h4>
						</div>
					</div>
				</div>
				
				<!-- News Block Two -->
				<div class="news-block-two style-two col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="blog-detail.html"><img src="/fe/images/resource/news-4.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h4><a href="blog-detail.html">You can even connect your blog directly to Google Analytics</a></h4>
						</div>
					</div>
				</div>
				
			</div>
			
			<!-- Button Box -->
			<div class="btn-box text-center">
				<a href="blog.html" class="theme-btn btn-style-six"><span class="txt">All Blog Posts</span></a>
			</div>
			
		</div>
	</section>
	<!-- End News Section -->
	
	<!-- Testimonial Section -->
	<section class="testimonial-section d-none">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Testimonial</div>
				<h2>Recovered Patient Feedbacks</h2>
				<div class="text">Replenish him third creature and meat most of the blessed <br> void a fruit gathered.</div>
			</div>
		
			<div class="three-item-carousel owl-carousel owl-theme">
			
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="quote flaticon-quote-1"></div>
						<div class="text">Dummy text of the in of printing Lorem Ipsum is simply most dummy text of the printing and ting industry. The Of Lorem Ipsum.</div>
						<div class="author-info">
							<div class="info-inner">
								<div class="thumb-item">
									<figure class="thumb-box"><img src="/fe/images/resource/author-1.jpg" alt=""></figure>
								</div>
								<div class="author-name">Samira Deshmuk</div>
								<div class="rating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="quote flaticon-quote-1"></div>
						<div class="text">Dummy text of the in of printing Lorem Ipsum is simply most dummy text of the printing and ting industry. The Of Lorem Ipsum.</div>
						<div class="author-info">
							<div class="info-inner">
								<div class="thumb-item">
									<figure class="thumb-box"><img src="/fe/images/resource/author-2.jpg" alt=""></figure>
								</div>
								<div class="author-name">Samira Deshmuk</div>
								<div class="rating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="quote flaticon-quote-1"></div>
						<div class="text">Dummy text of the in of printing Lorem Ipsum is simply most dummy text of the printing and ting industry. The Of Lorem Ipsum.</div>
						<div class="author-info">
							<div class="info-inner">
								<div class="thumb-item">
									<figure class="thumb-box"><img src="/fe/images/resource/author-3.jpg" alt=""></figure>
								</div>
								<div class="author-name">Samira Deshmuk</div>
								<div class="rating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="quote flaticon-quote-1"></div>
						<div class="text">Dummy text of the in of printing Lorem Ipsum is simply most dummy text of the printing and ting industry. The Of Lorem Ipsum.</div>
						<div class="author-info">
							<div class="info-inner">
								<div class="thumb-item">
									<figure class="thumb-box"><img src="/fe/images/resource/author-1.jpg" alt=""></figure>
								</div>
								<div class="author-name">Samira Deshmuk</div>
								<div class="rating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="quote flaticon-quote-1"></div>
						<div class="text">Dummy text of the in of printing Lorem Ipsum is simply most dummy text of the printing and ting industry. The Of Lorem Ipsum.</div>
						<div class="author-info">
							<div class="info-inner">
								<div class="thumb-item">
									<figure class="thumb-box"><img src="/fe/images/resource/author-2.jpg" alt=""></figure>
								</div>
								<div class="author-name">Samira Deshmuk</div>
								<div class="rating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="quote flaticon-quote-1"></div>
						<div class="text">Dummy text of the in of printing Lorem Ipsum is simply most dummy text of the printing and ting industry. The Of Lorem Ipsum.</div>
						<div class="author-info">
							<div class="info-inner">
								<div class="thumb-item">
									<figure class="thumb-box"><img src="/fe/images/resource/author-3.jpg" alt=""></figure>
								</div>
								<div class="author-name">Samira Deshmuk</div>
								<div class="rating">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
			
		</div>
	</section>
	<!-- End Testimonial Section -->
	
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
							<div class="appointment"><span class="icon flaticon-telephone"></span>Call For An Appointment</div>
						</div>
						<div class="pull-right">
							<a class="phone" href="tel:+1-800-123-4567">+1 (800) 123-4567</a>
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
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="index.html"><img src="/fe/images/logo.png" alt="" /></a>
                                    </div>
									<div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re, they’re two waters own morning gathered greater.</div>
									<div class="social-box">
										<a href="#" class="fab fa-facebook-square"></a>
										<a href="#" class="fab fa-twitter-square"></a>
										<a href="#" class="fab fa-linkedin"></a>
									</div>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4>About Us</h4>
									<ul class="links-widget">
										<li><a href="#">Afficiates</a></li>
										<li><a href="#">Partners</a></li>
										<li><a href="#">Reviews</a></li>
										<li><a href="#">Blogs</a></li>
										<li><a href="#">Newsletter</a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4>Resource</h4>
									<ul class="links-widget">
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Support Area</a></li>
										<li><a href="#">Documentations</a></li>
										<li><a href="#">How it works</a></li>
										<li><a href="#">Terms of Policy</a></li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4>Quick Links</h4>
									<ul class="links-widget">
										<li><a href="#">home</a></li>
										<li><a href="#">About us</a></li>
										<li><a href="#">Services</a></li>
										<li><a href="#">Pricing</a></li>
										<li><a href="#">Latest Post</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</div>
							</div>
						
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