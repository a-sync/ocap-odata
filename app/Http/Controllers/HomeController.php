<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Flat3\Lodata\Facades\Lodata;

class HomeController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $debug = [];
 
        // Test database connection
        try {
            $debug['ops'] = \App\Models\Operation::count();
            $debug['timestamps'] = \App\Models\Timestamp::count();
            $debug['entities'] = \App\Models\Entity::count();
            $debug['events'] = \App\Models\Event::count();
            $debug['players'] = \App\Models\Player::where('alias_of', '0')->count();
            $debug['aliases'] = \App\Models\Player::where('alias_of', '!=', '0')->count();
        } catch (\Exception $e) {
            $debug['database_error'] = $e->getMessage();
        }

        return view('welcome', ['debug' => print_r($debug, true), 'ep' => Lodata::getEndpoint()]);
    }
}
