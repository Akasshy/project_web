<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Produk;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  
    public function product(){
        $data['product'] = Produk::all();
        $data['jumlah'] = $data['product']->count();
        return view('admin/product',$data);        
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
            ]);
        }else {
            $edit->update([
                'name_product' => $req['name_product'],
                'harga' => $req['harga'],
                'stok' => $req['stok'],
                'deskripsi' => $req['deskripsi'],
                // 'foto_product' => $filename,
                'kategori' => $req['kategori'],
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
}
