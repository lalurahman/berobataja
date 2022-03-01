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
            <input type="text" value="{{$user->fullname}}" name="fullname" required class="form-control">
          </div>

          <div class="form-group">
            <label for="">Gender</label>
            <select name="gender" id="" class="form-control">
              <option value="">-- Gender --</option>
              <option value="Laki-laki"{{$user->gender == 'Laki-laki' ? 'selected' : ''}}>Laki-laki</option>
              <option value="Perempuan" {{$user->gender == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
            </select>
          </div>

          <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" value="{{$user->alamat}}" name="alamat" placeholder="Alamat" required class="form-control">
          </div>

          <div class="row">
          <div class="col-12 col-md-6">
            <label for="province" class="form-label">Provinsi</label>
            <select class="form-control" id="province" name="province" required>
              <option value="" selected>Pilih Provinsi</option>
              @foreach($provinces as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
              @endforeach
            </select>
            <div class="invalid-feedback">
              Please select a valid province.
            </div>
          </div>

          <div class="col-12 col-md-6">
            <label for="city" class="form-label">Kota/Kabupaten</label>
            <select class="form-control" id="city" name="city" disabled required>
              <option value="">Pilih Kota/Kabupaten</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid city.
            </div>
          </div>
          </div>

          {{-- <div class="form-group">
            <label for="">Kota</label>
            <input type="text" value="{{$user->kota}}" name="kota" placeholder="Kota" required class="form-control">
          </div> --}}

           <div class="form-group">
            <label for="">No Hp</label>
            <input type="text" value="{{$user->nohp}}" name="nohp" placeholder="nohp" required class="form-control">
          </div>

          <div class="form-group">
            <label for="">About</label>
            <input type="text" value="{{$user->about}}" name="about" placeholder="Tentang" required class="form-control">
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

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
  $(document).ready(function(){
    $('#province option[value=""]').prop('selected',true);
    $('#city option[value!=""]').remove();

    province = $('#province')
    province.on('change', function() {
        $this = $(this)
        city = $('#city')

        if ($this.val() !== '') {
            $.ajax({
                url: "{{url('/admin/get-regency')}}" +'/' +$this.val() , 
                type: 'GET',
                dataType: 'json',
                success: function(response){
                    if (response !== 'NOT OK') {
                        city.removeAttr('disabled')
                        city.html(response)
                    }
                }
            });
        } else {
            city.prop('disabled', true)
            city.find('option').val('').text('Pilih Kota/Kabupaten')
        }
    })  
  });
</script>