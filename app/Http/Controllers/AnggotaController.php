<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;

class AnggotaController extends Controller
{
    public function index(){
    	$all = Anggota::all();

    	return view('anggota', compact('all'));
    }
    public function post(Request $request){
    	$anggota = new Anggota();

    	$anggota->kd_anggota = date('Ymdhis');
    	$anggota->nama_anggota = $request->input('nama_anggota');
    	$anggota->jenis_kelamin = $request->input('jenis_kelamin');
    	$anggota->alamat = $request->input('alamat');
    	$anggota->telepon = $request->input('telepon');
    	$anggota->pekerjaan = $request->input('pekerjaan');
    	$anggota->tgl_masuk = $request->input('tgl_masuk');

    	$anggota->save();

    	return redirect('anggota')->with('berhasil','Anggota berhasil di tambahkan');
    }

    public function destroy($id){
    	$hapus = Anggota::where('id', '=', $id);
    	$hapus->delete();

    	return redirect('anggota')->with('berhasil','Anggota berhasil di hapus');
    }

    public function edit($id){
    	$edit = Anggota::where('id', '=', $id)->first();

    	return view('edit-anggota', compact('edit'));
    }

    public function update($id, Request $request){
    	$edit = Anggota::where('id', '=',$id)->first();
   
    	$edit->nama_anggota = $request->input('nama_anggota');
    	$edit->jenis_kelamin = $request->input('jenis_kelamin');
    	$edit->alamat = $request->input('alamat');
    	$edit->telepon = $request->input('telepon');
    	$edit->pekerjaan = $request->input('pekerjaan');
    	$edit->tgl_masuk = $request->input('tgl_masuk');

    	$edit->save();
    	return redirect('/anggota');
    }
    public function show($id){
    	$show = Anggota::where('id', '=', $id)->first();

    	return view('lihat-anggota', compact('show'));
    }
}
