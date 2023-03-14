<?php 

// Connexion global Mysql utilisable dans tous les fichiers
try {
    $dbh = new PDO('mysql:host=localhost;dbname=php', 'root', 'ninjasql');
} catch (PDOException $e) {
    // en cas d'erreur
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>