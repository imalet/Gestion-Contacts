<?php

class Database{

    private $pdo;

    public function connect()
    {
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=demos","root", "");
        } catch (PDOException $e) {
            die("Erreur de connexion avec la base de donnee " . $e->getMessage());
        }
    }

    function getPDO(){
        return $this->pdo;
    }

}