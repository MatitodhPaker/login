<?php
  require_once "conexion.php";
  $obj=new conectar();
  $conexion=$obj->conexion();
  $usuario=$_POST['usuario'];
  $password=sha1($_POST['password']);
  $sql="INSERT INTO t_usuarios(id_rol_usuario,usuario,password) VALUES (2,'$usuario','$password')";
  $respuesta=mysqli_query($conexion,$sql);
  if ($respuesta) {
    header("location:index.php");
  }else{
    echo "fallo al aregar";
  }
?>