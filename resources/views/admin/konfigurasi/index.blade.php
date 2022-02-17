<div class="row">
  <div class="col-md-6">
    <div class="p-3  card">
      <div class="card-body">


          <form action="/admin/konfigurasi/update" method="POST">  
            @method('PUT')
          @csrf
          <div class="form-group">
            <label for="">Nama Aplikasi</label>
            <input type="text" class="form-control  @error('app_name') is-invalid @enderror"  name="app_name"  value="{{isset($konfigurasi) ? $konfigurasi->app_name : old('app_name')}}" placeholder="Nama">
             @error('app_name')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
             @enderror
          </div>


           <div class="form-group">
            <label for="">Up Harga</label>
            <input type="text" class="form-control  @error('up_harga') is-invalid @enderror"  name="up_harga"  value="{{isset($konfigurasi) ? $konfigurasi->up_harga : old('up_harga')}}" placeholder="Nama">
             @error('up_harga')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
             @enderror
          </div>

       

          <a href="/admin/konfigurasi" class="btn btn-info "><i class="fa fa-arrow-left"></i> Kembali</a>
         <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        
        </form>
      </div>
    </div>
  </div>
</div>

