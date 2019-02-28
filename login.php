<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php'?>
    <h1>LOGIN</h1>
    <span> or <a href="signup.php">SignUp</a></span>
    <form class="" action="index.php" method="post">
      <input type="text" name="email" placeholder="Ingrese su correo">
      <input type="password" name="contraseña" placeholder="Ingrese su contraseña">
      <input type="submit" value="Conectar">
    </form>
  </body>
</html>
