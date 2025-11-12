<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
</head>
<body>
    
<h2>Exercicio 04:</h2>
<form action="" method="post">
<label for="TempAtual">Coloque a Temperatura Atual:</label>
<input type="number" name="TempAtual" required>
<button type="submit"> Verificar temperatura</button>

</form>


<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){

$TempAtual = $_POST["TempAtual"];


if ($TempAtual > 30){
    echo"<h3> Está Quente Hoje!!!</h3>";


}
}

?>

</body>
</html>