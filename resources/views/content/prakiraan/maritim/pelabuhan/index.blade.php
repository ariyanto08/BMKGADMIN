<x-app title="Cuaca Pelabuhan Laut">
    <div class="layout-top-spacing layout-spacing">
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <x-template.button.add url="#tambahdata" dto="modal" dta="#tambahdata"
                                    ket="Tambah Data" />
                                <h4>Daftar Cuaca Pelabuhan Laut</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="style-3" class="table style-3  table-hover">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column text-center"> No </th>
                                        <th>Nama Pelabuhan</th>
                                        <th>Cuaca</th>
                                        <th>Arah Angin</th>
                                        <th>Kecepatan Angin</th>
                                        <th>Tinggi Gelombang</th>
                                        <th>Kategori Gelombang</th>
                                        <th>Visibility</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_pelabuhan as $pelabuhan)
                                        <tr>
                                            <td class="checkbox-column text-center"> {{ $loop->iteration }} </td>
                                            <td>{{ $pelabuhan->nama_pelabuhan }}</td>
                                            <td>
                                                <div class="avatar avatar">
                                                    <img src="{{ url("public/$pelabuhan->gambar") }}"
                                                        class="rounded" alt="avatar">
                                                </div>
                                                <span>{{ $pelabuhan->cuaca }}</span>
                                            </td>
                                            <td>{{ $pelabuhan->arah_angin }}</td>
                                            <td>{{ $pelabuhan->kecepatan_angin }}</td>
                                            <td>{{ $pelabuhan->tinggi_gelombang }}</td>
                                            <td>{{ $pelabuhan->kategori_gelombang }}</td>
                                            <td>{{ $pelabuhan->visibility }}</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <x-template.button.edit dto="modal"
                                                        dta="#editdata{{ $pelabuhan->id }}" />
                                                    <x-template.button.delete id="{{ $pelabuhan->id }}" />
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
                    <form action="{{ url('data_manager/admin/pelabuhan') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Pelabuhan</label>
                            <input type="text" name="nama_pelabuhan" placeholder="Nama Pelabuhan"
                                class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label>Gambar Cuaca</label>
                                            <input type="file" name="gambar" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label>Cuaca</label>
                                            <input type="text" name="cuaca" placeholder="Situasi Cuaca"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Arah Angin</label>
                                    <input type="text" name="arah_angin" placeholder="Arah Angin"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Kecepatan Angin</label>
                                    <input type="text" name="kecepatan_angin" placeholder="Kecepatan Angin"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Tinggi Gelombang</label>
                                    <input type="text" name="tinggi_gelombang" placeholder="Tinggi Gelombang"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Kategori Gelombang</label>
                                    <input type="text" name="kategori_gelombang" placeholder="Kategori Gelombang"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Visibility</label>
                                    <input type="text" name="visibility" placeholder="Visibility"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="mt-4 btn btn-primary float-right">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    @foreach ($list_pelabuhan as $pelabuhan)
        <div class="modal fade" id="editdata{{ $pelabuhan->id }}" tabindex="-1" role="dialog"
            aria-labelledby="editdataTitle{{ $pelabuhan->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editdataTitle{{ $pelabuhan->id }}">Edit Data
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
                        <form action="{{ url('data_manager/admin/pelabuhan',$pelabuhan->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Nama Pelabuhan</label>
                                <input type="text" name="nama_pelabuhan" placeholder="Nama Pelabuhan"
                                    class="form-control" value="{{$pelabuhan->nama_pelabuhan}}">
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>Gambar Cuaca</label>
                                                <input type="file" name="gambar" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label>Cuaca</label>
                                                <input type="text" name="cuaca" placeholder="Situasi Cuaca"
                                                    class="form-control" value="{{$pelabuhan->cuaca}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Arah Angin</label>
                                        <input type="text" name="arah_angin" placeholder="Arah Angin"
                                            class="form-control" value="{{$pelabuhan->arah_angin}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Kecepatan Angin</label>
                                        <input type="text" name="kecepatan_angin" placeholder="Kecepatan Angin"
                                            class="form-control" value="{{$pelabuhan->kecepatan_angin}}">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label>Tinggi Gelombang</label>
                                        <input type="text" name="tinggi_gelombang" placeholder="Tinggi Gelombang"
                                            class="form-control" value="{{$pelabuhan->tinggi_gelombang}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori Gelombang</label>
                                        <input type="text" name="kategori_gelombang" placeholder="Kategori Gelombang"
                                            class="form-control" value="{{$pelabuhan->kategori_gelombang}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Visibility</label>
                                        <input type="text" name="visibility" placeholder="Visibility"
                                            class="form-control" value="{{$pelabuhan->visibility}}">
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
