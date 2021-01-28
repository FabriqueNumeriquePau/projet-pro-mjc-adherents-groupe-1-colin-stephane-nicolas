<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/css/navmenu.css">
    <link rel="stylesheet" href="./Assets/css/tableaubord.css">
    <title>Tableau de bord</title>
</head>

<body>
    <?php
    include "./php/navmenu.php";
    ?>
    <main>
        <h1>Tableau de bord</h1>
        <section class="container">
            <a class="button1" href="./adherents.php">
                <i class="fa fa-users"></i>
                <p>ADHÉRENTS</p>
            </a>
            <a class="button2" href="./partenaires.php">
                <i class="fa fa-handshake"></i>
                <p>PARTENAIRES</p>
            </a>
            <a class="button3" href="./activites.php">
                <i class="fa fa-running"></i>
                <p>ACTIVITÉS</p>
            </a>
            <a class="button4" href="./evenements.php">
                <i class="fa fa-microphone"></i>
                <p>ÉVÈNEMENTS</p>
            </a>
            <a class="button5" href="./newsletter.php">
                <i class="fa fa-envelope"></i>
                <p>NEWSLETTER</p>
            </a>
            <a class="button6" href="./import.php">
                <i class="fa fa-file-excel"></i>
                <p>IMPORT/EXPORT</p>
            </a>
            <a class="button7" href="./statistiques.php">
                <i class="fa fa-chart-area"></i>
                <p>STATISTIQUES</p>
            </a>
            <a class="button8" href="./permissions.php">
                <i class="fa fa-user-plus"></i>
                <p>PERMISSIONS</p>
            </a>


        </section>
    </main>
    <script src="https://kit.fontawesome.com/433f9c0cfe.js" crossorigin="anonymous"></script>
</body>

</html>