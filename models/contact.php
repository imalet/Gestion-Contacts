<?php
require("Database.php");

class Contact
{
    private $db;

    function __construct(Database $db)
    {
        $this->db = $db;
    }

    function selectAllContact()
    {

        // $contacts = [];

        $stmt = $this->db->getPDO()->prepare("SELECT * FROM contacts");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


        return $result;
    }

    function selectOnContact($id)
    {

        $stmt = $this->db->getPDO()->prepare("SELECT * FROM contacts WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    function addContact($nom, $prenom, $numero, $distinction, $favori)
    {

        $stmt = $this->db->getPDO()->prepare("INSERT INTO contacts(nom, prenom, numero, distinction, favori) VALUES (:nom, :prenom, :numero, :distinction, :favori)");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':numero', $numero);
        $stmt->bindParam(':distinction', $distinction);
        $stmt->bindParam(':favori', $favori);

        if ($stmt->execute()) {
            header('location: ../views/form.php');
        } else {
            echo "C'est pas bon";
        }
    }

    function deleteContact($id)
    {
        $stmt = $this->db->getPDO()->prepare("DELETE FROM contacts WHERE id = :id");
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            header('location: ../views/display.php');
        } else {
            echo "Pas Supprimé";
        }
    }

    function updateContact($nom, $prenom, $numero, $distinction, $favori, $id)
    {

        $stmt = $this->db->getPDO()->prepare("UPDATE contacts SET nom = :nom, prenom = :prenom, numero = :numero, distinction = :distinction , favori = :favori WHERE id = :id");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':numero', $numero);
        $stmt->bindParam(':distinction', $distinction);
        $stmt->bindParam(':favori', $favori);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            header('location: ../views/display.php');
        } else {
            echo "Pas modifié";
        }
    }

    function isFavoriOrNo($id, $favori)
    {
        $stmt = $this->db->getPDO()->prepare("UPDATE contacts SET favori = :favori WHERE id = :id");
        $stmt->bindParam(':favori', $favori);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            echo "Favori Modifié";
        } else {
            echo "Fqvori pas Modifié";
        }
    }
}

$db = new Database();
$db->connect();
$contact = new Contact($db);
