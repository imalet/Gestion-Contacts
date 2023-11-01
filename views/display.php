<?php

require "../controllers/displayController.php";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Liste des Contacts</title>
</head>
<body>
    <h1>Liste des Contacts</h1>
    <h3><a href="form.php">AJOUTER CONTACTS</a></h3>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Numéro</th>
            <th>Distinction</th>
            <th>Favori</th>
            <th>Modifier</th>
            <th>SUPPRIMER</th>
        </tr>
        <?php foreach ($contacts as $contact) : ?>
            <tr>
                <td><?php echo $contact['nom']; ?></td>
                <td><?php echo $contact['prenom']; ?></td>
                <td><?php echo $contact['numero']; ?></td>
                <td><?php echo $contact['distinction']; ?></td>
                <td><?php echo $contact['favori'] ? 'Oui' : 'Non'; ?></td>
                <td><a href="update.php?id=<?php echo $contact['id']; ?>">MODIFIER</a></td>
                <td><a href="../controllers/updateDeleteController.php?deleteId=<?php echo $contact['id']; ?>">SUPPRIMER</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
