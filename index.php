<?php
session_start();
require_once './secureadmin.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Administración de Fabrimed</title>
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
          <div class="sidebar-toggler visible-xs" chupalo>
            <i class="ion-navicon"></i>
          </div>

          <div class="page-title">
            Inicio
            <a href="http://wrapbootstrap.com/preview/WB0PH0GBL">Tema </a>
          </div>
        </div>
      </div>  
    </div>
  </body>
</html>
