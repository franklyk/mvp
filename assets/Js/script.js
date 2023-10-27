$(document).ready(
    function(){
    // MODAL REDES SOCIAIS
    $('#btn_socials_open').click(
        function(){
            $('#socials_container').animate({right: "30px"}, 300)
            $('#btn_socials_open').css("display", "none")
            $('#btn_socials_close').css("display", "block")
        }
    )
    $('#btn_socials_close').click(
        function(){
            $('#socials_container').animate({right: "-100px"}, 300)
            $('#btn_socials_close').css("display", "none")
            $('#btn_socials_open').css("display", "block")

        }
    )

    $('#btn_open_login').click(
        function(){
            $('#container_login').animate({top: "50%"},300)
            $('#container_login').css("pointer-events", "all")
            $('#container_login').css("z-index", "200")
            $('#modal_fade').css("z-index", "100")
            // $('#modal_fade').animate({height: "100%"})
            $('#modal_fade').animate({opacity: "1"})
        }
    )

    $('#btn_close_login').click(
        function(){
            $('#container_login').animate({top: "-100%"},300)
            $("#container_login").css("pointer-events", "none")
            // $('#modal_fade').animate({height: "0"})
            $("#modal_fade").css("z-index", "-1")
            $("#modal_fade").css("opacity", "0")
        }
    )
    $('#btn_open_register').click(
        function(){
            $('#container_login').animate({top: "-100%"},300)
            $("#container_login").css("pointer-events", "none")
            $('#container_register').css("z-index", "200")
            $("#container_register").animate({top: "50%"},300)
            $("#container_register").css("pointer-events", "all")
        }
    )
    $('#btn_close_register').click(
        function(event){
            event.preventDefault()
            $("#container_register").animate({top: "-100%"},300)
            $("#container_register").css("pointer-events", "none")
            $("#modal_fade").css("z-index", "-1")
            $("#modal_fade").css("opacity", "0")
        }
    )
    $('#btn_open_cart').click(
        function(){
            $('#container_cart').animate({top: "45%"},300)
            $('#container_cart').css("pointer-events", "all")
            $('#container_cart').css("z-index", "200")
            $('#modal_fade').css("z-index", "100")
            $('#modal_fade').animate({height: "100%"})
            $('#modal_fade').animate({opacity: "1"})
        }
    )
    $('#btn_close_cart').click(
        function(){
            $('#container_cart').animate({top: "-100%"},300)
            $('#container_cart').css("pointer-events", "none")
            $('#modal_fade').css("z-index", "-1")
            $('#modal_fade').animate({opacity: "0"})
        }
    )
    $('#btn_open_recovery').click(
        function(){
            $('#container_login').animate({top: "-100%"},300)
            $("#container_login").css("pointer-events", "none")
            $('#container_login').css("z-index", "-1")
            $('#container_recovery').css("z-index", "200")
            $('#container_recovery').animate({top: "50%"},300)
            $('#container_recovery').css("pointer-events", "all")
        }
    )
    $('#send_recovery').click(
        function(){
            $('#container_recovery').animate({top: "-100%"},300)
            $("#container_recovery").css("pointer-events", "none")
            $('#container_new_password').css("z-index", "200")
            $('#container_new_password').animate({top: "50%"},300)
            $('#container_new_password').css("pointer-events", "all")
        }
    )
    $('#btn_close_new_password').click(
        function(){
            $('#container_new_password').animate({top: "-100%"},300)
            $('#container_new_password').css("pointer-events", "none")
            $('#modal_fade').css("z-index", "-1")
            $('#modal_fade').animate({opacity: "0"})
        }
    )
    $('#recovery_open_register').click(
        function(){
            $('#container_recovery').animate({top: "-100%"},300)
            $("#container_recovery").css("pointer-events", "none")
            $('#container_register').css("z-index", "200")
            $("#container_register").animate({top: "35%"},300)
            $("#container_register").css("pointer-events", "all")
        }
    )


})
