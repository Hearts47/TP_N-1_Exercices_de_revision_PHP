<?php

require "connexionExo8.php";

$sql = "select * from produit";
$stmt = $pdo->query($sql);
$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($produits as $produit) {
    echo $produit['nom'] . " - " . $produit['prix'] . " €<br>";
}