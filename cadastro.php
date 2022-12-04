<?php
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    // print_r($_POST['nome']);
    // print_r($_POST['email']);
    // print_r($_POST['senha']);
    // print_r($_POST['login1']);

    include_once('conexao.php');

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));
    $matricula = addslashes($_POST['matricula']);

    $result = "INSERT INTO usuarios(nome, email, senha, matricula) values ('$nome', '$email', '$senha', '$matricula')";
    
    if ($connect->query($result) === TRUE) {
        $id = $connect->insert_id;
        echo "Nova inserção realizada com sucesso. Ultimo id inserido é: " . $id;
      } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
      }
}
?>

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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid p-0 bg-image" style="background-image: url('./img/fundologin.jpg');
    height: 100vh">>
        <div class="container justify-content-center">
            <div class="p-3">
                <h1 class="text-center text-dark-50" style="font-size: 4rem;">Cadastro</h1>
                <p style="text-align: center;">Faça parte do sistema, realize seu cadastro.</p>
            </div>
            <div class="container d-flex flex-column justify-content-center">
                <form action="cadastro.php" method="POST">
                <div class="text-center">
                        <input type="text" placeholder="Nome:" class="form-control mx-auto" style="width: 40%;" name="nome">
                    </div>
                    <div class="text-center">
                        <input type="email" placeholder="Email:" class="form-control mx-auto" style="width: 40%;" name="email">
                    </div>
                    <div class="text-center">
                        <input type="password" placeholder="Senha:" class="form-control mx-auto" style="width: 40%;" name="senha">
                    </div>
                    <div class="text-center">
                        <input type="password" placeholder="Confirme a sue senha:" class="form-control mx-auto" style="width: 40%;" name="senha2">
                    </div>
                    <div class="text-center">
                        <input type="text" placeholder="Digite o seu numero de matrícula:" class="form-control mx-auto" style="width: 40%;" name="matricula">
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit">
                    </div>
                </form>
            </div>
        </div>
        <div class="container p-0 d-flex flex-column justify-content-center align-items-center my-lg-5">
            
            <div class="p-3 text-center">
                <h2>Já possui uma conta?</h2>
                <p><strong><a href="Telalogin.php" style="color: #656565;">Clique aqui</a></strong> e realize seu login.</p>
            </div>

        </div>
    </div>
</body>
</html>