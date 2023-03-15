<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArsipController extends Controller
{
    public function index()
    {
        $arsips = Arsip::all();
        return view('berkas', compact('arsip'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kk' => 'required|file|max:1024',
            'ktp' => 'required|file|max:1024',
            'suratrekomendasi' => 'required|file|max:1024',
            'ijazah' => 'required|file|max:1024',
            'aktakelahiran' => 'required|file|max:1024',
        ]);
    
        $kkPath = $request->file('kk')->store('public/arsip');
        $ktpPath = $request->file('ktp')->store('public/arsip');
        $srPath = $request->file('suratrekomendasi')->store('public/arsip');
        $ijPath = $request->file('ijazah')->store('public/arsip');
        $akPath = $request->file('aktakelahiran')->store('public/arsip');
    
        $arsip = new Arsip;
        $arsip->kk = $kkPath;
        $arsip->ktp = $ktpPath;
        $arsip->suratrekomendasi = $srPath;
        $arsip->ijazah = $ijPath;
        $arsip->aktakelahiran = $akPath;
        $arsip->save();
    
        return redirect()->back()->with('success', 'Berkas berhasil diupload.');
    }

    public function destroy($id)
    {
        $arsip = Arsip::findOrFail($id);

        Storage::delete($arsip->kk);
        Storage::delete($arsip->ktp);
        Storage::delete($arsip->suratrekomendasi);
        Storage::delete($arsip->ijazah);
        Storage::delete($arsip->aktakelahiran);

        $arsip->delete();

        return redirect()->back()->with('success', 'Berkas berhasil dihapus.');
    }
}