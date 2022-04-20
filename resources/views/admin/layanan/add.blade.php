  <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
<div class="row">
  <div class="col-md-12">
    <div class="p-3  card">
      <div class="card-body">

        @if (Request::is('admin/layanan/create'))
          <form action="/admin/layanan" method="POST" enctype="multipart/form-data">  
        @else
          <form action="/admin/layanan/{{$layanan->id}}" method="POST" enctype="multipart/form-data">  
            @method('PUT')
        @endif
          @csrf

          <div class="row">
            <div class="col-6">

              <div class="form-group">
                <label for="">Nama Layanan</label>
                <input type="text" class="form-control  @error('name') is-invalid @enderror"  name="name"  value="{{isset($layanan) ? $layanan->name : old('name')}}" placeholder="Nama Layanan">
                @error('name')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                @enderror
              </div>

              <div class="form-group">
                <label for="">Price Real</label>
                <input type="text" class="form-control  @error('price_real') is-invalid @enderror"  name="price_real"  value="{{isset($layanan) ? $layanan->price_real : old('price_real')}}" placeholder="Price Real">
                @error('price_real')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                @enderror
              </div>

              <div class="form-group">
                <label for="">Price Diskon</label>
                <input type="text" class="form-control  @error('price_disc') is-invalid @enderror"  name="price_disc"  value="{{isset($layanan) ? $layanan->price_disc : old('price_disc')}}" placeholder="Price Diskon">
                @error('price_disc')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                @enderror
              </div>

              <div class="form-group">
                <label for="">Deskripsi</label>
                <textarea class="form-control  @error('desc') is-invalid @enderror" id="summernote"  name="desc" placeholder="Deskripsi">{{isset($layanan) ? $layanan->desc : old('desc')}}</textarea>
                @error('desc')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                @enderror
              </div>



            </div>
            <div class="col-6">
               

               <div class="form-group">
                <label for="">Cover</label>
                <input type="file" class="form-control  @error('cover') is-invalid @enderror"  name="cover" >
                @error('cover')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                @enderror
              </div>
               @if (isset($layanan))
                      <img src="/{{$layanan->cover}}" width="150px" class="py-3" alt="">
                  @endif
                  </div>
          </div>
          
         <a href="/admin/layanan" class="btn btn-info "><i class="fa fa-arrow-left"></i> Kembali</a>
         <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="/plugins/summernote/summernote-bs4.min.js"></script>

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>

