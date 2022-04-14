<?php
    include "header.inc.php";
    include "gestionBDD.inc.php";
    //include "gestionErreurs.php";

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
    <div class='Prestations'>
        <table class='TableauBDD'>
            <tr class'enTeteTableauBDD'>
                <td>PRESTATIONS</td>
            </tr>
            <tr>
                <td>Référence</td>
                <td>Désignation</td>
                <td>Prix UHT</td>
                <td>Action</td>
            </tr>";

            $reqPrestations=$connexion->query('select DesignationPresta, PrixU_HT_Presta, RefPresta from prestation');
            $Prestations=$reqPrestations->fetch(PDO::FETCH_ASSOC);

            while($Prestations!=FALSE)
            {
                $ref=$Prestations['RefPresta'];
                $design=$Prestations['DesignationPresta'];
                $prix=$Prestations['PrixU_HT_Presta'];
                
                echo"
                <tr class='LigneTableauBDD'>
                    <td>$ref</td>
                    <td>$design</td>
                    <td>$prix</td>
                <tr>";
                $Prestations=$reqPrestations->fetch(PDO::FETCH_ASSOC);
            }
            echo"
        </table>
    </div>";
?>
