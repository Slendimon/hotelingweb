$(document).ready(function(){
    
        $("#banner1").css({"height":$(window).height()-150 + "px"});
    
        var flag = false;
        var scroll;
    
        $(window).scroll(function(){
            scroll = $(window).scrollTop();
    
            if(scroll > 200){
                if(!flag){
                    
                    $("header").css({"background-color": "#3C3C3C"});
                    $("header nav ul li a").css({"color":"#FFFFFF"});
                    $("nav ul li a:hover").css({"color": "#D8D8D8"});
                    flag = true;
                }
            }else{
                if(flag){
                    //$("#logo").css({"margin-top": "150px", "width": "250px","height":"250px"});
    
                    $("header").css({"background-color": "#FFFFFF"});
                    $("header nav ul li a").css({"color":"#3C3C3C"});
                    flag = false;
                }
            }
    
    
        });
    
    });