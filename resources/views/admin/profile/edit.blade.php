 <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modal-default">
  <i class="fas fa-edit"></i> Edit
</button>

 <div class="modal fade" id="modal-default">
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

        <form action="/admin/profil/update/{{auth()->user()->id}}" method="POST">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="">Nama Lengkap</label>
            <input type="text" value="{{$mitra->fullname}}" name="fullname" class="form-control">
          </div>

          <div class="form-group">
            <label for="">Gender</label>
            <select name="gender" id="" class="form-control">
              <option value="">-- Gender --</option>
              <option value="Laki-laki"{{$mitra->gender == 'Laki-laki' ? 'selected' : ''}}>Laki-laki</option>
              <option value="Perempuan" {{$mitra->gender == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
            </select>
          </div>

          <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" value="{{$mitra->alamat}}" name="alamat" placeholder="Alamat" class="form-control">
          </div>

           <div class="form-group">
            <label for="">No Hp</label>
            <input type="text" value="{{$mitra->nohp}}" name="nohp" placeholder="nohp" class="form-control">
          </div>

          <div class="form-group">
            <label for="">About</label>
            <input type="text" value="{{$mitra->about}}" name="about" placeholder="Tentang" class="form-control">
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