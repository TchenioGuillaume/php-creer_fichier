<?php include 'header.php'; ?>

<!-- Lien formulaire : https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_login_form -->

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      body {font-family: Arial, Helvetica, sans-serif;}
      form {border: 3px solid #f1f1f1;}
      input[type=text], input[type=password] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
      }
      button {
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
      }
      button:hover {
          opacity: 0.8;
      }
      .cancelbtn {
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
      }
      .imgcontainer {
          text-align: center;
          margin: 24px 0 12px 0;
      }
      img.avatar {
          width: 40%;
          border-radius: 50%;
      }
      .container {
          padding: 16px;
      }
      span.psw {
          float: right;
          padding-top: 16px;
      }
      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
          span.psw {
             display: block;
             float: none;
          }
          .cancelbtn {
             width: 100%;
          }
      }
    </style>
  </head>
  <body>
    <h2>Creation de page</h2>
    <form action="formulaire_reponse.php" method="POST">
      <div class="container">
        <label for="uname"><b>Titre de la page</b></label>
        <input type="text" placeholder="Enter le nom de la page" name="page" required>

        <label for="psw"><b>Contenu du fichier</b></label>
        <input type="text" placeholder="ex : <input>" name="fichier">

        <button type="submit">Login</button>

      </div>
    </form>

  </body>
</html>
