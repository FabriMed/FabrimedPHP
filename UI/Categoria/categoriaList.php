<?php
require_once '../../secureadmin.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Administración de Fabrimed - Categorias</title>
    <?php require_once '../includesMoreLevel.php'; ?>
  </head>
  <body id='users'>
    <div id="wrapper">
    <?php require_once '../../header.php'; ?>
      <div id="content">
        <div class="menubar fixed">
          <div class="sidebar-toggler visible-xs">
            <i class="ion-navicon"></i>
          </div>

          <div class="page-title" style="padding-right: 15px;"> Categorias </div>
          <form class="search hidden-xs">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Buscar Categorias..." name="q">
            <input type="submit">
          </form>
          <a class="new-user btn btn-success pull-right"  href="categoriaAdd.php">
            <span>Nueva Categoria</span>
          </a>
        </div>

        <div class="content-wrapper">
          
          <div class="row page-controls">
            <div class="col-md-12 filters">
              <div class="links">
                <label>Filtro Categoria:</label>
                <a href="#">Todos (2)</a>
                <a class="active" href="#">Activos (2)</a>
                <a href="#">Inactivos (0)</a>
              </div>

              <div class="show-options">
                <div class="dropdown">
                  <a href="#" data-toggle="dropdown" class="button">
                    <span>
                      Ordenar Por
                      <i class="fa fa-unsorted"></i>
                    </span>
                  </a>
                  <ul aria-labelledby="dLabel" role="menu" class="dropdown-menu">
                    <li><a href="#">Nombre</a></li>
                    <li><a href="#">Vigencia</a></li>
                  </ul>
                </div>
                <a class="grid-view active" data-grid=".users-list" href="#"><i class="fa fa-th-list"></i></a>
                <a class="grid-view" data-grid=".users-grid" href="#"><i class="fa fa-th"></i></a>
              </div>
            </div>
          </div>

          <div class="row users-list">
            <div class="col-md-12" >
              <div class="row headers" id="header"/>
              <div id="datos"/>
              <div id="paginador"/>
            </div>
          </div>

          <div class="row users-grid" >
              <div id="datos-grid"/>
          </div>
    </div>
    
     <script src="../../resources/js/UI/Categoria/listCategoria.js" type="text/javascript"></script>
  </body>
</html>