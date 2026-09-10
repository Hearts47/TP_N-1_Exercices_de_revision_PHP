<?php



define("TVA", 0.20);
define("SAUT", "\n");
$produit = "Ordinateur portable";
$prixHT = 750;


function prixTTC(float $ht): float {
    return $ht * (1 + TVA);
}


echo $produit, SAUT;
echo "Prix HT : " . $prixHT . " €" . SAUT;
echo "Prix TTC : " . prixTTC($prixHT). " €" . SAUT;




?>
