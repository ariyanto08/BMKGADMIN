<x-app title="Pelayanan Data Informasi">
    <div class="layout-top-spacing layout-spacing">
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Daftar Pelayanan Data Informasi</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="style-3" class="table style-3  table-hover">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column text-center"> No </th>
                                        <th>Pihak</th>
                                        <th>Nama Lengkap</th>
                                        <th>Lembaga</th>
                                        <th>Alamat</th>
                                        <th>No.Tlpn</th>
                                        <th>Email</th>
                                        <th>Jasa Permintaan</th>
                                        <th>Periode</th>
                                        <th>Jalan</th>
                                        <th>RT-TW</th>
                                        <th>Kelurahan</th>
                                        <th>Kecamatan</th>
                                        <th>Kabupaten</th>
                                        <th>Tanggal Data Diambil</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_pelayanandata as $pelayanandata)
                                        <tr>
                                            <td class="checkbox-column text-center"> {{ $loop->iteration }} </td>
                                            <td>{{ $pelayanandata->kategori }}</td>
                                            <td>{{ $pelayanandata->nama_awal }} {{ $pelayanandata->nama_akhir }}</td>
                                            <td>{{ $pelayanandata->lembaga }}</td>
                                            <td>{{ $pelayanandata->alamat }}</td>
                                            <td>{{ $pelayanandata->telpon }}</td>
                                            <td>{{ $pelayanandata->email }}</td>
                                            <td>{{ $pelayanandata->jasa_permintaan }}</td>
                                            <td>{{ $pelayanandata->periode }}</td>
                                            <td>{{ $pelayanandata->jalan }}</td>
                                            <td>{{ $pelayanandata->rt_rw }}</td>
                                            <td>{{ $pelayanandata->kelurahan }}</td>
                                            <td>{{ $pelayanandata->kecamatan }}</td>
                                            <td>{{ $pelayanandata->kabupaten }}</td>
                                            <td>{{ $pelayanandata->tgl_pengambilan_data }}</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <x-template.button.show dto="modal"
                                                        dta="#ModalSlide{{ $pelayanandata->id }}" url="" />
                                                    <x-template.button.delete id="{{ $pelayanandata->id }}" />
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

    <!-- Modal Show -->
    @foreach ($list_pelayanandata as $pelayanandata)
        <div class="modal fade" id="ModalSlide{{ $pelayanandata->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title align-right" id="exampleModalLabel">{{ $pelayanandata->kategori }} <span
                                class="float-right">Data Diambil : {{ $pelayanandata->tgl_pengambilan_data }}</span>
                        </h5>
                    </div>
                    <div class="modal-body">
                        <div class="bio layout-spacing ">
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Nama Lengkap : {{ $pelayanandata->nama_awal }} {{ $pelayanandata->nama_akhir }}</h6>
                                        <hr>
                                        <h6>Lembaga/Institusi/Perusahaan : {{ $pelayanandata->lembaga }}</h6>
                                        <hr>
                                        <h6>Alamat : {{ $pelayanandata->alamat }}</h6>
                                        <hr>
                                        <h6>No Telepon : {{ $pelayanandata->telpon }}</h6>
                                        <hr>
                                        <h6>Email : {{ $pelayanandata->email }}</h6>
                                        <hr>
                                        <h6>Jasa Permintaan : {{ $pelayanandata->jasa_permintaan }}</h6>
                                        <hr>
                                    </div>
                                    <div class="col-md-6">
                                        <h6>Periode Data : {{ $pelayanandata->periode }}</h6>
                                        <hr>
                                        <h6>Lokasi Data : {{ $pelayanandata->jalan }}</h6>
                                        <hr>
                                        <h6>RT/RW : {{ $pelayanandata->rt_rw }}</h6>
                                        <hr>
                                        <h6>Kelurahan : {{ $pelayanandata->kelurahan }}</h6>
                                        <hr>
                                        <h6>Kecamatan : {{ $pelayanandata->kecamatan }}</h6>
                                        <hr>
                                        <h6>Kabupaten : {{ $pelayanandata->kabupaten }}</h6>
                                        <hr>
                                    </div>
                                </div>
                                <div class="bio-skill-box">

                                    <div class="row">

                                        <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">

                                            <div class="d-flex b-skills">
                                                <div class="">
                                                    <h3>Surat Pengantar</h3>
                                                    <img src="{{ url("public/$pelayanandata->su_pengantar") }}"
                                                        style="max-width:100%;">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">

                                            <div class="d-flex b-skills">
                                                <div class="">
                                                    <h3>Surat Pernyataan</h3>
                                                    <img src="{{ url("public/$pelayanandata->su_pernyataan") }}"
                                                        style="max-width:100%;">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-5 ">

                                            <div class="d-flex b-skills">
                                                <div class="">
                                                    <h3>Proposal</h3>
                                                    <img src="{{ url("public/$pelayanandata->proposal") }}"
                                                        style="max-width:100%;">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-0 ">

                                            <div class="d-flex b-skills">
                                                <div class="">
                                                    <h3>Kartu Identitas</h3>
                                                    <img src="{{ url("public/$pelayanandata->ktp") }}"
                                                        style="max-width:100%;">
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app>
