<?php
        include_once "CalculoGorjeta.php";
        include_once "Gorjeta.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Calculo Gorjeta</title>

</head>
<body>

    <h1> Calculadora de Gorjeta </h1>

    <form method="get">
        <p>Valor da Conta:</p>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Valor">

        <p>Qualidade do Serviço:</p>
        <select class="form-select" aria-label="Default select example" name="Qualidade">
            <option selected>Selecione a Qualidade do Serviço</option>
            <option value="10">Excelente - 10%</option>
            <option value="8">Ótimo - 8%</option>
            <option value="5">Bom - 5%</option>
            <option value="2">Ruim - 2%</option>
        </select>

        <button type="submit" class="btn btn-success">Calcular Gorjeta</button>
    </form>

    <p>Valor da Gorjeta:</p>
    <input type="text" class="form-control" id="floatingInputDisabled" name="ValorGorjeta" value="<?= $ValorGorjeta ?>" disabled>

    <p>Valor Total:</p>
    <input type="text" class="form-control" id="floatingInputDisabled" name="ValorTotal" value="<?= $ValorTotal ?>" disabled>
    
</body>
</html>