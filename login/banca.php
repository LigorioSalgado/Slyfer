<?php
session_start();
require_once('dbconfig.php');
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/primary.css">
  <link rel="stylesheet" type="text/css" href="../css/wrapper.css">
  <link rel="stylesheet" type="text/css" href="../css/home.css">
  <link rel="stylesheet" href="../css/animate.min.css">
  <link rel="stylesheet" href="../css/animation-handler.css">
  <link rel="stylesheet" href="../res/font-awesome/css/font-awesome.min.css">

  <script src="../js/section-handler.js"></script>

</head>

<body>

  <div class="img-circle" style="margin-left:20px;">

  <div class="flex-wrap white-bg text-blue">
      <div class="row center">
        <div class="cell center">
          <h1>Cuenta.</h1>
            <img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture">
          </div>
          <br>
          <span id="name_user"><?php echo $_SESSION['FULLNAME']; ?></span>
          <br/>
        </div>
<?php  $fuid=$_SESSION['FBID'];
$check = mysqli_query($link,"select * from users where FBID='$fuid'");  ?>
  <div class="white-bg wrap-full text-blue center" id="content">
    <div class="row">

        <?php $row=mysqli_fetch_array($check,MYSQLI_ASSOC);
        $id = $row["id"];
        $ch = mysqli_query($link,"select * from transac where cliente='$id'");
      ?>
  <table class="table">
<thead>
  <tr>
    <th colspan="2">
      Últimas transacciones.
    </th>
  </tr>
   <tr>
       <th>Concepto</th>
       <th>Importe</th>
   </tr>
</thead>
<tbody>
<?php
$saldo;
while ($row = mysqli_fetch_array($ch, MYSQLI_ASSOC))
{
  $saldo = $saldo + $row['importe'];
?>

   <tr>
       <td><?php echo $row['Concepto']; ?></td>
       <td>$ <?php echo $row['importe']; ?></td>
   </tr>

<?php } ?>

<div class="cell neutral-soft-bg">
  <h1>Saldo en tu cuenta</h1>
  <h2 id="saldo">$<?php echo $saldo; ?></h2>
</div>
      <div class="cell neutral-soft-bg">
        <h1>Solicitar Crédito</h1>
        <button class="btn btn-md-pink" onclick="credit()"><span>Solcita Ahora</span></button>
      </div>

    </div>
</body>
</html>
