<?php
    include_once "CalculosMedidas.php";
    include_once "Medida.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Calculo Medida</title>
</head>
<body>

    <h1> Conversor de Unidades </h1>

    <form method="get">
        <p>Digite o Numero:</p>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Numero">

        <p>Qualidade do Serviço:</p>
        <select class="form-select" aria-label="Default select example" name="MedidaAtual">
            <option value="m">Metro(s)</option>
            <option value="km">Quilometros(s)</option>
            <option value="cm">Centimetros(s)</option>
            <option value="mm">Milimetros(s)</option>
        </select>

        <p>Qualidade do Serviço:</p>
        <select class="form-select" aria-label="Default select example" name="MedidaPosterior">
            <option value="m">Metro(s)</option>
            <option value="km">Quilometros(s)</option>
            <option value="cm">Centimetros(s)</option>
            <option value="mm">Milimetros(s)</option>
        </select>

        <button type="submit" class="btn btn-success">Converter</button>
    </form>

    <p>Resultado:</p>
    <input type="text" class="form-control" id="floatingInputDisabled" name="Resultado" value="<?= $Resultado ?>" disabled>
    
</body>
</html>