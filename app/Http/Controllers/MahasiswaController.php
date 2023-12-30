<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index',['mahasiswas' => $mahasiswas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form-pendaftaran');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nim' => 'required|size:8',
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => '',
            ]);
            
            Mahasiswa::create($validateData);
            return redirect('mahasiswas');
    }

    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show',['mahasiswa' => $mahasiswa]);
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit',['mahasiswa' => $mahasiswa]);
    }
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validateData = $request->validate([
        'nim' => 'required|size:8|unique:mahasiswas,nim,'.$mahasiswa->id,
        'nama' => 'required|min:3|max:50',
        'jenis_kelamin' => 'required|in:P,L',
        'jurusan' => 'required',
        'alamat' => '',
        ]);
        $mahasiswa->update($validateData);
        return redirect()->route('mahasiswas.show',['mahasiswa'=>$mahasiswa->id])
        ->with('pesan',"Update data {$validateData['nama']} berhasil");
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
         $mahasiswa->delete();
         return redirect()->route('mahasiswas.index')
        ->with('pesan',"Hapus data $mahasiswa->nama berhasil");
    }

}
