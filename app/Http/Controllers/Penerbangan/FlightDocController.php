<?php

namespace App\Http\Controllers\Penerbangan;

use App\Http\Controllers\Controller;
use App\Models\FlightDoc;

class FlightDocController extends Controller
{
    function index(){
        $data['list_doc'] = FlightDoc::all();
        return view('content.penerbangan.flightdoc.index',$data);
    }
    function create()
    {
        return view('content.penerbangan.flightdoc.create');
    }
    function store(){
        $flightdoc = new FlightDoc();
        $flightdoc->ket = request('ket');
        $flightdoc->save();
        $flightdoc->handleUploadPdf();
        return redirect('data_manager/admin/flightdoc');
    }
    function update(FlightDoc $flightdoc)
    {
        $flightdoc->ket = request('ket');
        $flightdoc->save();
        if (request('file')) $flightdoc->handleUploadPdf();
        return redirect('data_manager/admin/flightdoc');
    }
    function destroy(FlightDoc $flightdoc)
    {
        $flightdoc->delete();
        $flightdoc->handleDelete();
        return redirect('data_manager/admin/flightdoc');
    }
}
