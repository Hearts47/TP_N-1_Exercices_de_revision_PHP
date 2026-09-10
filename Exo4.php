<?php

$produits = [
    "Clavier" => 49.90,
    "Souris" => 29.90,
    "Écran" => 189.90,
    "Webcam" => 79.90
];

$nombreProduits = 0;

foreach ($produits as $nom => $p) {
    $nombreProduits++;

    if ($p > 50) {
        echo "$nom : $p €\n";
    }
}

echo "Nombre total de produits : " . $nombreProduits;
?>