<?php


?>



    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Éditeur de carte visite</title>
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
        <form class="container" method="post" enctype="multipart/form-data" action="bin/carte.php" >
            <h1>Créateur du carte visite</h1>
            <div class="row">
                <label>Nom</label>
                <input type="text" name="nom" required/>
            </div>

            <div class="row">
                <label>Prénom</label>
                <input type="text" name="prénom" required/>
            </div>

            <div class="row">
                <label>Spécialité</label>
                <input type="text" name="spécialité" required/>
            </div>

            <div class="row">
                <label>Téléphone</label>
                <input type="text" name="téléphone" required/>
            </div>

            <div class="row">
                <label>Email</label>
                <input type="text" name="email" required/>
            </div>

            <div class="row">
                <label>Site web personnel</label>
                <input type="text" name="siteweb" required/>
            </div>

            <div class="row">
                <label>Adresse</label>
                <input type="text" name="adresse" required/>
            </div>

            <div class="row phot">
                <label for="societé">Société</label>
                <input type="text" id="text" name="societé" required />
            </div>

            <div class="row">
                <label id="largeFile" for="file">
                <input type="file" id="file" name="file" required/>
            </label>
            </div>

            <div class="row">
                <button type="submit" value="Upload" name="submit">Créer</button>
            </div>

        </form>
    </body>

    </html>