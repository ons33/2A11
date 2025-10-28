<?php
require_once '../Controller/UserController.php';

$userController = new UserController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = [
        'email' => $_POST['email'],
        'pwd' => $_POST['pwd']
    ];

    $userController->addUser($user);

    header('Location: ListUsers.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un utilisateur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 350px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        a {
            text-decoration: none;
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #333;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h2>Ajouter un utilisateur</h2>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="pwd" placeholder="Mot de passe" required>
        <button type="submit">Ajouter</button>
        <a href="ListUsers.php">← Retour</a>
    </form>
</body>
</html>
