<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
 
class HomeController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = DB::select('select * from users where active = ?', [1]);
        $users = DB::select('select * from migrations');

        // $pdo = DB::connection()->getPdo();
        foreach ($users as $user) {
            echo $user->name;
        }
 
        return view('welcome', ['users' => $users]);
    }
}
