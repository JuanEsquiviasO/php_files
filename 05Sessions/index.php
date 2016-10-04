<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sessions with PHP</title>
  <style>
    form {
      margin: 0 auto;
      text-align: center;
      width: 400px;
      font-family: sans-serif;
    }

    span {
      color: #F00;
      font-size: 2em;
    }

  </style>
</head>
<body>
  <form name="autentification_frm" action="control.php" method="post" enctype="application/x-www-form-urlencoded">
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    if ($_GET["error"]=="si") {
      echo "<span>Verifica tus Datos</span>";
    }else{
      echo "Introduce tus datos";
    }
    ?>
    <br><br>
    Usuario: <input type="text" name="usuario_txt"><br><br>
    Password: <input type="password" name="password_txt"><br><br>
    <input type="submit" name="entrar_btn" value="Entrar">
  </form>
</body>
</html>