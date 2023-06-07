<x-app title="Prakiraan Cuaca Harian Ketapang">
    <div class="layout-top-spacing layout-spacing">
        <div class="row layout-spacing">
            <div class="col-lg-12 mb-3">
                <button type="button" class="btn btn-primary float-right mt-3 btn-sm"  data-target="#tambahdata" data-toggle="modal"><i data-feather="plus-circle"></i>Import Harian Ketapang</button>
            </div>
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Daftar Prakiraan Cuaca Harian Ketapang</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="style-3" class="table style-3  table-hover">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column text-center"> No </th>
                                        <th>Kabupaten</th>
                                        <th>Tanggal</th>
                                        <th>Kecamatan</th>
                                        <th>Jam 07</th>
                                        <th>Jam 10</th>
                                        <th>Jam 13</th>
                                        <th>Jam 16</th>
                                        <th>Jam 19</th>
                                        <th>Jam 22</th>
                                        <th>Jam 01</th>
                                        <th>Jam 04</th>
                                        <th>Jam 07</th>
                                        <th>Suhu Udara</th>
                                        <th>Arah Angin</th>
                                        <th>Kec.Angin</th>
                                        <th>Kelembapan</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_harianktp as $harianktp)
                                        <tr>
                                            <td class="checkbox-column text-center"> {{ $loop->iteration }} </td>
                                            <td>{{ $harianktp->kabupaten }}</td>
                                            <td>{{ $harianktp->tanggal }}</td>
                                            <td>{{ $harianktp->kecamatan }}</td>
                                            <td>{{ $harianktp->cuaca_jam_7 }}</td>
                                            <td>{{ $harianktp->cuaca_jam_10 }}</td>
                                            <td>{{ $harianktp->cuaca_jam_13 }}</td>
                                            <td>{{ $harianktp->cuaca_jam_16 }}</td>
                                            <td>{{ $harianktp->cuaca_jam_19 }}</td>
                                            <td>{{ $harianktp->cuaca_jam_22 }}</td>
                                            <td>{{ $harianktp->cuaca_jam_01 }}</td>
                                            <td>{{ $harianktp->cuaca_jam_04 }}</td>
                                            <td>{{ $harianktp->cuaca_jam_07 }}</td>
                                            <td>{{ $harianktp->suhu_udara }}</td>
                                            <td>{{ $harianktp->arah_angin }}</td>
                                            <td>{{ $harianktp->kec_angin }}</td>
                                            <td>{{ $harianktp->kelembapan }}</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <x-template.button.delete id="{{ $harianktp->id }}" />
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
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Daftar Prakiraan Cuaca Harian Kayong Utara</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="style-4" class="table style-3  table-hover">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column text-center"> No </th>
                                        <th>Kabupaten</th>
                                        <th>Tanggal</th>
                                        <th>Kecamatan</th>
                                        <th>Jam 07</th>
                                        <th>Jam 10</th>
                                        <th>Jam 13</th>
                                        <th>Jam 16</th>
                                        <th>Jam 19</th>
                                        <th>Jam 22</th>
                                        <th>Jam 01</th>
                                        <th>Jam 04</th>
                                        <th>Jam 07</th>
                                        <th>Suhu Udara</th>
                                        <th>Arah Angin</th>
                                        <th>Kec.Angin</th>
                                        <th>Kelembapan</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_hariankku as $hariankku)
                                        <tr>
                                            <td class="checkbox-column text-center"> {{ $loop->iteration }} </td>
                                            <td>{{ $hariankku->kabupaten }}</td>
                                            <td>{{ $hariankku->tanggal }}</td>
                                            <td>{{ $hariankku->kecamatan }}</td>
                                            <td>{{ $hariankku->cuaca_jam_7 }}</td>
                                            <td>{{ $hariankku->cuaca_jam_10 }}</td>
                                            <td>{{ $hariankku->cuaca_jam_13 }}</td>
                                            <td>{{ $hariankku->cuaca_jam_16 }}</td>
                                            <td>{{ $hariankku->cuaca_jam_19 }}</td>
                                            <td>{{ $hariankku->cuaca_jam_22 }}</td>
                                            <td>{{ $hariankku->cuaca_jam_01 }}</td>
                                            <td>{{ $hariankku->cuaca_jam_04 }}</td>
                                            <td>{{ $hariankku->cuaca_jam_07 }}</td>
                                            <td>{{ $hariankku->suhu_udara }}</td>
                                            <td>{{ $hariankku->arah_angin }}</td>
                                            <td>{{ $hariankku->kec_angin }}</td>
                                            <td>{{ $hariankku->kelembapan }}</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <x-template.button.delete id="{{ $hariankku->id }}" />
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
                    <form action="{{url('data_manager/admin/harianktp')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" class="form-control" name="file">
                        </div>
                        <input type="submit" class="mt-4 btn btn-primary float-right">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Show -->
    @foreach ($list_harianktp as $harianktp)
        <div class="modal fade" id="ModalSlide{{ $harianktp->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title align-right" id="exampleModalLabel">{{ $harianktp->kategori }}</h5>
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
