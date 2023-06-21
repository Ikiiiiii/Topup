<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function show(){
        $data['product'] = Product::all();
        return view('detailProd', $data);
    }

    function tampil(){
        $data ['product'] = Product::all();
        return view('game', $data);
    }

    function detail(){
        $data ['product'] = Product::all();
        return view('detail', $data);
    }

    function add(){
        $data = [
            'action' => url('product/create'),
            'product' => (object)[
                'namaProduct' => '',
                'deskripsi' => '',
                'harga' => '',
                'fotoProduct' => ''
            ],
        ];
        return view('formProduk',$data);
    }

    function create(Request $req){
        $this->validate($req, [


        ]);
        Product::create([
            'namaProduct' => $req->namaProduct,
            'deskripsi' => $req->deskripsi,
            'harga' => $req->harga,
            'fotoProduct' => $req->file('fotoProduct')->store('fotoProduct')
        ]);
        return redirect('product');
    }

    function edit($id){
        $data['product'] = Product::find($id);
        $data['action'] = url('product/update').'/'.$data['product']->id;
        $data['tombol'] = 'Update';
        return view('formProduk',$data);
    }

    function update(Request $req){
        if($req->file('fotoProduct')){
            $file = $req->file('fotoProduct')->store('fotoProduct');
        }else{
            $file = DB::row('fotoProduct');
        }

        Product::where('id',$req->id)->update([
            'namaProduct' => $req->namaProduct,
            'deskripsi' => $req->deskripsi,
            'harga' => $req->harga,
            'fotoProduct' => $file
        ]);
        return redirect('product');
    }

    function delete($id){
        $product = Product::where('id',$id)->first();
        $product->delete();
        Storage::delete($product->fotoProduct);
        return redirect('product');
    }
}
