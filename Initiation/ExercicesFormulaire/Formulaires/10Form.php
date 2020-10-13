<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire10</title>
</head>
<!-- 10.	Nous avons une liste de produits dans un array. Créer un code PHP capable d'afficher une liste déroulante contenant tous ces éléments.  -->

<body>

    <h2>Voir la liste de produits</h2>
    <?php
    $productList = [
        "Computers",
        "Mobile phones",
        "Cameras",
        "Washing machines and dishwashers",
        "Clothing",
        "Sports equipment",
        "Kitchen utensils",
        "Plants",
        "Perfumes and cosmetics"
    ];
    ?>
    <form>
        <select name="optionProduits">
            <?php

            foreach ($productList as $value) {
                echo '<option>' . $value . '</option>';
            }
            ?>
        </select>
    </form>
</body>

</html>