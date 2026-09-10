<?php

function calculerTTC (float $prixHT) : float {
    return $prixHT * 1.20;
}








function calculerRemise (float $prix, float $remise): float {

    return $prix - ($prix * $remise);

}



echo calculerRemise(200, 0.10);





?>