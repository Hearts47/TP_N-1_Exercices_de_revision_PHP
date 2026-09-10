<?php

$prix = 600;

if ($prix < 50) {
    echo "Aucune Réduction" . " Nouveau prix :" . $prix;
} elseif ($prix >= 50 && $prix < 100) {
    $prix = $prix * 0.95;
    echo "Réduction de 5 %" . " Nouveau prix :" . $prix;
} else {
    $prix = $prix * 0.90;
    echo "Réduction de 10 %" . " Nouveau prix :" . $prix;
}






?>