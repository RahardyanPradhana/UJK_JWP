<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function pegawai()
    {
        $pegs = Pegawai::paginate(10);
        return view('dashboard.pegawai', compact('pegs'));
        // return view('dashboard.pegawai', [
        //     "pegs" => Pegawai::paginate(10)
        // ]);
    }

    public function add(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $data = Pegawai::create($request->all());

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('assets/img/images/', $request->nip . '.jpg');
            $data->foto = $request->nip . '.jpg';
            $data->save();
        }

        // $request->validate([
        //     'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // ]);

        // $fileName =  $request->nip . '.jpg';
        // // dd($fileName);
        // $request->foto->move(public_path('assets/img/images/'), $fileName);
        // /* Store $fileName name in DATABASE from HERE */
        // Pegawai::create([
        //     'nip' => $request->nip,
        //     'nama' => $request->nama,
        //     'username' => $request->username,
        //     'jabatan' => $request->jabatan,
        //     'alamatkantor' => $request->alamatkantor,
        //     'kdlokasi' => $request->kdlokasi,
        //     'lokasi' => $request->lokasi,
        //     'lokasi2' => $request->lokasi2,
        //     'goldarah' => $request->goldarah,
        //     'kdcetak' => $request->kdcetak,
        //     'foto' => $fileName,
        // ]);

        return redirect()->route('pegawai');
    }

    public function search(Request $request)
    {
        $pegs = Pegawai::where('nip','=',$request->nip)->get();
        // dd($pegs);
        return view('dashboard.search', compact('pegs'));
    }

    public function update(Request $request, $id)
    {

        $peg = Pegawai::find($id);
        $peg->update($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('assets/img/images/', $request->nip . '.jpg');
            $peg->foto = $request->nip . '.jpg';
            $peg->update();
        }
        return redirect()->route('pegawai');
    }

    public function destroy(Pegawai $peg)
    {
        Pegawai::destroy($peg->id);
        return redirect()->route('pegawai')->with('status', 'Data Pegawai Behasil Dihapus!');
    }
}
