
<div class="row">
  <div class="col-md-6">
    <div class="p-1 card">
      <div class="card-body">

        <h4 class="text-main"><b>Data Mitra</b></h4>
        <hr>

         <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modal-default">
          <i class="fas fa-edit"></i> Edit
        </button>

        <div class="pb-2">
          <div for="" class="text-primary">Nama Lengkap</div>
          <h5>{{ isset($mitra) ? $mitra->fullname : '-'}}</h5>
        </div>

         <div class="pb-2">
          <div for="" class="text-primary">Gender</div>
          <h5>{{ isset($mitra) ? $mitra->gender : '-'}}</h5>
        </div>

        <div class="pb-2">
          <div for="" class="text-primary">Alamat</div>
          <h5>{{isset($mitra) ? $mitra->alamat : '-'}}</h5> </h5>
        </div>
      
         <div class="pb-2">
          <div for="" class="text-primary">About</div>
          <h5>{{ isset($mitra) ? $mitra->about : '-'}}</h5>
        </div>
          
       

      </div>
    </div>
  </div>

   <div class="col-md-6">
    <div class="p-1 card">
      <div class="card-body">

         <h4 class="text-main"><b>Sertifikat</b></h4>
        <a href="" class="btn btn-primary my-3"><i class="fas fa-plus"></i> Tambah</a>

        <table class="table">
          <tr>
            <td width="50px">No.</td>
            <td>Title</td>
            <td width="50px">Action</td>
          </tr>
          <tr>
            <td>1.</td>
            <td>Lorem Ipsum</td>
            <td></td>
          </tr>
        </table>

      </div>
    </div>
  </div>
</div>



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
             <form action="">
               <div class="form-group">
                 <label for="">Nama Lengkap</label>
                 <input type="text" value="{{$mitra->fullname}}" name="fullname" class="form-control">
               </div>

                <div class="form-group">
                 <label for="">Gender</label>
                 <select name="" id="" class="form-control">
                   <option value="">-- Gender --</option>
                   <option value="Laki-laki">Laki-laki</option>
                   <option value="Perempuan">Perempuan</option>
                 </select>
               </div>

                <div class="form-group">
                 <label for="">Alamat</label>
                 <input type="text" value="{{$mitra->alamat}}" name="alamat" placeholder="Alamat" class="form-control">
               </div>

               <div class="form-group">
                 <label for="">About</label>
                 <input type="text" value="{{$mitra->about}}" name="about" placeholder="Alamat" class="form-control">
               </div>

             </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->