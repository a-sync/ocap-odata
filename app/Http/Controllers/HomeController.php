<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
        $items = null;
 
        // Test database connection
        try {
            //$pdo = DB::connection()->getPdo();
            //DB::getDefaultConnection();
            //DB::select('select 1');

            // $users = DB::select('select * from users where active = ?', [1]);
            //$items = DB::select('select * from operations');

            //$items = Operation::all();
            $items = Operation::where('event', '!=', '')->count();

        } catch (\Exception $e) {
            dd($e);
        }

        return view('welcome', ['items' => $items]);
    }
}
