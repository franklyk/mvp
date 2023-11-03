$(document).ready(function(){
        //Login
        $('body').on('click',"#btn_login",function(e){
            e.preventDefault();
            
            var form = $('#form_login');
            var form_data = form.serialize();
            var url = "Controller/Login/login.php";
            

            $.ajax({
                url: url,
                type: "POST",
                data: form_data,
                dataType: "JSON",
                success: function (data, textStatus, jqXHR) {
                    if(data['status'] == 'success'){
                        console.log(data['status']);
                        $('.result').prepend("<div id='status-container' class='radius status-" + data['status']+ " '><p class='radius result-message'><span></span>" + data['message']+ " </p></div>");
                    $('#form_login')[0].reset();
                    }
                    else if(data['status'] == 'info'){
                        $('.result').prepend("<div id='status-container' class='radius status-" + data['status']+ " '><p class='radius result-message'><span></span>" + data['message']+ " </p></div>");
                    $('#form_login')[0].reset();
                    }
                    else if(data['status'] == 'warning'){
                        $('.result').prepend("<div id='status-container' class='radius status-" + data['status']+ " '><p class='radius result-message'><span></span>" + data['message']+ " </p></div>");
                    $('#form_login')[0].reset();
                    }
                    else{
                        $('.result').prepend("<div id='status-container' class='radius status-" + data['status']+ " '><p class='radius result-message'><span></span>" + data['message']+ " </p></div>");
                    $('#form_login')[0].reset();
                    }
                    setTimeout(function(){
                        $('#status-container').hide();
                        if(data['redirect'] != ''){
                            window.location.href=data['redirect'];
                        }
                    }, 3000);
                }
            });
        })
    }
)