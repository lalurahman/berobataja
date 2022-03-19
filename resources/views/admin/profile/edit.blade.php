




  <form action="/admin/profil/update/{{auth()->user()->id}}" method="POST">
    @method('PUT')
    @csrf

  <div class="row">
    <div class="col-md-12">
      <div class="p-1 card">
        <div class="card-body">

          <div class="row">
            <div class="col-md-6">
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
                    <option value="">Pilih Provinsi</option>
                    @foreach($provinces as $item)
                      <option value="{{$item->id}}" {{$item->id == $user->province ? 'selected' : ''}} >{{$item->name}}</option>
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

               

                 

            </div>
            <div class="col-md-6">

                <div class="form-group">
                  <label for="">No Hp</label>
                  <input type="text" value="{{$user->nohp}}" name="nohp" placeholder="nohp" required class="form-control">
                </div>

                <div class="form-group">
                  <label for="">About</label>
                  <input type="text" value="{{$user->about}}" name="about" placeholder="Tentang" required class="form-control">
                </div>

               <div class="form-group">
                  <label for="">Kemitraan Sebagai</label>
                  <select name="as_mitra" id="" class="form-control">
                    <option value="">-- Kemitraan Sebagai --</option>
                    <option value="Dokter"{{$user->role == 'Dokter' ? 'selected' : ''}}>Dokter</option>
                    <option value="Perawat"{{$user->role == 'Perawat' ? 'selected' : ''}}>Perawat</option>
                    <option value="Non-medis"{{$user->role == 'Non-medis' ? 'selected' : ''}}>Non-medis</option>
                  </select>
                </div>

            </div>
          </div>

          <br>
        <button type="submit" class="btn btn-primary">Simpan</button>

     </div>
    </div>
  </div>
 </div>
          
</form>
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
                url: "{{url('/get-regency')}}" +'/' +$this.val() , 
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