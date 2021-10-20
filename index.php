<?php 

$alert = '';
session_start();
if(!empty($_SESSION['estado']))
{
  header('location: sistema/index.html');
}else{
  
  if(!empty($_POST))
  { 
    include 'conexion.php';
    // $ciudad(RECEPTACULO DE LA CADENA RESULTANTE) = mysqli_real_escape_string($enlace(VARIABLE DONDE ESTA LA CONEXION), $ciudad(VARIABLE A ESCANEAR)); 
    
    $usuario=$_POST['usuario'];
    $clave= $_POST['clave'];  
    $usuario_str = mysqli_real_escape_string($conn,$usuario);
    $clave_str = mysqli_real_escape_string($conn,$clave);
    //echo "     ".$usuario."   ".$clave;
    //echo "     ".$usuario_str."   ".$clave_str;  

    if(!empty($usuario_str) and !empty($clave_str))
    {
      // echo "     ".$usuario_str."   ".$clave_str; exit;

      $query_login = mysqli_query($conn,"SELECT usu_id as id FROM usuarios WHERE usu_usuario = '$usuario_str' AND usu_pass = '$clave_str' AND usu_estado = 1");
      $result = mysqli_num_rows($query_login);

      if($result == 1)
      {
        $id= mysqli_fetch_assoc($query_login);
        
      // echo $id['id'];       
        $_SESSION['estado']=true;
        $_SESSION['id_usuario'] = $id['id'];

        header('location: sistema/index.html');

      }else{
        $alert = 'Usuario o Clave Incorrecta';
        session_destroy();
      }

    }else{
      $alert = 'Error al Ingresar, Caracteres invalidos..';
    }



    mysqli_close($conn);
  }
}



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="style.css" >

    <title>Bienvenido</title>

  </head>

  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form action="" method="POST" class="box">
                        <h1>Ingreso</h1>
                        <p class="alert" style="color: white; font-size: large;"><?php echo $alert; ?> </p>
                        <p class="text-muted"> Por favor, Ingrese su Usuario y Clave!</p>
                        <input type="text" name="usuario" placeholder="Usuario" pattern="[A-Za-z0-9_-]{1,15}" title="No se Pueden utilizar caracteres especiales (! + * < > ? ¿ @ )" required>
                        <input type="password" name="clave" placeholder="Clave" pattern="[A-Za-z0-9_-]{1,15}" title="No se Pueden utilizar caracteres especiales (! + * < > ? ¿ @ )" required> 
                        <a class="forgot text-muted" href="#">Olvido su Contraseña?</a>
                        <input type="submit" name="" value="Ingresar">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js" ></script>


  </body>
</html>