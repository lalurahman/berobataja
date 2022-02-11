<div class="row">
  <div class="col-md-6">
    <div class="p-3  card">
      <div class="card-body">

        @if (Request::is('admin/dokumen/create*'))
          <form action="/admin/dokumen" method="POST" enctype="multipart/form-data">  
        @else
          <form action="/admin/dokumen/{{$dokumen->id}}" method="POST" enctype="multipart/form-data">  
            @method('PUT')
        @endif
          @csrf
          

          <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control  @error('name') is-invalid @enderror"  name="name"  value="{{isset($dokumen) ? $dokumen->name : old('name')}}" placeholder="Name">
             @error('name')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
             @enderror
          </div>

          <input type="hidden" name="type" value="{{ isset($dokumen) ? $dokumen->type : request('type')}}">

          <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea class="form-control  @error('desc') is-invalid @enderror" id="summernote"  name="desc" placeholder="Deskripsi">{{isset($dokumen) ? $dokumen->desc : old('desc')}}</textarea>
            @error('desc')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
            @enderror
          </div>

          
          <div class="form-group">
            <label for="">Gambar</label>
            <input type="file" class="form-control  @error('gambar') is-invalid @enderror"  name="gambar"  value="{{isset($dokumen) ? $dokumen->gambar : old('gambar')}}" placeholder="gambar">
            <small>*Hanya menerima format .jpg dan .png</small>
             @error('gambar')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
             @enderror

            @if (isset($dokumen))
                <img src="/{{$dokumen->gambar}}" width="100%" class="py-3" alt="">
            @endif
          </div>

     
          <a href="/admin/dokumen" class="btn btn-info "><i class="fa fa-arrow-left"></i> Kembali</a>
         <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        
        </form>
      </div>
    </div>
  </div>
</div>

