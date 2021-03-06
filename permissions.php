<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/css/permissions.css">
    <link rel="stylesheet" href="./Assets/css/sidemenu.css">
    <link rel="stylesheet" href="./Assets/css/navmenu.css">
    <title>Permissions</title>
</head>

<body>
    <?php
    include "./php/navmenu.php";
    include "./php/sidemenu.php";
    ?>
    <main>
        <section class="modal">
            <article class="carte">
                <h1>GESTIONNAIRE</h1>
                <hr>
                <div>
                    <input type="checkbox" checked>
                    <label for="">Accès 1</label>
                </div>
                <div>
                    <input type="checkbox" checked>
                    <label for="">Accès 2</label>
                </div>
                <div>
                    <input type="checkbox" checked>
                    <label for="">Accès 3</label>
                </div>
                <div>
                    <input type="checkbox" checked>
                    <label for="">Accès 4</label>
                </div>
                <div>
                    <input type="checkbox" checked>
                    <label for="">Accès 5</label>
                </div>
                <div>
                    <input type="checkbox" checked>
                    <label for="">Accès 6</label>
                </div>
                <div>
                    <input type="checkbox" checked>
                    <label for="">Accès 7</label>
                </div>
                <div>
                    <label for="">Accès 8</label>
                    <input type="checkbox">
                </div>
                <div>
                    <label for="">Accès 9</label>
                    <input type="checkbox">
                </div>
                <div>
                    <label for="">Accès 10</label>
                    <input type="checkbox">
                </div>
                <div>
                    <label for="">Accès 11</label>
                    <input type="checkbox">
                </div>
                <div>
                    <label for="">Accès 12</label>
                    <input type="checkbox">
                </div>
                <div>
                    <label for="">Accès 13</label>
                    <input type="checkbox">
                </div>
                <div>
                    <label for="">Accès 14</label>
                    <input type="checkbox">
                </div>
            </article>
        </section>
        <section class="new-grade">
            <h2>Créer un nouveau grade</h2>
            <i class="fas fa-plus fa-2x"></i>
        </section>
    </main>
    <div class="fondpopup">
        <div class="avert-suppr">
            <h1>ÊTES-VOUS SÛR DE VOULOIR SUPPRIMER CE GRADE?</h1>
            <input id="btn-supprimer" type="submit" value="SUPPRIMER">
            <input id="btn-annuler" type="submit" value="ANNULER">
        </div>
    </div>
    <script src="https://kit.fontawesome.com/433f9c0cfe.js" crossorigin="anonymous"></script>
</body>

</html>