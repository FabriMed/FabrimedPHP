<?php

if (!isset($_SESSION['ID_USUARIO'])) {
  session_start();
}
header("Expires: Thu, 01 Jan 2004 00:00:01 GMT");              // Fecha en el pasado
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // Siempre modificado
header("Cache-Control: no-cache, must-revalidate");            // HTTP/1.1
header("Pragma: no-cache");

if ((!isset($_SESSION['ID_USUARIO']))) {
  $archivo = "login.php";
  $i = 0;
  while (!file_exists($archivo)) {
    $i = $i + 1;
    $archivo = "../" . $archivo;
    if ($i > 5) {
      die("Error de Aplicaci�n Interna no se puede encontrar archivo de seguridad.");
      exit;
    }
  }

  header("location: $archivo");
  exit;
} else {
  require_once './entities/BD.class.php';
  $bd = new BD();
  $sql = "select id_usuario from usuario where id_usuario=? ";
  $parametros = array($_SESSION["ID_USUARIO"]);
  $campos = $bd->ejecutar($sql, $parametros);
  if (!$rs = $campos->fetch()) {
    $archivo = "login.php";
    header("location: $archivo");
  }
}
?>
