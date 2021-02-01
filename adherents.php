<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/css/adherents.css">
    <link rel="stylesheet" href="./Assets/css/sidemenu.css">
    <link rel="stylesheet" href="./Assets/css/navmenu.css">
    <title>Adhérents</title>
</head>
<body>
   <main>
    <div class="fond-modal">
        <div class="modal-ajout">
            <h1>Création d'un compte adhérent :</h1>
            <form action="">
                <label for="">
                    Nom :
                    <input type="text" name="nom">
                </label>
                <label for="">
                    Prénom :
                    <input type="text" name="prenom">
                </label>
                <label for="">
                    Identifiant :
                    <input type="text" name="identifiant">
                </label>
                <label for="">
                    N° Sécurité Sociale :
                    <input type="text" name="securite">
                </label>
                <label for="">
                    Date de naissance :
                    <input type="date" name="date">
                </label>
                <label for="">
                    Adresse :
                    <input type="text" name="adresse">
                </label>
                <label for="">
                    Téléphone :
                    <input type="text" name="telephone">
                </label>
                <label for="">
                    Email :
                    <input type="text" name="email">
                </label>
                <label for="">
                    Activités :
                    <input type="text" name="activites">
                </label>
                <label for="">
                    Profession :
                    <input type="text" name="profession">
                </label>
                <label for="">
                    Numéro d'allocataire CAF :
                    <input type="text" name="allocataire">
                </label>
                <label for="">
                    Type de compte :
                    <input type="text" name="compte">
                </label>
                <label for="">
                    Statut de paiement :
                    <input type="text" placeholder="Payé ou En attente" name="paiement">
                </label>
                <label for="">
                    Compte lié :
                    <input type="text" placeholder="Si enfant - Recherche le nom d'un compte adulte">
                </label>
                <label for="">
                    Zone géographique :
                    <input type="text">
                </label>
                <div class="container-btn">
                    <button id="btn-valider">VALIDER</button>
                    <button id="btn-annuler">ANNULER</button>
                </div>
            </form>
        </div>
    </div>
    </main>

<?php
  include "./php/navmenu.php";
  include "./php/sidemenu.php";

  $nom = $_POST['nomfamille'];
  $prenom = $_POST['prenomfamille'];
  $identifiant = $_POST[''];
  $securite = $_POST[''];
  $date = $_POST[''];
  $adresse = $_POST[''];
  $telephone = $_POST[''];
  $email = $_POST['mailperso'];
  $profession = $_POST[''];
  $allocataire = $_POST[''];
  $compte = $_POST[''];

?>


    <script src="https://kit.fontawesome.com/433f9c0cfe.js" crossorigin="anonymous"></script>
</body>
</html>