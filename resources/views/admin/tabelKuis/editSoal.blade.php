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
            <div class="col-sm-6"><h3 class="mb-0">Form Edit Soal</h3></div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form Edit Soal</li>
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
                <div class="col-md-12">
                    <!--begin::Input Group-->
                    <div class="card card-primary card-outline mb-4">
                        <!--begin::Header-->
                        <div class="card-header"><div class="card-title">Input Soal</div></div>
                        <!--end::Header-->
                        <!--begin::Body-->
                    <form action="/admin/tabelkuis/update/{{ $editSoal->id_kuis }}" method="post">
                        @csrf
                        <input type="text" hidden name="id_kuis" value="{{ $editSoal->id_kuis }}">
                        <div class="card-body">
                            <label for="username" class="form-label">Judul Kuis</label>
                            <div class="input-group mb-3">
                            <input
                                type="text"
                                class="form-control"
                                aria-describedby="basic-addon2"
                                name="judul"
                                value="{{ $editSoal->judul }}"
                            />
                            </div>
                            <fieldset class="row mb-2">
                            <legend class="col-form-label col-sm-1 pt-0">Kategori</legend>
                            <div class="col-sm-10">
                                    @foreach ($kategori as $kategori)
                                    <div class="form-check">
                                        <input
                                        class="form-check-input"
                                        type="radio"
                                        name="kategori"
                                        id="gridRadios1"
                                        value="{{ $kategori }}"
                                        />
                                        <label class="form-check-label" for="gridRadios1"> {{ $kategori }} </label>
                                    </div>
                                    @endforeach
                                </div>
                            </fieldset>
                            <label for="username" class="form-label">Pertanyaan</label>
                            <div class="input-group mb-3">
                            <input
                                type="text"
                                class="form-control"
                                aria-describedby="basic-addon2"
                                name="soal"
                                value="{{ $editSoal->soal }}"
                            />
                            </div>
                            <label for="nama" class="form-label">Opsi A</label>
                            <div class="input-group mb-3">
                            <input
                                type="text"
                                class="form-control"
                                aria-describedby="basic-addon2"
                                name="opsi_A"
                                value="{{ $editSoal->opsi_A }}"
                            />
                            </div>
                            <label for="nama" class="form-label">Opsi B</label>
                            <div class="input-group mb-3">
                            <input
                                type="text"
                                class="form-control"
                                aria-describedby="basic-addon2"
                                name="opsi_B"
                                value="{{ $editSoal->opsi_B }}"
                            />
                            </div>
                            <label for="nama" class="form-label">Opsi C</label>
                            <div class="input-group mb-3">
                            <input
                                type="text"
                                class="form-control"
                                aria-describedby="basic-addon2"
                                name="opsi_C"
                                value="{{ $editSoal->opsi_C }}"
                            />
                            </div>
                            <label for="nama" class="form-label">Opsi D</label>
                            <div class="input-group mb-3">
                            <input
                                type="text"
                                class="form-control"
                                aria-describedby="basic-addon2"
                                name="opsi_D"
                                value="{{ $editSoal->opsi_D }}"
                            />
                            </div>
                            <fieldset class="row mb-2">
                            <legend class="col-form-label col-sm-1 pt-0">Jawaban</legend>
                            <div class="col-sm-10">
                                    @foreach ($jawabOpt as $jawab)
                                    <div class="form-check">
                                        <input
                                        class="form-check-input"
                                        type="radio"
                                        name="jawaban"
                                        id="gridRadios1"
                                        value="{{ $jawab }}"
                                        />
                                        <label class="form-check-label" for="gridRadios1"> {{ $jawab }} </label>
                                    </div>
                                    @endforeach
                                </div>
                            </fieldset>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <!--end::Footer-->
                        </div>
                        <!--end::Input Group-->
                    </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->
@endsection
