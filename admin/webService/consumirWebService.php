<?php
require_once './nusoap/lib/nusoap.php';
$wsdl="http://localhost:61293/Service1.asmx?WSDL";

$client = new nusoap_client($wsdl,true);

$result=$client->call("listaUsuarios");

$columnas = ceil(count($result,1)/count($result,0))-1;

var_dump($result);

$j=0;
for($i=0; $i < ($columnas-1); $i++){
  $j++;
  if($j==6){
    echo "</br>";
    $j=1;
  }
  echo $result['listaUsuariosResult']['string'][$i]." ";
}

?>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    // put your code here
    ?>
  </body>
</html>
