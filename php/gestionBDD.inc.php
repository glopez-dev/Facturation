<?php

// Fonctions de connexion

function connect(){ // renvoie un object PDO dans une variable
    $dsn='mysql:host=localhost;dbname=facturation';
    $user='root';
    $password=''; // pas de mot de passe = chaîne vide

    $dbh = new PDO($dsn,$user,$password);
    return $dbh;
}

// Fonctions retournant des requêtes SQL


