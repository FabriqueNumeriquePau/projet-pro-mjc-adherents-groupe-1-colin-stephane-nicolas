<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un événement</title>
    <link rel="stylesheet" href="./Assets/css/even_modif.css">
    <link rel="stylesheet" href="./Assets/css/style.css">
</head>

<body>
    <?php
    include "./php/navmenu.php";
    include "./php/sidemenu.php";
    ?>
    <main>
        <section>
            <h1>INTERVENANT</h1>
            <article>
                <label for="">Activité</label>
                <input type="text">
                <label for="">Statut Juridique</label>
                <input type="text">
                <label for="">Nom de l'animateur</label>
                <input type="text">
            </article>
            <article>
                <input id="btn-modif" type="submit" value="MODIFIER">
            </article>
        </section>
        <section>
            <h1>DÉTAILS PRATIQUES</h1>
            <article>
                <label for="">Date et heure :</label>
                <input type="date">
                <label for="">Salle :</label>
                <input type="text">
                <label for="">Participants maximum</label>
                <input type="text">
            </article>
            <article>
                <input id="btn-modif" type="submit" value="MODIFIER">
            </article>
        </section>
        <section>
            <h1>LISTE DES PARTICIPANTS</h1>
            <table>
                <thead>
                    <tr>
                        <th width= 20%>Nom de l'activité</th>
                        <th width="60%">Date et lieu</th>
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