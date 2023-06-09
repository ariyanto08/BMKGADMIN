<x-app title="Publikasi">
    <div class="layout-top-spacing layout-spacing">
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <x-template.button.add url="#tambahdata" dto="modal" dta="#tambahdata"
                                    ket="Tambah Data" />
                                <h4>Daftar Artikel dan Buletin</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="style-3" class="table style-3  table-hover">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column text-center"> No </th>
                                        <th>Gambar Thumbnail</th>
                                        <th>Keterangan</th>
                                        <th>Kategori</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_publikasi as $publikasi)
                                        <tr>
                                            <td class="checkbox-column text-center"> {{ $loop->iteration }} </td>
                                            <td>
                                                <div class="avatar avatar-xl">
                                                    <img alt="avatar" src="{{ url("public/$publikasi->gambar") }}"
                                                        class="rounded" />
                                                </div>
                                            </td>
                                            <td>{{ $publikasi->ket }}</td>
                                            <td>{{ $publikasi->kategori }}</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <a href="{{ url("public/$publikasi->file") }}"><button
                                                            class="btn btn-info btn-tone bs-tooltip">Download</button></a>
                                                    <x-template.button.edit dto="modal"
                                                        dta="#editdata{{ $publikasi->id }}" />
                                                    <x-template.button.delete id="{{ $publikasi->id }}" />
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
                    <form action="{{ url('data_manager/admin/publikasi') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <label>Gambar Thumbnail</label>
                        <div class="form-group">
                            <input type="file" class="form-control" name="gambar">
                        </div>
                        <label>Keterangan</label>
                        <div class="form-group">
                            <input id="nama" type="text" name="ket" placeholder="Keterangan"
                                class="form-control" required>
                        </div>
                        <label>Kategori</label>
                        <div class="form-group">
                            <select class="form-control" name="kategori" required>
                                <option>--Pilih Kategori--</option>
                                <option value="Artikel">Artikel</option>
                                <option value="Buletin">Buletin</option>
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
    @foreach ($list_publikasi as $publikasi)
        <div class="modal fade" id="editdata{{ $publikasi->id }}" tabindex="-1" role="dialog"
            aria-labelledby="editdataTitle{{ $publikasi->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editdataTitle{{ $publikasi->id }}">Edit Data {{ $publikasi->ket }}
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
                        <form action="{{ url('data_manager/admin/publikasi', $publikasi->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                    <label>Gambar Thumbnail</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="gambar">
                                    </div>
                                    <label>Keterangan</label>
                                    <div class="form-group">
                                        <input id="nama" type="text" name="ket" placeholder="Keterangan"
                                            class="form-control" value="{{ $publikasi->ket }}">
                                    </div>
                                    <label>Kategori</label>
                                    <div class="form-group">
                                        <select class="form-control" name="kategori">
                                            <option>{{ $publikasi->kategori }}</option>
                                            <option value="Artikel">Artikel</option>
                                            <option value="Buletin">Buletin</option>
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
</x-app>
