<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class PegawaiController extends Controller
{
    public function index(){
    	$pegawai = Pegawai::all();

    	return view('pegawai.pegawai', compact('pegawai'));
    }

    public function store(Request $request){
    	$pegawai = new Pegawai();

    	$pegawai->kd_pegawai   = date('Ymdhis');
    	$pegawai->nama_pegawai = $request->nama_pegawai;
    	$pegawai->tgl_lahir    = $request->tgl_lahir;
    	$pegawai->pendidikan   = $request->pendidikan;
    	$pegawai->telepon      = $request->telepon;

    	$pegawai->save();

    	return redirect('/pegawai');
    }

    public function destroy($id){
    	$hapus = Pegawai::find($id);
    	$hapus->delete();

    	return redirect('/pegawai');
    }

    public function edit($id){
    	$edit = Pegawai::find($id);

    	return view('pegawai.edit-pegawai', compact('edit'));
    }

    public function update(Request $request, $id){
    	
    	$edit = Pegawai::find($id);

    	$edit->nama_pegawai = $request->nama_pegawai;
    	$edit->tgl_lahir    = $request->tgl_lahir;
    	$edit->pendidikan   = $request->pendidikan;
    	$edit->telepon      = $request->telepon;

    	$edit->save();
    	return redirect('/pegawai');
    }

    public function show($id){
    	$show = Pegawai::find($id);

    	return view('pegawai.lihat-pegawai', compact('show'));
    }
}
