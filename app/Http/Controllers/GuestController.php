<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function create()
    {
        return view('guest.daftar'); 
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'no_telp' => 'required',
            'univ' => 'required',
            'major' => 'required',
            'ipk' => 'required',
            'lowongan_id' => 'required',
            'cv' => 'required|mimes:pdf|max:2048',
        ]);

        $data['cv'] = $request->file('cv')->store('cv');

        Student::create($data);

        return redirect()->back()->with('success', 'Pendaftaran berhasil!');
    }
}
