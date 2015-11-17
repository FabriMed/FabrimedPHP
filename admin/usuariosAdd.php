<?php
require_once './secureadmin.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Administración de Fabrimed - Usuarios</title>
    <?php require_once './includes.php'; ?>
    <script type="text/javascript">
      $(document).ready(function() {
          $("#form").length && ($("#frmUser").validate({
            rules: {
              "txtUsuario": {
                required: !0
              },
              "txtContrasena": {
                required: !0
              },
              "txtEmail": {
                required: !0,
                email: !0
              },
              "txtNombre": {
                required: !0
              },
              "txtApellido": {
                required: !0
              },
              "txtTelefono":{
                required: !0
              }
              
            },
            highlight: function(t) {
              $(t).closest(".form-group").removeClass("success").addClass("error")
            },
            success: function(t) {
              t.addClass("valid").closest(".form-group").removeClass("error").addClass("success")
            }
          }), 
          $(".txtTelefono").mask("(999) 9999-9999"), 
          $(".txtTelefono2").mask("(999) 9999-9999"));
        
      });


    </script>
  </head>
  <body id="form">
    <div id="wrapper">
      <?php require_once './header.php'; ?>
      <div id="content">
        <div class="menubar">
          <div class="sidebar-toggler visible-xs">
            <i class="ion-navicon"></i>
          </div>
          <div class="page-title"> Usuarios </div>
        </div>
        <div class="content-wrapper">
          <form id="frmUser" class="form-horizontal" role="form" action="#" method="post" novalidate="novalidate">
            <div class="form-group">
              <label class="col-sm-2 col-md-2 control-label">Nombre de Usuario</label>
              <div class="col-sm-10 col-md-8">
                <input class="form-control" type="text" name="txtUsuario" id="txtUsuario">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-md-2 control-label">Contraseña</label>
              <div class="col-sm-10 col-md-8">
                <input class="form-control" type="text" name="txtContrasena" id="txtContrasena">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-md-2 control-label">Nombres</label>
              <div class="col-sm-10 col-md-8">
                <input class="form-control" type="text" name="txtNombre" id="txtNombre">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-md-2 control-label">Apellidos</label>
              <div class="col-sm-10 col-md-8">
                <input class="form-control" type="text" name="txtApellido" id="txtApellido">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-md-2 control-label">Teléfono</label>
              <div class="col-sm-10 col-md-8">
                <input class="form-control txtTelefono" type="text" name="txtTelefono" id="txtTelefono">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-md-2 control-label">Telefóno 2</label>
              <div class="col-sm-10 col-md-8">
                <input class="form-control txtTelefono2" type="text" name="txtTelefono2" id="txtTelefono2">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-md-2 control-label">Email</label>
              <div class="col-sm-10 col-md-8">
                <input class="form-control" type="text" name="txtEmail" id="txtEmail">
              </div>
            </div>
            <div class="form-group form-actions">
              <div class="col-sm-offset-2 col-sm-10">
                <a class="btn btn-default" href="usuariosList.php">Cancel</a>
                <button class="btn btn-success" type="submit">Save customer</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
