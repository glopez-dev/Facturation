<?php
   
   $nomPage='Ligues';
   $current='Ligues';

   include "header.inc.php";
   include "gestionBDD.inc.php";
   include "controlesEtGestionErreurs.inc.php";

   $connexion=connect();
   if(!$connexion){
      ajouterErreur("Echec de la connexion au serveur MySql");
      afficherErreurs();
      exit(); 
   }

   // AFFICHAGE DE LA LISTE DES LIGUES

   echo"
   <div class='Conteneur-Tableau'>
      <table class='TableauBDD' width='80%' cellspacing='0' cellpadding='0' align='center'>
         <thread>
            <tr>
               <th>Code Client</th>
               <th>Nom Ligue</th>
               <th>ID Trésorier</th>
               <th>Envoi Trésorier</th>
            </tr>
         </thread>";

         $reqLigues=$connexion->query('select CodeClient, NomLigue, ID_Tresorier, envoi_Tresorier from ligue');
         $Ligues=$reqLigues->fetch(PDO::FETCH_ASSOC);

         while($Ligues!=FALSE)
            {
                $code=$Ligues['CodeClient'];
                $nom=$Ligues['NomLigue'];
                $ID=$Ligues['ID_Tresorier'];
                $envoi=$Ligues['envoi_Tresorier'];
                
                echo"
                <tbody>
                    <tr>
                        <td>$code</td>
                        <td>$nom</td>
                        <td>$ID</td>
                        <td>";if($envoi==1){echo"<i class='fa-solid fa-check'></i>";}else{echo"<i class='fa-solid fa-xmark'></i>";} echo"</td>
                        <td><a href='modificationPrestations.php?action=demanderModifPresta&amp;ref=$code'>Modifier</td>
                        <td><a href='suppressionEtablissement.php?action=demanderSupprPresta&amp;ref=$code'>Supprimer</a></td>
                    <tr>
                </tbody>";
                $Ligues=$reqLigues->fetch(PDO::FETCH_ASSOC);
            }
            echo"
        </table>
    </div>";
?>
