<?php

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
  $idUsuario = base64_decode($_REQUEST["idsuario"]);
} else {
  $idUsuario = "";
}

if (isset($_REQUEST["password"])) {
  $password = base64_decode($_REQUEST["id_usuario"]);
} else {
  $password = "";
}

if ($accion == "login") {
  try {
    $bd = new BD();
    $sql = "Select us_user,us_pass from usuarios where us_user=? and us_pass=?";
    $parametros = array($idUsuario, $password);
    $campos = $bd->select($sql, $parametros);
    if ($rs = $campos->fetch()) {
      $estado = "ok";
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
