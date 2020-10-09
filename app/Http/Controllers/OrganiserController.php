<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events_details;

class OrganiserController extends Controller
{
  public function index(){
        $events = Events_details::All();
        return view('organiser.index', ['event' => $events]);;
  } 
}
