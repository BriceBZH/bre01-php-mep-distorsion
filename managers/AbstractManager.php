<?php

abstract class AbstractManager
{
    protected PDO $db;

    public function __construct()
    {
        require_once __DIR__ . '/../vendor/autoload.php';

        // Chargement des variables d'environnement
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/../config");
        $dotenv->load();
        // $dbInfo = $this->getDatabaseInfo();

        $connexion = "mysql:host=".$_ENV['DB_USER'].";port=3306;charset=utf8;dbname=".$_ENV['DB_NAME'];
        $this->db = new PDO(
            $connexion,
            $_ENV['DB_USER'],
            $_ENV['DB_PASS']
        );
    }


}