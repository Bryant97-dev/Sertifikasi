<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LoanController extends Controller
{
    public function read()
    {
    	
    	$loan = DB::table('loan')->get();
 
    	
    	return view('loan',['loan' => $loan]);
 
    }

    public function addloan()
    {
        $list = DB::table('book')->get();
        $borrow_date = Carbon::now()->format('Y-m-d');
        $return_date = Carbon::now()->addDays(7)->format('Y-m-d');
        return view('addloan',['borrow_date' => $borrow_date,'return_date' => $return_date,'list'=>$list ]);
    
    
    }

    public function add(Request $request)
    {
       
        DB::table('loan')->insert([
            'title' => $request->title,
            'member' => $request->member,
            'borrow_date' => $request->borrow_date,
            'return_date' => $request->return_date
        ]);

      
      
        return redirect('/loan');
    
    }

    public function editloan($id)
    {
        
        $loan = DB::table('loan')->where('loan_id',$id)->get();
        $list = DB::table('book')->get();
        
        return view('editloan',['loan' => $loan,'list'=>$list]);
    
    }

    public function update(Request $request)
    {
       
        DB::table('loan')->where('loan_id',$request->id)->update([
            'title' => $request->title,
            'member' => $request->member,
            'borrow_date' => $request->borrow_date,
            'return_date' => $request->return_date
        ]);
       
        return redirect('/loan');
    }

    public function delete($id)
    {
        
        DB::table('loan')->where('loan_id',$id)->delete();
            
     
        return redirect('/loan');
    }



}
