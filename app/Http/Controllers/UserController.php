<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login( Request $request){
        $validata  = $request->validate([
            "email"=> ['required','email'],
            'password'=> ['required'],
            // 'role'=> ['required'],
            
        ]);
        if (auth()->attempt($validata)) {
            $request->session()->regenerate();
            if (auth()->user()->role == 'admin') {               
                return redirect('/dasad')->with('pesan','Login Berhasil');
            }else{
                return redirect('/home');
            }
                   
        }
        // if (Auth::attempt($validata)) {
        //     return redirect('/home');
        // }
        return redirect()->back();
    }
    public function select(){
        $data['product'] = Produk::all();
        return view('dasboard',$data);        
    }
    public function clik(Request $request){
        // $data['clik'] = Produk::where('id',$request->id)->first();
        $data['clik'] = Produk::find($request->id);
         return view('klickpr',$data);
    }
}
