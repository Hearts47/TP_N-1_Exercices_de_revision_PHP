<?php

$fichier = fopen("connexions.txt", "a");

fwrite($fichier, "sebastien;31/08/2026 14:30\n");

fclose($fichier);