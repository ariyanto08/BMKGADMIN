<x-app title="Admin">
    <div class="layout-top-spacing layout-spacing">
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <x-template.button.add url="#tambahdata" dto="modal" dta="#tambahdata"
                                    ket="Tambah Data" />
                                <h4>Daftar Admin</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="style-3" class="table style-3  table-hover">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column text-center"> No </th>
                                        <th>Username</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_user as $user)
                                        <tr>
                                            <td class="checkbox-column text-center"> {{ $loop->iteration }} </td>
                                            <td>{{ $user->username }}</td>
                                            <td class="text-center">
                                                <div class="form-group">
                                                    <x-template.button.edit dto="modal"
                                                        dta="#editdata{{ $user->id }}" />
                                                    <x-template.button.delete id="{{ $user->id }}" />
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
                    <form action="{{ url('data_manager/admin/user') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="username" placeholder="Username"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="password" placeholder="Password"
                                class="form-control" required>
                        </div>
                        <input type="submit" class="mt-4 btn btn-primary float-right">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    @foreach ($list_user as $user)
        <div class="modal fade" id="editdata{{ $user->id }}" tabindex="-1" role="dialog"
            aria-labelledby="editdataTitle{{ $user->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editdataTitle{{ $user->id }}">Edit Data {{ $user->username }}
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
                        <form action="{{ url('data_manager/admin/user',$user->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                    <div class="form-group">
                                        <input type="text" name="username"
                                            placeholder="Username" class="form-control"
                                            value="{{ $user->username }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="password" placeholder="Ketikkan Password Baru Jika Ingin Mengganti"
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
    @endforeach
</x-app>
