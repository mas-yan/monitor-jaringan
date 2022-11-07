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
        $client = Client::get();
        $terhubung = [];
        $tidakTerhubung = [];
        foreach ($client as $value) {
            $host = $value->ip;
            $ch = curl_init($host);
            curl_setopt($ch, CURLOPT_TIMEOUT, 5);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $data = curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            if ($httpcode !== 0) {
                $terhubung[] = $value->ip;
            } else {
                $tidakTerhubung[] = $value->ip;
            }
        }
        return view('page.dashboard', [
            'pc' => $pc,
            'terhubung' => count($terhubung),
            'tidakTerhubung' => count($tidakTerhubung),
        ]);
    }
}
