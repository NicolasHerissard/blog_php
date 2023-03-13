<?php 

try {
    $dbh = new PDO('mysql:host=localhost;dbname=php', 'root', 'ninjasql');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>