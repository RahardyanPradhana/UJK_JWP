<?php

namespace App\Http\Controllers;

use App\Models\Jenis_asn;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis = Jenis_asn::paginate(10);
        return view('dashboard.jenis', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Jenis_asn::create($request->all());
        return redirect()->route('jenis');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Jenis_asn $jenis_asn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
         $jenis = Jenis_asn::find($id);
        $jenis->jenis = $request->jenis;
        $jenis->save();
        return redirect()->route('jenis');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jenis_asn $jenis_asn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jenis_asn $jenis)
    {
        Jenis_asn::destroy($jenis->id);
        return redirect()->route('jenis')->with('status', 'Data Jenis ASN Behasil Dihapus!');
    }
}
