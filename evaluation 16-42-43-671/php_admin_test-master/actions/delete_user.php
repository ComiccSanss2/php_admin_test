<?php 

require_once __DIR__ . '/../init/db.php';

// id de l'utilisateur a supprimer
session_start();
$id_to_delete = $_GET['id'];

$db->prepare("DELETE FROM users WHERE id = ?")->execute( array($_SESSION['id']) ); 
?>
