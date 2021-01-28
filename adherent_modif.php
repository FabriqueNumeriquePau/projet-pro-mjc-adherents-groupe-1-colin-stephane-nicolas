<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un adhérent</title>
    <link rel="stylesheet" href="./Assets/css/adherent_modif.css"> 
    <link rel="stylesheet" href="./Assets/css/sidemenu.css">
    <link rel="stylesheet" href="./Assets/css/navmenu.css">
</head>

<body>
    <?php
    include "./php/navmenu.php";
    include "./php/sidemenu.php";
    ?>
<body>
    <main>
        <section class="avatar">
            <article class="image">
            </article>
            <article>
                <label for="">Nom d'utilisateur :</label>
                <input type="text">
                <label for="">Prénom :</label>
                <input type="text">
                <label for="">Nom :</label>
                <input type="text">
                <label for="">Date de naissance :</label>
                <input type="date">
            </article>
            <article>
                <input id="btn-modif" type="submit" value="MODIFIER">
            </article>
        </section>
        <section>
            <h1>DONNÉES ADDITIONNELLES</h1>
            <article>
                <label for="">Numéro de sécurité sociale :</label>
                <input type="text">
                <label for="">Adresse :</label>
                <input type="text">
                <label for="">Email :</label>
                <input type="text">
                <label for="">Téléphone :</label>
                <input type="text">
                <label for="">Profession :</label>
                <input type="text">
            </article>
            <article>
                <input id="btn-modif" type="submit" value="MODIFIER">
            </article>
        </section>
        <section>
            <h1>DONNÉES ADDITIONNELLES</h1>
            <article>
                <label for="">Activités:</label>
                <textarea></textarea>
                <label for="">Numéro d'allocataire (CAF) :</label>
                <input type="text">
                <label for="">Modification du mot de passe :</label>
                <input type="text">
                <label for="">Statut du paiement :</label>
                <input id="btn-statut" value="PAIEMENT EFFECTUÉ">
            </article>
            <article>
                <input id="btn-modif" type="submit" value="MODIFIER">
            </article>
        </section>
        <section class="barre">
            <h1>TYPE DE COMPTE:</h1>
            <input id="type-compte" type="text">
        </section>
        <section>
            <h1>RESPONSABLE LÉGAL</h1>
            <article>
                <label for="">Nom :</label>
                <input type="text">
                <label for="">Prénom :</label>
                <input type="text">
                <label for="">Adresse :</label>
                <input type="text">
                <label for="">Téléphone domicile :</label>
                <input type="text">
                <label for="">Téléphone portable :</label>
                <input type="text">
            </article>
            <article>
                <input id="btn-modif" type="submit" value="MODIFIER">
            </article>
        </section>
        <section>
            <h1>FICHE MÉDICAL</h1>
            <article>
                <label for="">Difficulté(s) de santé :</label>
                <input type="text">
                <label for="">Vaccins à jour</label>
                <input type="text">
                <label for="">Traitement(s) :</label>
                <input type="text">
                <label for="">Recommandations des parents :</label>
                <textarea></textarea>
            </article>
            <article>
                <input id="btn-modif" type="submit" value="MODIFIER">
            </article>
        </section>
        <section>
            <h1>FICHIERS PARTAGÉS</h1>
            <table>
                <thead>
                    <tr>
                        <th width= 35%>Nom du fichier</th>
                        <th width="35%">Statut</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
            <article>
                <input id="btn-ajout" type="submit" value="AJOUTER">
            </article>
        </section>
    </main>
    <script src="https://kit.fontawesome.com/433f9c0cfe.js" crossorigin="anonymous"></script>
</body>

</html>