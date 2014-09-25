$(document).ready(function(){

  $.ajax({
    type: 'POST',
    url: "../../controller/categoriaListController.php",
    data: {
      'accion': 'listar'
    },
    success: function(data, textStatus, jqXHR) {
      
      if (data[0].estado === "ok") {
        if (data[0].campos.length > 0) {
          
          $.each(data[0].header, function(key, value) {
            var head = $("<div>", {"class": "col-sm-2 header hidden-xs"});
            $(head).append($("<label>").append($("<a>", {href: "#", html: value})));
            $("#header").append($(head));
          });
          
          $.each(data[0].campos, function(key, value) {
            var imagen = $("<img>", {src: value.imagen, alt: "", width: "128px", heigth: "128px"});
            var nombre = $("<a>", {"class": "name",href:"#", html: value.nombre});
            var vigente = $("<div>", {"class": "email", html: value.vigente});


            var row = $("<div>");
            $(row).addClass("row user");
            $(row).append($("<div>", {"class": "col-sm-3 avatar"}).append(imagen));
            $(row).append($("<div>", {"class": "col-sm-3"}).append(nombre));
            $(row).append($("<div>", {"class": "col-sm-4"}).append(vigente));
            $("#datos").append($(row));

            var div = $("<div>", {"class": "user col-sm-3 col-xs-6"});
            $(div).append($("<a>", {href: "#"}).append(imagen.clone()));
            $(div).append(nombre.clone());
            $(div).append(vigente.clone());
            $("#datos-grid").append($(div));

          });
        }
      }
    },
    error: function(jqXHR, textStatus, errorThrown) {

    }
  });

  var row = $("<div>");
  $(row).addClass("row user");
  $(row).append($("<div>",{"class":"col-sm-2 avatar"}).append($("<input>",{name:"select-user",type:"checkbox",id:"ckb"})).append($("<img>",{src:"../../resources/images/1-60c47167290e620ea8ef2aa01d40c05e.jpg",alt:"imagen de prueba cargada con js"})));
  $(row).append($("<div>",{"class":"col-sm-5"}).append($("<a>",{"class":"name",href:"#",html:"Edwin Guamán"})));
  $(row).append($("<div>",{"class":"col-sm-5"}).append($("<div>",{"class":"name",html:"es.aguaman@gmail.com"})));
  $("#valores").append($(row));
  
  var rowSigAnt = $("<div>");
  $(rowSigAnt).addClass("row pager-wrapper");
  $(rowSigAnt).append($("<div>",{"class":"col-sm-12"}).append($("<ul>",{class:"pager"}).append($("<li>").append ($("<a>",{href:"#",html:"Anterior"}))).append($("<li>").append ($("<a>",{href:"#",html:"Anterior"})))));
  $(rowSigAnt).append($("<li>").append ($("<a>",{href:"#",html:"Anterior"})));
  $(rowSigAnt).append($("<li>").append ($("<a>",{href:"#",html:"Siguiente"})));
  $("#valores").append($(rowSigAnt));
  
});