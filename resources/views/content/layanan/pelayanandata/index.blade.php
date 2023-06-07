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
                        <h5 class="modal-title align-right" id="exampleModalLabel">{{ $pelayanandata->kategori }}</h5>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app>
