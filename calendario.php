<?php
    include_once('conexao.php');
    $data = date("2022-12-06 14:30:00");
    $sql = "INSERT INTO datas(data_disponibilizada) values ('$data')";
    if ($connect->query($sql) === TRUE) {
        $id = $connect->insert_id;
        echo "Nova inserção realizada com sucesso. Ultimo id inserido é: " . $id;
      } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
      }
?>