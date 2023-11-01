<?php
require "../controllers/updateDeleteController.php";
?>
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
        <form action="../controllers/updateDeleteController.php" method="POST">
            <div class="form-group">
                <label for="id" hidden>id</label>
                <input type="number" name="id" class="form-control form-control-lg custom-input" id="id" placeholder="id" value="<?php echo $contacts['id']; ?>" hidden>
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" class="form-control form-control-lg custom-input" id="nom" placeholder="Nom" value="<?php echo $contacts['nom']; ?>">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" class="form-control form-control-lg custom-input" id="prenom" placeholder="Prénom" value="<?php echo $contacts['prenom']; ?>">
            </div>
            <div class="form-group">
                <label for="numero">Numéro</label>
                <input type="text" name="numero" class="form-control form-control-lg custom-input" id="numero" placeholder="Numéro" value="<?php echo $contacts['numero']; ?>">
            </div>
            <div class="form-group">
                <label for="distinction">Distinction</label>
                <textarea name="distinction" class="form-control custom-input" id="distinction" rows="4" placeholder="Distinction" value=""><?php echo $contacts['distinction']; ?></textarea>
            </div>
            <div class="form-check">
                <input type="checkbox" name="favori" value="1" <?php echo $contacts['favori'] ? 'checked' : '' ; ?> class="form-check-input" id="favori">
                <label class="form-check-label" for="favori">Favori</label>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Modifier</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>