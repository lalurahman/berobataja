<div class="row">
  <div class="col-md-12">
    <div class="p-3  card">
      <div class="card-body">


          <form action="/admin/about/update" method="POST" enctype="multipart/form-data">  
            @method('PUT')
          @csrf

          <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                  <label for="">Tentang Kami</label>
                  <textarea  name="about_us" class="form-control" id="editor1">{{$about->about_us}}</textarea>
                  @error('about_us')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                  @enderror
                </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Cover</label>
                <input type="file" class="form-control  @error('cover_about') is-invalid @enderror"  name="cover_about" >
                @error('cover_about')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                @enderror
              </div>
               @if (isset($about))
                      <img src="/{{$about->cover_about}}" width="150px" class="py-3" alt="">
                  @endif
                  </div>

                  
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
              </div>
              
        
        </form>
      </div>
    </div>
  </div>
</div>
<script src="/assets/js/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1', {
        height: 300,
    });
</script>

