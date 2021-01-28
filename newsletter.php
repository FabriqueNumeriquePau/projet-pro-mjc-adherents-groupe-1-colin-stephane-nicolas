<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./Assets/css/newsletter.css">
    <link rel="stylesheet" href="./Assets/css/sidemenu.css">
    <link rel="stylesheet" href="./Assets/css/trix.css">

</head>

<body>
    <?php
    include "./php/navmenu.php";
    include "./php/sidemenu.php";
    ?>

    <main>
        <h1>NEWSLETTER</h1>

        <section class="informations">
            <h2>Créer une liste de destinataires</h2>
            <article>
                <label for="min">Par activités </label>
                <div class="champ">
                    <input class="activites" type="text">
                    <button class="search" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </article>
            <article>
                <label for="min">Par évènement </label>
                <div class="champ">
                    <input class="evenement" type="text">
                    <button class="search" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </article>
            <article>
                <label for="min">Par tranche d'âge</label>
                <div class="champ">
                    <input class="tranche" type="text">
                    <button class="search" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </article>
            <article>
                <label for="min">Importer une liste</label>
                <div class="champ">
                    <input class="liste" type="text">
                    <button class="search" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </article>
        </section>

        <section class="informations">
            <h2>Informations sur l'expéditeur</h2>
            <article>
                <label for="min">Nom de l'expéditeur</label>
                <div class="champ">
                    <input class="expediteur" type="text">
                    <button class="search" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </article>
            <article>
                <label for="min">Email de l'expéditeur<label>
                        <div class="champ">
                            <input class="mail" type="text">
                            <button class="search" type="submit"><i class="fas fa-search"></i></button>
                        </div>
            </article>
            <article>
                <label for="min">Objet<label>
                        <div class="champ">
                            <input class="objet" type="text">
                            <button class="search" type="submit"><i class="fas fa-search"></i></button>
                        </div>
            </article>
        </section>

        <section>            
            <input id="btn-generer" type="submit" value="ENVOYER">
            <input id="btn-reinit" type="submit" value="HISTORIQUE">
        </section>

        <section>
            <form method="post">
                <input id="x" type="hidden" name="content" value="" />
                <trix-editor input="x"></trix-editor>
                <input id="btn-envoyer" type="submit" name="submit" value="Envoyer" />
            </form>
        </section>

    </main>
    <script src="./js/slide.js"></script>
    <script src="./js/trix.js"></script>
    <script src="./js/attachments.js"></script>
    <script src="https://kit.fontawesome.com/433f9c0cfe.js" crossorigin="anonymous"></script>

</body>

</html>