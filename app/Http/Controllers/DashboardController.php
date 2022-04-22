<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $pc = Client::count();
        $terhubung = Client::where('status', 'terhubung')->count();
        $tidakTerhubung = Client::where('status', 'tidak terhubung')->count();
        return view('page.dashboard', compact('pc', 'terhubung', 'tidakTerhubung'));
    }
}
