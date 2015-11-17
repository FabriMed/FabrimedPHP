$(document).ready(function() {
    productos();
}); 

$(window).load(function() {
   
}); 

function productos()
{
    $.ajax(
    {
        type: 'POST',
        url: "resources/js/productosList.php",
        data: {
            'accion': 'listar'
        },
        success: function(data, textStatus, jqXHR) 
        {
            if (data[0].estado === "ok") 
            {
                if (data[0].campos.length > 0) 
                {
                   var $newItems = "";
                    $.each(data[0].campos, function(key, value) 
                    {     
                        debugger;
                        var li = "<li class='span3 isotope-element isotope-filter" + value.id_categoria + "'>{0}</li>";
                        var divIsotope = "<div class='thumb-isotope'>{0}</div>";
                        var divClearfix = "<div class='thumbnail clearfix'>{0}</div>";
                        var a  = "<a href='" + value.imagenOriginal + "'>{0} {1}</a>";
                        
                        var figure = "<figure>{0}</figure>";
                        var img  = "<img src='" + value.imagen +"', alt= '', width='', heigth='400px'></img><em></em><am></am>"; 
                        var detalle = "<div class='caption'> "+ value.detalle + " <p><b>  Precio: $" + value.precio + ".- C/U</b></p> </div>";       
                        
                        figure = figure.replace("{0}",img);
                        a = a.replace("{0}",figure);
                        a = a.replace("{1}",detalle);
                        divClearfix = divClearfix.replace("{0}",a);
                        divIsotope = divIsotope.replace("{0}",divClearfix);
                        li = li.replace("{0}",divIsotope)
                        $newItems = $newItems + li;
                    }); 
                    
                    // isotop
                    var $container = $('#isotope-items'),
                        $optionSet = $('#isotope-options'),
                        $optionSets = $('#isotope-filters'),
                        $optionLinks = $optionSets.find('a');

                    $container.prepend($newItems).isotope('reloadItems').isotope(
                        { 
                          filter: '*',
                          layoutMode: 'fitRows'
                        }
                    );

                    $optionLinks.click(function(){
                        var $this = $(this);
                        // don't proceed if already selected
                        if ( $this.hasClass('selected') ) {
                            return false;
                        }
                        $optionSet.find('.selected').removeClass('selected');
                        $this.addClass('selected');

                        var selector = $(this).attr('data-filter');
                        $container.isotope({
                            filter: selector
                        });
                        return false;
                    });

                    $(window).on("resize", function( event ) {
                        $container.isotope('reLayout');
                    });

                    // touchTouch
                    $('.thumb-isotope .thumbnail a').touchTouch();
                }
                else 
                {
                  alert("error controlado");
                }

            }  
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {       
            alert("error");
        }
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        
        if (jqXHR.status === 0) {
    
            alert('Not connect: Verify Network.');

        } else if (jqXHR.status == 404) {

            alert('Requested page not found [404]');

        } else if (jqXHR.status == 500) {

            alert('Internal Server Error [500].');

        } else if (textStatus === 'parsererror') {

            alert('Requested JSON parse failed.');

        } else if (textStatus === 'timeout') {

            alert('Time out error.');

        } else if (textStatus === 'abort') {

            alert('Ajax request aborted.');

        } else {

            alert('Uncaught Error: ' + jqXHR.responseText);
        }
        
    });  
}


/*
function productos()
{
    $.ajax(
    {
        type: 'POST',
        url: "resources/js/productosList.php",
        data: {
            'accion': 'listar'
        },
        success: function(data, textStatus, jqXHR) 
        {
          
            if (data[0].estado === "ok") 
            {
                if (data[0].campos.length > 0) 
                {
                    
                    //var container = $("<div>");
                    //$(container).addClass("container");
                    //var row = $("<div>", {"class": "row"});
                    //var span12 = $("<div>", {"class": "span12"});
                    var ul = $("<ul>", {"class": "thumbnails","id":"isotope-items"});

                    //$(row).appendTo($(container));
                    //$(span12).appendTo($(row));
                    //$(ul).appendTo($(span12));
                    
                    $.each(data[0].campos, function(key, value) 
                    {     
                        var imagen  = $("<img>", {src: value.imagen, alt: "", width: "", heigth: "400px"});
                        
                        var detalle = $("<div>", {"class": "caption", html: value.detalle + " EMA"})
                        var p = $("<p>");
                        var b = $("<b>",{html: "Precio :$" + value.precio + ""})
                        $(p).appendTo($(detalle));
                        $(b).appendTo($(p));

                        var imagenOriginal  = $("<a>", {href: value.imagenOriginal});
                        var figure = $("<figure>");

                        $(imagen).appendTo($(figure))
                        $(figure).appendTo($(imagenOriginal));
                        $(figure).append($("<em>"));
                        $(figure).append($("<am>"));
                        imagenOriginal.append($(detalle));

                        var li = $("<li>", {"class": "span3 isotope-element isotope-filter" + value.id_categoria + " isotope-item"});
                        var isotope = $("<div>", {"class": "thumb-isotope"});
                        var clearfix = $("<div>", {"class": "thumbnail clearfix"});

                        $(isotope).appendTo($(li));
                        $(clearfix).appendTo($(isotope));
                        $(imagenOriginal).appendTo($(clearfix));
                       
                        $(li).appendTo($(ul));
                        
                    }); 
                    $(ul).appendTo($("#gd_productos"));
                }
                else 
                {
                  $("#gd_productos").html("No existen Productos");
                }

            }  
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {       
            alert("error");
        }
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        
        if (jqXHR.status === 0) {
    
            alert('Not connect: Verify Network.');

        } else if (jqXHR.status == 404) {

            alert('Requested page not found [404]');

        } else if (jqXHR.status == 500) {

            alert('Internal Server Error [500].');

        } else if (textStatus === 'parsererror') {

            alert('Requested JSON parse failed.');

        } else if (textStatus === 'timeout') {

            alert('Time out error.');

        } else if (textStatus === 'abort') {

            alert('Ajax request aborted.');

        } else {

            alert('Uncaught Error: ' + jqXHR.responseText);

        }
        
    });  
}
*/