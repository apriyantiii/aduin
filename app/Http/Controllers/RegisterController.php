<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('daftar.index', [
            'tittle' => 'Daftar',
            'active' => 'daftar'
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // return request()->all();
        $validatedData = $request->validate([
            'nik' => 'required|max:16|min:16',
            'nama' => 'required|max:255|min:5',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:5|max:255',
            'telp' => 'required|max:12|',
            'gender' => 'required',
            'tgl_lahir' => 'required',
            'domisili' => 'required|max:225',
        ]);

        //Untuk mengenskripsi password
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] =  Hash::make($validatedData['password']);

        //insert ke database users
        User::create($validatedData);

        //membuat pop up ketika registrasi berhasil
        $request->session()->flash('success', 'Registrasi berhasil, Yuk login yuk!');

        //redirect ke halaman login ketika sukses registrasi
        return redirect('/masuk');
    }
}
