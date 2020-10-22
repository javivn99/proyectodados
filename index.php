<?php
session_start();

if(isset($_REQUEST['submit'])){

  htmlspecialchars($email=$_REQUEST['email']);

$_SESSION['email']=$_REQUEST['email'];
htmlspecialchars($pass=$_REQUEST['password']);

if ($email=="juan@gmail.com" && $pass="juan"){
    header ('Location:menu/menu.php'); //redirige a otra pagina
}
}
     else {
      echo '

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="index.css" rel="stylesheet" type="text/css">
</head>

<body>
<h2>Inicio de sesion</h2>

<form action="menu/menu.php" method="post" name="form">

  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Introduce tu email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Introduce tu contraseña" name="password" required>
        
    <button type="submit">Login</button>
  </div>

</form>

</body>
</html>

';
      
    }




?>