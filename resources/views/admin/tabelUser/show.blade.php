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
          <div class="col-sm-6"><h3 class="mb-0">Tabel User</h3></div>
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
                        <h3 class="card-title">Tabel User</h3>
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user as $user)
                            <tr class="align-middle">
                                <td>{{ $no++ }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->nama }}</td>
                                <td>{{ $user->email }}</td>
                                @if ($user->role == 'Admin')
                                <td><span class="badge text-bg-primary">Admin</span></td>
                                @elseif ($user->role == 'Umum')
                                <td><span class="badge text-bg-danger">Umum</span></td>
                                @endif
                                <td>
                                    <a href="/admin/tabeluser/edit/{{ $user->id }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="/admin/tabeluser/delete/{{ $user->id }}" class="btn btn-sm btn-danger">Delete</a>
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