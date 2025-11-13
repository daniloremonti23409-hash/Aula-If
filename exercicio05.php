<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 05:</title>
</head>
<body>
    
<form action="" method="post">
<label for="Num">Digite um Numero:</label>
<input type="Number" name="Num" required>

<Button class="Submit"> Verificar</Button>

</form>


<?php


if ($_SERVER["REQUEST_METHOD"]=="POST"){

$Num = $_POST["Num"];


if ($Num %  5 == 0 && $Num % 3 == 0){
echo"Não é multiplo de 3 e 5";

}
else{

echo"É multiplo de 3 e 5";

}
}
?>

</body>
</html>