<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LogController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $clients = Client::when($request->all(), function ($pc) {
            $pc = $pc->whereBetween('updated_at', [Carbon::parse(request()->start_date), Carbon::parse(request()->end_date)]);
        })->get();
        return view('page.log.index', compact('clients'));
    }
}
