
$(document).ready(function(){
    
    $("[data-toggle=tile1]").unbind("click").click(function(){
        $(".tile").hide();
        $(".tiles").addClass("hide");
    });
     $("[data-toggle=tile2]").unbind("click").click(function(){
        $(".tiles").hide();
        $(".club-content").removeClass("hidden");
    });
     $("[data-toggle=tile3]").unbind("click").click(function(){
        $(".tile").hide();
        $(".tiles").addClass("hide");
    });
     $("[data-toggle=tile4]").unbind("click").click(function(){
        $(".tile").hide();
        $(".tiles").addClass("hide");
    });
    
    /*REGISTER FORM*/
     $("[data-toggle=sign-up]").unbind("click").click(function(){
          $(".banner").hide();
          $(".register-form").show();
        console.log('click sign up');
    });
     $("[data-toggle=log-in]").unbind("click").click(function(){
          $(".banner").hide();
          $(".register-form").hide();
          $(".login-form").show();
        console.log('click login');
    });
    console.log('CLICK aaa!!!!!!');
});




