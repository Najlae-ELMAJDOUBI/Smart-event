<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Events_details;

class EventsController extends Controller
{
    public function index(){

        $event=Events_details::all();
        return view("pages.events", ["liste"=>$event]);
    }
   //Affiche le formulaire
   public function create(){

       return view('event.create');

   }
   public function store( Request $req ){

       // $event=$req->input('event');
       $title=$req->input('title');
       $type=$req->input('type');
       $link=$req->input('link');
       $description=$req->input('description');
       $nb_days=$req->input('nb_days');
       $begin_at=$req->input('begin_at');
       $end_at=$req->input('end_at');
       $organisation=$req->input('organisation');
       $event_address=$req->input('event_address');
       $event_phone=$req->input('event_phone');
       $event_email=$req->input('event_email');
       $visibility=$req->input('visibility');
       $category_id=$req->input('category_id');
       $organiser_id=$req->input('organiser_id');
       $flyer_link=$req->input('flyer_link');

       DB::table('events_details')->insert(
       ['title'=>$title,'type'=>$type,'link'=>$link,'description'=>$description,'nb_days'=>$nb_days,'begin_at'=>$begin_at,'end_at'=>$end_at,'organisation'=>$organisation,'event_address'=>$event_address,'event_phone'=>$event_phone,'event_email'=>$event_email,'visibility'=>$visibility, 'flyer_link'=>$flyer_link] );
      }

   public function getAll(Request $req) {
       $events = Events_details::All();
       return view('organiser.index', ['event' => $events]);
   }
}
