<style>
  body { font-size: 140%; }
</style>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Administración de Fabrimed - Categorias</title>
    <?php require_once '../includesMoreLevel.php'; ?>
  </head>
  <body>
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Nombre</th>
                  <th>Vigencia</th>
              </tr>
          </thead>

          <tfoot>
              <tr>
                  <th>Nombre</th>
                  <th>Vigencia</th>
              </tr>
          </tfoot>

<!--          <tbody>
              <tr>
                  <td>Tiger Nixon</td>
              </tr>
              <tr>
                  <td>Tiger Nixon</td>
              </tr>
              <tr>
                  <td>Tiger Nixon</td>
              </tr>
          </tbody>-->
      </table>
  </body>
</html>


<script>
  
  

  
  
    $(document).ready(function() {
//      $('#example').dataTable( {
//          ajaxSource: "../../controller/categoriaListController.php?accion=listar",     
//          type : "json",
//          "data": null,
//          "defaultContent": "Click to edit"
//      } );

      $.ajax({
        url: "../../controller/categoriaListController.php",
        //url: "../..//controller/usuariosListController.php",
        data: {'accion': 'listar'},
        dataType : 'json',
        success: function(data, textStatus, jqXHR) {
          window.alert("success");
          console.info(data);
          console.info(textStatus);
          console.info(jqXHR);

          if (data[0].estado === "ok") {

//            editor = new $.fn.dataTable.Editor( {
//            ajax: "../../controller/categoriaListController.php?accion=listar",
//            table: "#example",
//            fields: [ {
//                    label: "Nombre",
//                    name: "campos.nombre"
//                }, {
//                    label: "Vigente",
//                    name: "campos.vigente"
//                }
//            ]
//        } );
            if (data.length > 0) {
               $.each(data[0].campos, function(key, value) {
                  if($.isNumeric(key))
                  {
                    var row = $("<tr />");
                    $("<td />").text(value.nombre).appendTo(row);
                    $("<td />").text(value.vigente).appendTo(row);
                    row.appendTo('table');
                  }
               });
            }

            var table = $('#example').DataTable({
              "bJQuery" : true, 
              "sPaginationType": "full_numbers"
            });

//            var tableTools = new $.fn.dataTable.TableTools( table, {
//            sRowSelect: "os",
//            aButtons: [
//                { sExtends: "editor_create", editor: editor },
//                { sExtends: "editor_edit",   editor: editor },
//                { sExtends: "editor_remove", editor: editor }
//            ]
//            });
//            $( tableTools.fnContainer() ).appendTo( '#example_wrapper .col-xs-6:eq(0)' );
              }
            },
        error: function(jqXHR, textStatus, errorThrown) {
    //      window.alert("error");
    //      console.info(textStatus);
    //      console.info(jqXHR);
    //      console.info(errorThrown);
        }
      });
  });
  
</script>