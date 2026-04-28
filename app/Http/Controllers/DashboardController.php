<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class DashboardController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::count('id');

        return view('dashboard.index', compact('pegawai'));
    }
}
