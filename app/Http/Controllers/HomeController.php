<?php

namespace App\Http\Controllers;
use App\Categories;
use App\User;
use App\DB;
use App\Demandes;
use Redirect,Response;
use Carbon\Carbon;
class HomeController extends Controller
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
        $userData = Category::select(\DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(\DB::raw("Month(created_at)"))
        ->pluck('count');

        $category = Category::orderBy( 'id', 'ASC' )->get()->count();
        $user = User::orderBy( 'id', 'ASC' )->get()->count();

        return View('dashboard', compact('userData'), [ 'cat' =>  $category, 'usr' => $user ] );
    }

}
?>
