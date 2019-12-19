<?php
include 'header.php';


if (isset($_POST['uname']) && (isset($_POST['psw'])))
{
  $user = $_POST['uname'];
  $password = $_POST['psw'];
}
echo "Bienvenu " . $user . ".<br> Votre mot de passe est : " .$password;






?>
