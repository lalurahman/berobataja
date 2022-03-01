<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modal-default-sertifikat">
  <i class="fas fa-filter"></i> Filter
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


          <form action="/home/layanan" method="get" >
              
              {{-- <div class="form-group">
                <label for="">Filter</label>
                <select name="filter" class="form-control" id="">
                  <option value="name">Nama Layanan</option>
                  <option value="kota">Kota</option>
                </select>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" placeholder="Filter.." name="value">
              </div> --}}

               <div class="row">
                <div class="col-12">
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

                <div class="col-12">
                  <label for="city" class="form-label">Kota/Kabupaten</label>
                  <select class="form-control" id="city" name="city" disabled required>
                    <option value="">Pilih Kota/Kabupaten</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid city.
                  </div>
                </div>
                </div>



              <div class="modal-footer justify-content-between">
                  <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </form>
            
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