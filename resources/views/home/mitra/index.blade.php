<div class="container">
	<div class="row">
			<div class="sec-title centered">
				<h2>Pilihan Tenanga {{request('role')}}</h2>
				<p>Pilih dari mitra terbaik kami</p>
			</div>
	</div>
	{{-- @dd($user) --}}
	@if (count($mitra) <= 0)
		<div class="alert alert-danger">	Belum ada mitra</div>
	@else
			{{-- @dd($mitra) --}}
	<div class="row">
		<!-- Team Block -->
		@foreach ($mitra as $item)
		<div class="col-md-4">
			<div class="team-block style-three">
				<div class="inner-box">
					<a href="/home/mitra/{{$item->id}}">
						<div class="image" style="max-height: 300px">
							<img src="/{{$item->foto != null ? $item->foto : 'img/user.jpg'}}" alt="" />
							<div class="overlay-box">
								<div class="content">
									<h4 class="text-white">{{$item->fullname}}</h4>
									<div class="designation">{{$item->jenis}}</div>
									<!-- <a href="#" class="btn btn-primary btn-block w-100">pesan</a> -->
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		@endforeach

	@endif


 </div>
</div>