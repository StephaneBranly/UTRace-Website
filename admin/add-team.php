<?php
session_start();
if (!isset($_SESSION["connect"])) {
  header("Location : index.php");
} else {
  include("inc/header.php");
  include("inc/sqlConnect.php");
  ?>
  <div class="container form">
    <h1>Ajouter une team</h1>
    <?php 
      if(isset($_POST["submit"])){
        if(isset($_POST["name"])&&$_POST["name"]!=""&&
           isset($_POST["descr"])&&$_POST["descr"]!=""&&
           isset($_POST["descrPilot1"])&&$_POST["descrPilot1"]!=""&&
           isset($_POST["descrPilot1"])&&$_POST["descrPilot2"]!=""&&
           isset($_POST["descrPilot3"])&&$_POST["descrPilot3"]!=""&&
           isset($_POST["pilot1"])&&$_POST["pilot1"]!=""&&
           isset($_POST["pilot2"])&&$_POST["pilot2"]!=""&&
           isset($_POST["pilot3"])&&$_POST["pilot3"]!=""&&
           $_FILES["imgTeam"]["error"] == 0 && (pathinfo($_FILES["imgTeam"]["name"])['extension']=="PNG" || pathinfo($_FILES["imgTeam"]["name"])['extension']=="png")&&
           $_FILES["imgPilot1"]["error"] == 0 && (pathinfo($_FILES["imgPilot1"]["name"])['extension']=="PNG" || pathinfo($_FILES["imgPilot1"]["name"])['extension']=="png")&&
           $_FILES["imgPilot2"]["error"] == 0 && (pathinfo($_FILES["imgPilot2"]["name"])['extension']=="PNG" || pathinfo($_FILES["imgPilot2"]["name"])['extension']=="png")&&
           $_FILES["imgPilot3"]["error"] == 0 && (pathinfo($_FILES["imgPilot3"]["name"])['extension']=="PNG" || pathinfo($_FILES["imgPilot3"]["name"])['extension']=="png")){

            $name = addslashes($_POST["name"]);
            $descrPilot1 = addslashes($_POST["descrPilot1"]);
            $descrPilot2 = addslashes($_POST["descrPilot2"]);
            $descrPilot3 = addslashes($_POST["descrPilot3"]);
            $pilot1 = addslashes($_POST["pilot1"]);
            $pilot2 = addslashes($_POST["pilot2"]);
            $pilot3 = addslashes($_POST["pilot3"]);
            $descr = addslashes($_POST["descr"]);

            $query = mysqli_query($connect,"INSERT into team values(0,'$name','$descr','$pilot1','$descrPilot1','$pilot2','$descrPilot2','$pilot3','$descrPilot3')");
            if($query){
              $id = mysqli_insert_id($connect);
              move_uploaded_file($_FILES["imgTeam"]["tmp_name"], "../ressources/team/team$id.png");
              move_uploaded_file($_FILES["imgPilot1"]["tmp_name"], "../ressources/team/pilot1_$id.png");
              move_uploaded_file($_FILES["imgPilot2"]["tmp_name"], "../ressources/team/pilot2_$id.png");
              move_uploaded_file($_FILES["imgPilot3"]["tmp_name"], "../ressources/team/pilot3_$id.png");
              echo"
              <div class='green_alert alert'>
                  <p>La team a bien été ajouté</p>
              </div>";
            }else{
              echo"
              <div class='red_alert alert'>
                  <p>Il y a eu une erreur veuillez contacter un admin</p>
              </div>";

            }
        }else{
          echo"
              <div class='red_alert alert'>
                  <p>Erreur il manque des informations</p>
              </div>";
        }
      }
    
    ?>
    <div class="bar"></div>
    <form method="post" action="add-team.php" enctype="multipart/form-data">
      <table>
        <tr>
          <td><label for="name">Nom:</label></td>
          <td><input required id="name" type="text" name="name" /> </td>
        </tr>
        <tr>
          <td><label for="descr">Description :</label></td>
          <td><textarea required name="descr" id="descr" cols="30" rows="10"></textarea> </td>
        </tr>
        <tr>
          <td><label for="imgTeam">Photo de l'équipe</label></td>
          <td><input required id="imgTeam" type="file" name="imgTeam" /></td>
        </tr>
        <tr>
          <td><label for="pilot1">Nom du pilote n°1:</label></td>
          <td><input required id="pilot1" type="text" name="pilot1" /> </td>
        </tr>
        <tr>
          <td><label for="descrPilot1">Description du pilote n°1:</label></td>
          <td><textarea required name="descrPilot1" id="descrPilot1" cols="30" rows="10"></textarea> </td>
        </tr>
        <tr>
          <td><label for="imgPilot1">Photo du pilote n°1:</label></td>
          <td><input required id="imgPilot1" type="file" name="imgPilot1" /></td>
        </tr>
        <tr>
          <td><label for="pilot2">Nom du pilote n°2:</label></td>
          <td><input required id="pilot2" type="text" name="pilot2" /> </td>
        </tr>
        <tr>
          <td><label for="descrPilot2">Description du pilote n°2:</label></td>
          <td><textarea required name="descrPilot2" id="descrPilot2" cols="30" rows="10"></textarea> </td>
        </tr>
        <tr>
          <td><label for="imgPilot2">Photo du pilote n°2:</label></td>
          <td><input required id="imgPilot2" type="file" name="imgPilot2" /></td>
        </tr>
        <tr>
          <td><label for="pilot3">Nom du pilote n°3:</label></td>
          <td><input required id="pilot3" type="text" name="pilot3" /> </td>
        </tr>
        <tr>
          <td><label for="descrPilot3">Description du pilote n°1:</label></td>
          <td><textarea required name="descrPilot3" id="descrPilot3" cols="30" rows="10"></textarea> </td>
        </tr>
        <tr>
          <td><label for="imgPilot3">Photo du pilote n°3:</label></td>
          <td><input required id="imgPilot3" type="file" name="imgPilot3" /></td>
        </tr>
        
      </table>
      <input type="submit" name="submit" value="envoyer">
    </form>
  </div>
  </body>

  </html>
<?php } ?>