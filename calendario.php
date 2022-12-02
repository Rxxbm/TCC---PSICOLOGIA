<?php
    include_once('conexao.php');
    date_default_timezone_set('America/Sao_Paulo');
    $agora = date('Y-m-d H:i:s');
    $data1 = $_POST['data-sel'];
    $hora = $_POST['hora-cons'];
    $data = date("$data1 $hora");
    echo $data;
    $sql = "INSERT INTO datas(data_disponibilizada, data_disponibilizacao) values ('$data', '$agora')";
    if ($connect->query($sql) === TRUE) {
      $id = $connect->insert_id;
          echo "Nova inserção realizada com sucesso. Ultimo id inserido é: " . $id;
        } else {
          echo "Error: " . $sql . "<br>" . $connect->error;
        }
?>