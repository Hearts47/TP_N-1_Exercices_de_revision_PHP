<?php

require __DIR__ . "/config.php";

$produits = [];

if (isset($_POST["prixMax"])) {

    $prixMax = (float) $_POST["prixMax"];

    $sql = "SELECT *
            FROM produit
            WHERE prix <= :prixMax";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        "prixMax" => $prixMax
    ]);

    $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>

<form method="post">

    <label>Prix maximum :</label>

    <input
        type="number"
        name="prixMax"
        step="0.01"
        min="0"
        required
    >

    <button type="submit">Rechercher</button>

</form>

<?php if (isset($_POST["prixMax"])): ?>

    <?php if (count($produits) > 0): ?>

        <table border="1">

            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Stock</th>
            </tr>

            <?php foreach ($produits as $produit): ?>

                <tr>
                    <td><?= htmlspecialchars($produit["nom"]) ?></td>
                    <td><?= $produit["prix"] ?> €</td>
                    <td><?= $produit["stock"] ?></td>
                </tr>

            <?php endforeach; ?>

        </table>

    <?php else: ?>

        <p>Aucun produit correspondant.</p>

    <?php endif; ?>

<?php endif; ?>