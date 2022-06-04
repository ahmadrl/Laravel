<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Operations extends Controller
{
    public function index(Request $request)
    {
            $firstnumber = $request->input('firstnumber');
            $secondnumber = $request->input('secondnumber');
            $operator = $request->input('sub');
            $result = 0;
            if ($operator == '+') {
            	$result = $firstnumber + $secondnumber;
            }elseif ($operator == '-') {
            	$result = $firstnumber - $secondnumber;
            }elseif($operator=='*'){
                $result = $firstnumber * $secondnumber;
            }elseif ($operator=='/') {
            	$result = $firstnumber / $secondnumber;
            }else{
            	$result = 0;
            }
            return redirect ('/')->with('message','The answer is:'.' '.$result);
    }
}
