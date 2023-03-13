<?php
session_start();
$_SESSION['is-connected'] = false;

header('location: /blog/pages/blog_NonConnecter.php');