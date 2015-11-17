<?php

require_once './MyException.class.php';
require_once './Configuracion.class.php';
require_once './BD.class.php';



try {
  $bd = new BD();
} catch (MyException $e) {
  echo "mensaje" . $e->getMessage() . "<br>";
  echo "codigo" . $e->getCode() . "<br>";
  echo "archivo" . $e->getFile() . "<br>Mensaje<br>";
  print_r($e->getMensaje());
  echo "<br>entro1 ";
} catch (Exception $ex) {
  echo $ex->getMessage();
  echo $ex->getCode();
  echo $ex->getFile();
  echo "entro12";
}


