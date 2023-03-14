<?php

// Connexion Mysql
require('connect_bdd.php');

// traitement des données 
$query = $dbh->prepare("SELECT id_articles, title, content FROM php.articles ORDER BY published_at DESC");
$query->execute();