<?php
session_start();
$total=$_POST['total'];
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Login with Facebook</title>

 </head>
  <body >





        <form  name="payform" method="post" action="pagos.php">
        <input type= "text" name="nombre" placeholder="Nombre"/>
        <input type= "text" name="apellidos" placeholder="Apellidos"/>
        <input type= "text" name="direccion" placeholder="Direccion"/>
        <input type= "text" name="telefono" placeholder="Telefono"/>
        <input type= "text" name="correo" placeholder="Correo"/>
        <input type= "text" name="numtarj" placeholder="N° Tarjeta"/>
        <label>Mes de vencimiento</label>
        <select name="mesv">
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
        <label>Año de vencimiento</label>
        <select name="añov">
          <option value=16>16</option>
          <option value=17>17</option>
          <option value=18>18</option>
          <option value=19>19</option>
          <option value=20>20</option>
        </select >

        <input type= "text" name="cs" placeholder="Codigo de Seguridad"/>
        <input type= "text" name="Direccion" placeholder="Direccion"/>
          <input type="hidden" name="concepto"/>
        <?php echo $total ?>
        <input type="submit" name="Enviar">Enviar </input>

        </form>



  </body>
</html>
