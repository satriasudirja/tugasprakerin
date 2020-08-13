<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexAdminController extends Controller
{
    public function index()
    {
    	$data_siswa = \App\Siswa::all();
    	return view('index_admin.homeadmin',['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
    	\App\Siswa::create($request->all());

    	return redirect('/index_admin');
    }
    public function edit($id_siswa)
    {
    	$siswa = \App\Siswa::find($id_siswa);
        return view('index_admin.edit',['siswa'=> $siswa]);
   
    }
    public function update(Request $request,$id_siswa)
    {
        $siswa = \App\Siswa::find($id_siswa);
        $siswa->update($request->all());
        return redirect('/index_admin');
    }

    public function delete($id_siswa)
    {
    	$siswa = \App\Siswa::find($id_siswa);
    	$siswa->delete($siswa);
    	return redirect('/index_admin');
   
    }
}
