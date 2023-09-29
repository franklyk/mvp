
    // MODAL REDES SOCIAIS
    $("#btn_socials_open").click(
        function(){
            $('#socials_container').animate({right: "30px"}, 300)
            $('#btn_socials_open').css("display", "none")
            $('#btn_socials_close').css("display", "block")
        }
    )
    $("#btn_socials_close").click(
        function(){
            $('#socials_container').animate({right: "-100px"}, 300)
            $('#btn_socials_close').css("display", "none")
            $('#btn_socials_open').css("display", "block")

        }
    )

    $('#btn_open_login').click(
        function(){
            $('#container_login').animate({top: "30%"},300)
            $('#container_login').css("pointer-events", "all")
            $('#modal_fade_blur').css("z-index", "5")
            $('#modal_fade_blur').animate({height: "100%"})
            $('#modal_fade_blur').animate({opacity: "1"})
        }
    )

    $("#btn_close_login").click(
        function(){
            $('#container_login').animate({top: "-100%"},700)
            $("#container_login").css("pointer-events", "none")
            $('#modal_fade_blur').animate({height: "0"})
            $("#modal_fade_blur").css("z-index", "-1")
            $("#modal_fade_blur").css("opacity", "0")
        }
    )
    $("#btn_open_register").click(
        function(){
            $('#container_login').animate({top: "-100%"},700)
            $("#container_login").css("pointer-events", "none")
            $("#container_register").animate({top: "50%"},300)
            $("#container_register").css("pointer-events", "all")
        }
    )
    $("#btn_close_register").click(
        function(){
            $("#container_register").animate({top: "-100%"},700)
            $("#container_register").css("pointer-events", "none")
            $('#modal_fade_blur').animate({height: "0"})
            $("#modal_fade_blur").css("z-index", "-1")
        }
    )
