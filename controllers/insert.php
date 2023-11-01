<?php
require_once '../models/contact.php';

if (isset($_POST['valider'])) {

    extract($_POST);
    $favori = isset($_POST['favori']) ? 1 : 0;
    $contact->addContact($nom, $prenom, $numero, $distinction, $favori);
}

