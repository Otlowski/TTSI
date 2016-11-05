
$(document).ready(function(){
    
    $("[data-toggle=tile1]").unbind("click").click(function(){
        $(".tile").hide();
        $(".tiles").addClass("hide");
    });
     $("[data-toggle=tile2]").unbind("click").click(function(){
        $(".tile").hide();
        $(".tiles").addClass("hide");
    });
     $("[data-toggle=tile3]").unbind("click").click(function(){
        $(".tile").hide();
        $(".tiles").addClass("hide");
    });
     $("[data-toggle=tile4]").unbind("click").click(function(){
        $(".tile").hide();
        $(".tiles").addClass("hide");
    });
    console.log('CLICK!!!!!!');

});




