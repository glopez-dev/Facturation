<?php

// Fonctions de connexion

function connect(){ // renvoie un object PDO dans une variable
    $dsn='mysql:host=localhost;dbname=facturation';
    $user='root';
    $password=''; // pas de mot de passe = chaîne vide

    $dbh = new PDO($dsn,$user,$password);
    return $dbh;
}

// Fonctions de gestion des Prestations

function estUneRefPrestation($connexion, $ref)
{
   $req="select * from Etablissement where id='$'";
   $reqPrestations=$connexion->query($req);
   return $reqPrestations->fetch(PDO::FETCH_ASSOC);
}

function estUneDesignPrestation($connexion, $mode, $ref, $design)
{
   $nom=str_replace("'", "''", $design);
   // S'il s'agit d'une création, on vérifie juste la non existence de la désignation sinon
   // on vérifie la non existence d'une autre prestation (RefPresta!='$ref) portant 
   // la même désignation
   if ($mode=='C')
   {
      $req="select * from prestation where DesignationPresta='$design'";
   }
   else
   {
      $req="select * from prestation where DesignationPresta='$design' and RefPresta!='$ref'";
   }
   $reqPrestations=$connexion->query($req);
   return $reqPrestations->fetch(PDO::FETCH_ASSOC);
}

