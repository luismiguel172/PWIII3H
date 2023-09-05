<?php

    $con = mysqli_connect("localhost","root","","db3hpw3");

    if(mysqli_connect_errno()){

        echo "Falha ao conectar com o MySQL: " . mysqli_connect_error();

    }

    $sql1 = "INSERT INTO dbPesssoas VALUES('ANA','Souza',20)";

    mysqli_query($con,$sql1);

    $sql2 = "INSERT INTO dbPesssoas(nome, sobrenome, idade)VALUES ('Carlos','Costa',21)";

    mysqli_query($con,$sql2);
    mysqli_close($con);

?>
