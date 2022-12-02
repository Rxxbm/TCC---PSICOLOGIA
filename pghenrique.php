<?php
    session_start();
    print_r($_SESSION);
    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: cadastro.php');
    }
    $logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Psicólogo</title>
    <link href="css/style.css" rel="stylesheet">
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
                label {
        display: block;
        }
            input {
            border: 1px solid #c4c4c4;
            border-radius: 5px;
            background-color: #fff;
            padding: 3px 5px;
            box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
            width: 190px;
            }
    </style>
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
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Conecte-se</a>
                                <div class="dropdown-menu border-0 rounded-0 m-0">
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contato</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
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
                            <form>
                                <div class="form-group">
                                    <label for="dateofbirth">Entre com uma data a ser reservado.</label>
                                    <input type="date" name="dateofbirth" id="dateofbirth" class="form-control p-4">
                                </div>
                                <div class="form-group">
                                    <label for="hora-cons">Escolha o horário da consulta: </label>
                                    <input id="hora-cons" type="time" name="hora-cons" step="2" class="form-control p-4">
                                </div>

                                <div class="form-group">
                                    <label for="">Visualizar Horários Cadastrados</label>
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Horários Cadastrados</option>
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
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Corpo da página -->
        
</body>
</html>