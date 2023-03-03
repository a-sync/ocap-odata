<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Operation;

class HomeController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = [];
 
        // Test database connection
        try {
            //$pdo = DB::connection()->getPdo();
            //DB::getDefaultConnection();
            //DB::select('select 1');

            // $users = DB::select('select * from users where active = ?', [1]);
            //$items = DB::select('select * from migrations');

            $count = Operation::where('event', '!=', '')->count();

        } catch (\Exception $e) {
            echo('<pre>ERR: ' . dump($e). '</pre>');
        }

        return view('welcome', ['items' => $items]);
    }
}
