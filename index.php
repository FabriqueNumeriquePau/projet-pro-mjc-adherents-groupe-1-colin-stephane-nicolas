<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/css/tableaubord.css">
    <link rel = "stylesheet" href="Assets/css/style.css">
    <title>Tableau de bord</title>
</head>
<body>
    <?php 
    include "./php/navmenu.php";
    ?>
     <section>
        <article><h1>Tableau de bord</h1></article>
        <article class="button">
            <div class="button1">
                
                <a href="./adherents.php">
                    <i class="fas fa-users"></i>
                    <p>ADHÉRENTS</p>
                </a>
            </div>
            <div class="button2">
                <i class="fas fa-handshake"></i>
                <p>PARTENAIRES</p>
                <a href="./partenaires.php"></a>
            </div>
            <div class="button3">
                <i class="fas fa-running"></i>
                <p>ACTIVITÉS</p>
                <a href="./activites.php"></a>
            </div>
            <div class="button4">
                <i class="fas fa-microphone"></i>
                <p>ÉVÈNEMENTS</p>
                <a href="./evenements.php"></a>
            </div>
            <div class="button5">
                <i class="fas fa-envelope"></i>
                <p>NEWSLETTER</p>
                <a href="./newsletter.php"></a>
            </div>
            <div class="button6">
                <i class="fas fa-file-excel"></i>
                <p>IMPORT/EXPORT</p>
                <a href="./import.php"></a>
            </div>
            <div class="button7">
                <i class="fas fa-chart-area"></i>
                <p>STATISTIQUES</p>
                <a href="./statistiques.php"></a>
            </div>
            <div class="button8">
                <i class="fas fa-user-plus"></i>
                <p>PERMISSIONS</p>
                <a href="./permissions.php"></a>
            </div>
        </article>

    </section>
    
<script src="https://kit.fontawesome.com/433f9c0cfe.js" crossorigin="anonymous"></script> 
</body>
</html>