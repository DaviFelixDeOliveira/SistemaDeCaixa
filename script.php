
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="stylePhp.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet">   
</head>

<body>

<div class="nota" >

<h4 class="text">volte sempre!</h4>
<?php

$nome = $_POST['nome'];
$vlProduto1 = $_POST['vlProduto1'];
$vlProduto2 = $_POST['vlProduto2'];
$qtGasta =  $vlProduto1 + $vlProduto2;
$vlPago = $_POST['vlPago'];
$vlTroco = $vlPago - $qtGasta;
    

echo "nome: $nome.";
echo "<br>";
echo "$nome gastou $qtGasta r$.";
echo "<br>";
echo "sobraram $vlTroco r$ de troco para $nome      .";
?> 
</div>

 


    

</body>
</html>



