
<div class="row">
  <div class="col-md-6">
    <div class="p-1 card">
      <div class="card-body">

        <h4 class="text-main"><b>Data Mitra</b></h4>
        <hr>

          @include('/admin/profile/edit')

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
          <div for="" class="text-primary">About</div>
          <h5>{{ isset($user) ? $user->about : '-'}}</h5>
        </div>
          
       

      </div>
    </div>
  </div>

   {{-- <div class="col-md-6">
    <div class="p-1 card">
      <div class="card-body">

         <h4 class="text-main"><b>Sertifikat</b></h4>
        @include('/admin/profile/sertifikat')

        <table class="table">
          <tr>
            <td width="50px">No.</td>
            <td>Title</td>
            <td width="50px">Action</td>
          </tr>
          @foreach ($sertifikat as $item)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->name}}</td>
            <td></td>
          </tr>
          @endforeach
        </table>

        <div class="float-right">
          {{$sertifikat->links()}}
        </div>

      </div>
    </div>
  </div> --}}
</div>


