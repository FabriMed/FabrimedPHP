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
    $sql = "Select id_usuario, "
            . "ca_username, "
            . "ca_password, "
            . "ca_nombre, "
            . "ca_apellido, "
            . "ca_telefono, "
            . "ca_email, "
            . "ca_esvigente "
            . "from usuarios "
            . "where ca_username='".$idUsuario."' and ca_password=password('".$password."')";
    $parametros = array();
    $campos = $bd->select($sql, $parametros);
    if ($rs = $campos->fetch()) {
      $estado = "ok";
      $_SESSION['ID_USUARIO']=$rs["id_usuario"];
      $_SESSION["CA_USERNAME"] = $rs["ca_username"];
      $_SESSION["CA_NOMBRE"]     = $rs["ca_nombre"]." ".$rs["ca_apellido"];
      $_SESSION["CA_TELEFONO"]     = $rs["ca_telefono"];
      $_SESSION["CA_EMAIL"]= $rs["ca_email"];
      $_SESSION["CA_ESVIGENTE"]= $rs["ca_esvigente"];
      
    } else {
      $estado = "error";
      $mensaje[] = array("user" => "Usuario y Contraseña incorrectos", "admin" => "","sql" => $sql);
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
