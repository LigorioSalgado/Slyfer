<?php

    require_once("simplify/lib/Simplify.php");
    Simplify::$publicKey = 'sbpb_MDhjZmRmNmQtMTJlZC00NmQ1LWI4NDYtZjRhZTg1NjgzZjVi';
    Simplify::$privateKey = 'Q65+PyW5h8jdhFECaykl95C7HNO/PgvqWV5gUDFlGSt5YFFQL0ODSXAOkNtXTToq';
    $payment = Simplify_Payment::createPayment(array(
            "card" => array(
                "number" => "5105105105105100",
                "expMonth" => 11,
                "expYear" => 15,
                "cvc" => "123"
            ),
            'amount' => '1000',
            'description' => 'prod description',
            'currency' => 'USD'
    ));
    if ($payment->paymentStatus == 'APPROVED') {
        echo "Payment approved\n";
    }
    else{ echo "Paymant bad";}
?>
