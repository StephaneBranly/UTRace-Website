<?php
session_start();
if(isset($_SESSION["connect"])){
  unset($_SESSION["connect"]);
}
header("Location: index.php");
 ?>