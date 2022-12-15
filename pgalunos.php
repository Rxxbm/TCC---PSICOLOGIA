<?php
    session_start();
   include_once('conexao.php');
    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: Telalogin.php');
    }
    $logado = $_SESSION['email'];
    $senha = $_SESSION['senha'];
    if(isset($_GET['sair'])){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: Telalogin.php');
    } 
    $sql = "SELECT id, nome FROM usuarios WHERE email = '$logado' and senha = '$senha'";
    
        $resultado = $connect->query($sql);
        $row = $resultado->fetch_assoc();
        if(mysqli_num_rows($resultado) < 1){
            print_r($resultado);
        }else{
            $id_aluno = ($row['id']);
        }
    $result_events = "SELECT id, data_disponibilizada, data_disponivel, id_usuario FROM datas";
    $q = "SELECT id, data_disponibilizada, data_disponivel, msg_alunos FROM datas WHERE id_usuario='$id_aluno'";
    $result = $connect->query($q);
    $resultado_events = mysqli_query($connect, $result_events);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do aluno</title>
    <link href="css/style.css" rel="stylesheet">
    <script src="js/main.js"></script>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href='css/fullcalendar.min.css' rel='stylesheet' />
    <link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print'/>
    <!-- <link href='css/personalizado.css' rel='stylesheet' /> -->
    <script src='js/moment.min.js'></script>
    <script src='js/jquery.min.js'></script>
    <script src='js/fullcalendar.min.js'></script>
    <script src='locale/pt-br.js'></script>
    
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
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
    <style>
        .fc-day-number{
            color: black;
        }
        .fc-event{
           cursor: pointer;
        }
    </style>
    <script>
			$(document).ready(function() {
				$('#calendar').fullCalendar({
                    eventStartEditable: false,
					eventDurationEditable: false,
					header: {
						left: 'prev,next today',
						center: 'title',
						right: 'month,agendaWeek,agendaDay'
					},
                    eventClick: function(events){
                        if(events.color !== "gray"){
                            $('#visualizar').modal('show');
                        }
                        
                        $('#visualizar #title').text(events.title);
                        $('#visualizar #start').text(events.start.format('DD/MM/YYYY HH:mm:ss'));
                        $('#visualizar #id').val(events.id);
                        $('#visualizar #id_aluno').val(<?php echo $id_aluno;?>);
                            return false;
                    },
					defaultDate: Date(),
					navLinks: true, // can click day/week names to navigate views
					editable: true,
					eventLimit: true, // allow "more" link when too many events
					events: [
						<?php
							while($row_events = mysqli_fetch_array($resultado_events)){
								?>
								{
                                    //condição ? codigoUm : codigoDois;

								id: '<?php echo $row_events['id']; ?>',
								title: '<?php echo $row_events['data_disponivel']?"Horário Disponível": "Horário Ocupado";?>',
								start: '<?php echo $row_events['data_disponibilizada']; ?>',
								end: '<?php echo $row_events['data_disponibilizada']; ?>',
								color: '<?php echo $row_events['data_disponivel']?"#007bff": "gray"; ?>',
								},<?php
							}
						?>
					],
                selectable: true,
                selectHelper: true,
				});
			});
	</script>
</head>
<body>   
    
<div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detalhes do Evento</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="marcar.php" method="POST">
                        
                            <dl class="row">
                                <dt class="col-sm-3">Situação:</dt>
                                <dd class="col-sm-9" id="title"></dd>
                                <dt class="col-sm-3">Horário da Consulta:</dt>
                                <dd class="col-sm-9" id="start"></dd>
                                <input type="hidden" name="id" id="id">
                                <input type="hidden" name="id_aluno" id="id_aluno">
                            </dl>
                            <label for="msg_aluno">Digite uma mensagem para o Psicólogo:</label>
                            <textarea name="msg_alunos" id="msg_alunos" cols="90" rows="4" style="resize: none; width: 90%;"></textarea> <br>
                            <button class="btn btn-warning" id="marcar" name="submit">Marcar Consulta</button>
                    </form>
                    </div>
                </div>
            </div>
    </div> 
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
                        <a href="pgalunos.php?sair=true" class="nav-item nav-link">SAIR</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Header Start -->
    <div class="container-fluid page-header1">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">PÁGINA DO ALUNO</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white"> AQUI VOCÊ PODE MARCAR CONSULTAS E COMUNICAR-SE COM O PSICÓLOGO</a></p>
                </div>
            </div>
        </div>
    </div>
<div class="container py-5">
    <div class="text-center mb-3 pb-3">
        <h1 class='my-3'> <?php echo "Olá, " . $row['nome'];?> </h1>
        <h6 class="text-uppercase my-3" style="letter-spacing: 5px; color: gray;">TODAS AS INFORMAÇÕES COLOCADAS FICARÂO RESTRITAS À VISUALIZAÇÃO DO PSICÓLOGO.</h6>
        <h2>HORÁRIOS DISPONÍVEIS AQUI!</h2>
    </div>
</div>
<div id='calendar' style="max-width: 50%; margin: auto; margin-top: -30px;"></div>
</div>
<table class="table table-dark my-5" style=" width: 95vw; margin: auto; border-radius: 15px 15px 0px 0px;">
  <thead>
    <td>Horário Agendado</td>
    <td>Mensagem</td>
    <td>Ações</td>
  </thead>
  <tbody>
    <?php
    if ($result->num_rows > 0) {
    while($row3 = $result->fetch_assoc()) {
        $data = date('d/m/Y H:i', strtotime($row3['data_disponibilizada']));
        echo "<tr><td>".$data."</td>" . "<td>".$row3['msg_alunos']."</td>" ;
        echo "<td>
            <a class='btn btn-primary text-dark' href='desmarcar.php?id=$row3[id]'>
        Cancelar Agendamento
</a>
        </td></tr>";
    }
    }
    ?>

  </tbody>
</table>
</body>
</html>