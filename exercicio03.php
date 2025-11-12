<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <div class="valorCompra">
        <form action="" method="post">
<label for="ValorCompra">Digite aqui o valor da sua compra:</label>
<input type="Number" name="ValorCompra" required>

    </div>


</div>

</form>

<?php

if ( $_SERVER["REQUEST_METHOD"]=="POST" ) {


$ValorCompra = $_POST["ValorCompra"];

if ($ValorCompra > 100 ) {

    echo"Você ganhou um cupom de desconto!!";

}
}


?>

</body>
</html>