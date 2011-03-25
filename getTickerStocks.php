<?php

$ticker_stocks_url = "http://pop-stocks.appspot.com/api/market/getTickerStocks";
$ticker_stocks_url = "example.json";

header('Content-type: application/json');

echo file_get_contents($ticker_stocks_url);
