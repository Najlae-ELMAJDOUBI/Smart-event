<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use \App\Mail\SendMail;

use App\Demandes;
use App\Events_details;

class MailSend extends Controller
{
    public function mailsend( $event){
		$list=Demandes::find($event);
        $evt = new Events_details();
		    $evt->title = $list->title;
        $evt->description = $list->description;
        $evt->event_email= $list->event_email;
        $evt->type= $list->type;
        $evt->link= $list->link;
        $evt->nb_days= $list->nb_days;
        $evt->organisation= $list->organisation;
        $evt->event_address= $list->event_address;
        $evt->event_phone= $list->event_phone;
        $evt->id= $list->id;
        $evt->organiser_id= $list->organiser_id;
        $evt->flyer_link= $list->flyer_link;
		$evt->save();
		Mail::send('emails.email', ["liste"=>$list], function($message) use($list) {
			$message->to($list->event_email);
			$message->subject('New email!!!');
		});
		$list->delete();
    	return redirect()->back();
	}


	public function mailsendrefus($id ){
		$list=Demandes::find($id);

		Mail::send('emails.annulation', ["liste"=>$list], function($message) use($list) {
			$message->to($list->event_email);
			$message->subject('Annuler!!!');
		});

		$list->delete();
		$listet=Demandes::all();
    	return view('pages.notifications', ['liste' =>$listet]);
    }
}
