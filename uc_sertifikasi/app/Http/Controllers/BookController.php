<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BookController extends Controller
{
     public function read()
    {
    	
    	$book = DB::table('book')->get();
 
    	
    	return view('book',['book' => $book]);
 
    }

    public function addbook()
    {
        return view('addbook');
    
    }

    // method untuk insert data ke table pegawai
    public function add(Request $request)
    {
        // insert data ke table pegawai
        DB::table('book')->insert([
            'title' => $request->title,
            'author' => $request->author,
            'page' => $request->page,
            'publication_year' => $request->publication_year
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/book');
    
    }

    public function update(Request $request)
    {
        // update data pegawai
        DB::table('book')->where('book_id',$request->id)->update([
            'title' => $request->title,
            'author' => $request->author,
            'page' => $request->page,
            'publication_year' => $request->publication_year
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/book');
    }

    // method untuk edit data pegawai
    public function editbook($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $book = DB::table('book')->where('book_id',$id)->get();
        $list = DB::table('book')->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editbook',['book' => $book,'list'=>$list]);
    
    }

    // method untuk hapus data pegawai
    public function delete($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('book')->where('book_id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/book');
    }


}
