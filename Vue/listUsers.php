<?php
require_once '../Controller/UserController.php';  

// Créer une instance de UserController
$userController = new UserController();

// Récupérer tous les utilisateurs
$users = $userController->getUser();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }
        .container {
            width: 90%;
            max-width: 900px;
            margin-top: 50px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            padding: 20px 30px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .add-container {
            text-align: right;
            margin-bottom: 15px;
        }
        .add-btn {
            background-color: #2196F3;
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .add-btn:hover {
            background-color: #1976D2;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        td a {
            padding: 8px 12px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .update-btn {
            background-color: #4CAF50;
        }
        .update-btn:hover {
            background-color: #45a049;
        }
        .delete-btn {
            background-color: #f44336;
        }
        .delete-btn:hover {
            background-color: #e53935;
        }
        @media (max-width: 768px) {
            th, td {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des utilisateurs</h1>

        <!-- Bouton Ajouter -->
        <div class="add-container">
            <a href="AddUser.php" class="add-btn">+ Ajouter un utilisateur</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Mot de passe</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo htmlspecialchars($user['email']); ?></td>
                        <td><?php echo htmlspecialchars($user['pwd']); ?></td>
                        <td>
                            <a href="UpdateUser.php?id=<?php echo $user['id']; ?>" class="update-btn">Modifier</a>
                            <a href="DeleteUser.php?id=<?php echo $user['id']; ?>" class="delete-btn">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
