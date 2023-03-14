<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class ArsipController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('arsip')) {
            $arsip = $request->file('arsip');
            $path = $arsip->store('public/arsip');

            DB::table('arsip')->insert([
                'arsip' => $path
            ]);

            return redirect()->back()->with('success', 'Arsip uploaded successfully.');
        } else {
            return redirect()->back()->with('error', 'No file was uploaded.');
        }
    }
}