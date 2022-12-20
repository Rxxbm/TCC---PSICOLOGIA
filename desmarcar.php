<?php
    if(!empty($_GET['id'])){
        include_once('conexao.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM datas WHERE id='$id'";
        $res = $connect->query($sql);
        if($res->num_rows > 0){
            $sql2 = "UPDATE datas SET data_disponivel = '1', id_usuario = '0', msg_alunos='' WHERE id = '$id'";
            $res2 = $connect->query($sql2);
        }
    }
     header("Location: pgalunos.php");
?>