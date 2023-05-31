<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Covid extends Controller
{
    public function Covid_all()
    {
        $response = Http::get('https://api.covid19api.com/summary')->json();
        $countries = $response['Countries'];
        return view('Covid', ['countries' => $countries]);
    }

    public function Covid_arrange_confirm()
    {
        $response = Http::get('https://api.covid19api.com/summary')->json();

        $countries = collect($response['Countries'])->sortByDesc('TotalConfirmed');

        return view('Covid', ['countries' => $countries]);
    }

    public function Covid_arrange_death()
    {
        $response = Http::get('https://api.covid19api.com/summary')->json();

        $countries = collect($response['Countries'])->sortByDesc('TotalDeaths');

        return view('Covid', ['countries' => $countries]);
    }
}
