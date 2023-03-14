<?php
session_start();

// Si l'utilisateur n'est pas connecté
if (!$_SESSION['is-connected']) {
    header('location: /pages/login.php');
}