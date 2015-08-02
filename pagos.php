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
echo $mv;
echo $av;
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
        echo "Payment approved\n";
    }
}

 catch(Exception $e){
   echo $e;

 }
    ?>
