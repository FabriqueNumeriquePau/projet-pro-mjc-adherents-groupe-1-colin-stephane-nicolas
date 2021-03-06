<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/css/partenaire_modif.css">
    <link rel="stylesheet" href="./Assets/css/sidemenu.css">
    <link rel="stylesheet" href="./Assets/css/navmenu.css">
    <title>Modifier un partenaire</title>
</head>

<body>
    <?php
    include "./php/navmenu.php";
    include "./php/sidemenu.php";
    ?>
    <main>
        <section>
            <h1>DONNÉES PRINCIPALES</h1>
            <article>
                <label for="">Nom du partenaire :</label>
                <input type="text">
                <label for="">Statut Juridique</label>
                <input type="text">
                <label for="">Nom du gérant</label>
                <input type="text">
            </article>
            <article>
                <input id="btn-modif" type="submit" value="MODIFIER">
            </article>
        </section>
        <section>
            <h1>CONTACT</h1>
            <article>
                <label for="">Nom du contact :</label>
                <input type="date">
                <label for="">Email du contact :</label>
                <input type="text">
                <label for="">Téléphone du contact :</label>
                <input type="text">
            </article>
            <article>
                <input id="btn-modif" type="submit" value="MODIFIER">
            </article>
        </section>
        <section>
            <h1>ACTIVITÉS / ÉVÉNEMENTS</h1>
            <table>
                <thead>
                    <tr>
                        <th width= 35%>Nom de l'activité</th>
                        <th width="35%">Date et lieu</th>
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