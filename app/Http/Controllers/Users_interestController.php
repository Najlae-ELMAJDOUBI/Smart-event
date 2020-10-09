<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_details;
use App\User;
use Auth;


class Users_interestController extends Controller
{
    //

    public function create(){
        return view('pages.details');

    }

 public function store(Request $req){
    $categories->user_id=auth::user()->id;
    $categories->id=$req->input('categories');
    $categories->save();
    return redirect('details');
}

}
