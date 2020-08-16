<?php

    class Email{
        
        private $mailer;

        public function __construct($host, $username, $password, $name)
        {
            
            // Instantiation and passing `true` enables exceptions
            $this->mailer = new PHPMailer(true);

            //Server settings
            $this->mailer->SMTPDebug = SMTP::DEBUG_SERVER;               
            $this->mailer->isSMTP();                                    
            $this->mailer->Host = $host;                                 
            $this->mailer->SMTPAuth = true;                              
            $this->mailer->Username = $username;                         
            $this->mailer->Password  = $password;                        
            $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  
            $this->mailer->Port = 587;                                   

            $this->mailer->setFrom($username, $name);
            $this->mailer->isHTML(true); 
            $this->mailer->CharSet('utf-8'); 

        }

        public function addAdress($email, $name){
            $this->mailer->addAddress($email, $name);     
        }

        public function formatarEmail($info){

            $this->mailer->Subject = $info['assunto'];
            $this->mailer->Body    = $info['corpo'];
            $this->mailer->AltBody = strip_tags($info['corpo']);

        }

        public function enviarEmail(){
            if($this->mailer->send())
                return true;
            else
                return false;
        }

    }
    

?>