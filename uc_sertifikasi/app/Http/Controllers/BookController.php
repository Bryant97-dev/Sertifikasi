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

    public function add(Request $request)
    {
  
        DB::table('book')->insert([
            'title' => $request->title,
            'author' => $request->author,
            'page' => $request->page,
            'publication_year' => $request->publication_year
        ]);
    
        return redirect('/book');
    
    }

    public function update(Request $request)
    {
   
        DB::table('book')->where('book_id',$request->id)->update([
            'title' => $request->title,
            'author' => $request->author,
            'page' => $request->page,
            'publication_year' => $request->publication_year
        ]);
   
        return redirect('/book');
    }

   
    public function editbook($id)
    {
       
        $book = DB::table('book')->where('book_id',$id)->get();
        $list = DB::table('book')->get();
     
        return view('editbook',['book' => $book,'list'=>$list]);
    
    }

 
    public function delete($id)
    {
       
        DB::table('book')->where('book_id',$id)->delete();
            
     
        return redirect('/book');
    }


}
