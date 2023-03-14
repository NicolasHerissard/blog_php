<?php
session_start();

// Si un administrateur est déconnecté
$_SESSION['admin-connected'] = false;

header('location: ../administration/login_admin.php');