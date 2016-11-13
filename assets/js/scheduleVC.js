$(document).ready(function(){
    $(".dropdown").find(".dropbtn").unbind("click").click(function(){
        $(".streach").css({"background":"orange"}).find("h3").show();
        $(".crossfit").css({"background":"red"}).find("h3").show();
        $(".yoga").css({"background":"green"}).find("h3").show();
        $(".open").css({"background":"white"}).find("h3").show();
    });
    
    $("[data-toggle=open-btn]").unbind("click").click(function(){
        $(".streach").css({"background":"#fff"}).find("h3").hide();
        $(".crossfit").css({"background":"#fff"}).find("h3").hide();
        $(".yoga").css({"background":"#fff"}).find("h3").hide();
        $(".open").css({"background":"#fff"}).find("h3").hide();
        $(".open").css({"background":"red"}).find("h3").show();
    });
       $("[data-toggle=streach-btn]").unbind("click").click(function(){
        $(".streach").css({"background":"#fff"}).find("h3").hide();
        $(".crossfit").css({"background":"#fff"}).find("h3").hide();
        $(".yoga").css({"background":"#fff"}).find("h3").hide();
        $(".open").css({"background":"#fff"}).find("h3").hide();
        $(".streach").css({"background":"red"}).find("h3").show();
    });
     $("[data-toggle=yoga-btn]").unbind("click").click(function(){
        $(".streach").css({"background":"#fff"}).find("h3").hide();
        $(".crossfit").css({"background":"#fff"}).find("h3").hide();
        $(".yoga").css({"background":"#fff"}).find("h3").hide();
        $(".open").css({"background":"#fff"}).find("h3").hide();
        $(".yoga").css({"background":"red"}).find("h3").show();
    });
     $("[data-toggle=cross-btn]").unbind("click").click(function(){
        $(".streach").css({"background":"#fff"}).find("h3").hide();
        $(".crossfit").css({"background":"#fff"}).find("h3").hide();
        $(".yoga").css({"background":"#fff"}).find("h3").hide();
        $(".open").css({"background":"#fff"}).find("h3").hide();
        $(".crossfit").css({"background":"red"}).find("h3").show();
    });
    console.log('CLICK!!!!!!');

});


