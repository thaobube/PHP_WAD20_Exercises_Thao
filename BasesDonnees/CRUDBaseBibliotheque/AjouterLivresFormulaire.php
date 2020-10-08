<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./AjouterLivresTraitement.php" method="POST">
        Titre de livre <input type="text" name="titre"> <br>
        Prix <input type="text" name="prix"><br>
        Description <input type="text" name="description"><br>
        Date de publication <input type="text" name="date_publicationLivre"><br>
        Date de retour <input type="text" name="date_retourLivre"><br>
        ISBN <input type="text" name="isbn"><br>
        Nom d'auteur <input type="text" name="nomAuteur"><br>
        Nationalite d'auteur <input type="text" name="nationaliteAuteur"><br>
        <input type="submit" value="Rajouter de livre">
    </form>
</body>

</html>