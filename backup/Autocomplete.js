/*
    ***********************************************
    AUTOCOMPLETE CLIENTE - PARAMETRIZAÇÃO DE ROTINAS DE AUTOCOMPLETE DE INFORMAÇÕES DE NOSSA APLICAÇÃO.
    ***********************************************
    Copyright (c) 2022, Jeferson Souza MESTRES DO PHP

    Informações para recriação de outros recursos - Alterar os seguintes valores:
    * Linhas 21 e 125 = o id (#input_client)
    * Linha 27 = na variável url -> trocar o caminho até o arquivo que fará a consulta.
    * Linhas 30, 100, 110, 147 = a class(.listValues)
    * Linhas 34, 39, 55, 65, 92 e 131 = a class (.autocomplete)
    * Linhas 42, 68, 113, 122, 164 e 190 = o id (#inputClientId)
    * Linha 103 = class (.autolist)
    **** Todos esses campos podem ser personalizados e alterados se adequando a sua aplicação ou ao novo recurso de autocomplete ****
* */
$(document).ready(function(){
    //Captura a url do site
    var page = $('meta[name=base]').attr('content');

    //Consulta o campo cliente
    $('body').on('keyup', '#input_client', function(e){

        //Captura e armazena o valor do input
        var inputValue = $(this).val();

        //Página de destino para realizar a query
        var url = 'Ajax/Clients/Autocomplete.php?val='+inputValue;

        //Remove a consulta anterior e evita de aparecer dados duplicados
        $('.listValues').remove();
        $('.listUsers').remove();

        //Desabilita o campo do AutoList (modal do autocomplete - usuário)
        $('.autocompleteU').css('display', 'none');

        //Se o usuário limpar o campo da consulta
        if(inputValue == '' || inputValue == 0){
            //Desabilita o campo do AutoList (modal do autocomplete - cliente)
            $('.autocomplete').css('display', 'none');

            //Remove o input id do cliente.
            $('#inputClientId').remove();

            //Desabilita o campo do AutoList (modal do autocomplete - usuário)
            $('.autocompleteU').css('display', 'none');

            //Remove o input id do usuário.
            $('#inputUserId').remove();

            return false;
        }

        //Valida as informações com o query
        $.ajax({
            url: url,
            type: 'POST',
            data: inputValue,
            dataType: 'JSON',

            success: function (data, textStatus, jqXHR) {

                //Se a consulta retornar sem nenhum valor.
                if(data == '' ||  data == 0 || data == null){
                    //Desabilita o campo do AutoList (modal do autocomplete - cliente)
                    $('.autocomplete').css('display', 'none');

                    //Remove o input id do cliente.
                    $('#inputClientId').remove();

                    //Desabilita o campo do AutoList (modal do autocomplete - usuário)
                    $('.autocompleteU').css('display', 'none');

                    //Remove o input id do usuário.
                    $('#inputUserId').remove();

                    return false;
                }

                //Se acontecer algum problema na consulta
                if(data[0]['status'] === 'info'){
                    $(".result").text('');
                    $(".result").prepend('<div id="status-container" class="status-top-right text-center"><div class="status status-'+data['status']+'"><div class="status-message"><p class="color-white"><span class="fa fa-info-circle"></span> '+data['message']+'</p></div></div></div>');

                    //Apresenta a mensagem por 3 segundos
                    setTimeout(function () {
                        $('#status-container').hide();
                    }, 3000);
                    return;
                }

                //Habilita o campo do AutoList (modal do autocomplete)
                $('.autocomplete').css('display', 'flex');

                //Recupera os dados do banco
                for(var i = 0; i < data.length; i++) {
                    var valueId = data[i]['id'];
                    var valueData = data[i]['name'];

                    //Prepara o html a ser criado
                    var mount = "<a class='listValues' data-id='" + valueId + "' data-value='"+valueData+"'><li>" + valueData + "</li></a>";

                    //Monta o html
                    $('.autolist').prepend(mount);
                }
            }
        });
    });

    //Ação do clique sobre uma das opções da lista
   $(document).on('click', ".listValues", function(e){

       //Remove o input anterior e evita de aparecer dados duplicados
       $('#inputClientId').remove();

        //Recupera e armazena o id escolhido pelo usuário
        var id = $(this).attr('data-id');

       //Recupera e armazena o valor escolhido pelo usuário
        var val = $(this).attr('data-value');

        //Monta o input hidden com o id
        var mountInput = "<input type='hidden' name='inputClientId' id='inputClientId' value='"+id+"'>";

       //Insere o valor no campo do input digitado
      $('#input_client').val(val)

       //Monta o html
       $('.client').prepend(mountInput);

       //Fecha a modal
       $('.autocomplete').css('display', 'none');
       $('.autocompleteU').css('display', 'none');

    });

    //Consulta o campo analista
    $('body').on('keyup', '#input_user', function(e){

        //Captura e armazena o valor do input
        var inputValue = $(this).val();

        //Página de destino para realizar a query
        var url = 'Ajax/Users/Autocomplete.php?val='+inputValue;

        //Remove a consulta anterior e evita de aparecer dados duplicados
        $('.listUsers').remove();
        $('.listValues').remove();

        //Desabilita o campo do AutoList (modal do autocomplete - cliente)
        $('.autocomplete').css('display', 'none');

        //Se o usuário limpar o campo da consulta
        if(inputValue == '' || inputValue == 0){
            //Desabilita o campo do AutoList (modal do autocomplete)
            $('.autocompleteU').css('display', 'none');

            //Remove o input id do usuário.
            $('#inputUserId').remove();

            //Desabilita o campo do AutoList (modal do autocomplete - cliente)
            $('.autocomplete').css('display', 'none');

            //Remove o input id do cliente.
            $('#inputClientId').remove();

            return false;
        }

        //Valida as informações com o query
        $.ajax({
            url: url,
            type: 'POST',
            data: inputValue,
            dataType: 'JSON',

            success: function (data, textStatus, jqXHR) {

                //Se a consulta retornar sem nenhum valor.
                if(data == '' ||  data == 0 || data == null){
                    //Desabilita o campo do AutoList (modal do autocomplete)
                    $('.autocompleteU').css('display', 'none');

                    //Remove o input id do usuário.
                    $('#inputUserId').remove();

                    //Desabilita o campo do AutoList (modal do autocomplete - cliente)
                    $('.autocomplete').css('display', 'none');

                    //Remove o input id do cliente.
                    $('#inputClientId').remove();

                    return false;
                }

                //Se acontecer algum problema na consulta
                if(data[0]['status'] === 'info'){
                    $(".result").text('');
                    $(".result").prepend('<div id="status-container" class="status-top-right text-center"><div class="status status-'+data['status']+'"><div class="status-message"><p class="color-white"><span class="fa fa-info-circle"></span> '+data['message']+'</p></div></div></div>');

                    //Apresenta a mensagem por 3 segundos
                    setTimeout(function () {
                        $('#status-container').hide();
                    }, 3000);
                    return;
                }

                //Habilita o campo do AutoList (modal do autocomplete)
                $('.autocompleteU').css('display', 'flex');

                //Recupera os dados do banco
                for(var i = 0; i < data.length; i++) {
                    var valueId = data[i]['id'];
                    var valueData = data[i]['name'];

                    //Prepara o html a ser criado
                    var mount = "<a class='listUsers' data-id='" + valueId + "' data-value='"+valueData+"'><li>" + valueData + "</li></a>";

                    //Monta o html
                    $('.autolistU').prepend(mount);
                }
            }
        });
    });

    //Ação do clique sobre uma das opções da lista
    $(document).on('click', ".listUsers", function(e){

        //Remove o input anterior e evita de aparecer dados duplicados
        $('#inputUserId').remove();

        //Recupera e armazena o id escolhido pelo usuário
        var id = $(this).attr('data-id');

        //Recupera e armazena o valor escolhido pelo usuário
        var val = $(this).attr('data-value');

        //Monta o input hidden com o id
        var mountInput = "<input type='hidden' name='inputUserId' id='inputUserId' value='"+id+"'>";

        //Insere o valor no campo do input digitado
        $('#input_user').val(val)

        //Monta o html
        $('.user').prepend(mountInput);

        //Fecha a modal
        $('.autocompleteU').css('display', 'none');
        $('.autocomplete').css('display', 'none');

    });
});