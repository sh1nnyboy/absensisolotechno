<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\informasi;
use App\tablesiswa;
use DB;
use App\Http\Requests;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
        // $berita=DB::table('berita')
        // ->join('karyawan', 'karyawan.id', '=', 'berita.iduser')
        // ->select('karyawan.*','berita.*')
        // ->get();
        // return view ('admin.berita.data_berita', compact('berita'));

        // $berita=informasi::all();
        // return view ('admin.berita.data_berita', compact('berita'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $berita=DB::table('arsip')->insert([
            'kk' => $request->kk,
            'ktp' => $request->ktp,
            'ijazah' => $request->$ijazah,
            'sertifikat' => $request->sertifikat,
            'sr' => $request -> $sr
        ]);

        return redirect('/user-profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita=DB::table('berita')
        ->join('karyawan', 'karyawan.id', '=', 'berita.iduser')
        ->select('karyawan.*','berita.*')
        ->where('berita.id', $id)->first();
        return view('admin.berita.detil_berita', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=DB::table('berita')->where('id',$id)->first();
        return view('admin.berita.edit_berita', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kategori="berita";
        $iduser="2";
        DB::table('berita')->where('id', $id)->update([
            'judul' => $request->judul,
            'isiberita' => $request->isiberita,
            'kategori' => $kategori,
            'foto' => $request->foto,
            'iduser' => $iduser
        ]);

        return redirect('/databerita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=DB::table('berita')->where('id',$id)->first();;
        $data=DB::table('berita')->where('id',$id)->delete();
        return redirect('/databerita');
    }
}
