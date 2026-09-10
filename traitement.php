<?php
/**
 * Nettoie une entrée texte (trim + échappement HTML)
 *
 * @param string $data
 * @return string
 */
function nettoyer(string $data): string {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

$produit  = isset($_POST['produit']) ? nettoyer($_POST['produit']) : '';
$quantite = isset($_POST['quantite']) ? (int) $_POST['quantite'] : 0;
$prix = isset($_POST['prix']) ? (int) $_POST['prix'] : 0;


if (!empty($produit) && $quantite > 0 && $prix > 0) {
    $total = $quantite * $prix;
    echo "Commande : $quantite x $produit<br>" ;
    echo "Prix total : $total €";
} else {
    echo "Formulaire incomplet.";
}
?>