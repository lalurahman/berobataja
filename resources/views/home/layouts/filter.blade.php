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
              
              <div class="form-group">
                <label for="">Filter</label>
                <select name="filter" class="form-control" id="">
                  <option value="name">Nama Layanan</option>
                  <option value="kota">Kota</option>
                </select>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" placeholder="Filter.." name="value">
              </div>


              <div class="modal-footer justify-content-between">
                  <button type="submit" class="btn btn-primary">Ubah</button>
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