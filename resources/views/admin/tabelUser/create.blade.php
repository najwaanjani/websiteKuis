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
            <div class="col-sm-6"><h3 class="mb-0">Form Tambah User</h3></div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form Tambah User</li>
            </ol>
            </div>
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
            <div class="row g-4">
                <form action="/admin/tabeluser/add" method="post">
                    @csrf
                    <div class="col-md-12">
                        <!--begin::Input Group-->
                        <div class="card card-primary card-outline mb-4">
                        <!--begin::Header-->
                        <div class="card-header"><div class="card-title">Input User</div></div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <label for="username" class="form-label">Username:</label>
                            <div class="input-group mb-3">
                            <input
                                type="text"
                                class="form-control"
                                aria-describedby="basic-addon2"
                                name="username"
                            />
                            </div>
                            <label for="name" class="form-label">Nama:</label>
                            <div class="input-group mb-3">
                            <input
                                type="text"
                                class="form-control"
                                aria-describedby="basic-addon2"
                                name="name"
                            />
                            </div>
                            <label for="email" class="form-label">Email:</label>
                            <div class="input-group mb-3">
                            <input
                                type="email"
                                class="form-control"
                                aria-describedby="basic-addon2"
                                placeholder="example@gmail.com"
                                name="email"
                            />
                            </div>
                            <label for="password" class="form-label">Password:</label>
                            <div class="input-group mb-3">
                            <input
                                type="password"
                                class="form-control"
                                aria-describedby="basic-addon2"
                                name="password"
                            />
                            </div>
                            <fieldset class="row mb-2">
                            <legend class="col-form-label col-sm-1 pt-0">Role</legend>
                            <div class="col-sm-10">
                                    @foreach ($roleOpt as $ro)
                                    <div class="form-check">
                                        <input
                                        class="form-check-input"
                                        type="radio"
                                        name="role"
                                        id="gridRadios1"
                                        value="{{ $ro }}"
                                        checked
                                        />
                                        <label class="form-check-label" for="gridRadios1"> {{ $ro }} </label>
                                    </div>
                                    @endforeach
                                </div>
                            </fieldset>
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <!--end::Footer-->
                        </div>
                        <!--end::Input Group-->
                    </div>
                </form>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->
@endsection