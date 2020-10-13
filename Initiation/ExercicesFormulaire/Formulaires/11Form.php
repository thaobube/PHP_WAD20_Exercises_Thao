<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire11</title>
</head>
<!-- 11.	Remplacez la liste déroulante pour des images de chaque produit avec de radio buttons  -->
<style>
    img {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 150px;
    }
</style>

<body>

    <h2>Voir la liste de produits</h2>
    <?php
    $imgList = [
        "computer",
        "mobilephone",
        "camera",
        "clothing",
        "sportequipment",
        "kitchenutensil"
    ];
    ?>
    <form>
        <?php
        foreach ($imgList as $value) {
            echo '<img src="11Images/' . $value . '.jpg" alt="' . $value . '"><input type="radio" name="choixRadio" value="' . ucfirst($value) . '">';
        }
        ?>
    </form>
</body>

</html>