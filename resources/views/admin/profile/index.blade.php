
<div class="row">
  <div class="col-md-12">
    <div class="p-1 card">
      <div class="card-body">

        <h4 class="text-main"><b>Data Mitra</b></h4>
        <hr>

         <a href="/admin/profil/edit" class="btn btn-primary mb-2">
            <i class="fas fa-edit"></i> Edit
          </a>

          {{-- @include('/admin/profile/edit') --}}

          <div class="row">
            <div class="col-md-6">

               <div class="pb-2">
                  <div for="" class="text-primary">Nama Lengkap</div>
                  <h5>{{ isset($user) ? $user->fullname : '-'}}</h5>
                </div>

                <div class="pb-2">
                  <div for="" class="text-primary">Gender</div>
                  <h5>{{ isset($user) ? $user->gender : '-'}}</h5>
                </div>

                <div class="pb-2">
                  <div for="" class="text-primary">Alamat</div>
                  <h5>{{isset($user) ? $user->alamat : '-'}}</h5> </h5>
                </div>

                {{-- <div class="pb-2">
                  <div for="" class="text-primary">Provinsi</div>
                  <h5>{{isset($user) ? $user->province->id : '-'}}</h5> </h5>
                </div> --}}

                <div class="pb-2">
                  <div for="" class="text-primary">Kota</div>
                  <h5>{{isset($user->regency) ? $user->regency->name : '-'}}</h5> </h5>
                </div>

                <div class="pb-2">
                <div for="" class="text-primary">Kemitraan Sebagai</div>
                <h5>{{ isset($user) ? $user->as_mitra : '-'}}</h5>
              </div>

              <div class="pb-2">
                <div for="" class="text-primary">About</div>
                <h5>{{ isset($user) ? $user->about : '-'}}</h5>
              </div>
              
                
          
            </div>
            <div class="col-md-6">
              
              <div class="pb-2">
                <div for="" class="text-primary">Foto</div>
              
                <img src="" alt="">
                @include('admin/profile/upload_foto')
                
              </div>
          </div>
        </div>
    </div>
  </div>
</div>




