
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
          $(".club-content").hide();
          $(".tiles").hide();
          $(".container-login").hide();   

          $(".register-form").css("display","block");
          $(".bg--gradient").show();
        console.log('click sign up');
    });
     $("[data-toggle=log-in]").unbind("click").click(function(){
          $(".banner").hide();
          $(".club-content").hide();
          $(".bg--gradient").hide();
          $(".tiles").hide();
          $(".register-form").hide();
          $(".container-login").show();
        console.log('click login');
    });
    $("[data-toggle=delete]").unbind("click").click(function(){
        console.log('delhete---CLICK');
        var checkClass = $(this).attr('class');
        console.log(checkClass);
        
        var formHide = $('.home-form').find('.'+checkClass);
            formHide.hide();
    });

    console.log('CLICK aaa!!!!!!');
});




