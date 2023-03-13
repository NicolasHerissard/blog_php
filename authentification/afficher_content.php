<?php 

require('connect_bdd.php'); 

$query = $dbh->prepare("SELECT id_comments, content_comments, published_at FROM php.comments ORDER BY published_at DESC");

$query->execute();