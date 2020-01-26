<?php
session_start();
if (!isset($_SESSION["connect"])) {
  header("Location : index.php");
} else {
  include("inc/header.php");
  //include("inc/sqlConnect.php");
  ?>
  <div class="container form">
    <h1>Ajouter une team</h1>
    <div class="bar"></div>
    <form method="post" enctype="multipart/form-data">
      <table>
        <tr>
          <td><label for="name">Nom:</label></td>
          <td><input id="name" type="text" name="name" /> </td>
        </tr>
        <tr>
          <td><label for="descr">Description :</label></td>
          <td><textarea name="descr" id="descr" cols="30" rows="10"></textarea> </td>
        </tr>
        <tr>
          <td><label for="pilot1">Nom du pilote n°1:</label></td>
          <td><input id="pilot1" type="text" name="pilot1" /> </td>
        </tr>
        <tr>
          <td><label for="descrPilot1">Description du pilote n°1:</label></td>
          <td><textarea name="descrPilot1" id="descrPilot1" cols="30" rows="10"></textarea> </td>
        </tr>
        <tr>
          <td><label for="imgPilot1">Photo du pilote n°1:</label></td>
          <td><input id="imgPilot1" type="file" name="imgPilot1" /></td>
        </tr>
        <tr>
          <td><label for="pilot2">Nom du pilote n°2:</label></td>
          <td><input id="pilot2" type="text" name="pilot2" /> </td>
        </tr>
        <tr>
          <td><label for="descrPilot2">Description du pilote n°2:</label></td>
          <td><textarea name="descrPilot2" id="descrPilot2" cols="30" rows="10"></textarea> </td>
        </tr>
        <tr>
          <td><label for="imgPilot2">Photo du pilote n°2:</label></td>
          <td><input id="imgPilot2" type="file" name="imgPilot2" /></td>
        </tr>
        <tr>
          <td><label for="pilot3">Nom du pilote n°3:</label></td>
          <td><input id="pilot3" type="text" name="pilot3" /> </td>
        </tr>
        <tr>
          <td><label for="descrPilot3">Description du pilote n°1:</label></td>
          <td><textarea name="descrPilot3" id="descrPilot3" cols="30" rows="10"></textarea> </td>
        </tr>
        <tr>
          <td><label for="imgPilot3">Photo du pilote n°3:</label></td>
          <td><input id="imgPilot3" type="file" name="imgPilot3" /></td>
        </tr>
        
      </table>
      
    </form>
  </div>
  </body>

  </html>
<?php } ?>