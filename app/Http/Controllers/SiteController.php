<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class SiteController extends Controller
{
    public function home()
    {
        return view('sites.home');
    }

    public function about()
    {
        return view('sites.about');
    }

    public function register()
    {
        return view('sites.register');
    }

    public function postregister(Request $request)
    {
        
        $this->validate($request,[
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'email' => 'required|email',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
        ]);

        // Input pendaftar sebagai user dulu
        $user = new \App\User;
        $user->role ='siswa';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(60);
        $user->save();

        //input ke table siswa
        $request->request->add(['user_id' => $user->id]);
        $siswa = \App\Siswa::create($request->all());

        return redirect('/')->with('sukses','Data Pendaftaran Berhasil Dikirim');
    }
}
