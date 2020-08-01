$(function(){
    //Todo o nosso código de script

    $('nav.mobile').click(function(){
        //O que vai acontecer quando clicarmos no nav.mobile
        var listaMenu = $('nav.mobile ul');
        var icone = $('.botao-menu-mobile').find('i');

        //Abrir ou fechar o menu
        if(listaMenu.is(':hidden')){
            listaMenu.slideToggle();
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');
        }
        else{
            listaMenu.slideToggle();
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
        }

    })

    if($('target').length > 0){
        var elemento = '#'+$('target').attr('target');
        var divScroll = $(elemento).offset().top;

        if(divScroll > 1000){
            $('html,body').animate({scrollTop:divScroll}, 1800);
        }
        else{
            $('html,body').animate({scrollTop:divScroll}, 1000);
        }
        
    }

})