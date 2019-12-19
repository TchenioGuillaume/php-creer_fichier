<?php

  include 'header.php';

if (isset($_POST['page']) && (isset($_POST['fichier'])))
{
  $page = $_POST['page'];
  $contenu = $_POST['fichier'];
}
echo "Le nom de la page créer est : " .$page . ".php<br>";
echo "Vous avez ecrit dedans : " .$contenu;

//fopen crée un fichier
$creer = fopen("../fichier_creer/".$page.".php", "c");

//ecrit dans le fichier créer
$fichier = fwrite($creer, $contenu);




?>
