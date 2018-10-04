<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pinjaman;
use App\Pegawai;
use App\Anggota;
use App\JenisPinjaman;

class PinjamanController extends Controller
{
    public function index(){
    	$all = Pinjaman::all();
    	$peg = Pegawai::all();
    	$ang = Anggota::all();
    	$jp = JenisPinjaman::all();

    	return view('pinjaman.pinjaman', compact('all','peg', 'ang','jp'));
    }

    public function store(Request $request){
    	$p = new Pinjaman();

    	$p->no_kwitansip = date('Ymdhis');
    	$p->tgl_pinjam   = $request->tgl_pinjam;
    	$p->tgl_tempo    = $request->tgl_tempo;
    	$p->kd_pegawai   = $request->kd_pegawai;
    	$p->id_anggota   = $request->id_anggota;
    	$p->kd_jp        = $request->kd_jp;
    	$p->pinjaman_pokok = $request->pinjaman_pokok;

    	$b = $request->kd_jp;
        $cek = JenisPinjaman::where('kd_jp','=', $b)->first();
    	$bunga = $cek->bunga;
 
    	$p->angsuran = $request->pinjaman_pokok/5*$bunga/100;
    	$p->total_pinjaman = $request->pinjaman_pokok*$bunga/100;

    	$p->save();



    	return redirect('/pinjaman');
    }

    public function destroy($id){
    	$hapus = Pinjaman::find($id);
    	$hapus->delete();

    	return redirect('/pinjaman');
    }
}
