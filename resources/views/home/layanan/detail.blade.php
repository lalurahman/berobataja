<!-- Department Detail Section -->
    <section class="department-detail-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>{{$layanan->name}}</h2>
						
						<div class="image">
							<img src="images/resource/department-9.jpg" alt="" />
						</div>
							{{$layanan->desc}}
						</div>
				</div>
			{{-- @dd($layanan) --}}
				<!-- Info Column -->
				<div class="info-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<h4>Perawat</h4>
						<div class="info-box">
							<div class="box-inner">
								<div class="image" style="height:150px">
									<img src="/img/user.jpg" alt="" />
								</div>
								<div class="author-name">Nama</div>
								<div class="designation">{{$layanan->jenis}}</div>
							</div>
						</div>
						
						<h4>
							<small class="text-danger">
								<del>{{format_rupiah($layanan->price_disc)}}-</del>
							</small> 
							 <br> 
							 Harga : {{format_rupiah($layanan->price_real)}} 
						</h4>
						<a href="https://wa.me/085298730727?
						text=Deskripsi Pemesanan : 
						 Nama Laynan : {{$layanan->name}} %0a
						 oleh : {{$layanan->mitra->fullname}}" target="blank" class="btn btn-success">Pesan Layanan</a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Department Detail Section -->
	

	<!-- Main Footer -->
    <footer class="main-footer style-three">
		<div class="pattern-layer" style="background-image: url(images/background/pattern-7.png)"></div>
		<div class="curve-layer" style="background-image: url(images/background/pattern-8.png)"></div>
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
                                    	<a href="index.html"><img src="images/logo.png" alt="" /></a>
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