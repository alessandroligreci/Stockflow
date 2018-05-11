<?php

namespace StockFlowSite\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new client();
        $response = $client->get('https://api.coinmarketcap.com/v1/ticker/');
        $response = json_decode($response->getBody());

        return View::make('home', compact('response'));
    }
}
