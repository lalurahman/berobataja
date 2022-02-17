
  
  <section class="department-page-section">
		<div class="auto-container">
			<div class="sec-title centered">
        <h2>Pilihan Layanan</h2>			
			</div>
      @include('/home/layouts/filter')
			<div class="row clearfix">
				
				<!-- Department Block -->
         @foreach ($layanan as $item)
             
         <div class="department-block col-lg-6 col-md-12 col-sm-12">
           <div class="inner-box">
             <div class="image">
               <a href="/home/layanan/{{$item->id}}"><img src="/img/thumb.jpg" alt="" /></a>
              </div>
              <div class="content">
                <h4><a href="/home/layanan/1">{{$item->name}}</a></h4>
                <h6 class="text">Harga : {{format_rupiah($item->price_real)}}</h6>
                <a href="/home/layanan/{{$item->id}}" class="theme-btn btn-style-seven"><span class="txt">Pilih Layanan</span></a>
              </div>
            </div>
          </div>
          
          @endforeach
				
			</div>

			
		</div>
	</section>
	<!-- End Department Page Section -->

