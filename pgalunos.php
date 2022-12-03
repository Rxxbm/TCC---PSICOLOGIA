<?php
    session_start();
   include_once('conexao.php');
    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: Telalogin.php');
    }
    $logado = $_SESSION['email'];
    if(isset($_GET['sair'])){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: Telalogin.php');
    }
    
    $result_events = "SELECT id, data_disponibilizada FROM datas";
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
    <link href='css/fullcalendar.min.css' rel='stylesheet' />
    <link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <!-- <link href='css/personalizado.css' rel='stylesheet' /> -->
    <script src='js/moment.min.js'></script>
    <script src='js/jquery.min.js'></script>
    <script src='js/fullcalendar.min.js'></script>
    <script src='locale/pt-br.js'></script>
    <style>
        .fc-day-number{
            color: black;
        }
    </style>
    <script>
			$(document).ready(function() {
				$('#calendar').fullCalendar({
					header: {
						left: 'prev,next today',
						center: 'title',
						right: 'month,agendaWeek,agendaDay'
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
								id: '<?php echo $row_events['id']; ?>',
								title: '<?php echo "Horário Disponível"; ?>',
								start: '<?php echo $row_events['data_disponibilizada']; ?>',
								end: '<?php echo $row_events['data_disponibilizada']; ?>',
								color: '<?php echo "#007bff"; ?>',
								},<?php
							}
						?>
					]
				});
			});
	</script>
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
                            <a href="index.html" class="nav-item nav-link">Retornar ao Início</a>
                            
                        </div>
                        <a href="pgalunos.php?sair=true" class='nav-item nav-link' style="color:red;">Sair</a>
                    </div>
                    
                </nav>
            </div>
    </div>
<div class="container py-5">
    <div class="text-center mb-3 pb-3">
        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">TODAS AS INFORMAÇÕES COLOCADAS FICARÂO RESTRITAS À VISUALIZAÇÃO DO PSICÓLOGO.</h6>
        <h2>HORÁRIOS DISPONÍVEIS AQUI!</h2>
    </div>
</div>
<div id='calendar' style="max-width: 50%; margin: auto; margin-top: -30px;"></div>

<!--     
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="contact-form bg-white" style="padding: 30px;">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="form-row">
                        <div class="control-group col-sm-6">
                            <input type="text" class="form-control p-4" id="name" placeholder="Nome" required="required" data-validation-required-message="Insira seu nome!" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group col-sm-6">
                            <input type="email" class="form-control p-4" id="email" placeholder="Email" required="required" data-validation-required-message="Insira seu Email!" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <select class="custom-select px-4" style="height: 47px;" required="required" data-validation-required-message="Selecione sua Turma!">
                                <option selected>Selecione a sua turma</option>
                                <option value="1">MAM 111</option>
                                <option value="2">MAM 121</option>
                                <option value="3">MAM 131</option>
                                <option value="4">MAM 141</option>
                                <option value="5">MAM 151</option>
                                <option value="6">MAM 161</option>
                                <option value="7">INF 211</option>
                                <option value="8">INF 221</option>
                                <option value="9">INF 222</option>
                                <option value="10">INF 231</option>
                                <option value="11">INF 241</option>
                                <option value="12">INF 251</option>
                                <option value="13">INF 261</option>
                                <option value="14">INF 141</option>
                                <option value="15">MAB 311</option>
                                <option value="16">MAB 321</option>
                                <option value="17">MAB 331</option>
                                <option value="18">MAB 341</option>
                                <option value="19">TRC 311</option>
                                <option value="20">TRC 321</option>
                                <option value="21">TRC 331</option>
                                <option value="22">TRC 341</option>
                                <option value="23">TRC 351</option>
                                <option value="24">TRC 361</option>
                            </select>

                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Data, horario ou motivo específico." required="required" data-validation-required-message="Preencha esse espaço"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Enviar Agendamento</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
</div>

</body>
</html>