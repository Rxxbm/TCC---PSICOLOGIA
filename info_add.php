<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações Adicionais!</title>
    <link href="css/style.css" rel="stylesheet">
       <!-- Favicon -->
       <link href="img/favicon.ico" rel="icon">

       <!-- Google Web Fonts -->
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
   
       <!-- Font Awesome -->
       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
   
       <!-- Libraries Stylesheet -->
       <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
       <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
   
       <!-- Customized Bootstrap Stylesheet -->
       <link href="css/style.css" rel="stylesheet">
</head>
<body>
        <!-- CABEÇALHO INICIO -->
        <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">PSICOLOG</span>IA</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        
                        <a href="index.php" class="nav-item nav-link active">Início</a>
                        <a href="emocoes.php" class="nav-item nav-link"> Como você está hoje?</a>
                            <?php
                        session_start();
                        include_once('conexao.php');
                                if ((isset($_SESSION['email']) == true) && (isset($_SESSION['senha']) == true) && (!empty($_SESSION['email'])) && (!empty($_SESSION['senha']))){
                                 $email = $_SESSION['email'];
                                $senha = ($_SESSION['senha']);
                                $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
                                
                                $resultado = $connect->query($sql);
                                $row = $resultado->fetch_assoc();
                                 if($row['psicologo'] != 1){
                                    echo"  <a href='pgalunos.php' class='nav-item nav-link'>Agendar Horário</a>";
                                 }else{
                                    echo"<a href='pghenrique.php' class='nav-item nav-link'>Cadastrar Horários</a>";
                                 }
                                 
                                }else{
                                    ?>
                                    <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Conecte-se</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="Telalogin.php" class="dropdown-item">Login</a>
                                <a href="cadastro.php" class="dropdown-item">Cadastro</a>
                            </div>
                        </div>
                                <?php
                                }
                            ?> 
                        
                    </div>
                </div>
            </nav>
        </div>
    </div>
         <!-- Header Start -->
    <div class="container-fluid page-header" id="infadd" >
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">INFORMAÇÕES ADICIONAIS</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white"> Olá, sinta-se à vontade.</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <br>
    <br>
        <!--cards -->
        
        <hr>
        <div>
            <h3 style="text-align: center; ">Painel de Suporte</h3>
            <p style="text-align: center;">Seja bem vindo(a)</p>
        </div>
    
    <div class="container my-5">
        
        <div class="row row-cols-1 row-cols-md-3">
          <div class="col">
            <div class="card h-100">
              <img src="img/img600.jpg" class="card-img-top"
                alt="Hollywood Sign on The Hill" />
              <div class="card-body">
                <h5 class="card-title text-center">8 Terapias Alternativas do SUS com o poder de mudar sua Saúde Mental</h5>
                <p class="card-text" style="font-size: 14px;">
                  Desde algum tempo, o Sistema Único de Saúde oferece, dentre seus serviços, terapias alternativas para que sejam utilizadas em complemento às práticas conhecidas da medicina tradicional. São chamadas pelo Ministério da Saúde de integrativas.
                  
                São práticas que diferem do que conhecemos como canônico da medicina, e que ajudaram, ao longo dos anos, a romper alguns modelos e estereótipos, como a ideia antiga de que saúde gira apenas entorno da chave médico, hospital, remédio e doença.
                Buscou-se ampliar o acesso a serviços de qualidade, entendendo que por meio dessas práticas integrativas aos tratamentos conhecidos do SUS, a saúde das pessoas, incluindo a saúde mental, pudesse ter ainda mais respaldo e capacidade de melhora.
                </p>
                <div class="d-flex justify-content-center align-items-end">
                    
                    <a href="https://blog.cenatcursos.com.br/8-terapias-alternativas-do-sus-com-o-poder-de-mudar-sua-saude-mental/" target="external"><button type="button" class="btn btn-info btn-rounded align-bottom" style="vertical-align: bottom;">Info</button></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="img/img600.jpg" class="card-img-top"
                alt="Palm Springs Road" />
              <div class="card-body">
                <h5 class="card-title text-center">App de meditação indicada pelo psicólogo do campus</h5>
                <p class="card-text">Cuidar da saúde mental é um assunto cada vez mais necessário hoje em dia. Ainda mais para quem busca na meditação uma forma de trazer equilíbrio à rotina do dia a dia. 

                  Então, se você quer começar a meditar agora mesmo é só dar uma olhada nesta dica de app que nós selecionamos pra você!
                  
                  Com o Lojong é possível fazer diversos programas de treinamento para quem já tem ou deseja adquirir o hábito de meditar a partir de temas como "acolhendo a ansiedade", "dormir bem", "foco", entre muitos outros.</p>
                <div class="d-flex justify-content-center align-items-end">
                    
                    <a href="https://youtu.be/oDrvvJlKY9M"><button type="button" class="btn btn-info btn-rounded align-bottom">Info</button></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="img/img600.jpg" class="card-img-top"
                alt="Los Angeles Skyscrapers" />
              <div class="card-body">
                <h5 class="card-title text-center">App recomendado pelo psicólogo do campus</h5>
                <p class="card-text"> o Insight Timer é o aplicativo gratuito número um para Meditação, Sono, Ansiedade e Atenção Plena em todo o mundo. É um dos "Aplicativos do Ano" da revista TIME e da revista Women's Health e, de acordo com Tristan Harris, especialista em ética em tecnologia, é o "Aplicativo mais feliz do mundo".
               O Insight Timer contém meditações guiadas e palestras lideradas pelos maiores especialistas em meditação e mindfulness do mundo, neurocientistas, psicólogos e professores de universidades conceituadas como Stanford, Harvard e Universidade de Oxford, bem como faixas musicais de artistas de renome mundial.</p>
                  <div class="d-flex justify-content-center align-items-end">
                      <a href="https://insighttimer.com/br"><button type="button" class="btn btn-info btn-rounded">Info</button></a>
                  </div>
              </div>
            </div>
          </div>
          
          <div class="col">
            <div class="card h-100">
              <img src="img/img600.jpg" class="card-img-top"
                alt="Skyscrapers" />
              <div class="card-body">
                <h5 class="card-title text-center">Rotina</h5>
                <p class="card-text">
                  A rotina é o hábito de sempre fazermos as mesmas coisas do mesmo modo e, por isso, erroneamente, ela é confundida a uma vida sem graça e tediosa. Porém, estabelecer uma rotina em sua vida pode trazer liberdade e organização para suas tarefas. Apesar de se ter uma rotina, dificilmente sua vida será igual.
                </p>
                <div class="d-flex justify-content-center align-items-end">
                      <a href="https://youtu.be/SQ8VefWwujE"><button type="button" class="btn btn-info btn-rounded">Info</button></a>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div>
        <!--  RODAPE INICIO-->
        <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px; display: inline-block;">
            <div class="row pt-5">
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="" class="navbar-brand">
                        <h1 class="text-primary"><span class="text-white">PSICOLOG</span>IA</h1>
                    </a>
                    <p>SISTEMA DE APOIO PSICOLÓGICO
                        <BR> CAMPUS ARRAIAL DO CABO
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5" style="display: inline-block;">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contate-nos</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>R. José Pinto de Macedo, s/n - Prainha, Arraial do Cabo - RJ, 28930-000</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Canal de Notícias</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Seu e-mail">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Cadastre-se</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    
    
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
        <!-- RODAPÉ FINAL -->
    
    
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
    
    
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>
    
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
    
    </html>