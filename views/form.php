<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Formulaire Bootstrap</title>
    <style>
        .center-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .custom-input {
            width: 300px;
        }
    </style>
</head>

<body>
    <div class="container center-form">
        <form action="../controllers/insert.php" method="POST">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" class="form-control form-control-lg custom-input" id="nom" placeholder="Nom">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" class="form-control form-control-lg custom-input" id="prenom" placeholder="Prénom">
            </div>
            <div class="form-group">
                <label for="numero">Numéro</label>
                <input type="text" name="numero" class="form-control form-control-lg custom-input" id="numero" placeholder="Numéro">
            </div>
            <div class="form-group">
                <label for="distinction">Distinction</label>
                <textarea name="distinction" class="form-control custom-input" id="distinction" rows="4" placeholder="Distinction"></textarea>
            </div>
            <div class="form-check">
                <input type="checkbox" name="favori" value="1" class="form-check-input" id="favori">
                <label class="form-check-label" for="favori">Favori</label>
            </div>
            <button type="submit" name="valider" class="btn btn-primary">Envoyer</button>
            <a href="display.php" class="btn btn-primary">Afficher la liste</a>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>