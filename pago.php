<? php
    require_once ( "./lib/Simplify.php" );
    Simplifique :: $ publicKey =  'YOUR_PUBLIC_API_KEY' ;
    Simplifique :: $ PrivateKey =  'YOUR_PRIVATE_API_KEY' ;
    $ Pago =  Simplify_Payment :: createPayment ( array (
            "Tarjeta"  => array (
                "Número"  =>  "5555555555554444" ,
                "ExpMonth"  =>  11 ,
                "ExpYear"  =>  15 ,
                "CVC"  =>  "123"
            ),
            'Cantidad'  =>  '1000' ,
            'Description'  =>  'Descripción prod' ,
            'Moneda'  =>  'USD'
    ));
    si  ( $ pago -> paymentStatus ==  'APROBADO' )  {
        echo "El pago aprobado \ n" ;
    }
?>