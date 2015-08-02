<?php
include 'vendor/autoload.php';

use Pest;
use Uber\API\Client;
$token = 'jMUZUJ8an1j3FFlV5_Gaa1KI65YZkB22ayAvh7EK';
try {
    $adapter = new Pest('https://api.uber.com/');

    $client = new Client($adapter, $token, false); // define SERVER token here
    $client->setLocale('nl_NL');

    $products = $client->products(19.442272,-99.203453);
  //  print_r($products);

    $estimatesPrice = $client->estimatesPrice(19.442272,-99.203453,19.4326018,-99.1332049);
    print_r($estimatesPrice);
    echo "<br>";
      print_r($estimatesPrice['products']['0']['capacity']);
    $estimatesTime = $client->estimatesTime(19.442272,-99.203453,19.4326018,-99.1332049);


    //print_r($estimatesTime);
} catch(Exception $e) {
    print $e->getMessage();
}
