<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dasad(){
        $data['jual'] = Produk::count();
        $data['user'] = User::count();
        $data['transaksi'] = Transaksi::all();
        return view('admin/admindas',$data);
    }

    // Transaki
    public function deltransaksi(Request $request){
        Transaksi::where('id', $request->id)->delete();
        return redirect('/dasad');
    }
    
    public function edittransaksi(Request $request){
        $data['order'] = Transaksi::find($request->id);
        return view('admin/edit-transaksi',$data);
    }

    public function updatetransaksi(Request $request){
        $edit = Transaksi::where('id',$request->id)->first();
        $edit->update([
            
            'status' => $request['status']
        ]);
        return redirect('/dasad');
    }
  
    public function product(){
        $data['product'] = Produk::all();
        $data['jumlah'] = $data['product']->count();
        return view('admin/product',$data);        
    }
    public function user(){
        $data['user'] = User::all();
        return view('admin/users',$data);        
    }

   
    function add(Request $req){

        // $filename ='';

        // if ($req->file('foto')) {
        //     $extfile = $req->file('foto')->getClientOriginalExtension();
        //     $filename = time().".".$extfile;
        //     $req->file('foto')->storeAs('foto',$filename);
        // }
        $filename = time().'.'.$req->foto_product->extension(); 
        $req->foto_product->move(public_path('storage/foto'), $filename);
        Produk::create([
            'name_product' => $req->name_product,
            'harga' => $req->harga,
            'stok' => $req->stok,
            'deskripsi' => $req->deskripsi,
            'foto_product' => $filename,
            'kategori' => $req->kategori,
            'id_user' => auth()->user()->id
            // 'id_user' => $req->id
        ]);
        return redirect('/listproduct');
    }

    public function delete(Request $request){
      Produk::where('id', $request->id)->delete();
      return redirect('/listproduct');
    }
    public function edit(Request $request)
    {
        $data['product'] = Produk::find($request->id);
        return view('admin/edit-product',$data);
    }
    public function update(Request $req){
        $edit = Produk::where('id',$req->id)->first();
        if ($req->hasFile('foto_product')) {
            
            $filename = time().'.'.$req->foto_product->extension(); 
            $req->foto_product->move(public_path('storage/foto'), $filename);
            $edit->update([
                'name_product' => $req['name_product'],
                'harga' => $req['harga'],
                'stok' => $req['stok'],
                'deskripsi' => $req['deskripsi'],
                'foto_product' => $filename,
                'kategori' => $req['kategori'],
                // 'id_user' => '1'
                'id_user' => auth()->user()->id


            ]);
        }else {
            $edit->update([
                'name_product' => $req['name_product'],
                'harga' => $req['harga'],
                'stok' => $req['stok'],
                'deskripsi' => $req['deskripsi'],
                // 'foto_product' => $filename,
                'kategori' => $req['kategori'],
                'id_user' => '1'
            ]);
            
        }

        return redirect('/listproduct');
    }
    public function banner(){
        $data['banner'] = Banner::all();
        return view('admin/banner',$data);
    }

    public function addbanner(Request $request){
        $filename = time().'.'.$request->file('foto_banner')->getClientOriginalExtension(); 
        $request->foto_banner->move(public_path('storage/foto_banner'), $filename);

        Banner::create([
            'foto_banner' => $filename
        ]);
        return redirect('/banner');
    }
    public function deletebanner(Request $request){
        Banner::where('id', $request->id)->delete();
        return redirect('/banner');
    }

    // FUNGSO USER
    public function adduser(Request $req){

        // $filename ='';

        // if ($req->file('foto')) {
        //     $extfile = $req->file('foto')->getClientOriginalExtension();
        //     $filename = time().".".$extfile;
        //     $req->file('foto')->storeAs('foto',$filename);
        // }
        $filename = time().'.'.$req->foto->extension(); 
        $req->foto->move(public_path('storage/foto_user'), $filename);
        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
            'role' => $req->role,
            'foto' => $filename,
        ]);
        return redirect('/dtusers');
    }

    public function deluser(Request $request){
        User::where('id', $request->id)->delete();
        return redirect('/dtusers');
    }
}
