<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 09</title>
</head>
<body>
    
<form action="" method="post">
<label for="km">Digite a distancia de viagem:</label>
<input type="number" name="km" required>

<label for="Viagem">Escolha o seu tipo de viagem:</label>
<select name="Viagem" id="">
<option value="Curta">Curta</option>
<option value="Longa">Longa</option>
</select>



<button class="Submit">Calcular</button>


</form>


<?php


if ($_SERVER["REQUEST_METHOD"]=="POST"){

$km = $_POST["km"];


$Viagem = $_POST["Viagem"];






if ( $Viagem == "Curta"){
$km = $km * 0.50 ;

}
else {

 $km = $km * 0.35;
 
}


echo "O valor da Sua viagem ficou $km";



}


?>

</body>
</html>