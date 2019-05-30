<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserProfileController extends Controller
{
    public function index($id){
        $user = User::find($id);
        return view('profile', compact('user'));
    }
    public function show(){
        $var = User::find(1)->certificates;
        $array = array();
        foreach ($var as $item){
            array_push($array, $item);
        }
        return json_encode($array);
    }
}
