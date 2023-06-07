<x-app title="Pegawai">
    <div class="layout-top-spacing layout-spacing">
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <x-template.button.add url="#tambahdata" dto="modal" dta="#tambahdata"
                                    ket="Tambah Data" />
                                <h4>Daftar Pegawai</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="style-3" class="table style-3  table-hover">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column text-center"> No </th>
                                        <th>Foto</th>
                                        <th>Nama Pegawai</th>
                                        <th>Kategori</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_pegawai as $pegawai)
                                        <tr>
                                            <td class="checkbox-column text-center"> {{ $loop->iteration }} </td>
                                            <td>
                                                <div class="avatar">
                                                    <img alt="avatar" src="{{ url("public/$pegawai->foto") }}"
                                                        data-toggle="modal" data-target="#ModalShow{{ $pegawai->id }}"
                                                        class="rounded-circle" />
                                                </div>
                                            </td>
                                            <td>{{ $pegawai->nama }}</td>
                                            <td>{{ $pegawai->kategori }}</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <x-template.button.edit dto="modal"
                                                        dta="#editdata{{ $pegawai->id }}" />
                                                    <x-template.button.delete id="{{ $pegawai->id }}" />
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
                    <form action="{{ url('data_manager/admin/pegawai') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" class="form-control" name="foto" accept="image/jpg,image/png,image/jpeg">
                        </div>
                        <div class="form-group">
                            <input id="nama" type="text" name="nama" placeholder="Nama Lengkap"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="kategori">
                                <option selected="selected">--Pilih Kategori--</option>
                                <option value="ASN">ASN</option>
                                <option value="PPNPN">PPNPN</option>
                            </select>
                        </div>
                        <input type="submit" class="mt-4 btn btn-primary float-right">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    @foreach ($list_pegawai as $pegawai)
        <div class="modal fade" id="editdata{{ $pegawai->id }}" tabindex="-1" role="dialog"
            aria-labelledby="editdataTitle{{ $pegawai->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editdataTitle{{ $pegawai->id }}">Edit Data {{ $pegawai->nama }}
                        </h5>
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
                        <form action="{{ url('data_manager/admin/pegawai',$pegawai->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                                    <div class="card">
                                        <img src="{{ url("public/$pegawai->foto") }}">
                                    </div>
                                </div>

                                <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="foto">
                                    </div>
                                    <div class="form-group">
                                        <input id="nama" type="text" name="nama"
                                            placeholder="Nama Lengkap" class="form-control"
                                            value="{{ $pegawai->nama }}">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="kategori">
                                            <option selected="selected">{{ $pegawai->kategori }}</option>
                                            <option value="ASN">ASN</option>
                                            <option value="PPNPN">PPNPN</option>
                                        </select>
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
    @foreach ($list_pegawai as $pegawai)
        <div class="modal fade" id="ModalShow{{ $pegawai->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalShowTitle{{ $pegawai->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalShowTitle{{ $pegawai->id }}">Foto
                            {{ $pegawai->nama }}</h5>
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
                                <img src="{{ url("public/$pegawai->foto") }}" style="max-width:100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app>
