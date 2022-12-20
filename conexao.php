<?php
$hostname = "localhost";
$bancodedados = "psicologiaifrj";
$usuario = "root";
$senha = "";

$connect = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($connect-> connect_errno){
    echo "Falha ao conectar o banco: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
}else{
   
}
