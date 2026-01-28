@extends('admin.sidebar')
@section('content')
<!--begin::App Main-->
  <main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <div class="col-sm-6"><h3 class="mb-0">Tabel Kuis</h3></div>
        </div>
        <!--end::Row-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
      <!--begin::Container-->
      <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <!-- /.card -->
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Kuis</h3>
                            <ol class="breadcrumb float-sm-end">
                                <a href="/admin/tabelkuis/create" class="btn btn-primary">Tambah Kuis</a>
                            </ol>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Nama Pembuat</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($kuis as $kuis)
                            <tr class="align-middle">
                                <td>{{ $no++ }}</td>
                                <td>{{ $kuis->name }}</td>
                                <td>{{ $kuis->judul }}</td>
                                <td>{{ $kuis->kategori }}</td>
                                <td>
                                    <a href="/admin/tabelkuis/detail/{{ $kuis->id }}" class="btn btn-sm btn-primary">Detail</a> | 
                                    <a href="/admin/tabelkuis/delete/{{ $kuis->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tr>
                            </tbody>
                        </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->
@endsection