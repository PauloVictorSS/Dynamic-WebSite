<?php

    //Definindo a url padrão do site, tanto para um acesso mais limpo
    //quanto para um acesso mais dinâmico
    define("INCLUDE_PATH", "http://localhost/GitHub/Projetos/Projeto_01/");


    $autoload = function($class){

        if($class == "Email")
            include_once("classes/phpmailer/PHPMailerAutoload.php");
    
        include_once("classes/".$class.".php");
    };

    spl_autoload_register($autoload);


?>