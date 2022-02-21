<section class="services-section-three style-three">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Semua Layanan Kami</h2>
				<div class="text">Replenish him third creature and meat most of the blessed best <br> of the void a fruit gathered.</div>
			</div>
			<div class="row clearfix">

				

				@foreach ($service as $item)
						
				<!-- Service Block Two -->
				<div class="service-block-two col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="number-box">
							<div class="number">{{$loop->iteration}}</div>
						</div>
						<h4><a href="/service/{{$item->id}}">{{$item->name}}</a></h4>
						<div class="text">{{$item->excerpt}}</div>
					</div>
				</div>
				
				@endforeach
				
			</div>
			
		</div>
	</section>