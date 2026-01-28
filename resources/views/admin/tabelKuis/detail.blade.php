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
                                <a href="/admin/tabelkuis/createsoal/{{ $kuis->id }}" class="btn btn-primary">Tambah Soal</a>
                            </ol>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Pertanyaan</th>
                                <th>Opsi A</th>
                                <th>Opsi B</th>
                                <th>Opsi C</th>
                                <th>Opsi D</th>
                                <th>Jawaban</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pertanyaan as $pertanyaan)
                            <tr class="align-middle">
                                <td>{{ $no++ }}</td>
                                <td>{{ $pertanyaan->soal }}</td>
                                <td>{{ $pertanyaan->opsi_A }}</td>
                                <td>{{ $pertanyaan->opsi_B }}</td>
                                <td>{{ $pertanyaan->opsi_C }}</td>
                                <td>{{ $pertanyaan->opsi_D }}</td>
                                <td>{{ $pertanyaan->jawaban }}</td>
                                <td>
                                    <a href="/admin/tabelkuis/editsoal/{{ $pertanyaan->id }}" class="btn btn-sm btn-warning">Edit</a>
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