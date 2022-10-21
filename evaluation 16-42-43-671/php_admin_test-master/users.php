<?php

require_once __DIR__ . '/init/db.php';

// if pour la story 4
if (isset($_GET['username'])) {
    $search_username = $_POST['username'];
}

// Story 0: request to find all username

$users = stripslashes($_POST['users']); 
$stmt = $db->prepare('SELECT * FROM users WHERE users = :users');
$stmt->execute(['users' => $users]);
$users = $stmt->fetchAll();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
</head>
<body>
    <form method="post">

    <!-- Input Search -->
    <div class="inputs">
       
    <input type="user1" name="user1" required/>
    <input type="user2" name="user2" required/>
    <input type="user3" name="user3" required/>
    <button class="button_update" type="submit" formaction="update_users.php" >
                    Update</button>
    <button class="button_delete" type="submit" formaction="delete_users.php" >
                    Delete</button>
</div>
</form>

    <!-- Table des Utilisateurs -->
    <div></div>
</body>
</html>
