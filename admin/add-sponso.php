<?php
session_start();
if (!isset($_SESSION["connect"])) {
  header("Location : index.php");
} else {
  include("inc/header.php");
  include("inc/sqlConnect.php");
  ?>
  <div class="container form">
    <h1>Ajouter un sponsor</h1>
    <?php 
      if(isset($_POST["submit"])){
        if(isset($_POST["name"]) && $_POST["name"]!="" &&
           isset($_POST["link"]) && $_POST["link"]!="" &&
           isset($_POST["importance"]) &&
           $_FILES["img"]["error"] == 0 ){
            $ext = pathinfo($_FILES["img"]["name"]);
            if($ext["extension"]=="png"||$ext["extension"]=="PNG"){
              $name = addslashes($_POST["name"]);
              $link = addslashes($_POST["link"]);
              $importance = $_POST["importance"];
              $query = mysqli_query($connect,"INSERT INTO sponso (name,link,importance) VALUES ('$name','$link',$importance)");
              echo "INSERT INTO sponso (name,link,importance) VALUES ('$name','$link',$importance)";
              $id = mysqli_insert_id($connect);
              $url = "../ressources/sponso/sponso$id.png";
              $tmp_name = $_FILES["img"]["tmp_name"];
              move_uploaded_file($tmp_name, $url);
              echo "
              <div class='green_alert alert'>
                  <p>Le sponsor a été ajouté</p>
              </div>";
            }else{
              echo "
              <div class='green_alert alert'>
                  <p>Erreur : l'image n'est pas au bon format (PNG)</p>
              </div>";
            }
            
        }else{
          echo "
              <div class='green_alert alert'>
                  <p>Erreur : il manque des informations.</p>
              </div>";
        }
      }
    
    ?>
    <div class="bar"></div>
    <form method="post" action="add-sponso.php" enctype="multipart/form-data">
      <table>
        <tr>
          <td><label for="name">Nom :</label></td>
          <td><input required id="name" type="text" name="name" /> </td>
        </tr>
        <tr>
          <td><label for="link">Lien :</label></td>
          <td><input required id="link" type="url" name="link" /></td>
        </tr>
        <tr>
          <td><label for="importance">Importance :</label></td>
          <td><input required id="importance" type="number" value="0" min="0" name="importance" /></td>
        </tr>
        <tr>
          <td><label for="img">Image :</label></td>
          <td><input required id="img" type="file" name="img" /></td>
        </tr>
        
      </table>
      <input type="submit" name="submit" value="envoyer">
      <p>Plus le chiffre d'importance est haut, plus le sponsor sera affiché haut</p>
    </form>
  </div>
  </body>

  </html>
<?php } ?>