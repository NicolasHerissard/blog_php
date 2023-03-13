<?php
session_start();
$_SESSION['admin-connected'] = false;

header('location: ../administration/login_admin.php');