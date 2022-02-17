  <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
<div class="row">
  <div class="col-md-12">
    <div class="p-3  card">
      <div class="card-body">

        @if (Request::is('admin/mou/create'))
          <form action="/admin/mou" method="POST" enctype="multipart/form-data">  
        @else
          <form action="/admin/mou/{{$mou->id}}" method="POST" enctype="multipart/form-data">  
            @method('PUT')
        @endif
          @csrf

          <div class="row">
            <div class="col-6">

              <div class="form-group">
                <label for="">Nama Layanan</label>
                <input type="text" class="form-control  @error('topic') is-invalid @enderror"  name="topic"  value="{{isset($mou) ? $mou->topic : old('topic')}}" placeholder="Nama Layanan">
                @error('topic')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                @enderror
              </div>

                <div class="form-group">
                <label for="">Deskripsi</label>
                <textarea class="form-control  @error('desc') is-invalid @enderror" id="summernote"  name="desc" placeholder="Deskripsi">{{isset($mou) ? $mou->desc : old('desc')}}</textarea>
                @error('desc')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                @enderror
              </div>          


            </div>
          </div>
          
         <a href="/admin/mou" class="btn btn-info "><i class="fa fa-arrow-left"></i> Kembali</a>
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

