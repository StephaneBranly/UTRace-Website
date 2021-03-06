<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <script src="../ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/form.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset=utf-8></script>
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/main.css">
    <title>UTRace | Admin</title>
  </head>
  <body>

    <header>
      <div class="hamburger_menu">
        <input type="checkbox" id="hamburger">

        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>

        <ul id="menu">
          <li class="title">Header</li>
          <a href="update-links.php"><li>MAJ liens</li></a>

          <li class="title">Teams</li>
          <a href="add-team.php"><li>Ajouter</li></a>
          <a href="edit-team.php"><li>Modifier</li></a>

          <li class="title">Sponsor</li>
          <a href="add-sponso.php"><li>Ajouter</li></a>
          <a href="del-sponso.php"><li>Supprimer</li></a>

          <li class="title">Vote</li>
          <a href="#"><li>Voir les votes</li></a>

          <li class="title">Tiercé</li>
          <a href="load-ticket.php"><li>Valider un ticket</li></a>
          <a href="show-result.php"><li>Voir les gagnants</li></a>

          <li class='title'>Course</li>
          <a href="declare-winners.php"><li>Déclarer les gagnants</li></a>

          <li class='title'>Compte</li>
          <a href="log-out.php"><li>Se deconnecter</li></a>


        </ul>
      </div>
      <a href="index.php"><h1>UTRace | Admin</h1></a>

    </header>
