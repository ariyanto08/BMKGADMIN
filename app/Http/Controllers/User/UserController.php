<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    function index(){
        $data['list_user'] = User::all();
        $data['list_user'] = User::latest()->get();
        return view('content.user.index',$data);
    }
    function create()
    {
        return view('content.user.create');
    }
    function store(){
        $user = new User();
        $user->username = request('username');
        $user ->password = bcrypt (request('password'));
        $user->save();
        return redirect('data_manager/admin/user')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(User $user)
    {
        $user->username = request('username');
        if(request('password')) $user ->password = bcrypt (request('password'));
        $user->save();

        return redirect('data_manager/admin/user')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(User $user)
    {
        $user->delete();

        return redirect('data_manager/admin/user')->with('danger', 'Data Berhasil Dihapus');
    }
}
