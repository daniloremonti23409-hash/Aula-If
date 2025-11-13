<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 10:</title>
</head>
<body>
    
<form action="" method="post">
<label for="Salario"> digite seu salario aqui:</label>
<input type="Number" name="Salario" required>

<label for="ValorCompra">digite o Valor da Compra:</label>
<input type="Number" value="ValorCompra" required>

<button class="Submit">Calcular</button>

</form>


<?php


if ( $_SERVER["REQUEST_METHOD"] == "POST" ){


$Salario = $_POST["Salario"];
$ValorCompra = $_POST["ValorCompra"];

if ($ValorCompra <= $Salario * 0.40){

    echo "Seu crédito está aprovado";

}
else {
    echo  "Crédito não aprovado";

}
}

?>

</body>
</html>