<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Support\Carbon;

class TandaTerimaController extends Controller
{
    public function tandaterima()
    {
        return view('dashboard.tandaterima.tandaterima');
    }

    public function printtandaterima(Request $request)
    {
        setlocale(LC_TIME, 'id_ID');
        \Carbon\Carbon::setLocale('id');
        $today = Carbon::now()->translatedFormat('d F Y');
        $pegs = Pegawai::where('kdcetak', '=', $request->kdcetak)->get();
        // dd($pegs);
        return view('dashboard.tandaterima.printtandaterima', compact('pegs', 'today'));
    }
}
