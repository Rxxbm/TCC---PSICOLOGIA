<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Psicologia - IFRJ Campus Arraial</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="fontawesome-free-6.2.0-web/css/all.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
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
                        <a href="index.html" class="nav-item nav-link active">Início</a>
                        <a href="service.html" class="nav-item nav-link"> Como você está hoje?</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Conecte-se</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="Telalogin.php" class="dropdown-item">Login</a>
                                <a href="cadastro.php" class="dropdown-item">Cadastro</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </nav>
        </div>
    </div>
  
    <div class="container-fluid p-0 bg-image" style="background-image: url('./img/fundologin.jpg');
    height: 100vh">>
        <div class="container justify-content-center">
            <div class="p-3">
                <h1 class="text-center text-dark-50" style="font-size: 4rem;">Login</h1>
                <p style="text-align: center;">Faça seu login e acesse o sistema.</p>
            </div>
            <div class="container d-flex flex-column justify-content-center">
                <form action="login.php" method="POST">
                    <div class="text-center">
                        <input type="text" placeholder="Email:" class="form-control mx-auto" style="width: 40%;" name="email">
                    </div>
                    <div class="justify-content-center my-1 text-center">
                        <input type="password" placeholder="Senha:" class="form-control mx-auto" style="width: 40%;" name="senha">
                        <span class="help-block">Esqueceu a senha?</span>
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit">
                    </div>
                </form>
            </div>
        </div>
        <div class="container p-0 d-flex flex-column justify-content-center align-items-center my-lg-5">
            
            <div class="p-3 text-center">
                <h2>Não possui uma conta?</h2>
                <p><strong><a href="cadastro.php" style="color: #656565;">Clique aqui</a></strong> e realize um cadastro.</p>
            </div>

        </div>
    </div>
</body>
</html>