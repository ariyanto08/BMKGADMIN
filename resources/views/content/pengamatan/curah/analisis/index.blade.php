<x-app title="Analisis Curah Hujan Bulanan">
    <div class="layout-top-spacing layout-spacing">
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <x-template.button.add url="#tambahdata" dto="modal" dta="#tambahdata"
                                    ket="Tambah Data" />
                                <h4>Daftar Analisis Curah Hujan Bulanan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="style-3" class="table style-3  table-hover">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column text-center"> No </th>
                                        <th>Gambar Analisis CH</th>
                                        <th>Gambar Analisis Sifat CH</th>
                                        <th>Bulan</th>
                                        <th>Tahun</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_analisis as $analisis)
                                        <tr>
                                            <td class="checkbox-column text-center"> {{ $loop->iteration }} </td>
                                            <td>
                                                <div class="avatar avatar-xl">
                                                    <img data-target="#ModalShow{{ $analisis->id }}" data-toggle="modal"
                                                        src="{{ url("public/$analisis->gambar_ch") }}" class="rounded"
                                                        alt="avatar">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-xl">
                                                    <img data-target="#ModalShowSifat{{ $analisis->id }}" data-toggle="modal"
                                                        src="{{ url("public/$analisis->gambar_sifat_ch") }}" class="rounded"
                                                        alt="avatar">
                                                </div>
                                            </td>
                                            <td>{{ $analisis->bulan }}</td>
                                            <td>{{ $analisis->tahun }}</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <x-template.button.edit dto="modal"
                                                        dta="#editdata{{ $analisis->id }}" />
                                                    <x-template.button.delete id="{{ $analisis->id }}" />
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
                    <form action="{{ url('data_manager/admin/analisis') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <label>Bulan</label>
                        <div class="form-group">
                            <select class="form-control" name="bulan" required>
                               <option>--Pilih Bulan--</option>
                               <option value="Januari">Januari</option>
                               <option value="Februari">Februari</option>
                               <option value="Maret">Maret</option>
                               <option value="April">April</option>
                               <option value="Mei">Mei</option>
                               <option value="Juni">Juni</option>
                               <option value="Juli">Juli</option>
                               <option value="Agustus">Agustus</option>
                               <option value="September">September</option>
                               <option value="Oktober">Oktober</option>
                               <option value="November">November</option>
                               <option value="Desember">Desember</option>
                           </select>
                       </div>
                        <label>Tahun</label>
                        <div class="form-group">
                            <input type="number" min="2000" max="2999" step="1" pattern="\d{4}"
                                name="tahun" placeholder="Masukkan Tahun" class="form-control" required>
                        </div>
                        <label>Gambar Analisis CH</label>
                        <div class="form-group">
                            <input type="file" class="form-control" name="gambar_ch" accept="jpg,png">
                        </div>
                        <label>Gambar Analisis Sifat CH</label>
                        <div class="form-group">
                            <input type="file" class="form-control" name="gambar_sifat_ch" accept="jpg,png">
                        </div>
                        <input type="submit" class="mt-4 btn btn-primary float-right">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    @foreach ($list_analisis as $analisis)
        <div class="modal fade" id="editdata{{ $analisis->id }}" tabindex="-1" role="dialog"
            aria-labelledby="editdataTitle{{ $analisis->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editdataTitle{{ $analisis->id }}">Edit Data
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
                        <form action="{{ url('data_manager/admin/analisis', $analisis->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                    <div class="form-group">
                                        <label>Bulan</label>
                                        <select class="form-control" name="bulan">
                                           <option>{{ $analisis->bulan }}</option>
                                           <option value="Januari">Januari</option>
                                           <option value="Februari">Februari</option>
                                           <option value="Maret">Maret</option>
                                           <option value="April">April</option>
                                           <option value="Mei">Mei</option>
                                           <option value="Juni">Juni</option>
                                           <option value="Juli">Juli</option>
                                           <option value="Agustus">Agustus</option>
                                           <option value="September">September</option>
                                           <option value="Oktober">Oktober</option>
                                           <option value="November">November</option>
                                           <option value="Desember">Desember</option>
                                       </select>
                                   </div>
                                   <label>Tahun</label>
                                    <div class="form-group">
                                        <input type="number" min="2000" max="2999" step="1" pattern="\d{4}"
                                            name="tahun" class="form-control" value="{{ $analisis->tahun }}">
                                    </div>
                                    <label>Gambar Analisis CH</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="gambar_ch" accept="jpg,png">
                                    </div>
                                    <label>Gambar Analisis Sifat CH</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="gambar_sifat_ch" accept="jpg,png">
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
    @foreach ($list_analisis as $analisis)
        <div class="modal fade" id="ModalShow{{ $analisis->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalShowTitle{{ $analisis->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalShowTitle{{ $analisis->id }}">Gambar Analisis Ch</h5>
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
                                <img src="{{ url("public/$analisis->gambar_ch") }}" style="max-width:100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ModalShowSifat{{ $analisis->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalShowTitle{{ $analisis->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalShowTitle{{ $analisis->id }}">Gambar Analisis Sifat CH</h5>
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
                                <img src="{{ url("public/$analisis->gambar_sifat_ch") }}" style="max-width:100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app>
