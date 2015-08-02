<html>
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?php
try{
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$dir=$_POST['direccion'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
(string)$numtarj=$_POST['numtarj'];
$mv=$_POST['mesv'];
$av=$_POST['aniov'];
$cs=$_POST['cs'];
$prop=$_POST['propietario'];
$con=$_POST['concepto'];
$total=$_POST['total'];

require_once("simplify/lib/Simplify.php");
   Simplify::$publicKey = 'sbpb_MDhjZmRmNmQtMTJlZC00NmQ1LWI4NDYtZjRhZTg1NjgzZjVi';
   Simplify::$privateKey = 'Q65+PyW5h8jdhFECaykl95C7HNO/PgvqWV5gUDFlGSt5YFFQL0ODSXAOkNtXTToq';
   $payment = Simplify_Payment::createPayment(array(
            "card" => array(
                "number" => $numtarj,
                "expMonth" => $mv,
                "expYear" => $av,
                "cvc" => $cs
            ),
            'amount' => $total,
            'description' => $con,
            'currency' => 'USD'
    ));
    if ($payment->paymentStatus == 'APPROVED') {
      echo "<center>";
      echo "<p style='font-size: 50px;'><strong>Slyfer</strong></p>";
        echo "<i class='fa fa-refresh fa-spin fa-5x'></i>";
        echo "<p style='font-size: 20px;'><strong>Procesando Tu pago espera unos segundos...</strong></p>";
          echo "</center>";
      header('refresh:10; url=paysucefull.php');
    }
}

 catch(Exception $e){
   echo $e;

 }
    ?>
