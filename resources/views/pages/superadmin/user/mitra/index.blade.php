@extends('layouts.admin')

@section('content')
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Daftar Mitra</h5>
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <!-- Table with stripped rows -->
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Email</th>
                      <th scope="col">Username</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($mitra as $item)
                      <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->username }}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary"><i class="ri ri-edit-2-line"></i></a>
                            <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i></a>
                        </td>
                      </tr>
                    @endforeach
                    
                  </tbody>
                </table>
            </div>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
</section>
@endsection
