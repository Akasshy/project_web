<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        return redirect('/');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function register(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
        ]);
            return redirect('/');
    }
    public function profile(Request $request){
        $user = Auth::id();
        $data['profile'] = User::find($user);
        $data['pesanan'] = Transaksi::find($request->id);
        // $data['transaksi'] = Transaksi::where('id_user', $user_id)->first();
        return view('profile', $data);
    }
    public function select(){
        
        $data['product'] = Produk::all();
        $data['banner'] = Banner::all();
        return view('dasboard',$data);        
    }

    public function clik(Request $request){
        // $data['clik'] = Produk::where('id',$request->id)->first();
        $data['clik'] = Produk::find($request->id);
         return view('klickpr',$data);
    }
    public function transaksi(Request $request){
        // $data['clik'] = Produk::where('id',$request->id)->first();
        $data['transaksi'] = Produk::find($request->id);
         return view('transaksi',$data);
    }

    public function buy(Request $request , $id_produk){
        $produk = Produk::findOrFail($id_produk);
        Transaksi::create([
            'id_produk' => $id_produk,
            'id_user' => Auth::id(),
            'alamat' => $request->alamat,
            'nama_penerima' => $request->nama_penerima,
            'metode_pembayaran' => $request->metode_pembayaran,
            'note' => $request->note,
        ]);
        return redirect('/home');
    }
}
