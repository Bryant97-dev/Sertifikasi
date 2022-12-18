<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserBookController extends Controller
{
    public function read()
    {
    	
    	$book = DB::table('book')->get();
 
    	
    	return view('userbook',['book' => $book]);
 
    }
}
