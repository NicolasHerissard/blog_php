<?php
session_start();
// Si un utilisateur est déconnecté
$_SESSION['is-connected'] = false;
header('location: /blog/pages/blog_NonConnecter.php');