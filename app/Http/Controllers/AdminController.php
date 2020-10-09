<?php

namespace App\Http\Controllers;
use App\Categories;
use App\User;
use App\DB;
use App\Events_details;
use App\Demandes;
use Redirect,Response;
use Carbon\Carbon;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $userData = User::select(\DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(\DB::raw("Month(created_at)"))
        ->pluck('count');

        $category = Categories::orderBy( 'id', 'ASC' )->get()->count();
        $user = User::orderBy( 'id', 'ASC' )->get()->count();
        $event = Events_details::orderBy( 'id', 'ASC' )->get()->count();
        return View('dashboard', compact('userData'), [ 'cat' =>  $category, 'usr' => $user, 'eve' => $event] );
    }

}
?>
