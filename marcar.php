<?php
if(isset($_POST['submit']) && !empty($_POST['id'])){

// print_r($_POST['nome']);
// print_r($_POST['email']);
// print_r($_POST['senha']);
 print_r($_POST['id']);

include_once('conexao.php');

$id = addslashes($_POST['id']);

$result = "UPDATE datas SET data_disponivel = '0', cor = 'gray', mensagem = 'Horario Ocupado' WHERE id = '$id'";

if ($connect->query($result) === TRUE) {
     header('Location: pgalunos.php');
   } else {
     echo "Error: " . $sql . "<br>" . $connect->error;
   }
}
?>