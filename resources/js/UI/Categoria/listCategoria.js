$(document).ready(function(){
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