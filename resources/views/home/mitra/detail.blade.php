<!-- Doctor Detail Section -->
    <section class="doctor-detail-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Info Column -->
				<div class="info-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<h4>Profile</h4>
						<div class="info-box">
							<div class="box-inner">
								<div class="image" style="height:150px">
									<img src="/img/user.jpg" alt="" />
								</div>
								<div class="author-name">{{$mitra->fullname}}</div>
								<div class="designation">{{$mitra->jenis}}</div>
								
							</div>
						</div>
						
						<h4>Contact</h4>
						<ul class="info-list">
							<li class="clearfix">Alamat:<span>{{$mitra->alamat}}</span></li>
							<li class="clearfix">Email:<span>{{$mitra->user->email}}</span></li>
							<li class="clearfix">Nomor HP:<span>{{$mitra->nohp}}</span></li>
						</ul>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>About</h2>
						<p>{{$mitra->about}}</p>
						<div class="image">
							<div class="">
								
								<div class="row">
									<div class="col-4">
										<div class="team-block style-three">
											<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
												<div class="image">
													<img src="/img/thumb.jpg" alt="" />
													
												</div>
											</div>
										</div>
									</div>
									<div class="col-4">
										<div class="team-block style-three">
											<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
												<div class="image">
													<img src="/img/thumb.jpg" alt="" />
													
												</div>
											</div>
										</div>
									</div>
									<div class="col-4">
										<div class="team-block style-three">
											<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
												<div class="image">
													<img src="/img/thumb.jpg" alt="" />
													
												</div>
											</div>
										</div>
									</div>
                  
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Doctor Detail Section -->