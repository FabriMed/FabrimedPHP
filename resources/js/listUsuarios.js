$(document).ready(function() {
  $.ajax({
    type: 'POST',
    url: "controller/usuariosListController.php",
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
            var nombre = $("<div>", {"class": "name", html: value.nombre + " " + value.apellido});
            var email = $("<div>", {"class": "email", html: value.email});
            var telefono = $("<div>", {"class": "email", html: value.telefono});
            var telefono2 = $("<div>", {"class": "email", html: value.telefono2});
            var vigente = $("<div>", {"class": "email", html: value.vigente});


            var row = $("<div>");
            $(row).addClass("row user");
            $(row).append($("<div>", {"class": "col-sm-2 avatar"}).append(imagen));
            $(row).append($("<div>", {"class": "col-sm-2"}).append(nombre));
            $(row).append($("<div>", {"class": "col-sm-2"}).append(email));
            $(row).append($("<div>", {"class": "col-sm-2"}).append(telefono));
            $(row).append($("<div>", {"class": "col-sm-2"}).append(telefono2));
            $(row).append($("<div>", {"class": "col-sm-2"}).append(vigente));
            $("#datos").append($(row));

            var div = $("<div>", {"class": "user col-sm-3 col-xs-6"});
            $(div).append($("<a>", {href: "#"}).append(imagen.clone()));
            $(div).append(nombre.clone());
            $(div).append(email.clone());
            $(div).append(telefono.clone());
            $("#datos-grid").append($(div));

          });
          var rowSigAnt = $("<div>");
          $(rowSigAnt).addClass("row pager-wrapper");
          $(rowSigAnt).append($("<div>", {"class": "col-sm-12"}).append($("<ul>", {class: "pager"}).append($("<li>").append($("<a>", {href: "#", html: "Anterior"}))).append($("<li>").append($("<a>", {href: "#", html: "Siguiente"})))));
          $("#paginador").append($(rowSigAnt));
        } else {
          $("#datos").html("No existen Usuarios");
        }
      }
    },
    error: function(jqXHR, textStatus, errorThrown) {

    }
  });
});



function filtros()
{
  function t(t, e) {
    t ? ($(".users-list .header").hide(), $(".users-list .header.select-users").addClass("active").find(".total-checked").html("(" + e + " total users)")) :
            ($(".users-list .header").show(), $(".users-list .header.select-users").removeClass("active"))
  }
  if ($("#users").length) {
    var e = $(".select-users input:checkbox"),
            n = $("[name='select-user']");
    e.change(function() {
      var i = e.is(":checked");
      i ? (n.prop("checked", "checked"), t(i, n.length)) : (n.prop("checked", ""), t(i, 0))
    }), n.change(function() {
      var e = $(".user [name='select-user']:checked");
      t(e.length, e.length)
    }), $btns = $(".grid-view"), $views = $(".users-view"), $btns.click(function(t) {
      t.preventDefault(), $btns.removeClass("active"), $(this).addClass("active"), $views.removeClass("active"), $(".users-grid").hide(), $(".users-list").hide(), $($(this).data("grid")).show()
    })
  }
}
;


