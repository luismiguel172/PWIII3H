<?php

    $con = mysqli_connect("localhost","root","","db3hpw3");

    if (mysqli_connect_errno()){

        echo "Erro: " . mysqli_connect_error();

    }else{

        $sql = "SELECT * FROM dbPesssoas ";

        $resultado = mysqli_query($con,$sql);

        echo "<h2> Pessoas </h2>";

        while ($pessoa = mysqli_fetch_array($resultado)){

            echo $pessoa['nome'] . " " .$pessoa['sobrenome'] . " " .$pessoa['idade']."<br><br/>";

        }

        mysqli_close($con);

    }