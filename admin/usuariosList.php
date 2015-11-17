3<?php
require_once './secureadmin.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Administración de Fabrimed - Usuarios</title>
    <?php require_once '././includes.php'; ?>
  </head>
  <body id='users'>
    <div id="wrapper">

      <?php require_once 'header.php'; ?>

      <div id="content">
        <div class="menubar fixed">
          <div class="sidebar-toggler visible-xs">
            <i class="ion-navicon"></i>
          </div>

          <div class="page-title"> Usuarios </div>
          <form class="search hidden-xs">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Buscar Usuarios..." name="q">
            <input type="submit">
          </form>
          <a class="new-user btn btn-success pull-right" href="usuariosAdd.php">
            <span>Nuevo Usuario</span>
          </a>
        </div>

        <div class="content-wrapper">
          <div class="row page-controls">
            <div class="col-md-12 filters">
              <div class="links">
                <label>Filter users:</label>
                <a href="#">All users (243)</a>
                <a class="active" href="#">Active (3)</a>
                <a href="#">Suspended (8)</a>
                <a href="#">Prospects</a>
              </div>

              <div class="show-options">
                <div class="dropdown">
                  <a href="#" data-toggle="dropdown" class="button">
                    <span>
                      Sort by
                      <i class="fa fa-unsorted"></i>
                    </span>
                  </a>
                  <ul aria-labelledby="dLabel" role="menu" class="dropdown-menu">
                    <li><a href="#">Name</a></li>
                    <li><a href="#">Signed up</a></li>
                    <li><a href="#">Last seen</a></li>
                    <li><a href="#">Browser</a></li>
                    <li><a href="#">Country</a></li>
                  </ul>
                </div>
                <a class="grid-view active" data-grid=".users-list" href="#"><i class="fa fa-th-list"></i></a>
                <a class="grid-view" data-grid=".users-grid" href="#"><i class="fa fa-th"></i></a>
              </div>
            </div>
          </div>

          <div class="row users-list">
            <div class="col-md-12" >
              <div class="row headers" id="header">
                <!-- <div class="col-sm-2 header select-users">
                                  <input type="checkbox">
                                  <div class="dropdown bulk-actions">
                                    <a href="#" data-toggle="dropdown">
                                      Bulk actions
                                      <span class="total-checked"></span>
                
                                      <i class="fa fa-chevron-down"></i>
                                    </a>
                                    <ul aria-labelledby="dLabel" role="menu" class="dropdown-menu">
                                      <li><a href="#">Add tags</a></li>
                                      <li><a href="#">Delete users</a></li>
                                      <li><a href="#">Edit customers</a></li>
                                      <li><a href="#">Manage permissions</a></li>
                                    </ul>
                                  </div>
                                </div>-->

              </div>

              <!--LISTA DE DATOS-->
              <div id="datos">

              </div>
              <div id="paginador">

              </div>
            </div>
          </div>

          <div class="row users-grid" >
            <div id="datos-grid">
              <div class="user col-sm-3 col-xs-6">
                <a href="#">
                  <img src="resources/images/1-60c47167290e620ea8ef2aa01d40c05e.jpg" alt=""/>
                </a>
                <div class="name">John Smith Stewart</div>
                <div class="email">john.39@gmail.com</div>
              </div>
            </div>



            <div class="pager-wrapper" >
              <div class="col-sm-12">
                <ul class="pager">
                  <li><a href="#">Previous</a></li>
                  <li><a href="#">Next</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="resources/js/listUsuarios.js" type="text/javascript"></script>
  </body>
</html>
