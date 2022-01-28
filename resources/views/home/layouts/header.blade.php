
    <!-- Preloader -->
	{{-- <div class="preloader"></div> --}}
	<!-- End Preloader -->
 	
    <!-- Main Header-->
    <header class="main-header header-style-three">
    	
		<!-- Header Top -->
        <div class="header-top style-three">
            <div class="auto-container">
                <div class="clearfix">
				
					<!-- Top Left -->
                    <div class="top-left pull-left clearfix">
					
						<!-- Info List -->
                        <ul class="info-list">
							<li><span>Call Us: </span><a href="tel:+123-456-7890"> +1 (800) 123-4567</a></li>
							<li><span>Support:</span><a href="mailto:info@yourcompany.com"> info@yourcompany.com</a></li>
						</ul>
						
                    </div>
					
					<!-- Top Right -->
					<div class="top-right pull-right clearfix">
						<!-- Login Nav -->
						<ul class="login-nav">
							<li><a href="/login">Log In</a></li>
							<li><a href="/register?register_as=nsadsfldfgjxxghr">Register</a></li>
						</ul>
					</div>
					
                </div>
            </div>
        </div>
		
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box mt-3">
                    	<div class="logo"><a href="index.html"><img src="/fe/images/logo.jpeg" alt="" title="" width="60" class="rounded-circle"></a></div>
                    </div>
					
                   	<div class="nav-outer clearfix">
						<!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class="current">
										<a href="/">Beranda</a>
                                    </li>
									<li>
										<a href="/home/layanan">Layanan</a>
									</li>
									<li class="dropdown"><a href="#">Mitra</a>
										<ul>
											<li><a href="/home/mitra?role=perawat">Perawat</a></li>
											<li><a href="/home/mitra?role=dokter">Dokter</a></li>
											<li><a href="/home/mitra?role=non_medis">Non Medis</a></li>
											
										</ul>
									</li>
									<li>
										<a href="/register?register_as=njxvluhbfskfsdfnjzmsmkv">Daftar Jadi Mitra</a>
									</li>
									
								</ul>
							</div>
							
						</nav>
						
					</div>
                   
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon lnr lnr-cross"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index-3.html"><img src="images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
		
    </header>
    <!--End Main Header -->




    @if (!Request::is('/'))
        
    <!-- Page Title -->
    <section class="page-title" style="background-image: url(/fe/images/background/12\ \(2\).jpg)">
		<div class="pattern-layer" style="background-image: url(/fe/images/main-slider/pattern-2.png)"></div>
        <div class="auto-container">
          <h1>{{isset($title) ? $title : '' }}</h1>
          <ul class="bread-crumb clearfix">
            <li><a href="/">Beranda</a></li>
            <li>{{isset($title) ? $title : '' }}</li>
          </ul>
        </div>
      </section>
      <!--End Page Title-->
      
  @endif