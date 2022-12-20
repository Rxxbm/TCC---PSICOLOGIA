<?php
    if(!empty($_GET['id'])){
        include_once('conexao.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM datas WHERE id='$id'";
        $res = $connect->query($sql);
        if($res->num_rows > 0){
            $row = $res->fetch_assoc(); // linha da datas
            $sql2 = "UPDATE datas SET confirm = '1' WHERE id='$id'";
            $id_usuario = $row['id_usuario'];
            $sql3 = "UPDATE usuarios set permitido = '1' WHERE id='$id_usuario'";
            $res2 = $connect->query($sql2);// entra a mudanca nas datas
            $res4 = $connect->query($sql3);// entra a mudanca no usuarios
        }
    }
     header("Location: pghenrique.php");
?>