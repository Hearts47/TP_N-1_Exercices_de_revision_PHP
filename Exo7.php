<?php

$nom = htmlspecialchars(trim($_POST['nom']), ENT_QUOTES, 'UTF-8');

echo "Bonjour " . $nom;


?>
