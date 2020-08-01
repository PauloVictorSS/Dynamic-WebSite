$(function(){


    //Função para abrir o menu quando clicar no botão (nav.mobile)
    $('nav.mobile').click(function(){

        var listaMenu = $('nav.mobile ul'); //Retornando o elemento que deve ser mostrado 
        var icone = $('.botao-menu-mobile').find('i'); //Retornando o ícone do botão que foi clicado

        //Verificando se o menu está ou não aberto
        if(listaMenu.is(':hidden')){ 
            listaMenu.slideToggle(); //Fazendo o menu aparecer

            //Trocando o ícone de 'abrir' para 'fechar'
            icone.removeClass('fa-bars'); 
            icone.addClass('fa-times');
        }
        else{
            listaMenu.slideToggle(); //Fazendo o menu desaparecer

            //Trocando o ícone de 'fechar' para 'abrir'
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
        }

    })

    //Verificando se uma das âncoras do menu foi clicada
    if($('target').length > 0){
        var elemento = '#'+$('target').attr('target'); //Verificando qual âncora foi selecionada
        var divScroll = $(elemento).offset().top; //Retornando a 'distância' da âncora selecionada

        //Verificando qual a distância para aplicar uma velocidade de animação diferente
        if(divScroll > 1000){
            //Indo até um elemento selecionado de forma mais rápida
            $('html,body').animate({scrollTop:divScroll}, 1800); 
        }
        else{
            //Indo até um elemento selecionado de forma mais lenta
            $('html,body').animate({scrollTop:divScroll}, 1000);
        }
        
    }

})