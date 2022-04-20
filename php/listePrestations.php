<?php

    $nomPage='Prestations';
    $current='Prestations';

    include "header.inc.php";
    include "gestionBDD.inc.php";
    include "controlesEtGestionErreurs.inc.php";

    //CONNEXION A LA BASE DE DONNÉES
    $connexion=connect();

    if(!$connexion)
    {
        ajouterErreur("Echec de la connexion au serveur MySql");
        afficherErreurs();
        exit();
    }

    // Afficher les prestations
    // Cette page contient un tableau affichant les différentes prestations

    echo "
    <div class='Conteneur-Tableau' >
        <table class='TableauBDD' width='80%' cellspacing='0' cellpadding='0' align='center'>
            <thread>
                <tr>
                    <th>Référence</th>
                    <th>Désignation</th>
                    <th>Prix UHT</th>
                </tr>
            </thread>";

            $reqPrestations=$connexion->query('select DesignationPresta, PrixU_HT_Presta, RefPresta from prestation');
            $Prestations=$reqPrestations->fetch(PDO::FETCH_ASSOC);

            while($Prestations!=FALSE)
            {
                $ref=$Prestations['RefPresta'];
                $design=$Prestations['DesignationPresta'];
                $prix=$Prestations['PrixU_HT_Presta'];
                
                echo"
                <tbody>
                    <tr>
                        <td>$ref</td>
                        <td>$design</td>
                        <td>$prix</td>
                        <td><a href='modificationPrestations.php?action=demanderModifPresta&amp;ref=$ref'>Modifier</td>
                        <td><a href='suppressionEtablissement.php?action=demanderSupprPresta&amp;ref=$ref'>Supprimer</a></td>
                    <tr>
                </tbody>";
                $Prestations=$reqPrestations->fetch(PDO::FETCH_ASSOC);
            }
            echo"
        </table>
    </div>";
    
?>
