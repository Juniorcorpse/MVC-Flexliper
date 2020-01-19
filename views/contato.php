<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flexliper - Fale conosco</title>

    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <link rel="stylesheet" href="assets/css/contato.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="icon" type="imagem/png" href="assets/images/nova logo.PNG" />
 
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: white;">
        <div class="container" style="background-color: white;">
          <div class="navbar-header" style="background-color: white;">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/home" style="background-color: white">Flexliper</a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right" style="background-color: white;">
              <li><a href="/home">Home</a></li>
              <li><a href="/sobre">Sobre</a></li>
              <li><a href="/contato">Contato</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </nav>
    
    <section class="flexcontact text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <img src="assets/images/nova logo.PNG" class="img-circle" alt="Flexliper empresa de TI" width="135" height="135"> <img src="assets/images/flexsuporte.jpg" class="img-circle" alt="Flexliper empresa de TI" width="135" height="135">
            <h2>Como podemos te ajudar ?</h2>
            <p>Tem alguma dúvida sobre nossos serviços ? Entre em contato pelo formulário ou por nossas redes sociais, entraremos em contato brevemente.</p>

            <div class="">
                <ul class="social-network social-circle">
                  <li><a href="https://www.facebook.com/flexliper/" target="_blank" rel=”noopener” class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                  
                  <li><a href="https://www.instagram.com/flexliper/" target="_blank" rel=”noopener” class="icoInstagram" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                </ul>
              </div>
            </div>
            
        </div>
      </div>
    </section>

    <section class="final-site" id="contato" style="margin-top:80px;">
        <div class="container">
          <div class="row">

            <div class="col-md-4"></div>

            <div class="col-md-4">
              <h2>Fale Conosco</h2>
              <form method="POST" action="/email">
                <div class="form-group">
                  <label for="nome">Nome :</label>
                  <input type="text" name="nome" class="form-control" id="nome">
                </div>

                <div class="form-group">
                  <label for="email">Email :</label>
                  <input type="email" name="email" class="form-control" id="email">
                </div>

                <div class="form-group">
                  <label for="nome">Mensagem :</label>
                  <textarea class="form-control" name="mensagem"></textarea>
                </div>

                <button type="submit" class="btn btn-default">Enviar</button>
              </form>
            </div>

            <div class="col-md-4"></div>

          </div>
        </div>
      </section> 

    <footer style="margin-top: 20px;"><p>Todos os direitos reservados</p></footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>