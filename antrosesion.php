<?php
  include 'antroconect.php';
  
  /*$correo = filter_input(INPUT_POST, "correo");
  $contra = filter_input(INPUT_POST, "contraseña");
  $contra = md5($contra);*/
  $nombre_usuario = "catdodgson";
  $contra_usuario = "antronic2507";
  $query = "SELECT * FROM alumno WHERE usuario_alum = '".$nombre_usuario."' AND contra_alum = '".$contra_usuario."'";
  $resultado = mysqli_query($conn, $query);
  $cadena = mysqli_fetch_array($resultado);
  if($cadena){
    echo '1';
  }
  else{
    $query1 = "SELECT * FROM admin_prof WHERE usuario_ayp = '".$nombre_usuario."' AND contra_ayp = '".$contra_usuario."'";
    $resultado1 = mysqli_query($conn, $query1);
    $cadena1 = mysqli_fetch_array($resultado1);
    if($cadena1){
        echo '2';
      }
      else{
        echo '3';
          }
  }
  
  mysqli_close($conn);
?>