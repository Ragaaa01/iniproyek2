<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.homepage');
    }

    public function kontak(){
        return view('frontend.kontak');
    }
    
    public function kontakStore(Request $request)
    {
       $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'pesan' => 'required',
        ]);

        Message::create($data);
    
    return redirect()->back()->with([
        'message' =>'pesan anda berhasil dikirim',
        'alert-type' => 'success'
    ]);

    }

    public function detail(){
        return view('frontend.detail');
    }
}
