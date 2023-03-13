<?php

require('connect_bdd.php'); 
$query = $dbh->prepare("SELECT id_articles, title, content FROM php.articles ORDER BY published_at DESC");

$query->execute();

