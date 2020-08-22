<?php include "config.php";   ?>
<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <title>Site Dinâmico</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <meta name="description" content="Descrição do meu website">
    <meta name="keywords" content="palavbra-chave, do meu, site">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>estilos/style.css" rel="stylesheet">
    <link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon">
    
</head>
<body>

    <?php
    
        /* Verificando se uma das âncoras foi selecionada */

        //Retornando a url do site
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';

        switch ($url) {
            //De acordo com a url utilizada cria um elemento com esse nome para a
            //futura manipulação pelo JavaScript com o JQuery
            case 'sobre':
                echo "<target target='sobre'>";
                break;

            case 'servicos':
                echo "<target target='servicos'>";
                break;

        }
    
    ?> 

    <header>
        <div class="center">
            <div class="logo left"><a href="<?php echo INCLUDE_PATH; ?>">Logomarca</a></div>
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
        </div>
        <div class="clear"></div>
    </header>
    <?php

        /* Incluindo o arquivo da url */        

        //Verificando se a url escolhida existe
        if(file_exists('pages/'.$url.'.php'))
            include('pages/'.$url.'.php'); //incluindo a página da url
        else{

            //Caso ela não exista, há o redirecionamento para a página de erro 404
            if($url != 'servicos' && $url != 'sobre')
                header("Location: pages/404.php");
            else
                include('pages/home.php');
        }

    ?>
    <footer>
        <div class="center">
            <p>Paulo Victor - Todos os direitos reservados</p>
        </div>
    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script>

</body>
</html>