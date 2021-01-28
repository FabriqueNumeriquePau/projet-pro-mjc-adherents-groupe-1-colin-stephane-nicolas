<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Assets/css/import.css">
  <link rel="stylesheet" href="./Assets/css/sidemenu.css">
    <link rel="stylesheet" href="./Assets/css/navmenu.css">
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
      <i class="fa fa-file-excel"></i>
      <span>.xls</span>
      <i class="fa fa-file-excel"></i>
      <span>.csv</span>
      <label for="">Sélectionner le fichier : </label>
      <article>
        <input class ="select-folder" type="text">
        <button type="submit"><i class="fas fa-folder"></i></button> 
      </article>
      <input id="btn-importer" type="submit" value="IMPORTER">
    </section>

    <section>
      <h1>Exporter des données</h1>
      <label for="">Choisir le format : </label>
      <i class="fa fa-file-excel"></i>
      <span>.xls</span>
      <i class="fa fa-file-excel"></i>
      <span>.csv</span>
      <label class= "name-file-label" for="">Nom du fichier : </label>  
      <input class ="name-file" type="text">     
      <label>Sélectionner le fichier : </label>
      <article>
          <input class ="select-folder" type="text">
          <button type="submit"><i class="fas fa-folder"></i></button>         
      </article>        
      <input id="btn-exporter" type="submit" value="EXPORTER">
      </section>
  </main>
  </footer>

  <script src="https://kit.fontawesome.com/433f9c0cfe.js" crossorigin="anonymous"></script>
</body>

</html>