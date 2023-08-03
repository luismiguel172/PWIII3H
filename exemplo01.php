<?php

    $con = mysqli_connect("localhost","root","","lojinha");

    if (mysqli_connect_errno()){

        echo "Erro ao conectar com a base de dados: ".
        
        mysqli_connect_error();

    }else{

      $sql = "CREATE DATABASE db_2HPW2";

        if(mysqli_query($con,$sql)){
            echo "<br/> Base de Dados criada com sucesso!! ";

        }else{
            echo "<br/> Erro: ".mysqli_error($con);
        }
        mysqli_close($con);
    }

?>