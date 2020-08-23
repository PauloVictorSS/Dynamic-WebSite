<?php
        
    /* if(isset($_POST['acao'])){
        //Enviei o formulário

        $email = $_POST["email"];
        $nome = $_POST["nome"];
        $mensagem = $_POST["mensagem"];
        $mensagem = 'Email da pessoa: '.$email.'<br>Nome da Pessoa: '.$nome.'<br><br>'.$mensagem

        // Esssa linha vai ser somente com as informações da hospedagem
        $mail = new Email('exemplo.de.host', 'email@quemMandou.com', 'senhaQuemMandou', 'nomeQuemMandou');

        $info = array('assunto' => 'Contato', 'corpo' => $mensagem);
        $mail->addAdress('email.quem@vai.receber', 'nomeRecebedorCasoNecessario');
        $mail->formatarEmail($info);

        if($mail->enviarEmail())
            echo "<script>alert('Email enviado com sucesso')</script>";
        else
            echo "<script>alert('Erro no envio de Email')</script>";
                

    } */

?>

<section class="contato">
    <div class="contato-container">
        <h1>Entre em contato com a gente!</h1>
        <form action="<?php echo INCLUDE_PATH; ?>contato" method="POST">
            <input required type="text" name="nome" placeholder="Nome...">
            <input required type="email" name="email" placeholder="E-mail...">
            <textarea required name="mensagem" placeholder="Sua mensagem..."></textarea>
            <input type="submit" name="acao" value="Enviar">
        </form>
    </div>
    <div class="clear"></div>
</section>
