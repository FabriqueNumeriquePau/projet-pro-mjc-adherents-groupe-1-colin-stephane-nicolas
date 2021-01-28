<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/css/activites_modif.css">
    <link rel="stylesheet" href="./Assets/css/sidemenu.css">
    <link rel="stylesheet" href="./Assets/css/navmenu.css">
    <title>Adhérents</title>
</head>
<body>
<?php
  include "./php/navmenu.php";
  include "./php/sidemenu.php";
  ?>
   <a href="./adherent_modif.php">TRUC</a>
   <a href="./carte_adherent.php">TRUC-CARTE</a>
   <main>
    <h1>Création d'un compte adhérent</h1>
    <p class="nom">Nom : <input type="text" class="champnom" name="name" required></p>
    <p class="ident">Identifiant : <input type="text" class="champident" name="name" required></p>
    </p>
    <p class="datenaissance">Date de naissance : <input type="date" class="champdatenaissance" name="name" required></p>
    <p class="telephone">Téléphone : <input type="tel" class="champtelephone" name="name" required></p>
    <p class="activite">Activités : <input type="form" class="champactivite" name="name" required></p>
    <p class="numcaf">Numéro allocataire CAF : <input type="number" class="champnumcaf" name="name" required></p>
    <p class="statutpaiement">Statut du paiement : <input type="boolean" class="champpaiement" name="name" required></p>
    <p class="zonegeo">Zone géographique : <input type="form" class="champactivite" name="name" required></p>
    <p class="prenom">Prénom : <input type="text" class="champprenom" name="name" required></p>
    <p class="numsecu">N° de sécurité sociale : <input type="number" class="champnumsecu" name="name" required></p>
    <p class="adresse">Adresse : <input type="text" class="champnumsecu" name="name" required></p>
    <p class="email">Email : <input type="email" class="champemail" name="name" required></p>
    <p class="profession">Profession : <input type="form" class="champprofession" name="name" required></p>
    <p class="typecompte">Type de compte : <input type="form" class="champtypecompte" name="name" required></p>
    <p class="comptelie">Compte lié : <input type="text" class="champcomptelie" name="name" ></p>
    </main>
    <script src="https://kit.fontawesome.com/433f9c0cfe.js" crossorigin="anonymous"></script>
</body>
</html>