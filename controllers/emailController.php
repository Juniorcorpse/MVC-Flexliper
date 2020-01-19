<?php
    class emailController extends controller {

        public function index() {
            $dados = array();

            // Verificando se há valores nas variaveis
            if(isset($_POST["email"]) && !empty($_POST["email"])
            && isset($_POST["nome"]) && !empty($_POST["nome"])
            && isset($_POST["mensagem"]) && !empty($_POST["mensagem"])){

                // Atribuindo valores
                $nome = addslashes($_POST["nome"]);
                $email = addslashes($_POST["email"]);
                $mensagem = addslashes($_POST["mensagem"]);

                $to = "contato@flexliper.com.br,";
                $subject = "Contato - teste";
                $body = "Nome: ".$nome."\n"
                        ."Email: ".$email."\n"
                        ."Mensagem: ".$mensagem;
                        
                $header = "From:contato@flexliper.com.br"."\r\n"
                            ."Reply-To:".".$email"."\r\n"
                            ."X-Mailer:PHP/".phpversion();

                if(mail($to, $subject, $body, $header)) {
                    
                    echo "<script>alert('E-mail enviado com sucesso !')</script>";
                    echo "<h2><a href='/home'>Voltar</a></h2>";

                }  
                    
            }
            else {
                echo "<script>alert('Por favor preencha todos os campos ! ')</script>";
                echo "<h2><a href='/home'>Voltar</a></h2>";
                            
            }


        }
    }
?>