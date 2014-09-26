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
              <!--LISTA DE DATOS-->
              <div id="datos"/>
              <div id="paginador"/>
              
            <div class="col-md-12" id="datos">
              
              <div class="row headers">
                <div class="col-sm-2 header select-users">
                  <input type="checkbox">
                  <div class="dropdown bulk-actions">
                    <a href="#" data-toggle="dropdown">
                      Acciones
                      <span class="total-checked"></span>

                      <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul aria-labelledby="dLabel" role="menu" class="dropdown-menu">
                      <li><a href="#">Ingresar</a></li>
                      <li><a href="#">Eliminar</a></li>
                      <li><a href="#">Editar</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-5 header hidden-xs">
                  <label><a href="#">Nombre</a></label>
                </div>
                <div class="col-sm-5 header hidden-xs">
                  <label><a href="#">Vigente</a></label>
                </div>
              </div>
              
              <div id="valores">
              
              <div class="row user">
                <div class="col-sm-2 avatar">
                  <input type="checkbox" name="select-user">
                  <img src="../../resources/images/1-60c47167290e620ea8ef2aa01d40c05e.jpg" alt="1">
                </div>
                <div class="col-sm-5">
                  <a class="name" href="/1.1/pages/profile">Autos</a>
                </div>
                <div class="col-sm-5">
                  <div class="name">Sí</div>
                </div>
              </div>
              <div class="row user">
                <div class="col-sm-2 avatar">
                  <input type="checkbox" name="select-user">
                  <img src="../../resources/images/1-60c47167290e620ea8ef2aa01d40c05e.jpg" alt="2">
                </div>
                <div class="col-sm-5">
                  <a class="name" href="/1.1/pages/profile">Motos</a>
                </div>
                <div class="col-sm-5">
                  <div class="email">Sí</div>
                </div>
              </div>
              
              <div class="row pager-wrapper">
                <div class="col-sm-12">
                  <ul class="pager">
                    <li>
                        <a href="#">Anterior</a>
                    </li>
                    <li><a href="#">Siguiente</a></li>
                  </ul>
                </div>
              </div>
             
            </div>
          </div>

          <div class="row users-grid">
            <div class="user col-sm-3 col-xs-6">
              <a href="#">
                <img src="/assets/avatars/2-2937ec0711007ea4731388238d2850e4.jpg" alt="2">
              </a>
              <div class="name">John Smith Stewart</div>
              <div class="name">john.39@gmail.com</div>
            </div>
            <div class="user col-sm-3 col-xs-6">
              <a href="#">
                <img src="/assets/avatars/3-92c3675516dd81ac898a7064ee9636bc.jpg" alt="3">
              </a>
              <div class="name">Richard Moore Stevens</div>
              <div class="name">richard@hotmail.com</div>
            </div>
            
            <div class="user col-sm-3 col-xs-6">
              <a href="#">
                <img src="../../resources/images/1-60c47167290e620ea8ef2aa01d40c05e.jpg" alt="1">
              </a>
              <div class="name">Autos</div>
              <div class="email">Si</div>
            </div>
            <div class="user col-sm-3 col-xs-6">
              <a href="#">
                <img src="../../resources/images/1-60c47167290e620ea8ef2aa01d40c05e.jpg" alt="3">
              </a>
              <div class="name">Motos</div>
              <div class="email">Si</div>
            </div>
          </div>
            </div>
        </div>
      </div>
    </div>
    
<!--     <script src="../../resources/js/UI/Categoria/listCategoria.js" type="text/javascript"></script>-->
  </body>
</html>