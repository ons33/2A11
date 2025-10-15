
<?php
require_once '../Controller/UserController.php';  
require_once '../Model/User.php';

//

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un utilisateur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 350px;
        }
        h2 {
            text-align: center;
            color: #363eddff;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            margin-top: 20px;
            width: 100%;
            background-color: #4660d4ff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #4560a0ff;
        }
        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #555;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h2>Ajouter un utilisateur</h2>

        <label for="email">Email :</label>
        <input type="text" id="email" name="email" required>

        <label for="pwd">Mot de passe :</label>
        <input type="password" id="pwd" name="pwd" required>

        <input type="submit" value="Ajouter">


        <a href="ListUsers.php" class="back-link">← Retour à la liste</a>
    </form>
</body>
</html>
