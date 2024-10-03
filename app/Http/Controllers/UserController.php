<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //  
    public function login(){
        return redirect('/login');
    }
   
        public function authentication(Request $request)
        {
            $validatedata = $request->validate([
                'email' => ['required', 'email'],
                'password' => 'required'
            ]);
            if (Auth::attempt($validatedata)) {
                return redirect('admin.dashboard');   
            }
                return redirect()->back()->with('pesan', 'Maaf login Anda gagal');
            
        }
        public function home() {
            return view('petcaretips');
        }
        public function loginn() {
            return view('login');
        }
        public function kucing() {
            return view('kucing');
        }
        public function anjing() {
            return view('anjing');
        }
        public function kelinci() {
            return view('kelinci');
        }
        public function hamster() {
            return view('hamster');
        }
        public function raskucing() {
            return view('raskucing');
        }
        public function rasanjing() {
            return view('rasanjing');
        }
        public function burung() {
            return view('burung');
        }
        public function rasburung() {
            return view('rasburung');
        }
        public function raskelinci() {
            return view('raskelinci');
        }
        public function rashamster() {
            return view('rashamster');
        }
        public function nama() {
            return view('namakucing');
        }
        public function namaanjing() {
            return view('namaanjing');

        }
        public function namakelinci() {
            return view('namakelinci');

        }
        public function namahamster() {
            return view('namahamster');

        }
        public function artikelkucing2() {
            return view('artikelkucing2');
        }
        public function artikelanjing() {
            $data['artikel'] = Artikel::get();
            return view('artikelanjing', $data);
        }
        public function artikel() {
            $data['artikel'] = Artikel::get();
            return view('artikel', $data);
        }
        public function about() {
            return view('about');
        }
        public function artikelkelinci() {
            return view('artikelkelinci');
        }
        public function artikelburung() {
            return view('artikelburung');
        }
        public function namaburung() {
            return view('namaburung');
        }
        public function logout()
        {
            Auth::logout();
            return redirect('login');
        }

      
      

    }

    

