<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
<label for="Num">Digite um numero aqui:</label>
<input type="number" name="Num" required>

<button class="Submit"> Verificar</button>

</form>


<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){

$Num = $_POST["Num"];

if ($Num % 10 == 0){

echo"O ultimo digito é zero";

}
else{

    echo " o ultimo digito não é zero";
}
}

?>


</body>
</html>