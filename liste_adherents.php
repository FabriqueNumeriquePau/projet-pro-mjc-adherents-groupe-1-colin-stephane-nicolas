<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/css/liste_adherent.css">
    <link rel="stylesheet" href="./Assets/css/sidemenu.css">
    <link rel="stylesheet" href="./Assets/css/navmenu.css">
    <title>Adhérents</title>
</head>

<body>
    <main>
        <?php
        include "./php/navmenu.php";
        include "./php/sidemenu.php";

        $db = "nicolecuisto";
        $dbhost = "localhost";
        $dbuser = "admin";
        $dbpasswd = "@lbatrossL39";

        try {
            $pdo = new PDO('mysql:host=' . $dbhost . ';dbname=' . $db . '', $dbuser, $dbpasswd, []);
        } catch (Exception $e) {
            echo 'Impossible de se connecter à la base de donnée';
            echo $e->getMessage();
            die();
        }
            
            echo '<table>'."\n";
            echo '<tr>';
            echo '<td>Civilité</td>';
            echo '<td>Nom</td>';
            echo '<td>Prénom</td>';
            echo '<td>Adresse mail</td>';
                  
            $reponse = $pdo->query('SELECT * FROM contact');        
            while($donnees = $reponse->fetch()){
            
            echo '<tr>';
            echo '<td>'.$donnees['civilite'].'</td>';
            echo '<td>'.$donnees['nomfamille'].'</td>';
            echo '<td>'.$donnees['prenomfamille'].'</td>';
            echo '<td>'.$donnees['mailperso'].'</td>';
         
            }        
            
            $reponse->closeCursor();
            echo '</table>'."\n"
        ?>
        <!--<a href="./adherent_modif.php">TRUC</a>-->
        <!-- <a href="./carte_adherent.php">TRUC-CARTE</a> -->
    </main>
    <script src="https://kit.fontawesome.com/433f9c0cfe.js" crossorigin="anonymous"></script>
</body>

</html>