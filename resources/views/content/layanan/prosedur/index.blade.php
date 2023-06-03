<x-app title="Prosedur Pembayaran Jasa Layanan">
    <div class="layout-top-spacing layout-spacing">
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <x-template.button.add url="#tambahdata" dto="modal" dta="#tambahdata"
                                    ket="Tambah Data" />
                                <h4>Daftar Prosedur Pembayaran Jasa Layanan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="style-3" class="table style-3  table-hover">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column text-center"> No </th>
                                        <th>Kategori</th>
                                        <th>Isi</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_prosedur as $prosedur)
                                        <tr>
                                            <td class="checkbox-column text-center"> {{ $loop->iteration }} </td>
                                            <td>{{ $prosedur->kategori }}</td>
                                            <td>{{ nl2br(Str::substr($prosedur->isi, 0, 40)) }}....</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <x-template.button.show dto="modal"
                                                        dta="#ModalSlide{{ $prosedur->id }}" url="" />
                                                    <x-template.button.edit dto="modal"
                                                        dta="#editdata{{ $prosedur->id }}" />
                                                    <x-template.button.delete id="{{ $prosedur->id }}" />
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
                    <form action="{{ url('data_manager/admin/prosedur') }}" method="post">
                        @csrf
                        <label>Kategori</label>
                        <div class="form-group">
                            <select class="form-control" name="kategori" required>
                                <option>--Pilih Kategori--</option>
                                <option value="Bank">Bank</option>
                                <option value="ATM">ATM</option>
                                <option value="Mbanking">Mbanking</option>
                            </select>
                        </div>
                        <label>Isi</label>
                        <div class="form-group">
                            <textarea name="isi" class="form-control summernote"></textarea>
                        </div>
                        <input type="submit" class="mt-4 btn btn-primary float-right">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    @foreach ($list_prosedur as $prosedur)
        <div class="modal fade" id="editdata{{ $prosedur->id }}" tabindex="-1" role="dialog"
            aria-labelledby="editdataTitle{{ $prosedur->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editdataTitle{{ $prosedur->id }}">Edit Data</h5>
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
                        <form action="{{ url('data_manager/admin/prosedur', $prosedur->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label>Kategori</label>
                            <div class="form-group">
                                <select class="form-control" name="kategori" required>
                                    <option>{{$prosedur->kategori}}</option>
                                    <option value="Bank">Bank</option>
                                    <option value="ATM">ATM</option>
                                    <option value="Mbanking">Mbanking</option>
                                </select>
                            </div>
                            <label>Isi</label>
                            <div class="form-group">
                                <textarea name="isi" class="form-control summernote">{!! nl2br($prosedur->isi) !!}</textarea>
                            </div>
                            <input type="submit" class="mt-4 btn btn-primary float-right">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Modal Show -->
    @foreach ($list_prosedur as $prosedur)
        <div class="modal fade" id="ModalSlide{{ $prosedur->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title align-right" id="exampleModalLabel">{{ $prosedur->kategori }}</h5>
                    </div>
                    <div class="modal-body">
                        {!! nl2br($prosedur->isi) !!}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app>
