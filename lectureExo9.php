<?php

$fichier = fopen("connexions.txt", "r");

while (($ligne = fgets($fichier)) !== false) {
    echo htmlspecialchars($ligne) . "<br>";
}

fclose($fichier);