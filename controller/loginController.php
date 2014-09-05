<?php
session_start();
require_once '../entities/BD.class.php';
$respuesta = array();
$estado = "";
$mensaje = "";
$sql = "";
$parametros = array();

if (isset($_REQUEST["accion"])) {
  $accion = base64_decode($_REQUEST["accion"]);
} else {
  $action = "";
}

if (isset($_REQUEST["idUsuario"])) {
  $idUsuario = base64_decode($_REQUEST["idUsuario"]);
} else {
  $idUsuario = "";
}

if (isset($_REQUEST["password"])) {
  $password = base64_decode($_REQUEST["password"]);
} else {
  $password = "";
}

if ($accion == "login") {
  try {
    $bd = new BD();
    $sql = "Select id_usuario, usua_cuenta, usua_contrasena, usua_nombre, usua_apellido, usua_telefono, "
            . "usua_email, usua_vigente from usuario where usua_cuenta=? and usua_contrasena=password(?)";
    $parametros = array($idUsuario, $password);
    $campos = $bd->select($sql, $parametros);
    if ($rs = $campos->fetch()) {
      $estado = "ok";
      $_SESSION['ID_USUARIO']=$rs["id_usuario"];
      $_SESSION["USER"] = $rs["usua_cuenta"];
      $_SESSION["NOMBRE"]     = $rs["usua_nombre"]." ".$rs["usua_apellido"];
      $_SESSION["TELEFONO"]     = $rs["usua_telefono"];
      $_SESSION["EMAIL"]= $rs["usua_email"];
      $_SESSION["VIGENTE"]= $rs["usua_vigente"];
      
    } else {
      $estado = "error";
      $mensaje[] = array("user" => "User y Password incorrectos", "admin" => "");
    }
  } catch (MyException $e) {
    $estado = "error";
    $mensaje = $e->getMensaje();
  }
  $respuesta[] = array("estado" => $estado, "mensaje" => $mensaje);
}

header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Fecha en el pasado
header("Content-type: application/json");
$respuesta = json_encode($respuesta);
echo $respuesta;
