$(document).ready(function(){
  var row = $("<div>");
  $(row).addClass("row user");
  $(row).append($("<div>",{"class":"col-sm-2 avatar"}).append($("<input>",{name:"select-user",type:"checkbox",id:"ckb"})).append($("<img>",{src:"resources/images/1-60c47167290e620ea8ef2aa01d40c05e.jpg",alt:"imagen de prueba cargada con js"})));
  $(row).append($("<div>",{"class":"col-sm-3"}).append($("<a>",{"class":"name",href:"#",html:"Edwin Guamán"})));
  $(row).append($("<div>",{"class":"col-sm-3"}).append($("<div>",{"class":"email",html:"es.aguaman@gmail.com"})));
  $(row).append($("<div>",{"class":"col-sm-2"}).append($("<div>",{"class":"total-spent",html:"$280.00"})));
  $(row).append($("<div>",{"class":"col-sm-2"}).append($("<div>",{"class":"created-at",html:"Feb 09, 2014"})));
  $("#datos").append($(row));
});

