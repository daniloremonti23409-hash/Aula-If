<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 01</title>
</head>
<body>
<div class= "container">
<h2>Exercicio 01:</h2>
<form action="" method="post">
<label for="NumPositivo">Digite aqui o numero:</label>
<input type="number" name="NumPositivo"  required>
<button type="submit">Verificar</button>


<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){

$NumPositivo = $_POST["NumPositivo"];

if ($NumPositivo > 0){
    echo"Numero positivo";


}
}

?>


</body>
</html>