<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
</head>
<body>
    
<form action="" method="post">
<label for="Num">digite Aqui um numero:</label>
<input type="number" name="Num" required>
<button type="submit">Verificar</button>


</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$Num = $_POST["Num"];


    
}



?>

</div>

</body>
</html>