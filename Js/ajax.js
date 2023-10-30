$(document).ready(
    function(){
        //Login
        $('body').on('click',"#btn_confirm_login",function(e){
            e.preventDefault();

            var form = $('#form_login_user');
            var form_data = form.serialize();
            var url = "Controller/Login/login.php";

            $.ajax({
                type: "POST",
                url: url,
                data: form_data,
                dataType: "JSON",
                success: function (data, textStatus, jqXHR) {
                    if(data['success']== 'success'){
                        if(data['status'] == 'success'){
                            $('.result').prepend("<div id='status-container'><div class='status status-" + data['status'] + "'><div class='status-message'><span class='fa fa-check-circle'></span>" + data['message'] + "</div></div></div>");
                        $('#form_register')[0].reset();
                        }
                        else if(data['status'] == 'info'){
                            $('.result').prepend("<div id='status-container'><div class='status status-" + data['status'] + "'><div class='status-message'><span class='fa fa-check-circle'></span>" + data['message'] + "</div></div></div>");
                        $('#form_register')[0].reset();
                        }
                        else if(data['status'] == 'warning'){
                            $('.result').prepend("<div id='status-container'><div class='status status-" + data['status'] + "'><div class='status-message'><span class='fa fa-check-circle'></span>" + data['message'] + "</div></div></div>");
                        $('#form_register')[0].reset();
                        }
                        else{
                            $('.result').prepend("<div id='status-container'><div class='status status-" + data['status'] + "'><div class='status-message'><span class='fa fa-check-circle'></span>" + data['message'] + "</div></div></div>");
                        $('#form_register')[0].reset();
                        }
                        setTimeout(function(){
                            $('#status-container').hide();
                            if(data['redirect'] != ''){
                                window.location.href=data['redirect'];
                            }
                        }, 3000);
                    }                    
                }
            });
        })
    }
)