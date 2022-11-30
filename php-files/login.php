<?php
session_start();
    print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

        include_once('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM tabela1 WHERE email = '$email' and senha = '$senha'";

        $resultado = $connect->query($sql);

        if(mysqli_num_rows($resultado) < 1){
            header("Location: login.php");

            print_r($resultado);
        }else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: pgalunos.php');
            print_r($resultado);

        }
    }

?>