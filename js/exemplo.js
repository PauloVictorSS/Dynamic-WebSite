//Função para fazer uma animação no carregamento do
//elemento 'box-especialidade'

/*
$(function(){

    var atual = -1;
    var max = $('.box-especialidade').length - 1; //Retornando o número de elementos dessa classe
    var animacaoDelay = 3; //Tempo de espera até o início da animação

    executarAnimacao();

    function executarAnimacao(){

        $('.box-especialidade').fadeOut(); //Fazendo todos os elementos dessa classe sumir

        timer = setInterval(logicaAnimacao, animacaoDelay * 1000); //Escolhendo a função e o intervalo de tempo 
                                                                   //entre as chamadas
  
        function logicaAnimacao(){
            atual++;

            //Verificando se todos os elementos já foram mostrados
            if(atual > max){
                clearInterval(timer);
                return false;
            }
            
            //Mostrando o elemento espefífico
            $('.box-especialidade').eq(atual).fadeIn();
        }
    }

})
*/