<?php

namespace App\Http\Controllers\LayananPublik;

use App\Http\Controllers\Controller;
use App\Models\PelayananData;

class PelayananDataController extends Controller
{
    function index(){
        $data['list_pelayanandata'] = PelayananData::all();
        return view('content.layanan.pelayanandata.index',$data);
    }
    function destroy(PelayananData $pelayanandata)
    {
        $pelayanandata->delete();
        $pelayanandata->handleDeleteSuPengantar();
        $pelayanandata->handleDeleteSuPernyataan();
        $pelayanandata->handleDeleteProposal();
        $pelayanandata->handleDeleteKtp();
        return redirect('data_manager/admin/pelayanandata')->with('danger', 'Data Berhasil Dihapus');
    }
}
