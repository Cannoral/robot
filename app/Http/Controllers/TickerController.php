<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \jamesRUS52\TinkoffInvest\TIClient;
use \jamesRUS52\TinkoffInvest\TISiteEnum;


class TickerController extends Controller
{
    public function index()
    {
        $client = new TIClient(env('TINKOFF_INVEST_TOKEN'),TISiteEnum::EXCHANGE);

        $stocks = $client->getStocks();

        $rubStocks = [];
        foreach ($stocks as $stock) {
            if ($stock->getCurrency() == 'RUB') {
                $rubStocks[] = $stock;
            }
        }
        
        return view('ticker.index', compact('rubStocks'));
    }
}
