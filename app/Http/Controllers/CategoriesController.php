<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function create()
    {
        return view('category.tambah');
    }

    public function store (Request $request)
    {
       //validasi data
       $request->validate([
        'name' => 'required|min:5',
        'description' => 'required|min:5',
    ]);

    // masukan data inputan ke database tabel kategori
    DB::table('categories')->insert([
        'name' => $request['name'],
        'description' => $request['description']
    ]);

    // lempar ke halaman kategori
    return redirect('/category');

    }

    public function index()
    {
        
        $categories = DB::table('categories')->get();
// dd($categories);

       return view('category.tampil', ['categories' => $categories]);
    }

    public function show($id)
    {
        $category = DB::table('categories')->find($id);

        return view ('category.detail', ['category'=> $category]);
    }

    public function edit($id)
    {
        $category = DB::table('categories')->find($id);
        
        return view('category.edit', ['category'=> $category]);
    }

    public function update($id, Request $request)
    {
         //validasi data
       $request->validate([
        'name' => 'required|min:5',
        'description' => 'required|min:5',
    ]);

    // update data 
    DB::table('categories')
    ->where('id', $id)
    ->update(
        [
            'name' => $request['name'],
            'description' => $request['description']
        ]
    );

    // lempar ke url kategori 
     return redirect('/category');
    }

    public function destroy($id)
    {

    DB::table('categories')->where('id', $id)->delete();

    return redirect('/category');
    }
}
