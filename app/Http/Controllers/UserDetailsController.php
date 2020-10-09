<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_details;
use App\User;
use Auth;


class UserDetailsController extends Controller
{
    //
    public function create(){
        return view('pages.details');
        
    }
    public function store(Request $req){
        $cat = new user_details();
        $cat->user_id=auth::user()->id;
        $cat->establishment= $req->input('establishment');
        $cat->phone= $req->input('phone');
        $cat->save();
        return redirect('details');
        
    

    }
}
