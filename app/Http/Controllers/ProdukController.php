<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
    function home(){
        $data['user']=User::all();
        $data['produk']=Produk::all();
        $data['jumlah']=$data['produk']->count();
        return view('index',$data);
    }
    function create(){
        return view('create');
    }

    function created(Request $request){
        $request->validate([
            'produk'=>['required'],
            'jumlah'=>['required'],
            'kategori'=>['required'],
            'harga'=>['required'],
            'foto'=>['required'],
        ]);

        $filename ='';
        if ($request->file('foto')) {
            $exfile = $request->file('foto')->getClientOriginalExtension();
            $filename=time().".".$exfile;
            $request->file('foto')->storeAs('foto',$filename);
        }

        Produk::create([
            'produk'=>$request->produk,
            'jumlah'=>$request->jumlah,
            'kategori'=>$request->kategori,
            'harga'=>$request->harga,
            'foto'=>$filename,
        ]);

        return redirect('/beranda');
    }

    function search(Request $request){
        $data['user']=User::all();
        $data['produk']=Produk::Where('produk',"like","%".$request->cari."%")->get();
        $data['jumlah']=$data['produk']->count();
        return view('index',$data);
    }

    function delete(Request $request){
        Produk::Where('id',$request->id)->delete();
        return redirect('/beranda');
    }

    function update(Request $request){
        $data['user']=User::all();
        $data['produk']=Produk::find($request->id);

        return view('update',$data);
    }

    function updated(Request $request){
      $filename = "";
      if ($request->file('foto')) {
        $exfile = $request->file('foto')->getClientOriginalExtension();
        $filename = time().".".$exfile;
        $request->file('foto')->storeAs('foto',$filename);
      }

        Produk::Where('id',$request->id)->update([
            'produk'=>$request->produk,
            'jumlah'=>$request->jumlah,
            'kategori'=>$request->kategori,
            'harga'=>$request->harga,
            'foto'=>$filename,
        ]);

        return redirect('/beranda');
    }


}
