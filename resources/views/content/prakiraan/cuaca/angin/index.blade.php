<x-app title="Angin 3000 Feet">
    <div class="layout-top-spacing layout-spacing">
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <x-template.button.add url="#tambahdata" dto="modal" dta="#tambahdata"
                                    ket="Tambah Data" />
                                <h4>Daftar Angin 3000 Feet</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="style-3" class="table style-3  table-hover">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column text-center"> No </th>
                                        <th>Keterangan Angin 3000 Feet</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_angin as $angin)
                                        <tr>
                                            <td class="checkbox-column text-center"> {{ $loop->iteration }} </td>
                                            <td>{{ $angin->ket }}</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <x-template.button.show dto="modal"
                                                        dta="#ModalShow{{ $angin->id }}" url="" />
                                                    <x-template.button.edit dto="modal"
                                                        dta="#editdata{{ $angin->id }}" />
                                                    <x-template.button.delete id="{{ $angin->id }}" />
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
                    <form action="{{ url('data_manager/admin/angin') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input id="nama" type="text" name="ket" placeholder="Keterangan"
                                class="form-control" required>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <label>Gambar 1</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="gambar1">
                                </div>

                                <label>Gambar 2</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="gambar2">
                                </div>

                                <label>Gambar 3</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="gambar3">
                                </div>

                                <label>Gambar 4</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="gambar4">
                                </div>

                                <label>Gambar 5</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="gambar5">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label>Gambar 6</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="gambar6">
                                </div>

                                <label>Gambar 7</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="gambar7">
                                </div>

                                <label>Gambar 8</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="gambar8">
                                </div>

                                <label>Gambar 9</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="gambar9">
                                </div>

                                <label>Gambar 10</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="gambar10">
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
    @foreach ($list_angin as $angin)
        <div class="modal fade" id="editdata{{ $angin->id }}" tabindex="-1" role="dialog"
            aria-labelledby="editdataTitle{{ $angin->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editdataTitle{{ $angin->id }}">Edit Data {{ $angin->ket }}
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
                        <form action="{{ url('data_manager/admin/angin',$angin->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <input id="nama" type="text" name="ket" placeholder="Keterangan"
                                    class="form-control" value="{{ $angin->ket }}">
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <label>Gambar 1</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="gambar1">
                                    </div>

                                    <label>Gambar 2</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="gambar2">
                                    </div>

                                    <label>Gambar 3</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="gambar3">
                                    </div>

                                    <label>Gambar 4</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="gambar4">
                                    </div>

                                    <label>Gambar 5</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="gambar5">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label>Gambar 6</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="gambar6">
                                    </div>

                                    <label>Gambar 7</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="gambar7">
                                    </div>

                                    <label>Gambar 8</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="gambar8">
                                    </div>

                                    <label>Gambar 9</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="gambar9">
                                    </div>

                                    <label>Gambar 10</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="gambar10">
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
    @foreach ($list_angin as $angin)
        <div class="modal fade" id="ModalShow{{ $angin->id }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalShowTitle{{ $angin->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalShowTitle{{ $angin->id }}">Detail Data
                            {{ $angin->ket }}</h5>
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
                            <label for="nama">Keterangan</label>
                            <input id="nama" type="text" class="form-control" value="{{ $angin->ket }}"
                                readonly>

                            <div class="showing" id="slides">

                                <div class="slide">
                                    <img src="{{ url("public/$angin->gambar1") }}" style="width:100%">
                                </div>
                                <div class="slide">
                                    <img src="{{ url("public/$angin->gambar2") }}" style="width:100%">
                                </div>
                                <div class="slide">
                                    <img src="{{ url("public/$angin->gambar3") }}" style="width:100%">
                                </div>
                                <div class="slide">
                                    <img src="{{ url("public/$angin->gambar4") }}" style="width:100%">
                                </div>
                                <div class="slide">
                                    <img src="{{ url("public/$angin->gambar5") }}" style="width:100%">
                                </div>
                                <div class="slide">
                                    <img src="{{ url("public/$angin->gambar6") }}" style="width:100%">
                                </div>
                                <div class="slide">
                                    <img src="{{ url("public/$angin->gambar7") }}" style="width:100%">
                                </div>
                                <div class="slide">
                                    <img src="{{ url("public/$angin->gambar8") }}" style="width:100%">
                                </div>
                                <div class="slide">
                                    <img src="{{ url("public/$angin->gambar9") }}" style="width:100%">
                                </div>
                                <div class="slide">
                                    <img src="{{ url("public/$angin->gambar10") }}" style="width:100%">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app>
