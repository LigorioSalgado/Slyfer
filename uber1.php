<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<head>
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
    //  print_r($estimatesPrice);
      $obj = json_decode($estimatesPrice);

      $obj1= $obj->{'prices'};
      echo "<table class='table'>
    <thead>
      <tr>
        <th>Tipo de Uber</th>
        <th>Min estimado</th>
        <th>Max estimado</th>
        <th>Duracion aprox</th>
        <th>Distancia</th>
        <th>Seleccion</th>
      </tr>
    </thead>
    <tbody>";
    for($i=0;$i<4;$i++){
      $duration=round(intval($obj1[$i]->duration)/60);
    echo"
      <tr>
        <td>".$obj1[$i]->localized_display_name."</td>
        <td>$ ".$obj1[$i]->low_estimate." MXN </td>
        <td>$".$obj1[$i]->high_estimate." MXN </td>
        <td>".$duration." Mins</td>
        <td>".$obj1[$i]->distance." Kms</td>
        <td> <input type='radio' name='select' value='".$obj1[$i]->high_estimate."'/> </td>
      </tr>";}
  echo"
    </tbody>
  </table>";
    /*  print_r($obj1[0]->localized_display_name);
      print_r($obj1[1]->localized_display_name);
      print_r($obj1[2]->localized_display_name);
      print_r($obj1[3]->localized_display_name); */
    //$estimatesTime = $client->estimatesTime(19.442272,-99.203453,19.4326018,-99.1332049);


    //print_r($estimatesTime);
} catch(Exception $e) {
    print $e->getMessage();
}
?>
