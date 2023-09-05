<?php

    $con = mysqli_connect("localhost","root","","db3hpw3");

        if(mysqli_connect_errno()){

            echo "Erro: " . mysqli_connect_error();

        }else{

            $sql = "INSERT INTO dbPesssoas Values('$_POST[nome]','$_POST[sobrenome]','$_POST[idade]')";

        if(mysqli_query($con,$sql)){

            echo "Pessoa inserida com sucesso!!!";

            $sql = "SELECT * FROM dbPesssoas ";

            $resultado = mysqli_query($con,$sql);

            echo "<h2> Pessoas </h2>";

            while ($pessoa = mysqli_fetch_array($resultado)){

                echo $pessoa['nome'] . " " .$pessoa['sobrenome'] . " " .$pessoa['idade']."<br><br/>";

        }

        }else{

            echo "Erro ao inserir: ".mysqli_error($con);

        }    

        mysqli_close($con);

    }
?>
