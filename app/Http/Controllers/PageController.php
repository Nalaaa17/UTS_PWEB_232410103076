<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');


        if ($username === 'alan' && $password === '123') {

            session(['username' => $username]);
            return redirect()->route('dashboard');
        }

        return redirect('/')->with('error', 'Login gagal!');
    }

    public function dashboard(Request $request)
    {
        $username = session('username');
        if (!$username) {
            return redirect()->route('login');
        }

        return view('dashboard', compact('username'));
    }

    public function profile()
    {
        $username = session('username');
        if (!$username) {
            return redirect()->route('login');
        }

        return view('profile', compact('username'));
    }

    public function pengelolaan()
    {
        $data = [
            ['nama' => 'Padi', 'jumlah' => 100],
            ['nama' => 'Jagung', 'jumlah' => 50],
            ['nama' => 'Kedelai', 'jumlah' => 70],
            ['nama' => 'Tebu', 'jumlah' => 30],
            ['nama' => 'Cabai', 'jumlah' => 100]
        ];

        return view('pengelolaan', compact('data'));
    }
}
