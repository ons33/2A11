<?php
require_once '../Controller/UserController.php';  
$userController = new UserController();
$users = $userController->getAllUsers();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
    <style>
        :root {
            --primary: #2563eb;
            --primary-hover: #1d4ed8;
            --danger: #ef4444;
            --danger-hover: #dc2626;
            --background: #f8fafc;
            --card-bg: #ffffff;
            --text: #1f2937;
            --border: #e5e7eb;
        }

        body {
            font-family: 'Segoe UI', Roboto, Arial, sans-serif;
            background-color: var(--background);
            margin: 0;
            padding: 40px 0;
            color: var(--text);
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: var(--card-bg);
            padding: 30px 40px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        h1 {
            text-align: center;
            font-size: 28px;
            margin-bottom: 25px;
            color: var(--primary);
            letter-spacing: 0.5px;
        }

        .add-btn {
            display: inline-block;
            background-color: var(--primary);
            color: white;
            padding: 10px 16px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
            margin-bottom: 20px;
        }

        .add-btn:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 10px;
        }

        thead {
            background-color: var(--primary);
            color: white;
        }

        th, td {
            padding: 14px 18px;
            text-align: left;
            border-bottom: 1px solid var(--border);
            font-size: 15px;
        }

        th {
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        tr:hover td {
            background-color: #f1f5f9;
        }

        .actions {
            display: flex;
            gap: 10px;
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 14px;
            text-decoration: none;
            color: white;
            transition: 0.3s ease;
        }

        .btn-update {
            background-color: var(--primary);
        }
        .btn-update:hover {
            background-color: var(--primary-hover);
        }

        .btn-delete {
            background-color: var(--danger);
        }
        .btn-delete:hover {
            background-color: var(--danger-hover);
        }

        @media (max-width: 700px) {
            .container {
                padding: 20px;
            }

            table, thead, tbody, th, td, tr {
                display: block;
            }

            thead {
                display: none;
            }

            tr {
                margin-bottom: 15px;
                border: 1px solid var(--border);
                border-radius: 10px;
                background-color: white;
                padding: 10px;
            }

            td {
                display: flex;
                justify-content: space-between;
                padding: 8px 10px;
            }

            td::before {
                content: attr(data-label);
                font-weight: 600;
                color: var(--primary);
            }

            .actions {
                justify-content: flex-end;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>👥 Liste des utilisateurs</h1>

        <a href="AddUser.php" class="add-btn">+ Ajouter un utilisateur</a>

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
                        <td data-label="ID"><?php echo $user['id']; ?></td>
                        <td data-label="Email"><?php echo htmlspecialchars($user['email']); ?></td>
                        <td data-label="Mot de passe"><?php echo htmlspecialchars($user['pwd']); ?></td>
                        <td data-label="Actions" class="actions">
                            <a href="" class="btn btn-update">Modifier</a>
                            <a href="" class="btn btn-delete">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
