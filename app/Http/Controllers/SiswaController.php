<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $siswa = Siswa::latest()->get();
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nis' => 'required|unique:siswas',
            'nama' => 'required',
            'kelas' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'foto' => 'required|max:2048|mimes:png,jpg',
        ]);

        $siswa = new Siswa();
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->jk = $request->jk;
        $siswa->agama = $request->agama;
        $siswa->alamat = $request->alamat;

        // upload foto
        if ($request->hasFile('foto')) {
            $siswa->deleteImage(); // untuk hapus gambar sebelum diganti gambar baru
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/siswa/', $name);
            $siswa->foto = $name;
        }
        $siswa->save();
        return redirect()->route('siswa.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->jk = $request->jk;
        $siswa->agama = $request->agama;
        $siswa->alamat = $request->alamat;

        // upload foto
        if ($request->hasFile('foto')) {
            $siswa->deleteImage(); // untuk hapus gambar sebelum diganti gambar baru
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/siswa/', $name);
            $siswa->foto = $name;
        }
        $siswa->save();

        return redirect()->route('siswa.index')
            ->with('success', 'data berhasil diubah');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->deleteImage();
        $siswa->delete();
        return redirect()->route('siswa.index')
            ->with('success', 'data berhasil dihapus');
    }
}
