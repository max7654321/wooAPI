<?php
require __DIR__ . '/vendor/autoload.php';
Requests::register_autoloader();

$headers = array(
    'Authorization' => 'Bearer 6cba4a537cc59c8ed5844acc23bfaa74'
);

$request = Requests::get('https://ddaudio.com.ua/api/price/retail?offset=10000', $headers);
$data = json_decode($request->body, true);
?>
