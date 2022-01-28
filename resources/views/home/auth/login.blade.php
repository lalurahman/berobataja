<!-- Login Section -->
	<section class="login-section">
		<div class="auto-container">
			<div class="login-box">
				
				<!-- Title Box -->
				<div class="title-box">
					<h2>Masuk Akun</h2>
				</div>
				
				<!-- Login Form -->

				@if (session()->has('loginError'))
						<div class="alert alert-danger alert-dismissable fade show" role="alert">
							{{session('loginError')}}
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
				@endif
				<div class="styled-form">
					<form method="POST" action="/authenticate">
						@csrf
						<div class="form-group">
							<input class="form-control @error('email') is-invalid @enderror" type="email" name="email"  placeholder="Alamat Email">
									@error('email')
										 <div class="invalid-feedback">
											 {{$message}}
										 </div>
								 @enderror
						</div>
						<div class="form-group">
						<input class="form-control @error('password') is-invalid @enderror" type="password" name="password" value="" placeholder="Password">
									@error('password')
										 <div class="invalid-feedback">
											 {{$message}}
										 </div>
								 @enderror
						</div>
						
						<div class="form-group text-center">
							<button type="submit" class="theme-btn btn-style-one"><span class="txt">Masuk</span></button>
						</div>
						<div class="form-group">
							<div class="users">Belum punya akun ? <a href="/register">Daftar Akun</a></div>
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Login Section -->