<?php
require_once './secureadmin.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Administración de Fabrimed - Usuarios</title>
    <?php require_once './includes.php'; ?>
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
            <div class="col-md-12" id="datos">
              <div class="row headers">
                <div class="col-sm-2 header select-users">
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
                </div>
                <div class="col-sm-3 header hidden-xs">
                  <label><a href="#">Name</a></label>
                </div>
                <div class="col-sm-3 header hidden-xs">
                  <label><a href="#">Email</a></label>
                </div>
                <div class="col-sm-2 header hidden-xs">
                  <label><a href="#">Total spent</a></label>
                </div>
                <div class="col-sm-2 header hidden-xs">
                  <label class="text-right"><a href="#">Signed up</a></label>
                </div>
              </div>
              
              <div class="row user">
                <div class="col-sm-2 avatar">
                  <input type="checkbox" name="select-user">
                  <img src="/assets/avatars/2-2937ec0711007ea4731388238d2850e4.jpg" alt="2">
                </div>
                <div class="col-sm-3">
                  <a class="name" href="/1.1/pages/profile">John Smith Stewart</a>
                </div>
                <div class="col-sm-3">
                  <div class="email">john.39@gmail.com</div>
                </div>
                <div class="col-sm-2">
                  <div class="total-spent">
                    $9,400.00
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="created-at">
                    Feb 27, 2014
                  </div>
                </div>
              </div>
              
              <div class="row user">
                <div class="col-sm-2 avatar">
                  <input type="checkbox" name="select-user">
                  <img src="/assets/avatars/3-92c3675516dd81ac898a7064ee9636bc.jpg" alt="3">
                </div>
                <div class="col-sm-3">
                  <a class="name" href="/1.1/pages/profile">Richard Moore Stevens</a>
                </div>
                <div class="col-sm-3">
                  <div class="email">richard@hotmail.com</div>
                </div>
                <div class="col-sm-2">
                  <div class="total-spent">
                    $1,200.00
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="created-at">
                    Feb 25, 2014
                  </div>
                </div>
              </div>
              <div class="row user">
                <div class="col-sm-2 avatar">
                  <input type="checkbox" name="select-user">
                  <img src="/assets/avatars/4-b1e8e285c7135bbb2d0b3ac333037713.jpg" alt="4">
                </div>
                <div class="col-sm-3">
                  <a class="name" href="/1.1/pages/profile">
                    Karen Jessica Lawrence
                    <span class="label label-info">New user</span>
                  </a>
                </div>
                <div class="col-sm-3">
                  <div class="email">karen@gmail.com</div>
                </div>
                <div class="col-sm-2">
                  <div class="total-spent">
                    $400.00
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="created-at">
                    Feb 25, 2014
                  </div>
                </div>
              </div>
              <div class="row user">
                <div class="col-sm-2 avatar">
                  <input type="checkbox" name="select-user">
                  <img src="/assets/avatars/1-60c47167290e620ea8ef2aa01d40c05e.jpg" alt="1">
                </div>
                <div class="col-sm-3">
                  <a class="name" href="/1.1/pages/profile">John Smith Stewart</a>
                </div>
                <div class="col-sm-3">
                  <div class="email">john.smith@gmail.com</div>
                </div>
                <div class="col-sm-2">
                  <div class="total-spent">
                    $3,150.00
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="created-at">
                    Feb 22, 2014
                  </div>
                </div>
              </div>
              <div class="row user">
                <div class="col-sm-2 avatar">
                  <input type="checkbox" name="select-user">
                  <img src="/assets/avatars/5-f81555f2bb8bd9fb40d8df51a65f515c.jpg" alt="5">
                </div>
                <div class="col-sm-3">
                  <a class="name" href="/1.1/pages/profile">
                    Richard Moore
                    <span class="label label-warning">Order pending</span>
                  </a>
                </div>
                <div class="col-sm-3">
                  <div class="email">rick98@gmail.com</div>
                </div>
                <div class="col-sm-2">
                  <div class="total-spent">
                    $89.00
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="created-at">
                    Feb 17, 2014
                  </div>
                </div>
              </div>
              <div class="row user">
                <div class="col-sm-2 avatar">
                  <input type="checkbox" name="select-user">
                  <img src="/assets/avatars/6-fe6fbd5de7355525845e2b52f7bdcc9f.jpg" alt="6">
                </div>
                <div class="col-sm-3">
                  <a class="name" href="/1.1/pages/profile">Karen Jessica Lawrence</a>
                </div>
                <div class="col-sm-3">
                  <div class="email">lawrence@gmail.com</div>
                </div>
                <div class="col-sm-2">
                  <div class="total-spent">
                    $399.00
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="created-at">
                    Feb 14, 2014
                  </div>
                </div>
              </div>
              <div class="row user">
                <div class="col-sm-2 avatar">
                  <input type="checkbox" name="select-user">
                  <img src="/assets/avatars/7-b553f4126f8fb9c86a5b59336f2cb9de.jpg" alt="7">
                </div>
                <div class="col-sm-3">
                  <a class="name" href="/1.1/pages/profile">Eric McKellen</a>
                </div>
                <div class="col-sm-3">
                  <div class="email">eric@gmail.com</div>
                </div>
                <div class="col-sm-2">
                  <div class="total-spent">
                    $5,900.00
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="created-at">
                    Feb 11, 2014
                  </div>
                </div>
              </div>
              <div class="row user">
                <div class="col-sm-2 avatar">
                  <input type="checkbox" name="select-user">
                  <img src="/assets/avatars/8-1b90501554fc255a8a00e07c01c7b196.jpg" alt="8">
                </div>
                <div class="col-sm-3">
                  <a class="name" href="/1.1/pages/profile">George Lucas Francois</a>
                </div>
                <div class="col-sm-3">
                  <div class="email">george@gmail.com</div>
                </div>
                <div class="col-sm-2">
                  <div class="total-spent">
                    $280.00
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="created-at">
                    Feb 09, 2014
                  </div>
                </div>
              </div>
              <div class="row user">
                <div class="col-sm-2 avatar">
                  <input type="checkbox" name="select-user">
                  <img src="/assets/avatars/9-e7c0953061ebca7af350a6d553d661ba.jpg" alt="9">
                </div>
                <div class="col-sm-3">
                  <a class="name" href="/1.1/pages/profile">Maria Harrison</a>
                </div>
                <div class="col-sm-3">
                  <div class="email">maria.01@gmail.com</div>
                </div>
                <div class="col-sm-2">
                  <div class="total-spent">
                    $19,000.00
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="created-at">
                    Feb 09, 2014
                  </div>
                </div>
              </div>
              <div class="row user">
                <div class="col-sm-2 avatar">
                  <input type="checkbox" name="select-user">
                  <img src="/assets/avatars/10-dfab47b3ebee731d5dc45ace37acbefd.jpg" alt="10">
                </div>
                <div class="col-sm-3">
                  <a class="name" href="/1.1/pages/profile">
                    Butch Robertson
                    <span class="label label-info">New user</span>
                  </a>
                </div>
                <div class="col-sm-3">
                  <div class="email">butch@gmail.com</div>
                </div>
                <div class="col-sm-2">
                  <div class="total-spent">
                    $8,900.00
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="created-at">
                    Feb 03, 2014
                  </div>
                </div>
              </div>
              <div class="row user">
                <div class="col-sm-2 avatar">
                  <input type="checkbox" name="select-user">
                  <img src="/assets/avatars/11-5e3fb59dc737c93a37f0c7e55156e27c.jpg" alt="11">
                </div>
                <div class="col-sm-3">
                  <a class="name" href="/1.1/pages/profile">Richard Dawkins</a>
                </div>
                <div class="col-sm-3">
                  <div class="email">dawkins@gmail.com</div>
                </div>
                <div class="col-sm-2">
                  <div class="total-spent">
                    $2,600.00
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="created-at">
                    Feb 01, 2014
                  </div>
                </div>
              </div>
              <div class="row user">
                <div class="col-sm-2 avatar">
                  <input type="checkbox" name="select-user">
                  <img src="/assets/avatars/12-73c93cf90fa2fa2609ab6822797cec85.jpg" alt="12">
                </div>
                <div class="col-sm-3">
                  <a class="name" href="/1.1/pages/profile">Andrea Kotrevzka</a>
                </div>
                <div class="col-sm-3">
                  <div class="email">andrea@gmail.com</div>
                </div>
                <div class="col-sm-2">
                  <div class="total-spent">
                    $799.00
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="created-at">
                    Jan 28, 2014
                  </div>
                </div>
              </div>
              <div class="row user">
                <div class="col-sm-2 avatar">
                  <input type="checkbox" name="select-user">
                  <img src="/assets/avatars/13-fae20c117fcdf91ef91522c37669ddf6.jpg" alt="13">
                </div>
                <div class="col-sm-3">
                  <a class="name" href="/1.1/pages/profile">Robert Diaz</a>
                </div>
                <div class="col-sm-3">
                  <div class="email">robert.diaz@gmail.com</div>
                </div>
                <div class="col-sm-2">
                  <div class="total-spent">
                    $900.00
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="created-at">
                    Jan 27, 2014
                  </div>
                </div>
              </div>

              <div class="row pager-wrapper">
                <div class="col-sm-12">
                  <ul class="pager">
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">Next</a></li>
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
              <div class="email">john.39@gmail.com</div>
            </div>
            <div class="user col-sm-3 col-xs-6">
              <a href="#">
                <img src="/assets/avatars/3-92c3675516dd81ac898a7064ee9636bc.jpg" alt="3">
              </a>
              <div class="name">Richard Moore Stevens</div>
              <div class="email">richard@hotmail.com</div>
            </div>
            <div class="user col-sm-3 col-xs-6">
              <a href="#">
                <img src="/assets/avatars/4-b1e8e285c7135bbb2d0b3ac333037713.jpg" alt="4">
              </a>
              <div class="name">Karen Jessica Lawrence</div>
              <div class="email">karen@gmail.com</div>
            </div>
            <div class="user col-sm-3 col-xs-6">
              <a href="#">
                <img src="/assets/avatars/1-60c47167290e620ea8ef2aa01d40c05e.jpg" alt="1">
              </a>
              <div class="name">John Smith Stewart</div>
              <div class="email">john.smith@gmail.com</div>
            </div>
            <div class="user col-sm-3 col-xs-6">
              <a href="#">
                <img src="/assets/avatars/5-f81555f2bb8bd9fb40d8df51a65f515c.jpg" alt="5">
              </a>
              <div class="name">Richard Moore Stevens</div>
              <div class="email">rick98@gmail.com</div>
            </div>
            <div class="user col-sm-3 col-xs-6">
              <a href="#">
                <img src="/assets/avatars/6-fe6fbd5de7355525845e2b52f7bdcc9f.jpg" alt="6">
              </a>
              <div class="name">Karen Jessica Lawrence</div>
              <div class="email">lawrence@gmail.com</div>
            </div>
            <div class="user col-sm-3 col-xs-6">
              <a href="#">
                <img src="/assets/avatars/7-b553f4126f8fb9c86a5b59336f2cb9de.jpg" alt="7">
              </a>
              <div class="name">Eric McKellen</div>
              <div class="email">eric@gmail.com</div>
            </div>
            <div class="user col-sm-3 col-xs-6">
              <a href="#">
                <img src="/assets/avatars/8-1b90501554fc255a8a00e07c01c7b196.jpg" alt="8">
              </a>
              <div class="name">George Lucas Francois</div>
              <div class="email">george@gmail.com</div>
            </div>
            <div class="user col-sm-3 col-xs-6">
              <a href="#">
                <img src="/assets/avatars/9-e7c0953061ebca7af350a6d553d661ba.jpg" alt="9">
              </a>
              <div class="name">Maria Harrison</div>
              <div class="email">maria.01@gmail.com</div>
            </div>
            <div class="user col-sm-3 col-xs-6">
              <a href="#">
                <img src="/assets/avatars/10-dfab47b3ebee731d5dc45ace37acbefd.jpg" alt="10">
              </a>
              <div class="name">Richard Dawkins</div>
              <div class="email">dawkins@gmail.com</div>
            </div>
            <div class="user col-sm-3 col-xs-6">
              <a href="#">
                <img src="/assets/avatars/11-5e3fb59dc737c93a37f0c7e55156e27c.jpg" alt="11">
              </a>
              <div class="name">Andrea Kotrevzka</div>
              <div class="email">andrea@gmail.com</div>
            </div>
            <div class="user col-sm-3 col-xs-6">
              <a href="#">
                <img src="/assets/avatars/12-73c93cf90fa2fa2609ab6822797cec85.jpg" alt="12">
              </a>
              <div class="name">Robert Diaz</div>
              <div class="email">robert.diaz@gmail.com</div>
            </div>

            <div class="pager-wrapper">
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
