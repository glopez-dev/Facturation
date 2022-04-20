<!DOCTYPE html>
<html>

<head>
    <title><?php echo "$nomPage";?></title>
    <link href="#" rel="icon" />

    <meta charset="utf-8" />
    <meta name="author" content="Gabriel Lopez" />
    <meta lang="fr" />

    <link href="../css/base.css" rel="stylesheet" />
    <link href="../css/acceuil.css" rel="stylesheet" />

    <!--Fontawesome Icons : importe des icônes depuis le site web linké-->
		<script src="https://kit.fontawesome.com/69c46c92d5.js" crossorigin="anonymous"></script>
</head>

<body>

  <header>
    <div class="logo">
        <a href="index.php"><h1>Facturation M2L</h1></a>
    </div>
    <nav>
        <ol>
            <li class='<?php if($current=='Accueil'){echo 'active';}else{echo'#';} ?>'><a href="index.php">Acceuil</a></li>
            <li class='<?php if($current=='Ligues'){echo 'active';}else{echo'#';} ?>'><a href="listeLigues.php">Ligues</a></li>
            <li class='<?php if($current=='Prestations'){echo 'active';}else{echo'#';} ?>'><a href="listePrestations.php">Prestations</a></li>
            <li class='<?php if($current=='Factures'){echo 'active';}else{echo'#';} ?>'><a href="Factures.php">Factures</a></li>
        </ol>
    </nav>
  </header>