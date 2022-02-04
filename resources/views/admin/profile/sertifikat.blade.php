<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modal-default-sertifikat">
  <i class="fas fa-edit"></i> Edit
</button>
 
 <div class="modal fade" id="modal-default-sertifikat">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Lengkapi Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

          @if (isset($item))
            <form action="/admin/gambar/{{isset($item) ? $item->id : ''}}" method="POST" enctype="multipart/form-data">
          @else
            <form action="/admin/gambar" method="POST" enctype="multipart/form-data">
          @endif
          @csrf
          <div class="form-group">
            <label for="">Nama Sertifikat</label>
            <input type="text" value="{{isset($item) ? $item->name : ''}}" required placeholder="Nama Setifikat" name="name" class="form-control">
          </div>

          <div class="form-group">
            <label for="">Gambar Sertifikat</label>
            <input type="file" class="form-control  @error('gambar') is-invalid @enderror" required name="gambar"  value="{{isset($item) ? $item->gambar : old('gambar')}}" placeholder="Judul">

            @if (isset($item))
                <img src="/{{$item->gambar}}" width="100%" class="mt-2" alt="">
            @endif
          </div>

           <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
            
        </form>
      </div>
     
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->