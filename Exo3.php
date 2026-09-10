<?php
for ($i = 1; $i <= 10; $i++) {
    echo "i : " . $i . "\n";
}



$stock = 5;
echo "Stock actuel : " . $stock . "\n";
while ($stock > 0) {
    $stock--;
    echo "Ordinateur vendu. Stock restant : " . $stock . "\n";
}

?>