<!-- Register Section -->
	<section class="register-section">
		<div class="auto-container">
			<div class="register-box">
				
				<!-- Title Box -->
				<div class="title-box">
					<h2>Daftar Akun</h2>
				</div>
				
				<!-- Login Form -->
				<div class="styled-form">
					<form action="/registerStore" method="POST" >
						@csrf
						<div class="row clearfix">
							
<input type="hidden" name="role" value="{{$role}}">
							
							<!-- Form Group -->
							<div class="form-group col-lg-6 col-md-12 col-sm-12">
								<input class="form-control @error('username') is-invalid @enderror" type="text" name="username" value="{{old('username')}}" placeholder="Username">
									@error('username')
										 <div class="invalid-feedback">
											 {{$message}}
										 </div>
								 @enderror
							</div>
							
							<!-- Form Group -->
							<div class="form-group col-lg-6 col-md-12 col-sm-12">
								<input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email')}}" placeholder="Alamat Email">
									@error('email')
										 <div class="invalid-feedback">
											 {{$message}}
										 </div>
								 @enderror
							</div>
							
				
							<!-- Form Group -->
							<div class="form-group col-lg-6 col-md-12 col-sm-12">
								<input class="form-control @error('password') is-invalid @enderror" type="password" name="password" value="" placeholder="Password">
									@error('password')
										 <div class="invalid-feedback">
											 {{$message}}
										 </div>
								 @enderror
							</div>
							
							<!-- Form Group -->
							<div class="form-group col-lg-6 col-md-12 col-sm-12">
								<input class="form-control @error('re_password') is-invalid @enderror" type="password" name="re_password" value="" placeholder="Konfirmasi Password">
									@error('re_password')
										 <div class="invalid-feedback">
											 {{$message}}
										 </div>
								 @enderror
							</div>

							@if ($role == 'Mitra')
									
							
							<div class="form-group col-lg-12 col-md-12 col-sm-12">
								<div class="row clearfix">
								
									<!-- Column -->
									<div class="col-12">
										<div class="accordion-box">
										
											<li class="accordion block">
												<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Memorandum of Understanding (MoU)</div>
												<div class="acc-content">
													<div class="content">
														<div class="accordian-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</div>
													</div>
												</div>
											</li>
										</div>
									</div>
									<!-- Column -->
									<div class="column col-lg-12 col-md-12 col-sm-12">
										<div class="check-box">
											<input type="checkbox" name="remember-password" id="type-4"> 
											<label for="type-4">Saya setuju terhadap MoU</label>
												@error('fullname')
														<div class="invalid-feedback">
															{{$message}}
														</div>
												@enderror
										</div>
									</div>
								</div>
							</div>

							@endif

							
							<div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
								<button type="submit" class="theme-btn btn-style-one"><span class="txt">Daftar Akun</span></button>
							</div>
							
							<div class="form-group col-lg-12 col-md-12 col-sm-12">
								<div class="users">Sudah punya akun ? <a href="/login">Masuk</a></div>
							</div>
							
						</div>
						
					</form>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Register Section -->