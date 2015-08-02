<?php
session_start();
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Login with Facebook</title>
    <link rel="stylesheet" type="text/css" href="../css/primary.css">
    <link rel="stylesheet" type="text/css" href="../css/wrapper.css">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/cuenta.css">

    <link rel="stylesheet" href="res/font-awesome/css/font-awesome.min.css">
<script href="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
<script src="post.js"></script>

 </head>
  <body ng-app='angular_post_demo' ng-controller='postfile'>
  <?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->
<div class="container">
<div class="hero-unit">
  <h1>Hola <?php echo $_SESSION['FULLNAME']; ?></h1>
  <p>Bienvenido a  FHB </p>
  </div>



  <div class="flex-wrap white-bg text-blue">
      <div class="row center">
        <div class="cell center">
          <h1>Validar datos.</h1>
          <div class="img-circle" style="margin-left:20px;">
            <img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture">
          </div>
          <br>
          <span id="name_user"><?php echo $_SESSION['FULLNAME']; ?></span>
          <br/>
          <span id="tel_user">56581111</span>
          <br/>
          <span id="mail_user"><?php echo $_SESSION['EMAIL']; ?></span>
        </div>



        <form id="subirImg" name="subirImg" enctype="multipart/form-data" method="post" action="upload.php">
        <label for="imagen">Por favor sube una imagen de  tu IFE :</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
        <input type="file" name="imagen" id="imagen" />
        <input type="submit" name="subirBtn" id="subirBtn" value="Subir imagen" />
        </form>


</ul></div></div>
    <?php else: ?>     <!-- Before login -->
<div class="container">
<h1>Login with Facebook</h1>
           Not Connected
<div>
      <a href="fbconfig.php">Login with Facebook</a></div>
	 <div> <a href="http://www.krizna.com/general/login-with-facebook-using-php/"  title="Login with facebook">View Post</a>
	  </div>
      </div>
    <?php endif ?>
  </body>
</html>
