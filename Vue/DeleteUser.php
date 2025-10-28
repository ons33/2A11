<?php
require_once '../Controller/UserController.php';  // Assurez-vous que le chemin est correct pour inclure votre fichier

// Créer une instance de UserController
$userController1 = new UserController();

$userId = $_GET['id'];

$userController1->deleteUser($userId);

header('Location: listUsers.php');

exit;
?>