<?php
require('../models/contact.php');


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $contacts = $contact->selectOnContact($id);
}

if (isset($_POST['update'])) {
    extract($_POST);
    $favori = isset($_POST['favori']) ? 1 : 0;
    $contact->updateContact($nom, $prenom, $numero, $distinction, $favori, $id);
}

if (isset($_GET['deleteId'])) {
    $id = $_GET['deleteId'];
    $contact->deleteContact($id);
}