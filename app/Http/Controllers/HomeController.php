<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Flat3\Lodata\Facades\Lodata;

class HomeController extends Controller
{
    /**
     * Show the welcome page and some statistics.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stats = [];
 
        try {
            $stats['operations'] = \App\Models\Operation::count();
            $stats['timestamps'] = \App\Models\Timestamp::count();
            $stats['entities'] = \App\Models\Entity::count();
            $stats['events'] = \App\Models\Event::count();
            $stats['players'] = \App\Models\Player::where('alias_of', '0')->count();
            $stats['aliases'] = \App\Models\Player::where('alias_of', '!=', '0')->count();
        } catch (\Exception $e) {
            $stats['database_error'] = $e->getMessage();
        }

        return view('welcome', ['stats' => $stats, 'ep' => Lodata::getEndpoint()]);
    }
}
