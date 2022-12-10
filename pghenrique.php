<?php
    include_once("conexao.php");
    session_start();
    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: Telalogin.php');
    }
    $logado = $_SESSION['email'];

    $horarios = [date("2022-12-06 14:30:00")];
    if(isset($_GET['sair'])){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: Telalogin.php');
    }
    

    $sql = "SELECT id_usuario, id, data_disponivel, data_disponibilizada, msg_alunos FROM datas ORDER BY data_disponibilizada";
    $result = $connect->query($sql);

    // if ($result->num_rows > 0) {
    // echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // // output data of each row
    // while($row = $result->fetch_assoc()) {
    //     echo "<tr><td>".$row["id_usuario"]."</td><td>".$row["data_disponivel"]." ".$row["data_disponibilizada"]."</td></tr>";
    //     echo ($row['data_disponivel']?"1  foi ativo": "0 foi ativo". "<br>");
    // }
    // echo "</table>";
    // } else {
    // echo "0 results";
    // }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Psicólogo</title>
    <link href="css/style.css" rel="stylesheet">
    
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

    <style>
[type="date"] {
  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
}
[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}

/* custom styles */
body {
 
}
label {
  display: block;
}

    </style>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
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
                        <a href="index.html" class="nav-item nav-link active">Início</a>
                        <a href="service.html" class="nav-item nav-link"> Como você está hoje?</a>
                        <a href="pghenrique.php?sair=true" class="nav-item nav-link">SAIR</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
        <div class="container-fluid bg-registration py-5" style="  padding: 4em; font: 13px/1.4 Geneva, 'Lucida Sans', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 2px;">Página Pessoal do Psicólogo</h6>
                        <h1 class="text-white"><span class="text-primary">Cadastrar </span>Horários</h1>
                    </div>
                    <p class="text-white">AQUI É POSSÍVEL REALIZAR DIVERSAS FUNÇÕES:</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Checar e cadastrar horários de atendimentos para realizar no campus.</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Receber notificações de marcações de horários.</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Editar e atualizar horários cadastrados.</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white text-center m-0">Cadastrar</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form action="calendario.php" method="POST">
                                <div class="form-group">
                                    <label for="dateofbirth">Escolha uma data a ser reservada aos alunos.</label>
                                    <input type="date" name="data-sel" id="dateofbirth" class="form-control p-4" onfocus="this.showPicker()" required>
                                </div>
                                <div class="form-group">
                                    <label for="hora-cons">Escolha um horário a ser reservado aos alunos: </label>
                                    <input id="hora-cons" type="time" name="hora-cons" step="1800" class="form-control p-4" required>
                                </div>

                               
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit" name="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div>
        <h3 style="text-align: center; margin-bottom: 60px ;">Painel de Agendamentos</h3>
    </div>
    <table class="table table-dark my-5" style=" width: 95vw; margin: auto; border-radius: 15px 15px 0px 0px;">
  <thead>
    <td>Aluno</td>
    <td>Horário Agendado</td>
    <td>Situação do Horário</td>
    <td>Mensagem do Aluno</td>
    <td>Ações</td>
  </thead>
  <tbody>
    <?php
    if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $n = $row["id_usuario"];
        if ($n != 0){
            $sql2 = "SELECT nome FROM usuarios WHERE id='$n'";
            $result2 = $connect->query($sql2);
            $data = date('d/m/Y H:i', strtotime($row['data_disponibilizada']));
            $sit = $row['data_disponivel']?"Não Agendado":"Agendado";
            while($row1 = $result2->fetch_assoc()) {
            $nome = !empty($row1["nome"])? $row1['nome']:"Vazio";
  }
        }else{
            $data = date('d/m/Y H:i', strtotime($row['data_disponibilizada']));
            $sit = $row['data_disponivel']?"Não Agendado":"Agendado";
            $nome = "Vazio";
        }
        // echo "<tr> <th>". $row["id_usuario"] . "</th><td>".$row["data_disponibilizada"]."</td><td>".$row["data_disponivel"]?"Horário Disponível": "Horário Ocupado";."</td></tr>";
        echo "<tr><td>".$nome."</td><td>".$data."</td>" . "<td>".$sit."</td><td>".$row["msg_alunos"]."</td>" ;
        echo "<td>
            <a class='btn btn-primary' href='delete.php?id=$row[id]'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check-lg' viewBox='0 0 16 16'>
  <path d='M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z'/>
</svg>
</a>
        </td></tr>";
    }
    }
    ?>
    <!-- <tr>
      <th scope="row">3</th>
      <td colspan="2" class="table-active">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
        <!-- Corpo da página -->
</body>
</html>