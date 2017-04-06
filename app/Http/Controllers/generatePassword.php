<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class generatePassword extends Controller
{

    //generate password
    public function generatePass(Request $request){

        $validator = Validator::make($request->all(), [
            'name'=>'required|min:6',
            'capitalization'=>'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $name = $request['name'];
        $passwordLength= $request['passwordlength'];
        $capitalization = $request['capitalization'];
        $specialChars = $request['specialChars'];

        $extraChars = "<>?~!@#$%^&*()_+}{?<<>";
        $myNumbers = "0123456789";

        if($specialChars == "Yes"){
            $pool = $name.$passwordLength.$capitalization.$extraChars.$myNumbers;
        }else{
            $pool = $name.$passwordLength.$capitalization.$myNumbers;
        }

        if($capitalization == "Yes"){
            $finalPassword = strtoupper(substr(str_shuffle(str_repeat($pool, 5)), 0, $passwordLength));
        }else{
            $finalPassword = strtolower(substr(str_shuffle(str_repeat($pool, 5)), 0, $passwordLength));
        }



        return redirect()->back()->with('message',"Your password is : ".$finalPassword);
    }




}
