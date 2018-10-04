<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisPinjaman;

class JenisPinjamanController extends Controller
{
    public function index(){
    	$all = JenisPinjaman::all();

    	return view('jenis-pinjaman.jenis-pinjaman', compact('all'));
    }

    public function store(Request $request){
    	$jp = new JenisPinjaman();

    	$jp->kd_jp   = date('his');
    	$jp->nama_jp = $request->nama_jp;
    	$jp->bunga   = $request->bunga;

    	$jp->save();

    	return redirect('/jenis-pinjaman');
    }

    public function destroy($id){
    	$hapus = JenisPinjaman::find($id);
    	$hapus->delete();

    	return redirect('/jenis-pinjaman');
    }

    public function edit($id){
    	$edit = JenisPinjaman::find($id);

    	return view('jenis-pinjaman.edit-jp', compact('edit'));
    }

    public function update(Request $request, $id){
    	$jp = JenisPinjaman::find($id);
    	$jp->nama_jp = $request->nama_jp;
    	$jp->bunga   = $request->bunga;

    	$jp->save();

    	return redirect('/jenis-pinjaman');

    }
}
