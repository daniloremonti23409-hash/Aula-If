<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div class="Container">
<div class="MaiorNumero">
<form action="" method="post">
<label for="Num1">Numero 01:</label>
<input type="number" name="Num1" required>

<label for="Num2">Numero 02:</label>
<input type="number" name="Num2" required>

<label for="Num3">Numero 03:</label>
<input type="number" name="Num3" required>

<button type="submit"> Verificar</button>

</form>


</div>


</div>
  

<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){

$Num1 = $_POST["Num1"];
$Num2 = $_POST["Num2"];
$Num3 = $_POST["Num3"];

if ($Num1 > $Num2 && $Num1 > $Num3){
echo"O numero maior é : $Num1";

}
elseif ($Num2 > $Num3 && $Num2 < $Num1){
    
    echo "O numero maior é : $Num2";
}

else{

    echo "O numero maior é: $Num3";
}
}
?>


</body>
</html>