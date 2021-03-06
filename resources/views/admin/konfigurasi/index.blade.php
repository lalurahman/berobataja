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


          <div class="form-group">
            <label for="">WA Admin</label>
            <input type="text" class="form-control  @error('contact_admin') is-invalid @enderror"  name="contact_admin"  value="{{isset($konfigurasi) ? $konfigurasi->contact_admin : old('contact_admin')}}" placeholder="Nama">
             @error('contact_admin')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
             @enderror
          </div>

           <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control  @error('email') is-invalid @enderror"  name="email"  value="{{isset($konfigurasi) ? $konfigurasi->email : old('email')}}" placeholder="Email">
             @error('email')
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

