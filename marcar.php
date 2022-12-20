<?php
if(isset($_POST['submit']) && !empty($_POST['id'])){

include_once('conexao.php');
$msg_alunos = addslashes($_POST['msg_alunos']);
$id = addslashes($_POST['id']);
$id_aluno = addslashes($_POST['id_aluno']);
$result = "UPDATE datas SET data_disponivel = '0', id_usuario = '$id_aluno', msg_alunos='$msg_alunos' WHERE id = '$id'";
$sql = "UPDATE usuarios SET permitido = '0' WHERE id = '$id_aluno'";
$res = $connect->query($sql);
if ($connect->query($result) === TRUE) {
     header('Location: pgalunos.php');
   } else {
     echo "Error: " . $sql . "<br>" . $connect->error;
   }
}
?>