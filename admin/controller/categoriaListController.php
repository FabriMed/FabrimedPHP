<?php
session_start();
require_once '../entities/BD.class.php';
$respuesta = array();
$estado = "";
$mensaje = "";
$campos = array();
$header = array();
$parametros = array();
$sql = "SELECT id_categoria, cate_nombre, cate_vigente, cate_imagen "
       ." FROM categoria WHERE 1";

if ($_REQUEST["accion"]) {
  $accion = $_REQUEST["accion"];
} else {
  $accion = "";
}

if ($accion == "listar") {
  try {
    $bd = new BD();
    $res = $bd->select($sql, $parametros);
    if ($rs  = $res->fetch()) {
      $estado = "ok";
      $campos[] = array(
          "id_categoria" => $rs["id_categoria"],
          "nombre" => utf8_encode($rs["cate_nombre"]),
          "vigente" => $rs["cate_vigente"],
          "imagen" => $rs["cate_imagen"]
      );
      $header=array("","Nombre Categoria","Vigencia");
    }

  } catch (Exception $e) {
    $estado = "error";
    $mensaje = $e->getMensaje();
  }
  $respuesta[] = array("estado" => $estado, "mensaje" => $mensaje, "campos" => $campos, "header" => $header);
 }
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Fecha en el pasado
header("Content-type: application/json");
$respuesta = json_encode($respuesta);

echo $respuesta;

