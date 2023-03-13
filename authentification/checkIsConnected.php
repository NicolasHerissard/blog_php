<?php
session_start();
if (!$_SESSION['is-connected']) {
    header('location: /pages/login.php');
}