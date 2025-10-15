<?php
class config {
    private static $pdo = null;

    public static function getConnexion() {
        if (!isset(self::$pdo)) {
            try {
                self::$pdo = new PDO(
                    "mysql:host=localhost;
                    dbname=2A11",  
                    "root",  // Nom d'utilisateur
                    "",  // Mot de passe vide
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                    ]
                );
            // echo "Connexion établie avec succès.";
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}

// Appel de la méthode pour établir la connexion
config::getConnexion();
