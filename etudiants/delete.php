<?php require_once "../database/connexion.php"; $pdo->prepare("DELETE FROM etudiants WHERE id_etudiant=?")->execute([$_GET['id']]); header("Location:index.php");
