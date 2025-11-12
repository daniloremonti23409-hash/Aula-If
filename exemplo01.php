<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $idade = $_POST["idade"];

    if($idade >= 18){
      //$mensagem="Você é maior de idade";
      //$class = "Maior";
      echo"Você é maior de idade";

    }
else{
    echo "Você é menor de idade";
}

}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<div class= "container">
<h2>Verifique a sua idade</h2>
<form action="" method="post">
<label for="idade">Idade:</label>
<input type="number" name="idade" min="0" max="110" required>
<button type="submit">Verificar</button>




</form>
</div>

</body>
</html>