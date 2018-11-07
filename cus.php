<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest')
{
  require_once 'conexion.php';
  $mysqli -> set_charset('utf8');
  $Usua = $mysqli -> real_escape_string($_POST['Usuario']);
  $Contra = $mysqli -> real_escape_string($_POST['Contraseña']);
  if ($consulta = $mysqli -> prepare("select * from usuarios where usuario = ? and contraseña = ?"))
  {
      $consulta -> bind_param('is',$Usua,$Contra);
      $consulta -> execute();
      $resultado = $consulta -> get_result();
      if ($resultado -> num_rows == 1 )
      {
        $datos  = $resultado->fetch_assoc();
        session_start();
        $_SESSION['inicio'] = $datos;
        echo json_encode(array('error'=>false,'usu'=>$datos['usuario']));
      }
      else
      {
       echo json_encode(array('error'=>true));
      }
  }
}
 ?>