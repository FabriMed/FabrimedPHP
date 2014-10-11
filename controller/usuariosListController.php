<?php

session_start();
require_once '../entities/BD.class.php';
$respuesta = array();
$estado = "";
$mensaje = "";
$campos = array();
$header = array();
$parametros = array();
$sql = "SELECT id_usuario, usua_nombre, usua_apellido, usua_telefono, usua_telefono2, "
        . "usua_email, usua_vigente, usua_imagen FROM usuario where 1=1";

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
          "nombre" => $rs["usua_nombre"],
          "apellido" => $rs["usua_apellido"],
          "telefono" => $rs["usua_telefono"],
          "telefono2" => $rs["usua_telefono2"],
          "email" => $rs["usua_email"],
          "vigente" => $rs["usua_vigente"],
          "imagen" => $rs["usua_imagen"]
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
