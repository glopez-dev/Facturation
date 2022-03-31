<?php 
    $user = 'root';
    $passwd = '';
    $host = '';
    $database = 'facturation';
    port = NULL;
    $dsn = 'mysql:host=localhost;dbname=test' 

    $mysqli = new mysqli('127.0.0.1', $user, $password, $database, $port);

    $dbh = new PDO($dsn, $user, $pass);

    
try {
        $dbh = new PDO($dsn, $user, $pass);
        echo "Connexion établie !"
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
?>