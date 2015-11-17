<?php

session_start();
require_once '../entities/BD.class.php';
$respuesta = array();
$estado = "";
$mensaje = "";
$campos = array();
$header = array();
$parametros = array();
$sql = "SELECT us_apellido, us_email, us_esvigente, us_nombre, us_password, us_telefono, us_username, id_usuario FROM usuarios where 1=1";

if ($_REQUEST["accion"]) {
  $accion = $_REQUEST["accion"];
} else {
  $accion = "";
}

if ($accion == "listar") {
  print('entre');
  try {
    $bd = new BD();
    $res = $bd->select($sql, $parametros);
    if ($rs = $res->fetch()) {
      $estado = "ok";
      $campos[] = array(
          "id_usuario" => $rs["id_usuario"],
          "nombre" => $rs["us_nombre"],
          "apellido" => $rs["us_apellido"],
          "telefono" => $rs["us_telefono"],
          "email" => $rs["us_email"],
          "vigente" => $rs["us_vigente"],
          "imagen" => $rs["us_imagen"]
      );
      $header=array("","Nombres","Email","Teléfono","Telefono 2","Vigente");
    }
  } catch (Exception $e) {
    $estado = "error";
    $mensaje = $e->getMensaje();
  }
  $respuesta[] = array("estado" => $estado, "mensaje" => $mensaje, "campos" => $campos, "header"=>$header);
}

header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Fecha en el pasado
header("Content-type: application/json");
$respuesta = json_encode($respuesta);
echo $respuesta;
