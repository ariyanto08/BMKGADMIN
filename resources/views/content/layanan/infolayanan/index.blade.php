<x-app title="Informasi Layanan">
    <div class="layout-top-spacing layout-spacing">
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <x-template.button.add url="#tambahdata" dto="modal" dta="#tambahdata"
                                    ket="Tambah Data" />
                                <h4>Daftar Informasi Layanan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="style-3" class="table style-3  table-hover">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column text-center"> No </th>
                                        <th>Bab</th>
                                        <th>Sub Bab</th>
                                        <th>Jenis Informasi</th>
                                        <th>Sub Jenis Informasi</th>
                                        <th>Satuan</th>
                                        <th>Tarif</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_infolayanan as $infolayanan)
                                        <tr>
                                            <td class="checkbox-column text-center"> {{ $loop->iteration }} </td>
                                            <td>{{$infolayanan->bab}}</td>
                                            <td>{{$infolayanan->sub_bab}}</td>
                                            <td>{{$infolayanan->isi}}</td>
                                            <td>{{$infolayanan->sub_isi}}</td>
                                            <td>{{$infolayanan->satuan}}</td>
                                            <td>{{$infolayanan->tarif}}</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <x-template.button.edit dto="modal"
                                                        dta="#editdata{{ $infolayanan->id }}" />
                                                    <x-template.button.delete id="{{ $infolayanan->id }}" />
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
                    <form action="{{ url('data_manager/admin/infolayanan') }}" method="post">
                        @csrf
                        <label>Bab</label>
                        <div class="form-group">
                            <select class="form-control" name="bab">
                                <option selected="selected">--Pilih--</option>
                                <option value="I. INFORMASI METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA">I. INFORMASI METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA</option>
                                <option value="II. JASA KONSULTASI METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA">II. JASA KONSULTASI METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA</option>
                            </select>
                        </div>

                        <label>Sub Bab</label>
                        <div class="form-group">
                            <select class="form-control" name="sub_bab">
                                <option selected="selected">--Pilih--</option>
                                <option value="A. INFORMASI KHUSUS METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA">A. INFORMASI KHUSUS METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA</option>
                                <option value="B. INFORMASI KHUSUS METEOROLOGI , KLIMATOLGI DAN GEOFISIKA SESUAI PERMINTAAN">B. INFORMASI KHUSUS METEOROLOGI , KLIMATOLGI DAN GEOFISIKA SESUAI PERMINTAAN</option>
                                <option value="A. JASA KONSULTASI METEOROLOGI">A. JASA KONSULTASI METEOROLOGI</option>
                                <option value="B. JASA KONSULTASI KLIMATOLOGI">B. JASA KONSULTASI KLIMATOLOGI</option>
                            </select>
                        </div>

                        <label>Jenis Informasi</label>
                        <div class="form-group">
                            <input type="text" name="isi" placeholder="Jenis Informasi"
                                class="form-control">
                        </div>

                        <label>Sub Jenis Informasi</label>
                        <div class="form-group">
                            <input type="text" name="sub_isi" placeholder="Kosongkan Jika Tidak Ada Sub Jenis "
                                class="form-control">
                        </div>

                        <label>Satuan</label>
                        <div class="form-group">
                            <input type="text" name="satuan" placeholder="Satuan"
                                class="form-control">
                        </div>

                        <label>Tarif</label>
                        <div class="form-group">
                            <input type="text" name="tarif" placeholder="Tarif"
                                class="form-control">
                        </div>
                        <input type="submit" class="mt-4 btn btn-primary float-right">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    @foreach ($list_infolayanan as $infolayanan)
        <div class="modal fade" id="editdata{{ $infolayanan->id }}" tabindex="-1" role="dialog"
            aria-labelledby="editdataTitle{{ $infolayanan->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editdataTitle{{ $infolayanan->id }}">Edit Data</h5>
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
                        <form action="{{ url('data_manager/admin/infolayanan', $infolayanan->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <label>Bab</label>
                        <div class="form-group">
                            <select class="form-control" name="bab">
                                <option selected="selected">{{$infolayanan->bab}}</option>
                                <option value="I. INFORMASI METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA">I. INFORMASI METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA</option>
                                <option value="II. JASA KONSULTASI METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA">II. JASA KONSULTASI METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA</option>
                            </select>
                        </div>

                        <label>Sub Bab</label>
                        <div class="form-group">
                            <select class="form-control" name="sub_bab">
                                <option selected="selected">{{$infolayanan->sub_bab}}</option>
                                <option value="A. INFORMASI KHUSUS METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA">A. INFORMASI KHUSUS METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA</option>
                                <option value="B. INFORMASI KHUSUS METEOROLOGI , KLIMATOLGI DAN GEOFISIKA SESUAI PERMINTAAN">B. INFORMASI KHUSUS METEOROLOGI , KLIMATOLGI DAN GEOFISIKA SESUAI PERMINTAAN</option>
                                <option value="A. JASA KONSULTASI METEOROLOGI">A. JASA KONSULTASI METEOROLOGI</option>
                                <option value="B. JASA KONSULTASI KLIMATOLOGI">B. JASA KONSULTASI KLIMATOLOGI</option>
                            </select>
                        </div>

                        <label>Jenis Informasi</label>
                        <div class="form-group">
                            <input type="text" name="isi" placeholder="Jenis Informasi"
                                class="form-control" value="{{$infolayanan->isi}}">
                        </div>

                        <label>Sub Jenis Informasi</label>
                        <div class="form-group">
                            <input type="text" name="sub_isi" placeholder="Kosongkan Jika Tidak Ada Sub Jenis "
                                class="form-control" value="{{$infolayanan->sub_isi}}">
                        </div>

                        <label>Satuan</label>
                        <div class="form-group">
                            <input type="text" name="satuan" placeholder="Satuan"
                                class="form-control" value="{{$infolayanan->satuan}}">
                        </div>

                        <label>Tarif</label>
                        <div class="form-group">
                            <input type="text" name="tarif" placeholder="Tarif"
                                class="form-control" value="{{$infolayanan->tarif}}">
                        </div>
                            <input type="submit" class="mt-4 btn btn-primary float-right">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app>
