<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include 'templating/header.php';

      //indique l'emplacement des fichiers
      echo "Voici tous les fichier qui ont ete créer :<br><br>";
      $dossier = "fichier_creer";

      //liste les fichiers qui sont dans "templating"
      $tableau = scandir($dossier);

      //affiche les noms de fichiers
      foreach ($tableau as $key => $value) {
        echo $key . " : " .$value . "<br>";
        echo " <form class='' action='' method='post'>
                  <input type='button' name='page' value='Effacer'>
               </form>";
      }
    ?>








    <?php
      include 'templating/footer.php';
    ?>

  </body>
</html>
