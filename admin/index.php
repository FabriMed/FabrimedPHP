<?php
session_start();
require_once './secureadmin.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Administración de Tu Ingenio</title>
    <?php require_once './includes.php'; ?>
    <script src="resources/js/default.js" type="text/javascript"></script>
    <script type="text/javascript">

    </script>
  </head>
  <body id="dashboard">
    <div id="wrapper">

      <?php require_once 'header.php'; ?>

      <div id="content">
        <div class="menubar">
          <div class="sidebar-toggler visible-xs" chupaloooooooooooo>
            <i class="ion-navicon"></i>
          </div>

          <div class="page-title">
            <b>Inicio : <font style="color:blue">Bienvenidos al administrador de sistema TuIngenio.</font></b>
            
          </div>
        </div>
      </div>  
    </div>
  </body>
</html>
