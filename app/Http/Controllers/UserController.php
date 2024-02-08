<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
    class UserController extends Controller{

        public function register(Request $request){

        $incomingFields    = $request -> validate([
         'name'=> ['required|string','min:3','max:10'],"email"=>["required|string",'email','min:3','max:15'],"password"=>["required|string",'min:8','max:200']
        ]);
            return 'Hello from our controller';
        }
        // todo public function register(Request $request){

        // $incomingFields    = $request -> validate([
        //  'name'=> 'required|string',"email"=>"required|string","password"=>"required|string"
        // ]);
        //     return 'Hello from our controller';
        // }

    }