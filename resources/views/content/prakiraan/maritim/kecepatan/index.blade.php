<x-app title="Kecepatan Angin Dilaut">
    <div class="layout-top-spacing layout-spacing">
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <x-template.button.add url="#tambahdata" dto="modal" dta="#tambahdata"
                                    ket="Tambah Data" />
                                <h4>Daftar Kecepatan Angin Dilaut</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="style-3" class="table style-3  table-hover">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column text-center"> No </th>
                                        <th>Gambar</th>
                                        <th>Parameter</th>
                                        <th>Tanggal</th>
                                        <th>Model Run</th>
                                        <th>Jam</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_anginlaut as $anginlaut)
                                        <tr>
                                            <td class="checkbox-column text-center"> {{ $loop->iteration }} </td>
                                            <td>
                                                <div class="avatar avatar-xl">
                                                    <img data-target="#ModalShow{{ $anginlaut->id }}"
                                                        data-toggle="modal" src="{{ url("public/$anginlaut->gambar") }}"
                                                        class="rounded" alt="avatar">
                                                </div>
                                            </td>
                                            <td>{{ $anginlaut->parameter }}</td>
                                            <td>{{ $anginlaut->tanggal }}</td>
                                            <td>{{ $anginlaut->model_run }}</td>
                                            <td>{{ $anginlaut->jam }}</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <x-template.button.edit dto="modal"
                                                        dta="#editdata{{ $anginlaut->id }}" />
                                                    <x-template.button.delete id="{{ $anginlaut->id }}" />
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Upload -->
    <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="tambahdataTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahdataTitle">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('data_manager/admin/kecepatan') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Parameter</label>
                                    <input type="text" name="parameter" placeholder="Parameter" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="text" name="tanggal" placeholder="dd month" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Model Run</label>
                                    <input type="text" name="model_run" placeholder="dd-mm-yyyy --UTC"
                                        class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Jam</label>
                                    <input type="text" name="jam" placeholder="-- UTC" class="form-control"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="gambar">
                        </div>
                        <input type="submit" class="mt-4 btn btn-primary float-right">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    @foreach ($list_anginlaut as $anginlaut)
        <div class="modal fade" id="editdata{{ $anginlaut->id }}" tabindex="-1" role="dialog"
            aria-labelledby="editdataTitle{{ $anginlaut->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editdataTitle{{ $anginlaut->id }}">Edit Data
                            {{ $anginlaut->parameter }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('data_manager/admin/kecepatan', $anginlaut->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                                    <div class="card">
                                        <img src="{{ url("public/$anginlaut->gambar") }}">
                                    </div>
                                </div>

                                <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                    <div class="form-group">
                                        <input type="text" name="parameter" class="form-control"
                                            value="{{ $anginlaut->parameter }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="tanggal" class="form-control"
                                            value="{{ $anginlaut->tanggal }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="model_run" class="form-control"
                                            value="{{ $anginlaut->model_run }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="jam" class="form-control"
                                            value="{{ $anginlaut->jam }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="gambar">
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="mt-4 btn btn-primary float-right">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Modal Show -->
    @foreach ($list_anginlaut as $anginlaut)
        <div class="modal fade" id="ModalShow{{ $anginlaut->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalShowTitle{{ $anginlaut->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalShowTitle{{ $anginlaut->id }}">Detail Data {{$anginlaut->parameter}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="">
                                <img src="{{ url("public/$anginlaut->gambar") }}" style="max-width:100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app>
