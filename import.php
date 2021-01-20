<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Assets/css/import.css">
  <link rel="stylesheet" href="./Assets/css/style.css">
  <title>Import / Export</title>
</head>

<body>
  <?php
  include "./php/navmenu.php";
  include "./php/sidemenu.php";
  ?>
  <main>
    <section>
      <h1>Importer des données</h1>
      <label for="">Choisir le format : </label>
      <i class="fa fa-file-excel fa-4x"></i>
      <span class="bottom-text">.xls</span>
      <i class="fa fa-file-excel fa-4x"></i>
      <span class="bottom-text">.flv</span>
      <label class = "open-folder-label" for="">Sélectionner le fichier : </label>
      <article>
        <input class ="open-folder" type="text">
        <button class ="open-folder-button" type="submit"><i class="fas fa-folder"></i></button> 
      </article>
      <input id="btn-importer" type="submit" value="MODIFIER">
    </section>

    <section>
      <h1>Exporter des données</h1>
      <label for="">Choisir le format : </label>
      <i class="fa fa-file-excel fa-4x"></i>
      <span class="bottom-text">.xls</span>
      <i class="fa fa-file-excel fa-4x"></i>
      <span class="bottom-text">.flv</span>
      <label class= "name-file-label" for="">Nom du fichier : </label>
      <article>
      <input class ="name-file" type="text"> 
      </article>
      <label class="select-folder-label" for="">Sélectionner le fichier : </label>
      <article>
          <input class ="select-folder" type="text">
          <button class ="select-folder-button" type="submit"><i class="fas fa-folder"></i></button>         
      </article>        
      <input id="btn-modifier" type="submit" value="MODIFIER">
      </section>
  </main>
  </footer>

  <script src="/Script/script.js"></script>
  <script src="https://kit.fontawesome.com/433f9c0cfe.js" crossorigin="anonymous"></script>
</body>

</html>