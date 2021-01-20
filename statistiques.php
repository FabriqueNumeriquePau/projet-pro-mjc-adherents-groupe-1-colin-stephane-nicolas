<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/css/statistiques.css">
    <link rel="stylesheet" href="./Assets/css/style.css">
    <title>Statistiques</title>
</head>

<body>
    <?php
    include "./php/navmenu.php";
    include "./php/sidemenu.php";
    ?>
<h1>STATISTIQUES</h1>
    <main>
        <section>
            <h2>Critères</h2>
            <article class="min-max-slider">
                
                <input id="min" class="min" name="min" type="range" step="1" min="7" max="77" />
                <input id="max" class="max" name="max" type="range" step="1" min="7" max="77" />
                <label for="min">Tranche d'âge</label>
            </article>
            <article>
                <label for="min">Sexe</label>
                <div>
                    <input class="sexe" type="search">
                    <button class="search" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </article>
            <article>
                <label for="min">Profession</label>
                <div>
                    <input class="profession" type="search">
                    <button class="search" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </article>
            <article>
                <label for="min">Evènements</label>
                <div>
                    <input class="evenements" type="search">
                    <button class="search" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </article>
            <article>
                <label for="min">Activités</label>
                <div>
                    <input class="activites" type="search">
                    <button class="search" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </article>
            <article>
                <label for="min">Etablissements scolaires<label>
                        <div>
                            <input class="etablissements" type="search">
                            <button class="search" type="submit"><i class="fas fa-search"></i></button>
                        </div>
            </article>
            <article>
                <label for="min">Zones géographiques<label>
                        <div>
                            <input class="zones" type="search">
                            <button class="search" type="submit"><i class="fas fa-search"></i></button>
                        </div>
            </article>
            <input id="btn-generer" type="submit" value="GENERER">
            <input id="btn-reinit" type="submit" value="REINITIALISER">
        </section>
    </main>

    <script src="./js/nouislider.js"></script>
    <script src="./js/slide.js"></script>
    <script src="https://kit.fontawesome.com/433f9c0cfe.js" crossorigin="anonymous"></script>

</body>

</html>