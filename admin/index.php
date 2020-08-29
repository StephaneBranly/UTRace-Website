<?php
session_start();
include("inc/header.php");

?>
  <div class="container form">
    <h1>Connexion</h1>
    <div class="bar"></div>
    <?php
    if(!isset($_SESSION["connect"])){
      if(isset($_POST["send"])){
        if(isset($_POST["identifiant"])&&$_POST["identifiant"]!="" && isset($_POST["pass"])&&$_POST["pass"]!=""){
        $id = addslashes($_POST["identifiant"]);
        $pass = addslashes($_POST["pass"]);
        if($id=="admin"&&$pass=="admin"){
          $_SESSION["connect"]="ok";
          header("Location: load-ticket.php");
          
        }else{
          echo <<<END
          <div class="alert red_alert">
            <p>Code incorrect !</p>
          </div>

END;
        }
        }else{
          echo <<<END
          <div class="alert red_alert">
            <p>Il faut renseigner l'identifiant ET le mot de passe !</p>
          </div>

END;
        }
      }
    }else{
      header("Location: add-team.php");
    }
    ?>
      <form action="index.php" method="post">
        <table>
          <tr>
            <td><label for="login">Identifiant</label></td>
            <td><input type="text" name="identifiant" placeholder="Identifiant"><br/></td>
          </tr>
          <tr>
            <td><label for="login">Mot de passe</label></td>
            <td><input type="password" name="pass" placeholder="Mot de passe"><br/></td>
          </tr>
        </table>

        <input type="submit" name="send" value="Connexion">
      </form>
    </div>
  </body>
</html>
