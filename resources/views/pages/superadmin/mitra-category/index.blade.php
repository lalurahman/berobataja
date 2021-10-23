@extends('layouts.admin')

@section('content')
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Kategori Mitra</h5>
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row mb-4">
                <div class="col-12">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addMitraCategoryModal"><i class="bx bx-plus-medical"></i> Tambah Kategori</button>
                </div>
            </div>
            <!-- Table with stripped rows -->
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($mitraCategory as $item)
                      <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $item->name }}</td>
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

@push('addon-script')
<div class="modal fade" id="addMitraCategoryModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Basic Modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('admin-add-mitra-category') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="name">Nama Kategori</label>
            <input type="text" name="name" id="name" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endpush