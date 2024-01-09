
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="pageproduit.php" method="get">
        <input type="text" name="VotreNom">
        <input type="submit" value="Envoyer">
    </form>

<div class="titre">
    <h1>Computer Store</h1>
</div>

<div class="ordinateur">

<div class="block1">
    <img src="MSI Raider.jpg" alt="">
    <h2>MSI  Raider</h2>
    <h3>1999,66 $</h3>
</div>

<div class="block2">
    <img src="mac book pro.avif" alt="">
    <h2>MacBook Pro</h2>
    <h3>6645,00 $</h3>
</div>

<div class="block3">
    <img src="AMD Threadripper.jpeg" alt="">
    <h2>AMD Threadripper</h2>
    <h3>16 474,90 $</h3>
</div>

</div>

</body>
</html>
<?php

 
$connexion = new mysqli('localhost', 'root', '', 'computer store');

$requet = "SELECT * FROM Produits";

$Produits = $connexion->query($requet);
 
foreach ($Produits as $Produits) {
    echo $Produits['Nom'];
    echo " ";
    echo $Produits['Prix'] . " €";
    echo "<br>";
}
 
$connexion->close();


?>

