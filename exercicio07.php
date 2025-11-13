<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 07</title>
</head>
<body>
    
<h1>Exercicio 07:</h1>
<form action="" method="post">
<label for="Salario">Digite o valor do salario:</label>
<input type="Number" name="Salario" required>

<button class="submit"> Verificar imposto</button>


</form>

<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){

$Salario = $_POST["Salario"];


$Imposto = 0.2750 ;
$resultado = $Salario * $Imposto;


if ($Salario <= 2000){

    $Imposto = 0;
    echo "Isento de Imposto!";
}
else{

echo "<br>$resultado <br><br>";
echo "Seu imposto de renda está acima!";
}

}



?>

</body>
</html>