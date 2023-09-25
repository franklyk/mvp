$(document).ready(function(){
    // MODAL REDES SOCIAIS
    $("#btn_socials_open").click(()=>{
        $(".socials_container").css("height", "200px")
        $("#btn_socials_open").css("display", "none")
        $("#btn_socials_close").css("display", "block")
    })
    $("#btn_socials_close").click(()=>{
        $(".socials_container").css("height", "0")
        $("#btn_socials_close").css("display", "none")
        $("#btn_socials_open").css("display", "block")
    })

    // MODAL LOGIN
    $("#btn_open_login").click(()=>{
        
        $(".container_login").css("opacity","1");
        $(".container_login").css("pointer-events", "all");
        $(".container_login").css("top", "50%");
        $(".modal_fade_blur").css("opacity","1");
        $(".modal_fade_blur").css("height","100%");
    });

    $("#btn_close_login").click(()=>{
        $(".container_login").css("pointer-events", "none");
        $(".container_login").css("top", "0");
        $(".container_login").css("opacity","0");
        $(".modal_fade_blur").css("height","0");
        $(".modal_fade_blur").css("opacity","0");
    })
    $("#btn_open_register").click(()=>{
        $(".container_login").css("top", "0");
        $(".container_login").css("opacity","0");
        $(".container_login").css("pointer-events","none");
        $(".container_register").css("opacity","1");
        $(".container_register").css("pointer-events","all");
        $(".container_register").css("top","50%");

    })
    $("#btn_close_register").click(()=>{
        $(".container_register").css("opacity","0");
        $(".container_register").css("pointer-events","none");
        $(".container_register").css("top","0");
        $(".modal_fade_blur").css("height","0");
        $(".modal_fade_blur").css("opacity","0");

    })
    
})