<!doctype html>


<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<style type="text/css">

  body{
    background-color: #fff;
  }
  .textbox{
    border: 5px solid;
    border-radius: 10px;    
    border-color: #48483C; 
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 15px;
    color: #CC0000;
    margin: 0 0 10px 0;
    font-size: 16px;
    width: 30%;
  }

  .venc{
    border: 5px solid;
    border-radius: 10px;
    border-color: #48483C; 
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 15px;
    margin: 0 0 10px 0;

    width: 6%;
  }

  .myButton {
  background-color:#44c767;
  -moz-border-radius:28px;
  -webkit-border-radius:28px;
  border-radius:28px;
  border:1px solid #18ab29;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:17px;
  padding:16px 31px;
  text-decoration:none;
  text-shadow:0px 1px 0px #2f6627;
}
.myButton:hover {
  background-color:#5cbf2a;
}
.myButton:active {
  position:relative;
  top:1px;
}


</style>


<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Payments</title>

 </head>
  <body >
    <nav class="navbar navbar-default" style="background-color: #f96e5b; border: 0px;">
          <div class="container-fluid">
            <div class="navbar-header">
              <h1><strong>Slyfer - Safe Payment Module</strong></h1>
            </div>
          </div>
        </nav>

        <i class="fa fa-cc-mastercard fa-stack-1x text-primary" style="font-size:30em; z-index:-9; color:#FF9900;"></i>

        <form  name="payform" method="post" action="pagos.php" align="center">
        
            <input type= "text" name="nombre" class="textbox" placeholder="Name"/>
            <input type= "text" name="apellidos" class="textbox" placeholder="First Name"/><br>
            <input type= "text" name="direccion" class="textbox" placeholder="Adress"/><br>
            <input type= "text" name="telefono" class="textbox" placeholder="Phone Numbre"/><br>
            <input type= "text" name="correo" class="textbox" placeholder="Mail"/>
            <input type= "text" name="numtarj" class="textbox" placeholder="Card Number"/>

            <br>
        
              <label>Month of Expiration</label>
        
            <select name="mesv" class="venc">
              <option value=01>01</option>
              <option value=02>02</option>
              <option value=03>03</option>
              <option value=04>04</option>
              <option value=05>05</option>
              <option value=06>06</option>
              <option value=07>07</option>
              <option value=08>08</option>
              <option value=09>09</option>
              <option value=10>010</option>
              <option value=11>11</option>
              <option value=12>12</option>
            </select >

        <label>Year of Expiration</label>
          <select name="añov"  class="venc">
            <option value=16>16</option>
            <option value=17>17</option>
            <option value=18>18</option>
            <option value=19>19</option>
            <option value=20>20</option>
          </select >

        <input type= "text" name="cs" placeholder="Security Code"  class="textbox"/>
          <input type="hidden" name="concepto"  class="textbox"/>

        <?php echo $total ?>

        <br><br>

        <input type="submit" name="Enviar" class="myButton"></input>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>


        
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Payment Accepted</h4>
              </div>
              <div class="modal-body">
                <p>Your Payment has been transfered. Thanks by using Mastercard.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>

        </form>



  </body>
</html>
