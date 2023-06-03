<x-app title="Pelayanan">
    <div class="layout-top-spacing layout-spacing">
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <x-template.button.add url="#tambahdata" dto="modal" dta="#tambahdata"
                                    ket="Tambah Data" />
                                <h4>Daftar Pelayanan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="style-3" class="table style-3  table-hover">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column text-center"> No </th>
                                        <th>Keterangan</th>
                                        <th>Kategori</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_pelayanan as $pelayanan)
                                        <tr>
                                            <td class="checkbox-column text-center"> {{ $loop->iteration }} </td>
                                            <td>{{ $pelayanan->ket }}</td>
                                            <td>{{ $pelayanan->kategori }}</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <x-template.button.show dto="modal"
                                                        dta="#ModalSlide{{ $pelayanan->id }}" url="" />
                                                    <x-template.button.edit dto="modal"
                                                        dta="#editdata{{ $pelayanan->id }}" />
                                                    <x-template.button.delete id="{{ $pelayanan->id }}" />
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
                    <form action="{{ url('data_manager/admin/pelayanan') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <label>Keterangan</label>
                        <div class="form-group">
                            <input id="nama" type="text" name="ket" placeholder="Keterangan"
                                class="form-control" required>
                        </div>
                        <label>Kategori</label>
                        <div class="form-group">
                            <select class="form-control" name="kategori" required>
                                <option>--Pilih Kategori--</option>
                                <option value="Contoh Surat Pengantar">Contoh Surat Pengantar</option>
                                <option value="Regulasi">Regulasi</option>
                            </select>
                        </div>
                        <label>PDF</label>
                        <div class="form-group">
                            <input type="file" class="form-control" name="file" accept="application/pdf">
                        </div>
                        <input type="submit" class="mt-4 btn btn-primary float-right">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    @foreach ($list_pelayanan as $pelayanan)
        <div class="modal fade" id="editdata{{ $pelayanan->id }}" tabindex="-1" role="dialog"
            aria-labelledby="editdataTitle{{ $pelayanan->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editdataTitle{{ $pelayanan->id }}">Edit Data
                            {{ $pelayanan->ket }}
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
                        <form action="{{ url('data_manager/admin/pelayanan', $pelayanan->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                    <label>Keterangan</label>
                                    <div class="form-group">
                                        <input id="nama" type="text" name="ket" placeholder="Keterangan"
                                            class="form-control" value="{{ $pelayanan->ket }}">
                                    </div>
                                    <label>Kategori</label>
                                    <div class="form-group">
                                        <select class="form-control" name="kategori">
                                            <option>{{$pelayanan->kategori}}</option>
                                            <option value="Contoh Surat Pengantar">Contoh Surat Pengantar</option>
                                            <option value="Regulasi">Regulasi</option>
                                        </select>
                                    </div>
                                    <label>PDF</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="file"
                                            accept="application/pdf">
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
    @foreach ($list_pelayanan as $pelayanan)
        <div class="modal fade" id="ModalSlide{{ $pelayanan->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title align-right" id="exampleModalLabel">{{ $pelayanan->ket }}</h5>
                    </div>
                    <div class="modal-body">
                        <embed src="{{ url("public/$pelayanan->file") }}" width="100%" height="900">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app>
