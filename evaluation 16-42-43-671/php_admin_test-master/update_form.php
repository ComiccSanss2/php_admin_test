<?php 

require_once __DIR__ . '/init/db.php';

// id de l'utilisateur a update
if (isset($_GET['id'])) {
    $id_to_update = $_GET['id'];
} else {
    // Redirection si pas d'ID dans l'url.. on ne peut pas mettre a jour RIEN.
    header('Location: users.php');
    die();
}

// Recuperer l'utilisateur a mettre a jour avec PDO et une requete SQL
// $user = ...;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mettre a jour un utilisateur</title>
</head>
<body>

<form method="post">
    <div>
    <input type="user1" name="user1" required/>
    <input type="user2" name="user2" required/>
    <input type="user3" name="user3" required/>
</form>
</div>

</body>

</html>
