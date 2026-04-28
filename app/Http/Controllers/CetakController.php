<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Support\Carbon;

class CetakController extends Controller
{
    public function bykode()
    {
        return view('dashboard.cetak.bykode');
    }

    public function searchkode(Request $request)
    {
        $pegs = Pegawai::where('kdcetak', '=', $request->kdcetak)->get();
        $req = $request->kdcetak;
        // dd($pegs);
        return view('dashboard.cetak.kodecetak', compact('pegs', 'req'));
    }

    public function cetakkode(Request $request)
    {
        $pegs = Pegawai::where('kdcetak', '=', $request->kdcetak)->get();
        $req = $request->kdcetak;
        return view('dashboard.cetak.kodecetak', compact('pegs', 'req'));
    }

    public function printkodecetak(Request $request)
    {
        setlocale(LC_TIME, 'id_ID');
        \Carbon\Carbon::setLocale('id');
        $today = Carbon::now()->translatedFormat('d F Y');
        $pegs = Pegawai::where('kdcetak', '=', $request->kdcetak)->get();
        // dd($pegs);
        return view('dashboard.cetak.printkodecetak', compact('pegs', 'today'));
    }

    public function bynip()
    {
        return view('dashboard.cetak.bynip');
    }

    public function searchnip(Request $request)
    {
        // dd($request->nip);
        $pegs = Pegawai::where('nip', 'like', "%$request->nip%")->get();
        $req = $request->nip;
        // dd($pegs);
        return view('dashboard.cetak.nip', compact('pegs', 'req'));
    }

    public function cetaknip(Request $request)
    {
        $pegs = Pegawai::where('nip', 'like', "%$request->nip2%")->get();
        $req = $request->nip2;
        dd($req);
        return view('dashboard.cetak.nip', compact('pegs', 'req'));
    }

    public function printnip(Request $request)
    {
        // dd($request);
        setlocale(LC_TIME, 'id_ID');
        \Carbon\Carbon::setLocale('id');
        $today = Carbon::now()->translatedFormat('d F Y');
        $pegs = Pegawai::where('nip', 'like', "%$request->nip2%")->get();
        // dd($pegs);
        return view('dashboard.cetak.printnip', compact('pegs', 'today'));
    }
}
