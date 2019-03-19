<?php


  $alert = '';

if(!empty($_POST))
{

if(empty($_POST['usuario']) || empty($_POST['clave']))
{
  $alert = "Ingresar usuario y clave";

}

  else
  {
    include "funciones/conexion_sql_server.php";
    $conexion = db_conectar();
    session_start();

    $user = $_POST['usuario'];
    $pass = $_POST['clave'];


    $sql = "select * from usuario where usuario = '$user' and clave = '$pass' ";

    $sql = ejecutar_query($sql,$conexion);
    $sql = traer_fila($sql);
    

    if($sql > 0)
    {
      //$resultado = traer_fila($sql);
      //echo $row['codigo_datos'];

      $row = mssql_fetch_array($sql);
      
      $_SESSION['active'] = true;
      $_SESSION['idusuario'] = $row['codigo_usuario'];
      $_SESSION['iddatos'] = $row['codigo_datos'];
      $_SESSION['rol'] = $row['codigo_tipo_usuario'];
      $_SESSION['usuario'] = $row['usuario'];

      header("location: /Pagweb2/Pagweb2");
    }

    else
    {
      $alert = "Usuario o clave incorrectos";
      session_destroy();

    }

  }

}

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
      <link rel="stylesheet" href="css/style.css">
      <style type="text/css">
      .login-page .form .login-form .message a strong {
	font-size: 16px;
}
      </style>
</head>

<body>
  <div class="login-page">
  <img src=" " width="362" height="107">
  <div class="form">
    <form method="post" action="" enctype="application/x-www-form-urlencoded" class="login-form">
      <input type="text" name="usuario" id="usuario" placeholder="Usuario"/>
      <input type="password" name="clave" id="clave" placeholder="Password"/>
      <button>iniciar</button>
      
    <p><font color="#FF0000" size="3" face="Arial, Helvetica, sans-serif">
        
      <div class = "alert"> <?php echo isset($alert) ? $alert : '';?> </div></font> </p>

     <!-- <p class="message">¿Aun no eres usuario? <a href="registrarme.php"><strong>Registrarme</strong>&nbsp;</a></p> -->
    </form>
  </div> 
</div>


</body>
</html>