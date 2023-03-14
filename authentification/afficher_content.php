<?php 

// Connexion Mysql
require('connect_bdd.php'); 

// traitement des données 
$query = $dbh->prepare("SELECT id_comments, content_comments, published_at FROM php.comments ORDER BY published_at DESC");
$query->execute();