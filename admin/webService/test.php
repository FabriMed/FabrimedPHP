<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <script src="../resources/js/lib/jquery/jquery-2.1.1.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        traeJson();
        function traeJson() {
          $.ajax({
            type: 'POST',
            url: "http://localhost:61293/WebService1.asmx/getData",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            data: {
              name:"demo"
},
            success: function(data, textStatus, jqXHR) {
              
              var data = JSON.parse(data.d);
             console.log(data);
              $("#respuesta").text(data);
            },
            error: function(e) {
              console.error(e);
            }
          });
        }
      });
    </script>
  </head>
  <body>
    <div id="respuesta"></div>
  </body>
</html>
