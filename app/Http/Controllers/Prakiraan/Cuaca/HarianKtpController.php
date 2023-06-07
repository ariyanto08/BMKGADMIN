<?php

namespace App\Http\Controllers\Prakiraan\Cuaca;

use App\Models\HarianKtp;
use Illuminate\Http\Request;
use App\Imports\HarianKtpImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class HarianKtpController extends Controller
{
    function index(){
        $data['list_harianktp'] = HarianKtp::where('kabupaten','KETAPANG')->get();
        $data['list_hariankku'] = HarianKtp::where('kabupaten','KAYONG UTARA')->get();
        return view('content.prakiraan.cuaca.harianktp.index',$data);
    }

    function __invoke(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        $file = $request->file('file');
        $nama_file = $file->getClientOriginalName();
        $path = $file->storeAs('excel', $nama_file);
        Excel::import(new HarianKtpImport(), $path);

        Storage::delete($path);
        return redirect('data_manager/admin/harianktp')->with(['success'=>'Data Berhasil Diimport!']);

    }
    function update()
    {

    }

    function destroy(HarianKtp $harianktp)
    {
        $harianktp->delete();
        return redirect('data_manager/admin/harianktp')->with('danger', 'Data Berhasil Dihapus');
    }
}
