jQuery(document).ready(function($){

    $("#ouvrir").click(function(){
        $("nav").addClass("open");
    });

    $("#fermer").click(function(){
        $("nav").removeClass("open");
    });
	});