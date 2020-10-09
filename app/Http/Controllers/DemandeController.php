<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Demandes;
use App\user_details;
use App\Events_details;
use Auth;
class DemandeController extends Controller
{
    public function create(){
        return view('pages.notifications');
    }
    public function store(Request $req){
           $cat = new Demandes();
           $cat->title= $req->input('title');
           $cat->type= $req->input('type');
           $cat->link= $req->input('link');
           $cat->description= $req->input('description');
           $cat->nb_days= $req->input('nb_days');
           $cat->begin_at= $req->input('begin_at');
           $cat->end_at= $req->input('end_at');
           $cat->organisation= $req->input('organisation');
           $cat->event_address= $req->input('event_address');
           $cat->event_phone= $req->input('event_phone');
           $cat->event_email= $req->input('event_email');
           $cat->id_categories= $req->input('categories');
           $cat->organiser_id= auth::User()->id;
           $cat->flyer_link= $req->input('flyer_link');
           $cat->save();
           return redirect()->route('test');

       }
       public function edit($id){
           $listdem = Demandes::find($id);
            view('pages.list', ['dmd' => $listdem]);

       }


}
